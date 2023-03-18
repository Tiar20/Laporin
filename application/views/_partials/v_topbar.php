<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                <i class="ri-menu-line wrapper-menu"></i>
                <a href="../backend/index.html" class="header-logo">
                    <h4 class="logo-title text-uppercase">Laporin!</h4>

                </a>
            </div>
            <div class="navbar-breadcrumb">
                <h5><?= $title ?></h5>
            </div>
            <div class="d-flex align-items-center">
                <!-- Topbar Tanggal & Waktu -->
                <div>
                    <br>
                    <form class="text-black mb-3">
                        <script type="text/javascript">
                            function tampilkanwaktu() {
                                var waktu = new Date();
                                var sh = waktu.getHours() + "";
                                var sm = waktu.getMinutes() + "";
                                var ss = waktu.getSeconds() + "";
                                document.getElementById("clock").innerHTML = (sh.length == 1 ? "0" + sh : sh) + ":" + (sm.length == 1 ? "0" + sm : sm) + ":" + (ss.length == 1 ? "0" + ss : ss);
                            }
                        </script>
                        <b>
                            <i class="las la-clock text-dark"></i>

                                <body onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">
                                    <span id="clock"></span>

                                    | <?php
                                        $hari = date('l');
                                        /*$new = date('l, F d, Y', strtotime($Today));*/
                                        if ($hari == "Sunday") {
                                            echo "Minggu";
                                        } elseif ($hari == "Monday") {
                                            echo "Senin";
                                        } elseif ($hari == "Tuesday") {
                                            echo "Selasa";
                                        } elseif ($hari == "Wednesday") {
                                            echo "Rabu";
                                        } elseif ($hari == "Thursday") {
                                            echo ("Kamis");
                                        } elseif ($hari == "Friday") {
                                            echo "Jum'at";
                                        } elseif ($hari == "Saturday") {
                                            echo "Sabtu";
                                        }
                                        ?>,

                                    <?php
                                    $tgl = date('d');
                                    echo $tgl;
                                    $bulan = date('F');
                                    if ($bulan == "January") {
                                        echo " Januari ";
                                    } elseif ($bulan == "February") {
                                        echo " Februari ";
                                    } elseif ($bulan == "March") {
                                        echo " Maret ";
                                    } elseif ($bulan == "April") {
                                        echo " April ";
                                    } elseif ($bulan == "May") {
                                        echo " Mei ";
                                    } elseif ($bulan == "June") {
                                        echo " Juni ";
                                    } elseif ($bulan == "July") {
                                        echo " Juli ";
                                    } elseif ($bulan == "August") {
                                        echo " Agustus ";
                                    } elseif ($bulan == "September") {
                                        echo " September ";
                                    } elseif ($bulan == "October") {
                                        echo " Oktober ";
                                    } elseif ($bulan == "November") {
                                        echo " November ";
                                    } elseif ($bulan == "December") {
                                        echo " Desember ";
                                    }
                                    $tahun = date('Y');
                                    echo $tahun;
                                    ?>
                                </body>
                        </b>
                    </form>
                </div>
                <!-- End Topbar Tanggal & Waktu -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                    <i class="ri-menu-3-line"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-list align-items-center">
                        <li class="nav-item nav-icon dropdown caption-content">
                            <a href="#" class="search-toggle dropdown-toggle  d-flex align-items-center" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="<?= base_url() ?>assets/profile/foto-user.png" class="img-fluid rounded-circle" alt="user">
                                <div class="caption ml-3">
                                    <h6 class="mb-0 line-height"><?= $this->session->userdata('username'); ?><i class="las la-angle-down ml-2"></i></h6>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right border-none" aria-labelledby="dropdownMenuButton">
                                <li class="dropdown-item d-flex svg-icon">
                                    <svg class="svg-icon mr-0 text-primary" id="h-01-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <a href="<?= base_url('User/ProfileController') ?>">My Profile</a>
                                </li>
                                <li class="dropdown-item  d-flex svg-icon border-top">
                                    <svg class="svg-icon mr-0 text-primary" id="h-05-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                    <a href="#LogoutModal" data-toggle="modal">Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

<!-- Logout Modal-->
<div class="modal fade" id="LogoutModal" tabindex="-1" role="dialog" aria-labelledby="LogoutModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Logout | Laporin!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin Logout?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <a href="<?= base_url('Auth/LogoutController'); ?>"><button type="button" class="btn btn-primary">Logout</button></a>
            </div>
        </div>
    </div>
</div>
<!-- End Logout Modal-->