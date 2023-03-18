<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title><?= $title ?></title>
    <link rel="icon" href="<?= base_url('assets/backend/img/Logo-Laporin.png') ?>" type="image/x-icon">

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url() ?>landing/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>landing/css/templatemo-chain-app-dev.css">
    <link rel="stylesheet" href="<?= base_url() ?>landing/css/animated.css">
    <link rel="stylesheet" href="<?= base_url() ?>landing/css/owl.css">

    <!-- WebKit CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/backend/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="<?= base_url('Landing/LandingController') ?>" class="logo">
                            <img src="<?= base_url('assets/backend/img/Logo-Laporin1.png') ?>" height="80" alt="Laporin">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#tutor" class="active">Cara Melapor</a></li>
                            <li class="scroll-to-section"><a href="#services">Statistik</a></li>
                            <li class="scroll-to-section"><a href="#about">Tentang Laporin!</a></li>
                            <li>
                                <div class="gradient-button"><a id="modal_trigger" href="<?= base_url('Auth/LoginController') ?>"><i class="fa fa-sign-in-alt"></i> Login/Register</a></div>
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Layanan Pelaporan dan Pengaduan Masyarakat Online</h2>
                                        <p>Sampaikan laporan anda secara online menggunakan Laporin!<br>
                                            Laporin! adalah sebuah aplikasi yang memudahkan Masyarakat atau warga
                                            untuk menyampaikan keluhan atas pelayanan publik yang tidak sesuai dengan standar pelayanan atau pengabaian kewajiban dan/atau pelanggaran oleh Pemerintah Daerah.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="<?= base_url() ?>landing/images/slider-dec-1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="tutor" class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4><em>Cara</em> Melapor</h4>
                        <img src="<?= base_url() ?>landing/images/heading-line-dec.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="service-item">
                        <div class="icon"><i class="las la-pencil-alt la-3x"></i></div>
                        <h4>Tulis Laporan</h4>
                        <p class="text-dark">Laporkan keluhan atau aspirasi Anda dengan jelas dan lengkap. </p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="service-item">
                        <div class="icon"><i class="las la-share la-3x"></i></div>
                        <h4>Proses Verifikasi</h4>
                        <p class="text-dark">Setelah Anda melaporkan, Laporan anda akan diverifikasi untuk memastika laporan Anda bukan HOAX.</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="service-item">
                        <div class="icon"><i class="las la-clock la-3x"></i></div>
                        <h4>Laporan Diproses</h4>
                        <p class="text-dark">Setelah diverifikasi, laporan Anda akan ditindaklanjuti.</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="service-item ">
                        <div class="icon"><i class="las la-comments la-3x"></i></div>
                        <h4>Proses Tindak Lanjut</h4>
                        <p class="text-dark">Kami akan menindaklanjuti laporan Anda.</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="service-item ">
                        <div class="icon"><i class="las la-comment-dots la-3x"></i></div>
                        <h4>Beri Tanggapan</h4>
                        <p class="text-dark">Kami akan memberi tanggapan untuk laporan Anda.</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="service-item ">
                        <div class="icon"><i class="las la-check-double la-3x"></i></div>
                        <h4>Selesai</h4>
                        <p class="text-dark">Laporan Anda akan terus ditindaklanjuti hingga terselesaikan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="services" class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4><em>Statistik</em> Laporan</h4>
                        <img src="<?= base_url() ?>landing/images/heading-line-dec.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="service-item">
                        <div class="icon"><i class="las la-comments la-5x"></i></div>
                        <h4>Semua Laporan</h4>
                        <div class="h1 mb-0 font-weight-bold"><?= number_format($pengaduan) ?></div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-item">
                        <div class="icon"><i class="las la-clock la-5x"></i></div>
                        <h4>Laporan Diproses</h4>
                        <div class="h1 mb-0 font-weight-bold"><?= number_format($pengaduan_proses) ?></div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-item">
                        <div class="icon"><i class="las la-comment-slash la-5x"></i></div>
                        <h4>Laporan Ditolak</h4>
                        <div class="h1 mb-0 font-weight-bold"><?= number_format($pengaduan_tolak) ?></div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-item">
                        <div class="icon"><i class="las la-check-double la-5x"></i></div>
                        <h4>Laporan Selesai</h4>
                        <div class="h1 mb-0 font-weight-bold laporin"><?= number_format($pengaduan_selesai) ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="about" class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <center>
                        <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                            <h4><em>Tentang</em> Laporin!</h4>
                            <img src="<?= base_url() ?>landing/images/heading-line-dec.png" alt="">
                    </center>
                </div>
            </div>
            <div class="row">
                <center>
                    <div class="col-lg-6">
                        <div class="box-item">
                            <h4><a href="#about">Apa itu Laporin?</a></h4>
                            <p class="text-dark">Laporin! adalah sebuah aplikasi berbasis web yang memudahkan Masyarakat atau warga untuk menyampaikan keluhan atas pelayanan publik yang tidak sesuai dengan standar pelayanan atau pengabaian kewajiban dan/atau pelanggaran oleh Pemerintah Daerah.</p>
                        </div>
                    </div>
                </center>
                <div class="col-lg-6">
                    <div class="box-item">
                        <h4><a href="#about">Pengaduan</a></h4>
                        <p class="text-dark">Pengaduan masyarakat merupakan penyampaian keluhan yang disampaikan masyarakat (pengadu) atas pelayanan publik yang tidak sesuai dengan standar pelayanan atau pengabaian kewajiban dan/atau pelanggaran oleh Pemerintah Daerah.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box-item">
                        <h4><a href="#about">Aspirasi</a></h4>
                        <p class="text-dark">Aspirasi masyarakat adalah harapan dan tujuan dari masyarakat untuk keberhasilan pada masa yang akan datang berkaitan dengan hajat hidup mereka, baik secara individu maupun secara kelompok.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box-item">
                        <h4><a href="#about">Permintaan Informasi</a></h4>
                        <p class="text-dark">Permintaan Informasi adalah suatu proses dalam meminta suatu informasi secara lengkap dan jelas. Permintaan Informasi berkaitan dengan keinginan tahuan masyarakat akan suatu hal atau soal yang ingin diketahui secara lengkap dan jelas.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box-item">
                        <h4><a href="https://instagram.com/tiar_rmdhni?igshid=ZDdkNTZiNTM=">Dibuat Oleh :</a></h4>
                        <p class="text-dark"><b>AKHMAD BAKTIAR RAMADHANI</b></p>
                        <p class="text-dark">REKAYASA PERANGKAT LUNAK | SMK IGASAR PINDAD BANDUNG</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="right-image">
                <img src="<?= base_url() ?>landing/images/service-icon-hover-03.png" alt="">
            </div>
        </div>
    </div>





    <footer id="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-text">
                        <p>Copyright © 2023 <a href="https://instagram.com/tiar_rmdhni?igshid=ZDdkNTZiNTM=">Akhmad Baktiar Ramadhani.</a> All Rights Reserved.
                            <br>
                            REKAYASA PERANGKAT LUNAK | SMK IGASAR PINDAD BANDUNG
                            <br>Design: <a href="https://templatemo.com/" target="_blank" title="css templates">TemplateMo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <script src="<?= base_url() ?>landing/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>landing/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>landing/js/owl-carousel.js"></script>
    <script src="<?= base_url() ?>landing/js/animation.js"></script>
    <script src="<?= base_url() ?>landing/js/imagesloaded.js"></script>
    <script src="<?= base_url() ?>landing/js/popup.js"></script>
    <script src="<?= base_url() ?>landing/js/custom.js"></script>
</body>

</html>