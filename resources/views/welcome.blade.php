<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Mas Joyo - Puskesmas Ketrowonojoyo</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('/') }}landing/assets/img/favicon.png" rel="icon">
    <link href="{{ asset('/') }}landing/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/') }}landing/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('/') }}landing/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}landing/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('/') }}landing/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}landing/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}landing/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('/') }}landing/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('/') }}landing/assets/css/style.css" rel="stylesheet">


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="index.html"><span>Mas Joyo</span></a></h1>

            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#features">Aplikasi</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                    <div data-aos="zoom-out">
                        <h1>Mas <span>Joyo</span></h1>
                        <h2>Puskesmas Ketrowonojoyo</h2>
                        <div class="text-start text-lg-start">
                            <a href="#about" class="btn-get-started scrollto">Mulai</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                    <img src="{{ asset('/') }}landing/assets/img/hero-img.png" class="img-fluid animated"
                        alt="">
                </div>
            </div>
        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container-fluid">

                <div class="row">
                    <!-- Bagian Video Box -->
                    <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch"
                        data-aos="fade-right">
                        <!-- Konten video-box (jika ada) dapat ditambahkan di sini -->
                    </div>

                    <!-- Bagian Icon Boxes -->
                    <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5"
                        data-aos="fade-left">
                        <h3>Siapa itu Mas Joyo?</h3>
                        <p>Mas Joyo, Teman Anda dalam membantu akses Puskesmas Ketrowonojoyo secara online.</p>

                        <!-- Icon Box 1 - Pendamping di Puskemas -->
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon"><i class="bx bx-gift"></i></div>
                            <h4 class="title"><a href="#">Pendamping di Puskemas</a></h4>
                            <p class="description">Mas Joyo akan membantu Anda sebagai pendamping di Puskesmas
                                Ketrowonojoyo.</p>
                        </div>

                        <!-- Icon Box 2 - Multi Fungsi -->
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-cog"></i></div>
                            <h4 class="title"><a href="#">Multi Fungsi</a></h4>
                            <p class="description">Mas Joyo memiliki berbagai fungsi untuk memenuhi kebutuhan Anda
                                secara beragam.</p>
                        </div>

                        <!-- Icon Box 3 - Mudah di Pahami -->
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-book-content"></i></div>
                            <h4 class="title"><a href="#">Mudah di Pahami</a></h4>
                            <p class="description">Informasi dari Mas Joyo disajikan dengan cara yang mudah dipahami
                                oleh semua orang.
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </section><!-- End About Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Aplikasi</h2>
                    <p>Puskesmas Ketrowonojoyo</p>
                </div>

                <div class="row" data-aos="fade-left">

                    <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">

                        <a href="">
                            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                                <img src="{{ asset('/') }}landing/assets/img/sppd-logo.png" alt=" "
                                    style="width: 70px;">

                                <h3 style="color: rgb(89, 97, 184);">SPPD Online</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">

                        <a href="">
                            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                                <img src="{{ asset('/') }}landing/assets/img/ugd-logo.png" alt=" "
                                    style="width: 70px;">

                                <h3 style="color: rgb(89, 97, 184);">UGD Payment</h3>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </section><!-- End Features Section -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">


        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Mas Joyo</span></strong>. All Rights Reserved
            </div>
            <div class="credits">

                Designed by <a href="" style="color: rgb(89, 97, 184);">SleepZZ Software</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href=" #" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('/') }}landing/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ asset('/') }}landing/assets/vendor/aos/aos.js"></script>
    <script src="{{ asset('/') }}landing/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/') }}landing/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('/') }}landing/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('/') }}landing/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('/') }}landing/assets/js/main.js"></script>

</body>

</html>
