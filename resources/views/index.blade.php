<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('dashboard/vendors/bootstrap/dist/css/bootstrap.min.css') }}">

    <style>
        body,html{
            padding: 0;
            margin: 0;
            overflow-x: hidden;
        }

        p{
            font-size: 20px;
        }

        nav{
            background: #222222;
        }

        nav div.nav-content{
            padding: 0.5%;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        div.logo a{
            text-decoration: none;
        }

        div.logo span{
            color: white;
            font-weight: 900;
            font-size: 25px;
        }

        button.btn{
            width: 49%;
        }

        button.btn a{
            font-weight: bold;
            font-size: 18px;
            color: white;
            text-decoration: none;
            display: block;
        }

        section#sec-1{
            height: 500px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
            background-image: url({{ asset('images/maxresdefault.jpg') }});
        }

        div.overlay{
            width: 100%;
            height: 100%;
            background: #00000077;
        }
        
        div.overlay h1{
            color: #222222;
            font-size: 60px;
            background: rgba(255, 255, 255, 0.474);
            padding: 1%;
        }

        footer{
            background: #222222;
            padding: 1%;
        }
    </style>
</head>
<body>
    
    {{-- start navbar --}}
    <nav>
        <div class="nav-content w-50 m-auto">
            <div class="logo w-50">
                <a href="/" class="d-flex align-items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="logo" width="50" height="50">
                    <span class="ml-2">Market</span>
                </a>
            </div>
            <div class="w-50">
                @auth
                    <button class="btn btn-primary"><a href="/home">Dashboard</a></button>
                @else
                    <button class="btn btn-danger"><a href="/sign-up">SIGN UP</a></button>
                    <button class="btn btn-primary"><a href="/login">LOGIN</a></button>
                @endauth
            </div>
        </div>
    </nav>
    {{-- end navbar --}}

    <section id="sec-1" class="mb-5">
        <div class="overlay d-flex align-items-end justify-content-center">
            <h1 class="w-100 text-center">Software Service Provider</h1>
        </div>
    </section>

    <section class="mb-5">
        <h2 class="text-center">ABOUT US</h2>
        <p class="text-center w-75 m-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </section>

    <footer>
        <div class="d-flex justify-content-around w-75 m-auto align-items-center">
            <div class="logo">
                <a href="/" class="d-flex align-items-center"><img src="{{ asset('images/logo.png') }}" alt="logo" width="50" height="50">
                <span class="ml-2">Market</span>
                </a>
            </div>
            <div>
                <p style="color:white;font-size:17px" class="text-center m-0">Developed & Designed by ..... &copy; 2022</p>
            </div>
        </div>
    </footer>
</body>
</html>