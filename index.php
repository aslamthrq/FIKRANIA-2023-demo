<?php session_start(); ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>Fikrania (Fakultas Ilmu Komputer Berkreasi Karya Seni dan Budaya)</title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo_fikrania.png">
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <!-- flaticon css -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="assets/css/off-canvas.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="assets/css/rsmenu-main.css">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="assets/css/rs-spacing.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

</head>

<body class="defult-home">
    <div class="offwrap"></div>

    <!--Preloader start here-->
    <div id="pre-load">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class='loader-icon'><img src="assets/images/logo_fikrania.png" alt="Bizup Consulting Business"></div>
            </div>
        </div>
    </div>
    <!--Preloader area end here-->

    <!-- Main content Start -->
    <div class="main-content">
        <!--Full width header Start-->
        <div class="full-width-header">
            <!--Header Start-->
            <header id="rs-header" class="rs-header header-transparent">

                <!-- Menu Start -->
                <div class="menu-area menu-sticky">
                    <div class="container">
                        <div class="row-table">
                            <div class="col-cell header-logo">
                                <div class="logo-area">
                                    <a href="index.php">
                                        <img class="normal-logo" src="assets/images/logo_fikrania.png" alt="logo">
                                        <img class="sticky-logo" src="assets/images/logo_fikrania.png" alt="logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-cell">
                                <div class="rs-menu-area">
                                    <div class="main-menu">
                                        <nav class="rs-menu hidden-md">
                                            <ul class="nav-menu onepage-menu">
                                                <li><a href="#rs-header">Beranda</a></li>
                                                <li><a href="#rs-about">Tentang</a> </li>
                                                <li><a href="lomba.php">Lomba</a> </li>
                                                <li><a href="#rs-team">Bintang Tamu</a> </li>
                                                <li><a href="#rs-pendaftaran2">Beli Tiket</a> </li>
                                                <li><a href="#rs-contact">Kontak</a> </li>
                                            </ul>
                                            <!-- //.nav-menu -->
                                        </nav>
                                    </div>
                                    <!-- //.main-menu -->
                                </div>
                            </div>
                            <div class="col-cell">

                                <div class="expand-btn-inner">
                                    <ul class="nav-menu">
                                        <li class="humburger">
                                            <a id="nav-expander" class="nav-expander bar" href="#">
                                                <div class="bar">
                                                    <span class="dot1"></span>
                                                    <span class="dot2"></span>
                                                    <span class="dot3"></span>
                                                    <span class="dot4"></span>
                                                    <span class="dot5"></span>
                                                    <span class="dot6"></span>
                                                    <span class="dot7"></span>
                                                    <span class="dot8"></span>
                                                    <span class="dot9"></span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu End -->

                <!-- Canvas Mobile Menu start -->
                <nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
                    <div class="close-btn">
                        <a id="nav-close2" class="nav-close">
                            <div class="line">
                                <span class="line1"></span>
                                <span class="line2"></span>
                            </div>
                        </a>
                    </div>
                    <ul class="nav-menu">
                        <li>
                            <a id="about" href="#rs-about">Tentang</a>
                        </li>

                        <li class="menu-item-has-children">
                            <a id="dikta" href="#rs-team style8">Bintang Tamu</a>
                            <!-- <ul class="sub-menu">
                                <li><a id="dikta" href="#rs-team">Dikta</a></li>
                                <li><a id="jon" href="#rs-team">Jono Joni</a></li>
                                <li><a id="pulung" href="#rs-team">Band Pak Pulung</a></li>
                                <li><a id="ukm" href="#rs-team">UKM Musik</a></li>
                                <li><a id="danisa" href="#rs-team">BAND danisa</a></li>
                                <li><a id="teater" href="#rs-team">Teater Kapling</a></li>
                                <li><a id="dfu" href="#rs-team">DFU</a></li>
                                <li><a id="psm" href="#rs-team">PSM</a></li>
                                <li><a id="tari" href="#rs-team">Tari</a></li>
                                <li><a id="gamelan" href="#rs-team">E-Gamelanku</a></li>
                            </ul> -->
                        </li>
                        <li>
                            <a id="lomba" href="lomba.php">Lomba</a>
                        </li>
                        <li>
                            <a id="pendaftaran2" href="#rs-pendaftaran2">Beli Tiket</a>
                        </li>
                        <li><a id="sponsor" href="#rs-our-sponsor">Sponsors</a>
                        </li>
                        <li>
                            <a id="kontak" href="#rs-contact">Kontak</a>
                        </li>

                    </ul>
                    <!-- //.nav-menu -->
                    <div class="canvas-contact">
                        <div class="address-area">
                            <div class="address-list">
                                <div class="info-icon">
                                    <i class="flaticon-location"></i>
                                </div>
                                <div class="info-content">
                                    <h4 class="title">UDINUS</h4>
                                    <em>Jl. Imam Bonjol No.207, Pendrikan Kidul, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50131</em>
                                </div>
                            </div>
                            <div class="address-list">
                                <div class="info-icon">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="info-content">
                                    <h4 class="title">Email</h4>
                                    <em><a href="mailto:fikrania2023@gmail.com">fikrania2023@gmail.com</a></em>
                                </div>
                            </div>
                            <div class="address-list">
                                <div class="info-icon">
                                    <i class="flaticon-call"></i>
                                </div>
                                <div class="info-content">
                                    <h4 class="title">Whatsapp</h4>
                                    <a href="https://api.whatsapp.com/send/?phone=%2B6287718526911&text&type=phone_number&app_absent=0">(+62)877-1852-6911</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- Canvas Menu end -->
            </header>
            <!--Header End-->
        </div>
        <!--Full width header End-->

        <!-- Banner Section Start -->
        <div class="rs-banner banner-home-style4">
            <div class="container">
                <div class="content-wrap">
                    <div class="title-inner">
                        <h2 class="title">24-25 Juni 2023 | UDINUS</h2>
                    </div>
                    <div class="col-lg-8 col-md-8 d-flex flex-column pt-4 h-100">
                        <h1 class="font-weight-bold fs-55 text-white">
                            Fakultas Ilmu Komputer
                            <br> Berkreasi Karya Seni
                            <br> dan Budaya
                        </h1>
                        <p class="text-white">Kegiatan FIKRANIA (Fakultas Ilmu Komputer Berkreasi Karya Seni dan Budaya) akan menyelenggarakan Pameran dan kompetisi Tari Kreasi, Photography dan Menyanyi dengan tema "Ngreksa Budaya"</p>
                        <img src="assets/images/about/style1/icons/logo-keseluruhan.png" width="200">
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Section End -->


        <!-- About Section Start -->
        <div id="rs-about" class="rs-about style2 bg17">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <h2 class="title title2 title3 text-middle  pb-40">
                        FIKRANIA
                    </h2>
                    <p class="desc-big">Pada tahun ini Fakultas Ilmu Komputer Universitas Dian Nuswantoro menghadirkan FIKRANIA (Fakultas Ilmu Komputer Berkreasi Karya Seni dan Budaya) yang memasuki tahun pertamanya, dengan mengangkat tema budaya. Pada tahun-tahun sebelumnya, acara ini berfokus pada perlombaan olahraga, esport dengan nama FIXCUP. Dengan mengangkat tema yang berbeda FIKRANIA diharap mampu memberikan kontribusi yang lebih untuk mengembangkan minat dari kalangan yang lebih luas lagi, khususnya Untuk pegiat bidang kesenian di kalangan mahasiswa dan masyarakat umum.</p>
                </div>
                <div class="rs-videos about-video">
                    <div class="animate-border">
                        <a class="popup-border" href="https://www.youtube.com/watch?v=BYPhL2EZE1M">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <!-- About Section End -->


        <!-- Choose Section Start -->
        <div class="rs-team style8">
            <div class="rs-services style1 home-services-style3 height-ctrl pt-110 pb-60 md-pt-0 md-pb-80">
                <div class="container">
                    <div class="sec-title text-center mb-60">
                        <h2 class="title title2 title3 text-middle">
                            Kenapa Harus Ikut?
                        </h2>
                    </div>
                    <div class="row y-middle">
                        <div class="col-lg-4 col-md-6 md-mb-30">
                            <div class="services-item">
                                <div class="services-wrap">
                                    <div class="services-icon">
                                        <img src="assets/images/services/main-home/home3/1.png" alt="Services">
                                    </div>
                                    <div class="services-text">
                                        <h4 class="title">3 Lomba</h4>
                                        <p class="services-txt">
                                            FIKRANIA mengadakan lomba tari tradisional, fotografi, dan menyanyi. Lomba akan diselenggarakan selama 2 hari untuk mahasiswa, umum, dan siswa SMA/SMK/MA.<br><br><br>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 sm-mb-30">
                            <div class="services-item">
                                <div class="services-wrap">
                                    <div class="services-icon">
                                        <img src="assets/images/services/main-home/home3/2.png" alt="Services">
                                    </div>
                                    <div class="services-text">
                                        <h4 class="title">Bintang Tamu Spesial</h4>
                                        <p class="services-txt">
                                           FIKRANIA menghadirkan pertelon koplo dan UKM Universitas Dian Nuswantoro.
                                            <br><br><br><br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="services-item">
                                <div class="services-wrap">
                                    <div class="services-icon">
                                        <img src="assets/images/services/main-home/home3/3.png" alt="Services">
                                    </div>
                                    <div class="services-text">
                                        <h4 class="title">Kegiatan Seru</h4>
                                        <p class="services-txt">
                                            Pada hari pertama terdapat opening ceremony, pameran, perlombaan tari tradisional, dan fotografi. Di Hari kedua juga terdapat pameran, lomba menyanyi, awarding, dan closing ceremony.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Choose Section End -->
    </div>
    <!-- Event Section Start -->
    <div id="rs-pendaftaran" class="rs-addon-services style1 bg4 pt-120 pb-120 md-pt-70 md-pb-70">
        <div class="container">
            <div class="sec-title text-center mb-40">
                <span class="sub-text">Perlombaan</span>
                <h2 class="title white-color pb-22">
                    “Ngreksa Budaya"
                </h2>
                <div class="heading-border-line"></div>
                <p class="desc margin-0 white-color pt-40">
                    FIKRANIA mengusung tema “Ngreksa Budaya” memiliki arti yang sejalan dengan harapan dari acara ini yaitu ingin memberikan kontribusi untuk dapat melestarikan budaya. Budaya sendiri tak lepas dari seni yang merupakan unsur kebudayaan. Banyak bentuk improvisasi yang tercipta dan menyebabkan budaya baru di masyarakat seperti pada bidang tari. Seni juga dapat diekspresikan melalui lantunan nada dimana ragam lagu daerah Indonesia saat ini menjadi fokus utama karena sudah mulai luput dari benak anak muda. Digitalisasi pun terasa hingga ke bidang seni, hasil karya seni diabadikan melalui fotografi.

                </p>
            </div>


        </div>
        <div class="col-lg-12">
            <div class="btn-part text-center mt-60 md-mt-30">
                <a class="readon btn-text" href="lomba.php">
                    <span>Detail Lomba</span>
                    <img src="assets/images/button.png" alt="">
                </a>
            </div>
        </div>
    </div>
    </div>
    <!-- Event Section End -->
    <!-- Bintang tamuu lur -->
    <div class="swiper-slide">

        <div id="rs-team" class="rs-team style8">
            <div class="container">

                <div class="sec-title text-center mb-60">
                    <h2 class="title title2 title3 text-middle">
                        Bintang Tamu Spesial
                    </h2>
                </div>


                <div class="rs-videos about-video1">
                </div>
                <!-- 
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true" data-center-mode="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="true" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true">
                    <div class="team-item">
                        <div class="team-inner-wrap">
                            <div class="images-wrap">
                                <a href="speaker-single.html"><img src="assets/images/team/home4/1.jpg" alt="Team"></a>
                                <ul class="social-icons">
                                    <li><a href="https://www.instagram.com/dikta/"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="https://open.spotify.com/artist/0zUPDmk0fO1r3OdJWZxGKj?si=LxYNAzVUQj2Zj8viOTCfaw"><i class="fa fa-spotify"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-content">
                                <h3 class="title-name"><a href="speaker-single.html">Dikta Wicaksono</a></h3>
                                <div class="team-title">Penyanyi dan Aktor</div>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <div class="team-inner-wrap">
                            <div class="images-wrap">
                                <a href="speaker-single.html"><img src="assets/images/team/home4/2.jpg" alt="Team"></a>
                                <ul class="social-icons">
                                    <li><a href="https://www.instagram.com/jonojoni.official"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="https://open.spotify.com/artist/53Epht0Y2ftJqVGa5NbVQs?si=zWyzFdwxR1yEl7-TVlBMjw"><i class="fa fa-spotify"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-content">
                                <h3 class="title-name"><a href="speaker-single.html">MR JONO AND JONI</a></h3>
                                <div class="team-title">Artis Musik</div>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <div class="team-inner-wrap">
                            <div class="images-wrap">
                                <a href="speaker-single.html"><img src="assets/images/team/home4/3.jpg" alt="Team"></a>
                                <ul class="social-icons">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-content">
                                <h3 class="title-name"><a href="speaker-single.html">Ajay Devgan</a></h3>
                                <div class="team-title">Singer</div>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <div class="team-inner-wrap">
                            <div class="images-wrap">
                                <a href="speaker-single.html"><img src="assets/images/team/home4/4.jpg" alt="Team"></a>
                                <ul class="social-icons">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-content">
                                <h3 class="title-name"><a href="speaker-single.html">Varun Dhawan</a></h3>
                                <div class="team-title">Music Director</div>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <div class="team-inner-wrap">
                            <div class="images-wrap">
                                <a href="speaker-single.html"><img src="assets/images/team/home4/5.jpg" alt="Team"></a>
                                <ul class="social-icons">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-content">
                                <h3 class="title-name"><a href="speaker-single.html">Seroun Pawor</a></h3>
                                <div class="team-title">Priyanka Chopra</div>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <div class="team-inner-wrap">
                            <div class="images-wrap">
                                <a href="speaker-single.html"><img src="assets/images/team/home4/6.jpg" alt="Team"></a>
                                <ul class="social-icons">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-content">
                                <h3 class="title-name"><a href="speaker-single.html">Sanjay Dutt</a></h3>
                                <div class="team-title">Singer</div>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <div class="team-inner-wrap">
                            <div class="images-wrap">
                                <a href="speaker-single.html"><img src="assets/images/team/home4/7.jpg" alt="Team"></a>
                                <ul class="social-icons">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-content">
                                <h3 class="title-name"><a href="speaker-single.html">Emraan Hashmi</a></h3>
                                <div class="team-title">Music</div>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <div class="team-inner-wrap">
                            <div class="images-wrap">
                                <a href="speaker-single.html"><img src="assets/images/team/home4/8.jpg" alt="Team"></a>
                                <ul class="social-icons">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-content">
                                <h3 class="title-name"><a href="speaker-single.html">Rajinikanth</a></h3>
                                <div class="team-title">Singer</div>
                            </div>
                        </div>
                    </div>
                </div> -->


            </div>
        </div>

        <!-- <div class="rs-newsletter style1 mb--110">
            <div class="container">
                <div class="newsletter-wrap">
                    <div class="row y-middle">
                        <div class="col-lg-6 md-mb-30">
                            <div class="content-wrap">
                                <div class="icon-img">
                                    <img src="assets/images/mail.png" alt="images">
                                </div>
                                <h3 class="newsletter-title">
                                    Newsletter Subscribe
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <form class="newsletter-form">
                                <input type="email" name="email" placeholder="Your email address" required="">
                                <em class="paper-plane"><input type="submit" value="Subscribe"></em>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Newsletter section end -->

        <!-- Counter Start Here -->
        <!-- 
        <div class="rs-counter about-style home-style2 blue-bg2 pt-120 pb-120 md-pt-80 md-pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 md-mb-30">
                        <div class="counter-list">
                            <div class="counter-icon">
                                <img src="assets/images/counter/icons/1.png" alt="Counter">
                            </div>
                            <div class="counter-text plus">
                                <div class="rs-count">10</div>
                                <h4 class="title">Bintang Tamu</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 md-mb-30">
                        <div class="counter-list">
                            <div class="counter-icon">
                                <img src="assets/images/counter/icons/2.png" alt="Counter">
                            </div>
                            <div class="counter-text plus">
                                <div class="rs-count">10 Jt</div>
                                <h4 class="title">Prize Pool</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 xs-mb-30">
                        <div class="counter-list">
                            <div class="counter-icon">
                                <img src="assets/images/counter/icons/3.png" alt="Counter">
                            </div>
                            <div class="counter-text plus">
                                <div class="rs-count">5</div>
                                <h4 class="title">Tenant</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-list">
                            <div class="counter-icon">
                                <img src="assets/images/counter/icons/4.png" alt="Counter">
                            </div>
                            <div class="counter-text plus">
                                <div class="rs-count">3</div>
                                <h4 class="title">Lomba</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Counter End Here -->


        <!-- Pendaftaran Section End -->


        <!-- Our Event Schedule Start -->

        <div id="rs-events-schedule" class="rs-events-schedule rs-events-schedule4 blue-bg3 pt-150 pb-120 md-pt-110 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <h2 class="title title2 title3 text-middle">
                        Jadwal
                    </h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="events-schedule-tabs">
                            <!-- Nav tabs -->
                            <ul class="nav eventday-list">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#sunday">Hari 1 <span>2022-06-24</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#monday">Hari 2 <span>2022-06-25</span></a>
                                </li>
                            </ul>
                            <div class="events-schedule-contents tab-content schedule-one">
                                <div class="tab-pane events-shedule-des active show" id="sunday">
                                    <div class="events-shedule-subitmes">
                                        <table class="schedule-3">
                                            <tbody>
                                                <tr>
                                                    <th>Waktu</th>
                                                    <th>Kegiatan</th>
                                                    <th>Bintang Tamu</th>
                                                </tr>
                                                <tr>
                                                    <td class="td__time_color">-</td>
                                                    <td>
                                                        Segera
                                                    </td>
                                                    <td class="speak-image-td">
                                                        <div class="speak-image">
                                                            <div class="tooltip">
                                                                <a href="https://www.instagram.com/fikrania.udinus/"><img src="assets/images/gs.jpg" alt="Images"></a>
                                                                <span class="tooltiptext">Kepoin dong</span>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="speak-image">
                                                            <div class="tooltip">
                                                                <a href="#"><img src="assets/images/tab/home4/2.jpg" alt="Images"></a>
                                                                <span class="tooltiptext">Natalie Portman</span>
                                                            </div>
                                                        </div> -->
                                                    </td>
                                                </tr>
                                                <!-- <tr>
                                                    <td class="td__time_color">12:00-2:00</td>
                                                    <td>
                                                        Live Pop Workout
                                                    </td>
                                                    <td class="speak-image-td">
                                                        <div class="speak-image">
                                                            <div class="tooltip">
                                                                <a href="#"><img src="assets/images/tab/home4/3.jpg" alt="Images"></a>
                                                                <span class="tooltiptext">Akshay Kumar</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td__time_color">2:00-3:00</td>
                                                    <td>
                                                        Relaxing Classical
                                                    </td>
                                                    <td class="speak-image-td">
                                                        <div class="speak-image">
                                                            <div class="tooltip">
                                                                <a href="#"><img src="assets/images/tab/home4/4.jpg" alt="Images"></a>
                                                                <span class="tooltiptext">Aamir Khan</span>
                                                            </div>
                                                        </div>
                                                        <div class="speak-image">
                                                            <div class="tooltip">
                                                                <a href="#"><img src="assets/images/tab/home4/5.jpg" alt="Images"></a>
                                                                <span class="tooltiptext">Ranbir Kapoor</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td__time_color">3:00-5:00</td>
                                                    <td>
                                                        Rock Stars Concert
                                                    </td>
                                                    <td class="speak-image-td">
                                                        <div class="speak-image">
                                                            <div class="tooltip">
                                                                <a href="#"><img src="assets/images/tab/home4/6.jpg" alt="Images"></a>
                                                                <span class="tooltiptext">Ajay Devgan</span>
                                                            </div>
                                                        </div>
                                                </tr> -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane events-shedule-des" id="monday">
                                    <div class="events-shedule-subitmes">
                                        <table class="schedule-3">
                                            <tbody>
                                                <tr>
                                                    <th>Waktu</th>
                                                    <th>Kegiatan</th>
                                                    <th>Bintang Tamu</th>
                                                </tr>
                                                <tr>
                                                    <td class="td__time_color">-</td>
                                                    <td>
                                                        Segera
                                                    </td>
                                                    <td class="speak-image-td">
                                                        <div class="speak-image">
                                                            <div class="tooltip">
                                                                <a href="https://www.instagram.com/fikrania.udinus/"><img src="assets/images/gs.jpg" alt="Images"></a>
                                                                <span class="tooltiptext">Kepoin dong</span>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="speak-image">
                                                            <div class="tooltip">
                                                                <a href="#"><img src="assets/images/tab/home4/2.jpg" alt="Images"></a>
                                                                <span class="tooltiptext">Natalie Portman</span>
                                                            </div>
                                                        </div> -->
                                                    </td>
                                                </tr>
                                                <!-- <tr>
                                                    <td class="td__time_color">12:00-1:00</td>
                                                    <td>
                                                        Relaxing Classical
                                                    </td>
                                                    <td class="speak-image-td">
                                                        <div class="speak-image">
                                                            <div class="tooltip">
                                                                <a href="#"><img src="assets/images/tab/home4/3.jpg" alt="Images"></a>
                                                                <span class="tooltiptext">Akshay Kumar</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td__time_color">1:00-2:00</td>
                                                    <td>
                                                        Band Festival
                                                    </td>
                                                    <td class="speak-image-td">
                                                        <div class="speak-image">
                                                            <div class="tooltip">
                                                                <a href="#"><img src="assets/images/tab/home4/4.jpg" alt="Images"></a>
                                                                <span class="tooltiptext">Aamir Khan</span>
                                                            </div>
                                                        </div>
                                                        <div class="speak-image">
                                                            <div class="tooltip">
                                                                <a href="#"><img src="assets/images/tab/home4/5.jpg" alt="Images"></a>
                                                                <span class="tooltiptext">Ranbir Kapoor</span>
                                                            </div>
                                                        </div> -->
                                                </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Our Event Schedule End -->
         <!-- Pendaftaran Section Start -->
    <div id="rs-pendaftaran2" class="rs-pricing main-home pricing-plan-style3 pt-150 blue-bg2 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-4 pl-32 md-pl-15">
                    <div class="pricing-img">
                        <img src="assets/images/pricing/Lomba3.png" alt="Images">
                    </div>
                </div>
                <div class="col-lg-8 pl-70 md-pl-15 price-responsive">
                    <div class="sec-title mb-60">
                        <h2 class="title title2 title3">
                            Pembelian Ticket Konser
                        </h2>
                    </div>
                    <ul class="price-list-item">
                        <li class="price-list mb-30">
                            <div class="price-grid-item">
                                <div class="top-shape"></div>
                                <div class="price-list-text">
                                    <div class="price-list-header">
                                        <span class="price-list-title">Presale 1</span>
                                    </div>
                                    <span class="event-date"></span>
                                </div>
                                <div class="btn-part">
                                    <a class="readon btn-text buy-now" href="https://forms.gle/zSgQPriyqJZAm3hv7">
                                        <span>Umum (25k)</span>
                                    </a>
                                </div>
                                <div class="btn-part">
                                    <a class="readon btn-text buy-now" href="https://forms.gle/PoywvXFs7hKnQDfa9">
                                        <span>Udinus (20k)</span>
                                    </a>
                                </div>
                                <div class="bottom-shape"></div>
                            </div>
                        </li>
                        <li class="price-list mb-30">
                            <div class="price-grid-item">
                                <div class="top-shape"></div>
                                <div class="price-list-text">
                                    <div class="price-list-header">
                                        <span class="price-list-title">Presale 2</span>
                                    </div>
                                    <span class="event-date"></span>
                                </div>
                                <div class="btn-part">
                                    <a class="readon btn-text buy-now" href="#">
                                        <span>Coming Soon</span>
                                    </a>
                                </div>
                                <!-- <div class="btn-part">
                                    <a class="readon btn-text buy-now" href="https://forms.gle/QhvEhzRFrWCuaZ7D8">
                                        <span>Umum (35k)</span>
                                    </a>
                                </div>
                                <div class="btn-part">
                                    <a class="readon btn-text buy-now" href="https://forms.gle/2j1yh4Q3kRoYqNJy6">
                                        <span>Udinus (30k)</span>
                                    </a>
                                </div> -->
                                <div class="bottom-shape"></div>
                            </div>
                        </li>
                        <li class="price-list mb-30">
                            <div class="price-grid-item">
                                <div class="top-shape"></div>
                                <div class="price-list-text">
                                    <div class="price-list-header">
                                        <span class="price-list-title">Bundling</span>
                                    </div>
                                    <span class="event-date"></span>
                                </div>
                                <div class="btn-part">
                                    <a class="readon btn-text buy-now" href="#">
                                        <span>Coming Soon</span>
                                    </a>
                                </div>
                                <!-- <div class="btn-part">
                                    <a class="readon btn-text buy-now" href="https://forms.gle/2j1yh4Q3kRoYqNJy6">
                                        <span>Bundling</span>
                                    </a>
                                </div> -->
                                <div class="bottom-shape"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Pendaftaran Section End -->

        <!-- Our Sponsor Section Start -->
        <div id="rs-our-sponsor" class="rs-our-sponsor style1 home4-sponsor-style bg18 pt-150 pb-120 md-pt-110 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <h2 class="title title2 title3 text-middle">
                        Sponsor
                    </h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-6 mb-20">
                        <div class="logo-item">
                            <div class="grid-figure">
                                <div class="logo-img">
                                    <a href="https://www.instagram.com/superskinme/"><img src="assets\images\partner\sponsor\SuperSkin.png" alt="logo-img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 mb-20">
                        <div class="logo-item">
                            <div class="grid-figure">
                                <div class="logo-img">
                                    <a href="h#"><img src="assets\images\partner\sponsor\logoSponsor1.svg" alt="logo-img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 mb-20">
                        <div class="logo-item">
                            <div class="grid-figure">
                                <div class="logo-img">
                                    <a href="#"><img src="assets\images\partner\sponsor\logoSponsor1.svg" alt="logo-img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="logo-item">
                            <div class="grid-figure">
                                <div class="logo-img">
                                    <a href="#"><img src="assets\images\partner\sponsor\logoSponsor1.svg" alt="logo-img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="logo-item">
                            <div class="grid-figure">
                                <div class="logo-img">
                                    <a href="#"><img src="assets/images/event/sponsor/8.png" alt="logo-img"></a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-lg-12">
                        <div class="btn-part text-center mt-60 md-mt-40">
                            <a class="readon btn-text" href="https://api.whatsapp.com/send/?phone=%2B6287739619072&text&type=phone_number&app_absent=0">
                                <span>Become a Sponsors</span>
                                <img src="assets/images/button.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Sponsor Section Start -->



        <!-- Contact Section Start -->
        <div id="rs-contact" class="rs-contact home-style1 home-style2 home-style3 blue-bg2 pt-120 md-pt-80">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-6 pr-40 md-pr-15 md-mb-50">
                        <div class="contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15840.90412997226!2d110.4092008!3d-6.9826317!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4ec52229d7%3A0xc791d6abc9236c7!2sUniversitas%20Dian%20Nuswantoro!5e0!3m2!1sid!2sid!4v1677313544507!5m2!1sid!2sid" width="800" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="widget-item mb-10">
                            <div class="widget-img">
                                <img src="assets/images/contact/icons/2-1.png" alt="Images">
                            </div>
                            <div class="address-item">
                                <div class="address-icon">
                                    <img src="assets/images/contact/icons/1.png" alt="Images">
                                </div>
                                <div class="address-text">
                                    <h3 class="title"> Alamat</h3>
                                    <p class="services-txt">
                                        Jl. Imam Bonjol No.207, Pendrikan Kidul, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50131
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="widget-item mb-20">
                            <div class="widget-img">
                                <img src="assets/images/contact/icons/2-2.png" alt="Images">
                            </div>
                            <div class="address-item">
                                <div class="address-icon">
                                    <img src="assets/images/contact/icons/2.png" alt="Images">
                                </div>
                                <div class="address-text">
                                    <h3 class="title">Email</h3>
                                    <a href="mailto:fikrania2023@gmail.com">
                                        <p class="services-txt">fikrania2023@gmail.com</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="widget-item">
                            <div class="widget-img">
                                <img src="assets/images/contact/icons/2-3.png" alt="Images">
                            </div>
                            <div class="address-item">
                                <div class="address-icon">
                                    <img src="assets/images/contact/icons/3.png" alt="Images">
                                </div>
                                <div class="address-text">
                                    <h3 class="title">Whatsapp</h3>
                                    <p class="services-txt">
                                        <a href="https://api.whatsapp.com/send/?phone=%2B6287718526911&text&type=phone_number&app_absent=0">(+62)877-1852-6911</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <footer id="rs-footer" class="rs-footer style1">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 md-mb-10">
                        <div class="footer-logo mb-40">
                            <a href="index.php"><img src="assets/images/logo_fikrania.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-sm-12 pl-45 md-pl-15">
                                <h3 class="footer-title">Alamat</h3>
                                <div class="textwidget">Jl. Imam Bonjol No.207, Pendrikan Kidul, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50131</div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 md-mb-10 pl-90 md-pl-15">
                                <h3 class="footer-title">Kontak</h3>
                                <div class="textwidget">
                                    <a href="mailto:fikrania2023@gmail.com">fikrania2023@gmail.com</a><br>
                                    <a href="https://api.whatsapp.com/send/?phone=%2B6287718526911&text&type=phone_number&app_absent=0">(+62)877-1852-6911</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 pl-115 md-pl-15">
                                <h3 class="footer-title">Follow Us</h3>
                                <ul class="footer-social">
                                    <li>
                                        <a href="https://www.instagram.com/fikrania.udinus/"><i class="fa fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-6">
                        <div class="copyright text-lg-start text-center ">
                            <p>© 2023 FIKRANIA, All Rights Reserved. Developed By<a href="https://www.instagram.com/fikrania.udinus/"> FIKRANIA 2023</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- start scrollUp  -->
    <div id="scrollUp" class="orange-color">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- End scrollUp  -->



    <!-- modernizr js -->
    <script src="assets/js/modernizr-2.8.3.min.js"></script>
    <!-- jquery latest version -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap v4.4.1 js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- op nav js -->
    <script src="assets/js/jquery.nav.js"></script>
    <!-- isotope.pkgd.min js -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- owl.carousel js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- wow js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Time Circle js -->
    <script src="assets/js/time-circle.js"></script>
    <!-- Skill bar js -->
    <script src="assets/js/skill.bars.jquery.js"></script>
    <!-- imagesloaded js -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- waypoints.min js -->
    <script src="assets/js/waypoints.min.js"></script>
    <!-- counterup.min js -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- magnific popup js -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- contact form js -->
    <script src="assets/js/contact.form.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>
</body>

</html>