<!DOCTYPE html>
<html lang="id">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="UTF-8">
    <meta name="description" content="Sekolah Impian: Pondok Pesantren Tahfiz dan IT (QBS-FQ)">
    <meta name="keywords" content="sekolah, impian, pendidikan, terbaik, kualitas, prestasi">
    <meta name="author" content="Fahim Quran Plus & Quadrant Boarding School">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    
    <!-- Meta untuk sosial media (Opsional) -->
    <meta property="og:title" content="Sekolah Impian: Pondok Pesantren Tahfiz dan IT (QBS-FQ)">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--====== Title ======-->
    <title> {{ $title }} </title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ url('assets/img/favicon.ico') }}" type="img/png" />
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}" />
    <!--====== Slick Slider ======-->
    <link rel="stylesheet" href="{{ url('assets/css/slick.css') }}" />
    <!--====== Magnific ======-->
    <link rel="stylesheet" href="{{ url('assets/css/magnific-popup.css') }}" />
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="{{ url('assets/css/animate.min.css') }}" />
    <!--====== Font Awesome ======-->
    <link rel="stylesheet" href="{{ url('assets/css/font-awesome.min.css') }}" />
    <!--====== Main Css ======-->
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('style_card.css') }}">
    <style>
        .goog-logo-link {
            display: none !important;
        }

        .goog-te-gadget {
            color: transparent !important;
        }

        .goog-te-gadget .goog-te-combo {
            color: blue !important;
        }

        @keyframes pulse {
            0% {
                transform: scale(1, 1);
            }

            50% {
                opacity: 0.3;
            }

            100% {
                transform: scale(1.45);
                opacity: 0;
            }
        }

        .pulse {
            -webkit-animation-name: pulse;
            animation-name: pulse;
        }

        .nav-bottom {
            display: flex;
            flex-direction: row;
            justify-content: flex-end;
            align-content: flex-end;
            width: auto;
            height: auto;
            position: fixed;
            z-index: 8;
            bottom: 0px;
            right: 0px;
            padding: 5px;
            margin: 0px;
        }

        @media (max-width: 360px) {
            .nav-bottom {
                width: 320px;
            }
        }

        .whatsapp-button {
            display: flex;
            justify-content: center;
            align-content: center;
            width: 60px;
            height: 60px;
            z-index: 8;
            transition: .3s;
            margin: 10px;
            padding: 7px;
            border: none;
            outline: none;
            cursor: pointer;
            border-radius: 50%;
            background-color: white;
            /* offset-x > | offset-y ^| blur-radius | spread-radius | color */
            -webkit-box-shadow: 1px 1px 6px 0px rgba(68, 68, 68, 0.705);
            -moz-box-shadow: 1px 1px 6px 0px rgba(68, 68, 68, 0.705);
            box-shadow: 1px 1px 6px 0px rgba(68, 68, 68, 0.705);
        }

        .circle-anime {
            display: flex;
            position: absolute;
            justify-content: center;
            align-content: center;
            width: 60px;
            height: 60px;
            top: 15px;
            right: 15px;
            border-radius: 50%;
            transition: .3s;
            background-color: #77bb4a;
            animation: pulse 1.2s 4.0s ease 4;
        }

        .popup-whatsapp {
            display: none;
            position: absolute;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            width: auto;
            height: auto;
            padding: 10px;
            bottom: 85px;
            right: 6px;
            transition: .5s;
            border-radius: 10px;
            background-color: white;
            /* offset-x > | offset-y ^| blur-radius | spread-radius | color */
            -webkit-box-shadow: 2px 1px 6px 0px rgba(68, 68, 68, 0.705);
            -moz-box-shadow: 2px 1px 6px 0px rgba(68, 68, 68, 0.705);
            box-shadow: 2px 1px 6px 0px rgba(68, 68, 68, 0.705);
            animation: slideInRight .6s 0.0s both;
        }

        .popup-whatsapp>div {
            margin: 5px;
        }

        @media (max-width: 680px) {
            .popup-whatsapp p {
                font-size: 0.9em;
            }
        }

        .popup-whatsapp>.content-whatsapp.-top {
            display: flex;
            flex-direction: column;
        }

        .popup-whatsapp>.content-whatsapp.-top p {
            color: #585858;
            font-family: 'Roboto';
            font-weight: 400;
            font-size: 1.0em;
        }

        .popup-whatsapp>.content-whatsapp.-bottom {
            display: flex;
            flex-direction: row;
        }

        .closePopup {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 28px;
            height: 28px;
            margin: 0px 0px 15px 0px;
            border-radius: 50%;
            border: none;
            outline: none;
            cursor: pointer;
            background-color: #f76060;
            -webkit-box-shadow: 1px 1px 2px 0px rgba(68, 68, 68, 0.705);
            -moz-box-shadow: 1px 1px 2px 0px rgba(68, 68, 68, 0.705);
            box-shadow: 1px 1px 2px 0px rgba(68, 68, 68, 0.705);
        }

        .closePopup:hover {
            background-color: #f71d1d;
            transition: .3s;
        }

        .send-msPopup {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #ffffff;
            margin: 0px 0px 0px 5px;
            border: none;
            outline: none;
            cursor: pointer;
            -webkit-box-shadow: 1px 1px 2px 0px rgba(68, 68, 68, 0.705);
            -moz-box-shadow: 1px 1px 2px 0px rgba(68, 68, 68, 0.705);
            box-shadow: 1px 1px 2px 0px rgba(68, 68, 68, 0.705);
        }

        .send-msPopup:hover {
            background-color: #f8f8f8;
            transition: .3s;
        }

        .is-active-whatsapp-popup {
            display: flex;
            animation: slideInRight .6s 0.0s both;
        }

        input.whats-input[type=text] {
            width: 250px;
            height: 40px;
            box-sizing: border-box;
            border: 0px solid #ffffff;
            border-radius: 20px;
            font-size: 1em;
            background-color: #ffffff;
            padding: 0px 0px 0px 10px;
            -webkit-transition: width 0.3s ease-in-out;
            transition: width 0.3s ease-in-out;
            outline: none;
            transition: .3s;
        }

        @media (max-width: 420px) {
            input.whats-input[type=text] {
                width: 225px;
            }
        }

        input.whats-input::placeholder {
            /* Most modern browsers support this now. */
            color: rgba(68, 68, 68, 0.705);
            opacity: 1;
        }

        input.whats-input[type=text]:focus {
            background-color: #f8f8f8;
            -webkit-transition: width 0.3s ease-in-out;
            transition: width 0.3s ease-in-out;
            transition: .3s;
        }

        .icon-whatsapp-small {
            width: 24px;
            height: 24px;
        }

        .icon-whatsapp {
            width: 45px;
            height: 45px;
        }

        .icon-font-color {
            color: #ffffff;
        }

        .icon-font-color--black {
            color: #333333;
        }

        #isi p {
            color: black;
            padding-left: 10px;
            padding-right: 10px;
            box-sizing: border-box;
            width: 100%;
            text-align: justify;
        }

        @media (max-width: 575.98px) {
            div.header-navigation.breakpoint-on {
                padding: 0;
            }

            #isi p {
                color: black;
                padding-left: 10px;
                padding-right: 10px;
                margin-left: -30px;
                text-align: justify;
                width: 120%;
            }
        }

        @media (min-width: 992px) {
            #psb {
                display: none;
            }

        }
    </style>
</head>

<body>
    <!--====== Preloader Start ======-->
    {{-- <div id="preloader">
        <div class="loader-cubes">
            <div class="loader-cube1 loader-cube"></div>
            <div class="loader-cube2 loader-cube"></div>
            <div class="loader-cube4 loader-cube"></div>
            <div class="loader-cube3 loader-cube"></div>
        </div>
    </div> --}}
    <!--====== Preloader End ======-->

    {{-- <div class="nav-bottom">
        <div class="popup-whatsapp fadeIn">
            <div class="content-whatsapp -top"><button type="button" class="closePopup">
                  <i class="material-icons icon-font-color">close</i>
                </button>
                <center><img src="assets/salam.png" alt="salam" class="img-fluid" width="200" height="200"></center>
                <p class="text-center"><b>Assalamualaikum</b>, ada yang bisa kami bantu ? </p>
            </div>
            <div class="content-whatsapp -bottom">
              <input class="whats-input" id="whats-in" type="text" style="background: rgb(226, 226, 226)" Placeholder="Ketik pesan..." />
                <button class="send-msPopup" id="send-btn" type="button">
                    <i class="material-icons icon-font-color--black">send</i>
                </button>

            </div>
        </div>
        <button type="button" id="whats-openPopup" class="whatsapp-button">
            <img class="icon-whatsapp" src="waa.png">
        </button>
        <div class="circle-anime"></div>
    </div> --}}

    <!--====== Header Part Start ======-->
    <header class="header-one sticky-top">
        <div class="header-topbar d-none d-sm-block">
            <div class="container-fluid container-1470">
                <div class="row align-items-center justify-content-between">
                    <div class="col-sm-auto col-12">
                        <ul class="contact-info text-center">
                            <li><a href="#"><i class="fal fa-envelope"></i> admin@sekolahimpian.com</a></li>
                            <li><a href="https://wa.me/+6281221998970"><i class="fal fa-phone"></i> 0812-2199-8970</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-auto col-12">
                        <div class="social-icon text-center">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="https://www.youtube.com/c/SekolahImpianku"><i
                                            class="fab fa-youtube"></i></a></li>
                                <li id="google_translate_element"></li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="header-navigation bg-white">
            <div class="container-fluid container-1470 d-flex align-items-center justify-content-between">
                <div class="header-left">
                    <div class="site-logo">
                        <a href="/"><img src="{{ url('logo.png') }}" class="img-fluid" width="100" height="100"
                                alt="Omnivus"></a>
                    </div>
                </div>
                <div class="header-right d-flex align-items-center justify-content-end">
                    <div class="site-nav-menu">
                        <ul class="primary-menu">
                            <li class="current">
                                <a class="nav-link" href="/">Beranda</a>
                            </li>
                            <li>
                                <a class="nav-link" href="/tentang">Tentang SI </a>
                            </li>
                            <li>
                                <a class="nav-link" href="/kurikulum">Kurikulum SI</a>

                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="programDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Program
                                </a>
                                <div class="dropdown-menu bg-secondary text-white" aria-labelledby="programDropdown">
                                    <a class="dropdown-item" style="color:white" href="">Ektrakurikuler</a>
                                    <a class="dropdown-item" style="color:white" href="/program">GSI Academy</a>
                                    <a class="dropdown-item" style="color:white" href="#">Berita</a>
                                    <!-- Tambahkan submenu sesuai kebutuhan -->
                                </div>
                            </li>
                            <li>
                                <a class="nav-link" href="/karya">Karya Santri</a>
                            </li>
                            <li>
                                <a class="nav-link" href="/kontak">Kontak</a>
                            </li>
                            <li>
                                <a href="https://psb.sekolahimpian.com" style="color: coral; font-weight: bold"
                                    target="_blank" id="psb">Pendaftaran Santri Baru</a>
                            </li>
                        </ul>
                        <a href="#" class="nav-close"><i class="fal fa-times"></i></a>
                    </div>
                    <div class="header-extra d-flex align-items-center">

                        <div class="offcanvas-widget d-lg-block d-none">
                            <div class="offcanvas-icon">
                                <span></span><span></span><span></span>
                            </div>
                        </div>
                        <div class="nav-toggler">
                            <span></span><span></span><span></span>
                        </div>
                        <div class="navbar-btn">
                            <a href="https://psb.sekolahimpian.com">Pendaftaran Santri<i
                                    class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--====== Header Part End ======-->
