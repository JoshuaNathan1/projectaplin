<!DOCTYPE html>
<html lang="en">

<head>
    <title>Project Aplin Joshua</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://eraindonesia.com/css/style.css?v=3.11">
    <script src="https://kit.fontawesome.com/797dd41ce0.js" crossorigin="anonymous"></script>
    <style media="all" id="fa-v4-font-face"></style>
    <link rel="ahortcut icon" href="https://eraindonesia.com/images/favicon.png">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

</head>

<body>
    <div id="ftco-loader" class="fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee"></circle>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00"></circle>
        </svg></div>
    <style type="text/css">
        li.nav-item {
            font-family: myriad-pro, sans-serif;
            font-weight: 700;
            font-style: normal;
        }

        .nav-link {
            height: auto !important;
        }
    </style>
    <div class="fake-navbar visible-lg">
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light visible-lg py-3 w-100"
        id="ftco-navbar">
        <button class="w-100 navbar-toggler h-100 p-3" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse w-full" id="ftco-nav">
            <ul class="navbar-nav w-100 d-flex justify-content-between">
                <li class="nav-item px-5">
                    <a href="/agen/properti" class="nav-link active">WELCOME, AGEN {{ session('user')->full_name }}</a>
                </li>
                <li class="nav-item px-5">
                    <a href="/logout" class="nav-link">Logout</a>
                </li>
            </ul>

        </div>


    </nav>

    <style>
        .btn-wa {
            position: fixed;
            bottom: 1rem;
            right: 1rem;
            z-index: 999;
            border-radius: 50%;
            background: #49b172 !important;
            background-color: rgb(73, 177, 114);
        }
    </style>
    <style>
        .elementor-background-overlay {
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            position: absolute;
        }

        .elementor-container {
            position: absolute;
            z-index: 1;
            height: 100%;
            width: 100%;
        }

        .elementor-widget-container {

            position: fixed;
            z-index: 1;
            bottom: 10%;
            left: 50%;
        }

        .elementor-icon {
            font-size: 40px;
            color: #fff;
        }

        .elementor-container-child {

            /* Center vertically and horizontally */
            position: relative;
            top: 30%;
        }

        .elementor-html5-video {
            -o-object-fit: cover;
            object-fit: cover;
            width: 100%;

        }

        .elementor-background-overlay {
            background-color: #000000;
            opacity: 0.67;
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-background-video-container {
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            position: absolute;
            overflow: hidden;
            z-index: 0;
            direction: ltr;
        }

        .elementor-section.elementor-section-height-full {
            height: 100vh;
        }

        .elementor-section {
            position: relative;
        }

        .section_title {
            color: #fff;
            font-family: "Italianno", Sans-serif;
            font-size: 59px;
            font-weight: 300;
            line-height: 1em;
            margin-bottom: 0px;
            text-align: center;
        }

        .section_subtitle {
            color: #fff;
            font-family: "Poppins", Sans-serif;
            font-size: 44px;
            font-weight: 600;
            line-height: 1em;
            margin-bottom: 0px;
            text-align: center;
        }

        .section_content {
            display: flex;
            flex-direction: row;
            justify-content: center;
            font-style: italic;
            color: #fff;
            font-family: "Poppins", Sans-serif;
            font-size: 44px;
            line-height: 1em;
            font-weight: 500;
            margin-top: 30px;

            margin-bottom: 0px;
        }

        .section_content span {
            color: #fff;
        }

        .section_content .uno {
            font-size: 98px;
            line-height: 1em;
            padding-right: 30px;
        }

        .redtext {
            color: #c8102e;
        }

        .whitetext {
            color: #fff;
        }

        .headline svg {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            overflow: visible;
        }

        .hide path {
            opacity: 1;
            stroke-dasharray: 1500 1500;
            -webkit-animation: hide-highlight 0.5s forwards;
            animation: hide-highlight 0.5s forwards;
            -webkit-animation-iteration-count: 1;
            animation-iteration-count: 1;
        }

        .animated path {
            -webkit-animation: elementor-headline-dash forwards;
            animation: elementor-headline-dash forwards;
            animation-duration: var(--animation-duration, 1s);
            animation-timing-function: ease;
            animation-delay: 0s;
            animation-iteration-count: 1;
            animation-direction: normal;
            animation-fill-mode: forwards;
            animation-play-state: running;
            animation-name: elementor-headline-dash;
            -webkit-animation-duration: var(--animation-duration, 1s);
            animation-duration: var(--animation-duration, 1s);
            -webkit-animation-iteration-count: 1;
            animation-iteration-count: 1;
        }

        .headline path {
            stroke: red;
            stroke-width: 9;
            fill: none;
            -webkit-transition: .3s;
            -o-transition: .3s;
            transition: .3s;
        }
    </style>
    <script defer="">
        function highligth() {
            $(".headline").addClass("animated");
            setTimeout(function() {
                $(".headline").removeClass("animated");
            }, 5000)
        }
        setTimeout(function() {
            highligth();
            setInterval(function() {
                //  if ($(".headline").hasClass("animated"))
                //      $(".headline").removeClass("animated");
                //         else
                highligth()
            }, 6000)
        }, 1000)
        document.addEventListener("DOMContentLoaded", (event) => {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        })

        document.addEventListener("scroll", function(event) {
            if (document.scrollingElement.scrollTop == 0)
                $(".elementor-widget-container").show()
            else
                $(".elementor-widget-container").hide()
        });
    </script>

    <div class="page-content my-5 py-5">
        @yield('isi')
    </div>
    <footer class="ftco-footer ftco-section img">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-6 service-box service-center">
                    <div class="service-content" align="left">
                        <h5><a href="index.php">Beranda</a></h5>
                        <h5><a href="./about.php">Bergabung dengan Kami</a></h5>
                        <h5><a href="about.php">Hubungi Kami</a></h5>
                    </div>
                    <div style="display: flex;margin-top:30px">
                        <a href="https://www.instagram.com" target="_blank" class="social-icon"><i
                                class="fab fa-instagram" aria-hidden="true"></i></a>
                        <a href="https://www.facebook.com" target="_blank" class="social-icon"><i
                                class="fab fa-facebook-f" aria-hidden="true"></i></a>
                        <a href="https://twitter.com" target="_blank" class="social-icon"><i class="fab fa-twitter"
                                aria-hidden="true"></i></a>
                        <a href="https://www.youtube.com" target="_blank" class="social-icon"><i class="fab fa-youtube"
                                aria-hidden="true"></i></a>
                        <a href="https://id.linkedin.com" target="_blank" class="social-icon"><i
                                class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6 service-box service-center">
                    <div class="service-content" align="left">
                        <h5><a href="investor.php">Investor</a></h5>
                        <h5><a href="index.php">Majalah Digital</a></h5>
                        <h5><a href="office.php">Office</a></h5>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 service-box service-center">
                    <div style="display: flex;align-items: flex-start;">
                        <!-- <img src="https://eraindonesia.com/images/logo_white.png" style="width: 60px"> -->
                        <div style="margin-left: 20px;">
                            <p
                                style="color: white;font-style: normal;font-weight: bold;font-size: 14pt;margin-left: 20px;">
                                Project Aplin</p>
                            <div style="display: flex;">
                                <i class="fas fa-map-marker-alt" style="margin-top: 8px;margin-right: 10px"
                                    aria-hidden="true"></i>
                                <p>
                                    TCD Tower Two, 2th Floor, Suites 3-5 Jl. K. syur kav. 126 surabaya Pusat
                                    0000
                                </p>
                            </div>
                            <div style="display: flex;">
                                <i class="far fa-envelope" style="margin-top: 8px;margin-right: 10px"
                                    aria-hidden="true"></i>
                                <p>
                                    info@ProjectAplin.com
                                </p>
                            </div>
                            <div style="display: flex;">
                                <i class="fas fa-phone-alt" style="margin-top: 8px;margin-right: 10px"
                                    aria-hidden="true"></i>
                                <p>
                                    (012) 234 5678 / (123) 0987 1232
                                </p>
                            </div>
                        </div>
                    </div>
                    <div style="display: flex;align-items:center;">
                        <span style="font-size:12px;color:#fff;">Unduh ProjectAplin</span>
                        <img src="https://eraindonesia.com/images/android.svg" style="width:100px;margin:5px">
                        <img src="https://eraindonesia.com/images/appstore.svg" style="width:100px">
                    </div>
                </div>
            </div>
            <div class="copyright-section">
                <div class="row">
                    <div class="col-md-12">
                        <span>©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>Project Aplin
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://eraindonesia.com/js/all.js"></script>
</body>

</html>
