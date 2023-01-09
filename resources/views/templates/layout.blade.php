<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Reoil - @yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    
    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
    <!-- Vendor CSS Files -->
    <link href="css/aos.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/boxicons.min.css" rel="stylesheet">
    <link href="css/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">
            <h1><a href="">Reoil</a></h1>
            <!-- <a href="index.html"><img src="./assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class={{ View::getSection('title') == "Home" ? "active" : "inactive" }} href="/">Home</a></li>
                <li><a class={{ View::getSection('title') == "About" ? "active" : "inactive" }} href="/about">Tentang Kami</a></li>
                <li><a class={{ View::getSection('title') == "Service" ? "active" : "inactive" }} href="/service">Layanan</a></li>
                @if (Auth::check() && Auth::user()->role_id != 1)
                <li><a class={{ View::getSection('title') == "Reservasi" ? "active" : "inactive" }} href="/book">Reservasi</a></li>
                <li class="dropdown"><a href="#"><img src="img/user.png" height="14px" class="me-2">{{ Auth::user()->username }}<i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="/poin"><img src="img/coin.png" height="22px">{{ $point }} Poin</a></li>
                        <li><a href="/profile">Profile</a></li>
                        <li><a href="/status">Status Pesanan</a></li>
                        <li><a href="/logout">Keluar</a></li>
                    </ul>
                </li>
                @elseif (Auth::check() && Auth::user()->role_id == 1)
                <li class="dropdown"><a href="#"><img src="img/user.png" height="14px" class="me-2">{{ Auth::user()->username }}<i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="/transaksi">Transaksi</a></li>
                        <li><a href="/logout">Keluar</a></li>
                    </ul>
                @else
                    <li><a href="/login">Masuk</a></li>
                @endif
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>

@yield('content')

<footer class="footer" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-md-0">
                <h3>Tentang Reoil</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam aperiam
                    dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi.</p>
                <p class="social">
                    <a href="https://twitter.com"><span class="bi bi-twitter"></span></a>
                    <a href="https://facebook.com"><span class="bi bi-facebook"></span></a>
                    <a href="https://instagram.com"><span class="bi bi-instagram"></span></a>
                    <a href="https://linkedin.com"><span class="bi bi-linkedin"></span></a>
                </p>
            </div>
            <div class="col-md-7 ms-auto">
                <div class="row site-section pt-0">
                    <div class="col-md-4 mb-4 mb-md-0">
                        <h3>Navigasi</h3>
                        <ul class="list-unstyled">
                            <li><a href="/">Home</a></li>
                            <li><a href="/about">Tentang Kami</a></li>
                            <li><a href="/service">Layanan</a></li>
                            <li><a href="#">Mitra</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                        <h3>Mitra</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Pahlawan</a></li>
                            <li><a href="#">Merchant</a></li>
                            <li><a href="#">Korporasi</a></li>
                            <li><a href="#">Events</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                        <h3>Unduh</h3>
                        <ul class="list-unstyled">
                            <li><a href="https://www.apple.com/id/app-store/">App Store</a></li>
                            <li><a href="https://play.google.com/store/">Play Store</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-md-7">
                <p class="copyright">&copy; Copyright Reoil 2023. All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<script src="js/aos.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/swiper-bundle.min.js"></script>
<script src="js/validate.js"></script>
<script src="js/main.js"></script>

</body>
</html>