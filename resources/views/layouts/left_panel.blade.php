<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="/"><img
                    src="{{ asset('images/logo.png') }}" alt="Logo" height="50" width="50"></a>
            <a class="navbar-brand hidden" href="/"><img
                    src="{{ asset('images/logo.png') }}" alt="Logo" width="30" height="30"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="/home"> <i class="menu-icon fa fa-dashboard"></i>Dashboard
                    </a>
                </li>
                <h3 class="menu-title">PAGES</h3><!-- /.menu-title -->

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"> <i class="menu-icon fa fa-th"></i>PRODUCTS</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a
                                href="/product/add">Add Product</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a
                                href="/product/all">Edit & Delete Product</a></li>
                    </ul>
                </li>

                <li>
                    <a href="/income"> <i class="menu-icon fa fa-th"></i>INCOME</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->
