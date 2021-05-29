    <?php
    use App\Http\Controllers\productController;
    $total=productController::cartItem();


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
                            <a class="nav-link active" href="#home">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#projects">Projects</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link  " aria-current="page" href="#about-us">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact-us">Contact us</a>
                        </li>

                        <li class="nav-item me-auto">
                            <a class="nav-link" href="#services">Cart ({{$total}})</a>
                        </li>
                    </ul>

            <form class="d-flex ms-auto">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

    </div>

    <!-- 1 nevbar ends -->

