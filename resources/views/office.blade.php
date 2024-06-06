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
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light visible-lg" id="ftco-navbar">
        <div style="width: 100%;padding: 15px;">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li style="width: 8%" class="nav-item active">
                        <a href="index.php" class="nav-link nav-submenu-parent">
                            <span>&nbsp;Beranda&nbsp;</span>
                        </a>
                    </li>
                    <li style="width: 15%" class="nav-item "><a href="" class="nav-link"><span>&nbsp;Bergabung
                                dengan Kami&nbsp;</span></a></li>
                    <li style="width: 10%" class="nav-item nav-submenu ">
                        <a href="about.php" class="nav-link nav-submenu-parent"><span>&nbsp;Tentang
                                Kami&nbsp;</span></a>
                        <div class="nav-submenu-content">
                            <a href="about.php">Hubungi Kami</a>
                        </div>
                    </li>
                    <li style="width: 8%" class="nav-item nav-submenu ">
                        <a href="Investor.php" class="nav-link nav-submenu-parent"><span>&nbsp;Investor&nbsp;</span></a>
                        <div class="nav-submenu-content">
                            <a href="laporantahunan.php">Laporan Tahunan</a>
                            <a href="laporankeuangan.php" class="nav-submenu-parent">Laporan Keuangan</a>
                        </div>
                    </li>
                    <li style="width: 10%" class="nav-item nav-submenu ">
                        <a href="index.php" class="nav-link"><span>&nbsp;Majalah Digital&nbsp;</span></a>
                        <div class="nav-submenu-content">
                            <a href="">News</a>
                        </div>
                    </li>
                    <li style="width: 10%" class="nav-item nav-submenu">
                        <a href="office.php" class="nav-link"><span>&nbsp;Office &amp; Agents&nbsp;</span></a>
                        <div class="nav-submenu-content">
                            <a href="office.php">Office</a>
                            <a href="agent.php">Agents</a>
                        </div>
                    </li>
                    <li class="nav-item"><a style="pointer-events: none;" href="#"
                            class="nav-link"><span></span></a></li>
                    <li class="nav-item" style="width: 50px">
                        <div style="display:flex;flex-direction:row;line-height:0.8">
                            <a title="Bahasa" href="index.php" class="itl-tooltip" data-placement="top">
                                <span style="color:white;">ID</span>
                            </a>
                        </div>
                    </li>
                    <!-- <li style="width: 30px;padding-right:50px;" class="nav-item">
                    <img src="https://eraindonesia.com/images/logo_white.png" style="width:40px;top:0;position:relative;">
                </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <div class="page-content" style="background-color: white;">
        <div class="visible-lg" style="height:75px;background-color: #FAFAFA;"></div>
        <div class="bg-our-networks-content bg-our-networks-image progressive">
            <img src="Rumah-Mewah-Berkonsep-Hotel.jpg" alt="Rumah Mewah Berkonsep Hotel">
        </div>
        <div class="container-filter-office">
            <div class="container">
                <form class="row" action="index.php" method="get" style="margin:0px" autocomplete="off">
                    <input type="hidden" name="type" value="mb">
                    <div class="col-md-6 col-xs-12" style="position: inherit;">
                        <div class="custom-search-container row">
                            <div class="col-md-8 col-xs-12 col-left">
                                <input placeholder="Cari Agen/Kantor ..." type="text" name="keyword"
                                    value="" class="cs-input-search">
                            </div>
                            <div class="col-md-4 col-xs-12 col-right">
                                <button type="submit" class="cs-btn-search" style="width: 100%">Cari&nbsp;<i
                                        class="fas fa-search" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="row">
                                    <div class="col-sm-3 filter-label">
                                        Wilayah
                                    </div>
                                    <div class="col-sm-9">
                                        <select class="form-control filter-select office-province" name="province">
                                            <option value="">Pilih Wilayah</option>
                                            <option value="RG12">BANTEN</option>
                                            <option value="RG1">BODETABEK</option>
                                            <option value="RG2">DKI JAKARTA</option>
                                            <option value="RG3">JAWA BARAT</option>
                                            <option value="RG4">JAWA TENGAH</option>
                                            <option value="RG5">JAWA TIMUR</option>
                                            <option value="RG6">KALIMANTAN</option>
                                            <option value="RG11">NUSA TENGGARA BARAT</option>
                                            <option value="RG7">NUSA TENGGARA TIMUR</option>
                                            <option value="RG8">OTHER PROVINCE</option>
                                            <option value="RG9">SULAWESI</option>
                                            <option value="RG10">SUMATERA</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="row">
                                    <div class="col-sm-3 filter-label">
                                        Kota
                                    </div>
                                    <div class="col-sm-9">
                                        <select class="form-control filter-select office-city" name="city">
                                            <option value="">Pilih Kota</option>
                                            {{-- <option province="BANTEN" value="SERANG">SERANG</option>
                                        <option province="BODETABEK" value="TANGERANG">TANGERANG</option>
                                        <option province="BODETABEK" value="CIBUBUR">CIBUBUR</option>
                                        <option province="BODETABEK" value="BOGOR">BOGOR</option>
                                        <option province="BODETABEK" value="BEKASI">BEKASI</option>
                                        <option province="BODETABEK" value="DEPOK">DEPOK</option>
                                        <option province="DKI JAKARTA" value="JAKARTA BARAT">JAKARTA BARAT</option>
                                        <option province="DKI JAKARTA" value="JAKARTA PUSAT">JAKARTA PUSAT</option>
                                        <option province="DKI JAKARTA" value="JAKARTA SELATAN">JAKARTA SELATAN</option>
                                        <option province="DKI JAKARTA" value="JAKARTA TIMUR">JAKARTA TIMUR</option>
                                        <option province="DKI JAKARTA" value="JAKARTA UTARA">JAKARTA UTARA</option>
                                        <option province="JAWA BARAT" value="BANDUNG">BANDUNG</option>
                                        <option province="JAWA BARAT" value="KARAWANG">KARAWANG</option>
                                        <option province="JAWA TENGAH" value="TEGAL">TEGAL</option>
                                        <option province="JAWA TENGAH" value="SOLO">SOLO</option>
                                        <option province="JAWA TENGAH" value="SEMARANG">SEMARANG</option>
                                        <option province="JAWA TENGAH" value="SALATIGA">SALATIGA</option>
                                        <option province="JAWA TENGAH" value="YOGYAKARTA">YOGYAKARTA</option>
                                        <option province="JAWA TIMUR" value="MALANG">MALANG</option>
                                        <option province="JAWA TIMUR" value="JEMBER">JEMBER</option>
                                        <option province="JAWA TIMUR" value="SURABAYA">SURABAYA</option>
                                        <option province="KALIMANTAN" value="BALIKPAPAN">BALIKPAPAN</option>
                                        <option province="KALIMANTAN" value="PONTIANAK">PONTIANAK</option>
                                        <option province="KALIMANTAN" value="SINTANG">SINTANG</option>
                                        <option province="KALIMANTAN" value="SAMARINDA">SAMARINDA</option>
                                        <option province="KALIMANTAN" value="BANJARMASIN">BANJARMASIN</option>
                                        <option province="NUSA TENGGARA BARAT" value="LOMBOK">LOMBOK</option>
                                        <option province="NUSA TENGGARA TIMUR" value="KUPANG">KUPANG</option>
                                        <option province="OTHER PROVINCE" value="BALI">BALI</option>
                                        <option province="SULAWESI" value="PALU">PALU</option>
                                        <option province="SULAWESI" value="MAKASSAR">MAKASSAR</option>
                                        <option province="SULAWESI" value="MANADO">MANADO</option>
                                        <option province="SUMATERA" value="PALEMBANG">PALEMBANG</option>
                                        <option province="SUMATERA" value="MEDAN">MEDAN</option>
                                        --}}
                                            <option province="RG12" value="R35">SERANG</option>
                                            <option province="RG1" value="R25">TANGERANG</option>
                                            <option province="RG1" value="R7">CIBUBUR</option>
                                            <option province="RG1" value="R6">BOGOR</option>
                                            <option province="RG1" value="R5">BEKASI</option>
                                            <option province="RG1" value="R34">DEPOK</option>
                                            <option province="RG2" value="R8">JAKARTA BARAT</option>
                                            <option province="RG2" value="R9">JAKARTA PUSAT</option>
                                            <option province="RG2" value="R10">JAKARTA SELATAN</option>
                                            <option province="RG2" value="R11">JAKARTA TIMUR</option>
                                            <option province="RG2" value="R12">JAKARTA UTARA</option>
                                            <option province="RG3" value="R3">BANDUNG</option>
                                            <option province="RG3" value="R31">KARAWANG</option>
                                            <option province="RG4" value="R26">TEGAL</option>
                                            <option province="RG4" value="R23">SOLO</option>
                                            <option province="RG4" value="R22">SEMARANG</option>
                                            <option province="RG4" value="R33">SALATIGA</option>
                                            <option province="RG4" value="R27">YOGYAKARTA</option>
                                            <option province="RG5" value="R17">MALANG</option>
                                            <option province="RG5" value="R13">JEMBER</option>
                                            <option province="RG5" value="R24">SURABAYA</option>
                                            <option province="RG6" value="R2">BALIKPAPAN</option>
                                            <option province="RG6" value="R30">PONTIANAK</option>
                                            <option province="RG6" value="R32">SINTANG</option>
                                            <option province="RG6" value="R21">SAMARINDA</option>
                                            <option province="RG6" value="R4">BANJARMASIN</option>
                                            <option province="RG11" value="R15">LOMBOK</option>
                                            <option province="RG7" value="R14">KUPANG</option>
                                            <option province="RG8" value="R1">BALI</option>
                                            <option province="RG9" value="R20">PALU</option>
                                            <option province="RG9" value="R16">MAKASSAR</option>
                                            <option province="RG9" value="R18">MANADO</option>
                                            <option province="RG10" value="R19">PALEMBANG</option>
                                            <option province="RG10" value="R28">MEDAN</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="container" style="margin-bottom: 20px;">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <ul class="office-list">
                        <li><a
                                href="https://eraindonesia.com/member/browse?keyword=&amp;type=mb&amp;province=RG12">BANTEN</a>
                        </li>
                        <li><a
                                href="https://eraindonesia.com/member/browse?keyword=&amp;type=mb&amp;province=RG12&amp;city=R35">SERANG</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <ul class="office-list">
                        <li><a
                                href="https://eraindonesia.com/member/browse?keyword=&amp;type=mb&amp;province=RG1">BODETABEK</a>
                        </li>
                        <li><a
                                href="https://eraindonesia.com/member/browse?keyword=&amp;type=mb&amp;province=RG1&amp;city=R5">BEKASI</a>
                        </li>
                        <li><a
                                href="https://eraindonesia.com/member/browse?keyword=&amp;type=mb&amp;province=RG1&amp;city=R6">BOGOR</a>
                        </li>
                        <li><a
                                href="https://eraindonesia.com/member/browse?keyword=&amp;type=mb&amp;province=RG1&amp;city=R7">CIBUBUR</a>
                        </li>
                        <li><a
                                href="https://eraindonesia.com/member/browse?keyword=&amp;type=mb&amp;province=RG1&amp;city=R34">DEPOK</a>
                        </li>
                        <li><a
                                href="https://eraindonesia.com/member/browse?keyword=&amp;type=mb&amp;province=RG1&amp;city=R25">TANGERANG</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <ul class="office-list">
                        <li><a href="https://eraindonesia.com/member/browse?keyword=&amp;type=mb&amp;province=RG2">DKI
                                JAKARTA</a></li>
                        <li><a
                                href="https://eraindonesia.com/member/browse?keyword=&amp;type=mb&amp;province=RG2&amp;city=R8">JAKARTA
                                BARAT</a></li>
                        <li><a
                                href="https://eraindonesia.com/member/browse?keyword=&amp;type=mb&amp;province=RG2&amp;city=R9">JAKARTA
                                PUSAT</a></li>
                        <li><a
                                href="https://eraindonesia.com/member/browse?keyword=&amp;type=mb&amp;province=RG2&amp;city=R10">JAKARTA
                                SELATAN</a></li>
                        <li><a
                                href="https://eraindonesia.com/member/browse?keyword=&amp;type=mb&amp;province=RG2&amp;city=R11">JAKARTA
                                TIMUR</a></li>
                        <li><a
                                href="https://eraindonesia.com/member/browse?keyword=&amp;type=mb&amp;province=RG2&amp;city=R12">JAKARTA
                                UTARA</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <ul class="office-list">
                        <li><a href="https://eraindonesia.com/member/browse?keyword=&amp;type=mb&amp;province=RG3">JAWA
                                BARAT</a></li>
                        <li><a
                                href="https://eraindonesia.com/member/browse?keyword=&amp;type=mb&amp;province=RG3&amp;city=R3">BANDUNG</a>
                        </li>
                        <li><a
                                href="https://eraindonesia.com/member/browse?keyword=&amp;type=mb&amp;province=RG3&amp;city=R31">KARAWANG</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <ul class="office-list">
                        <li><a href="https://eraindonesia.com/member/browse?keyword=&amp;type=mb&amp;province=RG4">JAWA
                                TENGAH</a></li>
                        <li><a
                                href="https://eraindonesia.com/member/browse?keyword=&amp;type=mb&amp;province=RG4&amp;city=R33">SALATIGA</a>
                        </li>
                        <li><a
                                href="https://eraindonesia.com/member/browse?keyword=&amp;type=mb&amp;province=RG4&amp;city=R22">SEMARANG</a>
                        </li>
                        <li><a
                                href="https://eraindonesia.com/member/browse?keyword=&amp;type=mb&amp;province=RG4&amp;city=R23">SOLO</a>
                        </li>
                        <li><a
                                href="https://eraindonesia.com/member/browse?keyword=&amp;type=mb&amp;province=RG4&amp;city=R26">TEGAL</a>
                        </li>
                        <li><a
                                href="https://eraindonesia.com/member/browse?keyword=&amp;type=mb&amp;province=RG4&amp;city=R27">YOGYAKARTA</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <ul class="office-list">
                        <li><a href="https://eraindonesia.com/member/browse?keyword=&amp;type=mb&amp;province=RG5">JAWA
                                TIMUR</a></li>
                        <li><a
                                href="https://eraindonesia.com/member/browse?keyword=&amp;type=mb&amp;province=RG5&amp;city=R17">MALANG</a>
                        </li>
                        <li><a
                                href="https://eraindonesia.com/member/browse?keyword=&amp;type=mb&amp;province=RG5&amp;city=R24">SURABAYA</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <ul class="office-list">
                        <li><a
                                href="https://eraindonesia.com/member/browse?keyword=&amp;type=mb&amp;province=RG6">KALIMANTAN</a>
                        </li>
                        <li><a
                                href="https://eraindonesia.com/member/browse?keyword=&amp;type=mb&amp;province=RG6&amp;city=R30">PONTIANAK</a>
                        </li>
                        <li><a
                                href="https://eraindonesia.com/member/browse?keyword=&amp;type=mb&amp;province=RG6&amp;city=R21">SAMARINDA</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <ul class="office-list">
                        <li><a href="https://eraindonesia.com/member/browse?keyword=&amp;type=mb&amp;province=RG8">OTHER
                                PROVINCE</a></li>
                        <li><a
                                href="https://eraindonesia.com/member/browse?keyword=&amp;type=mb&amp;province=RG8&amp;city=R1">BALI</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <ul class="office-list">
                        <li><a
                                href="https://eraindonesia.com/member/browse?keyword=&amp;type=mb&amp;province=RG9">SULAWESI</a>
                        </li>
                        <li><a
                                href="https://eraindonesia.com/member/browse?keyword=&amp;type=mb&amp;province=RG9&amp;city=R16">MAKASSAR</a>
                        </li>
                        <li><a
                                href="https://eraindonesia.com/member/browse?keyword=&amp;type=mb&amp;province=RG9&amp;city=R18">MANADO</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <ul class="office-list">
                        <li><a
                                href="https://eraindonesia.com/member/browse?keyword=&amp;type=mb&amp;province=RG10">SUMATERA</a>
                        </li>
                        <li><a
                                href="https://eraindonesia.com/member/browse?keyword=&amp;type=mb&amp;province=RG10&amp;city=R28">MEDAN</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <footer class="ftco-footer ftco-section img">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-6 service-box service-center">
                    <div class="service-content" align="left">
                        <h5><a href="index.php">Beranda</a></h5>
                        <h5><a href="about.php">Bergabung dengan Kami</a></h5>
                        <h5><a href="about.php">Hubungi Kami</a></h5>
                    </div>
                    <div style="display: flex;margin-top:30px">
                        <a href="https://www.instagram.com" target="_blank" class="social-icon"><i
                                class="fab fa-instagram" aria-hidden="true"></i></a>
                        <a href="https://www.facebook.com" target="_blank" class="social-icon"><i
                                class="fab fa-facebook-f" aria-hidden="true"></i></a>
                        <a href="https://twitter.com" target="_blank" class="social-icon"><i class="fab fa-twitter"
                                aria-hidden="true"></i></a>
                        <a href="https://www.youtube.com" target="_blank" class="social-icon"><i
                                class="fab fa-youtube" aria-hidden="true"></i></a>
                        <a href="https://id.linkedin.com" target="_blank" class="social-icon"><i
                                class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6 service-box service-center">
                    <div class="service-content" align="left">
                        <h5><a href="laporantahunan.php">Investor</a></h5>
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
