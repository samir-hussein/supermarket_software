<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Mail\VerifyAccount;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public static function signup(Request $request)
    {
        // validate inputs
        $validate = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email:filter|unique:users,email',
            'password' => 'required|confirmed|min:8',
            'phone' => 'required|min:11|regex:/(01)[0-9]{9}/',
        ]);

        // return validation errors
        if($validate->fails()){
            return response()->json([
                'message' => $validate->errors(),
            ],422);
        }

        $phone = "+2" . $request->phone;

        // store user in database
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $phone,
            'password' => Hash::make($request->password),
        ]);

        // send mail verification
        $token = Crypt::encryptString($user->id . "|" . $request->email);
        $details = [
            'token' => $token
        ];
        Mail::to($request->email)->send(new VerifyAccount($details));

        return response()->json([
            'message' => 'User Created Successfully, Please Check Your Mail To Verify Your Account.'
        ],201);
    }

    public function verify_account($token)
    {
        try{
            $token = Crypt::decryptString($token);
        }catch(Exception $e){
            return response()->json([
                'message' => 'Token is corrupted.'
            ]);
        }

        $token = explode('|',$token);
        $user_id = $token[0];
        $user_email = $token[1];

        $user = User::find($user_id);

        if(!$user || $user_email != $user->email){
            return response()->json([
                'message' => 'Token is corrupted.'
            ]);
        }

        // check if already verified
        if (isset($user->email_verified_at)) {
            return response()->json(["message" => "Email already verified"]);
        }

        $user->update([
            'email_verified_at' => date('Y-m-d H:i:s'),
        ]);

        return response()->json([
            "message" => "email verified successfully",
        ]);
    }

    public function login(Request $request)
    {
        // validate inputs
        $validate = Validator::make($request->all(),[
            'email' => 'required|email:filter',
            'password' => 'required',
        ]);

        // return validation errors
        if($validate->fails()){
            return response()->json([
                'message' => $validate->errors(),
            ],422);
        }

        $credentials = request(['email', 'password']);

        if (! $token = Auth::guard('api')->attempt($credentials)) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        return response()->json([
            'message' => 'logged in successfully.',
            'data' => new UserResource(Auth::guard('api')->user()),
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => Auth::guard('api')->factory()->getTTL() * 60
        ]);
    }
}
