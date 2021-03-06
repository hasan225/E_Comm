    <?php
    use App\Http\Controllers\productController;
    $total=0;
    if(Session::has('user')){

        $total=productController::cartItem();
    }


    ?>

    <div class="mynav">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <h1 class="navbar-brand " style="color: red;font-size: 40px"><a href="/" style="text-decoration: none"><span class="stylea " style="color:rgb(0, 255, 42); font-size:50px; font-family:ul-mono-space">E-C</span>omm</a></h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link active" href="/">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/">Products</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/myorders">Orders</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link  " aria-current="page" href="#about-us">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact-us">Contact us</a>
                        </li>

                        <li class="nav-item me-auto">
                            <a class="nav-link" href="cartList">Cart ({{$total}})</a>
                        </li>

                    </ul>

            <form class="d-flex ms-auto">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    @if (Session::has('user'))
                        <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                           {{Session::get('user')['name']}}
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="list-style-type: none;">
                            <li><a class="dropdown-item" href="/logout">Logout</a></li>
                        </div>
                        @else
                        <li style="list-style-type:none "class="mx-3"><a href="/login" class="btn btn-outline-info">Login</a></li>
                        <li style="list-style-type:none"><a href="/register" class="btn btn-outline-primary">Register</a></li>
                    </ul>
                        @endif
                </div>
            </div>
        </nav>

    </div>

    <!-- 1 nevbar ends -->

