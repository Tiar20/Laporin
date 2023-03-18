<div class="iq-sidebar  sidebar-default ">
    <div class="">
        <center>
            <a href="#" class="header-logo">
                <img src="<?= base_url('assets/backend/img/Logo-Laporin1.png') ?>" width="200" height="70" alt="logo">
            </a>
        </center>
        <div class="iq-menu-bt-sidebar ml-0">
            <i class="las la-bars wrapper-menu"></i>
        </div>
    </div>
    <div class="data-scrollbar" data-scroll="1">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <?php if ($this->session->userdata('level') == 'admin' or $this->session->userdata('level') == 'petugas') : ?>
                    <li class="">
                        <a href="<?= base_url('Admin/DashboardController') ?>" class="svg-icon">
                            <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            <span class="ml-4">Dashboards</span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php // form pengaduan diakses oleh masyarakat 
                ?>

                <?php if ($this->session->userdata('username') && $this->session->userdata('level') == NULL) : ?>
                    <li class="">
                        <a href="<?= base_url('Masyarakat/PengaduanController/dashboard_masyarakat') ?>" class="svg-icon">
                            <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            <span class="ml-4">Dashboards</span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php // end form pengaduan diakses oleh masyarakat 
                ?>

                <li class=" ">
                    <a href="<?= base_url('User/ProfileController'); ?>" class="svg-icon">
                        <svg class="svg-icon" width="30" height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
                        </svg>
                        <span class="ml-4">Profile</span>
                    </a>
                </li>
                <hr>

                <?php if ($this->session->userdata('username') && $this->session->userdata('level') == NULL) : ?>
                    <li class=" ">
                        <a href="#pengaduan" class="collapsed" data-toggle="collapse" aria-expanded="false">
                            <svg class="svg-icon" width="35" height="35" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M17.659,3.681H8.468c-0.211,0-0.383,0.172-0.383,0.383v2.681H2.341c-0.21,0-0.383,0.172-0.383,0.383v6.126c0,0.211,0.172,0.383,0.383,0.383h1.532v2.298c0,0.566,0.554,0.368,0.653,0.27l2.569-2.567h4.437c0.21,0,0.383-0.172,0.383-0.383v-2.681h1.013l2.546,2.567c0.242,0.249,0.652,0.065,0.652-0.27v-2.298h1.533c0.211,0,0.383-0.172,0.383-0.382V4.063C18.042,3.853,17.87,3.681,17.659,3.681 M11.148,12.87H6.937c-0.102,0-0.199,0.04-0.27,0.113l-2.028,2.025v-1.756c0-0.211-0.172-0.383-0.383-0.383H2.724V7.51h5.361v2.68c0,0.21,0.172,0.382,0.383,0.382h2.68V12.87z M17.276,9.807h-1.533c-0.211,0-0.383,0.172-0.383,0.383v1.755L13.356,9.92c-0.07-0.073-0.169-0.113-0.27-0.113H8.851v-5.36h8.425V9.807z"></path>
                            </svg>
                            <span class="ml-4">Laporan</span>
                            <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                            <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                        </a>
                        <ul id="pengaduan" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class="">
                                <a href="<?= base_url('Masyarakat/PengaduanController'); ?>">
                                    <i class="las la-pen"></i><span>Tambah Laporan</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="<?= base_url('Masyarakat/PengaduanController/history_pengaduan'); ?>">
                                    <i class="las la-history"></i><span>History Laporan</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
                <?php // end form pengaduan diakses oleh masyarakat 
                ?>

                <?php // dropdown admin hanya oleh akun admin dan petugas 
                ?>
                <?php if ($this->session->userdata('level') == 'admin' or $this->session->userdata('level') == 'petugas') : ?>
                    <li class=" ">
                        <a href="#pengaduan" class="collapsed" data-toggle="collapse" aria-expanded="false">
                            <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
                            </svg>
                            <span class="ml-4">Data Laporan</span>
                            <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                            <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                        </a>
                        <ul id="pengaduan" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class="">
                                <a href="<?= base_url('Admin/TanggapanController'); ?>">
                                    <i class="las la-comments"></i><span>Laporan Masuk</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="<?= base_url('Admin/TanggapanController/tanggapan_proses'); ?>">
                                    <i class="las la-clock"></i><span>Laporan Diproses</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="<?= base_url('Admin/TanggapanController/tanggapan_tolak'); ?>">
                                    <i class="las la-comment-slash"></i><span>Laporan Ditolak</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="<?= base_url('Admin/TanggapanController/tanggapan_selesai'); ?>">
                                    <i class="las la-check-double"></i><span>Laporan Selesai</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <?php // tambah petugas admin akses 
                    ?>
                    <?php if ($this->session->userdata('level') == 'admin') : ?>
                        <li class="">
                            <a href="<?= base_url('Admin/MasyarakatController'); ?>" class="svg-icon">
                                <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <span class="ml-4">Data Masyarakat</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?= base_url('Admin/PetugasController'); ?>" class="svg-icon">
                                <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="8.5" cy="7" r="4"></circle>
                                    <polyline points="17 11 19 13 23 9"></polyline>
                                </svg>
                                <span class="ml-4">Data Petugas</span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php // end tambah petugas admin akses 
                    ?>
                <?php endif; ?>
                <?php // end dropdown admin hanya oleh akun admin dan petugas 
                ?>

                <?php // generate laporan akses admin 
                ?>
                <?php if ($this->session->userdata('level') == 'admin') : ?>
                    <li class="">
                        <a href="<?= base_url('Admin/GenerateLaporanController'); ?>" class="svg-icon">
                            <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z" />
                                <path d="M14 3v5h5M16 13H8M16 17H8M10 9H8" />
                            </svg>
                            <span class="ml-4">Generate Laporan</span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php // end generate laporan akses admin 
                ?>

                <hr>
                <li class="">
                    <a href="#LogoutModal" data-toggle="modal" class="svg-icon">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 17l5-5-5-5M19.8 12H9M10 3H4v18h6"></path>
                        </svg>
                        <span class="ml-4">Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="pt-5 pb-2"></div>
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