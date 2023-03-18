<div class="content-page">
    <div class="container-fluid">
        <h3>Selamat datang di Laporin! <?= $user['nama_petugas']; ?></h3>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <br>
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="top-block d-flex align-items-center justify-content-between">
                            <h5>Semua Laporan</h5>
                            <span class="badge badge-primary"><i class="las la-comments la-4x"></i></span>
                        </div>
                        <h3><span class="counter"><?= number_format($pengaduan) ?></span></h3>
                        <div class="col-sm-12">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="iq-progress-bar bg-primary-light">
                                    <span class="bg-primary iq-progress progress-1" data-percent="<?= number_format($pengaduan) ?>"></span>
                                </div>
                                <span class="ml-3 text-primary"><?= number_format($pengaduan) ?>%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <br>
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="top-block d-flex align-items-center justify-content-between">
                            <h5>Laporan Ditolak</h5>
                            <span class="badge badge-danger"><i class="las la-comment-slash la-4x"></i></span>
                        </div>
                        <h3><span class="counter"><?= number_format($pengaduan_tolak) ?></span></h3>
                        <div class="col-sm-12">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="iq-progress-bar bg-danger-light">
                                    <span class="bg-danger iq-progress progress-1" data-percent="<?= number_format($pengaduan_tolak) ?>"></span>
                                </div>
                                <span class="ml-3 text-danger"><?= number_format($pengaduan_tolak) ?>%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <br>
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="top-block d-flex align-items-center justify-content-between">
                            <h5>Laporan Diproses</h5>
                            <span class="badge badge-warning"><i class="las la-clock la-4x text-white"></i></span>
                        </div>
                        <h3><span class="counter"><?= number_format($pengaduan_proses) ?></span></h3>
                        <div class="col-sm-12">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="iq-progress-bar bg-warning-light">
                                    <span class="bg-warning iq-progress progress-1" data-percent="<?= number_format($pengaduan_proses) ?>"></span>
                                </div>
                                <span class="ml-3 text-warning"><?= number_format($pengaduan_proses) ?>%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <br>
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="top-block d-flex align-items-center justify-content-between">
                            <h5>Laporan Selesai</h5>
                            <span class="badge badge-success"><i class="las la-check-double la-4x"></i></span>
                        </div>
                        <h3><span class="counter"><?= number_format($pengaduan_selesai) ?></span></h3>
                        <div class="col-sm-12">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="iq-progress-bar bg-success-light">
                                    <span class="bg-success iq-progress progress-1" data-percent="<?= number_format($pengaduan_selesai) ?>"></span>
                                </div>
                                <span class="ml-3 text-success"><?= number_format($pengaduan_selesai) ?>%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <br>
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="top-block d-flex align-items-center justify-content-between">
                            <h4>Data Petugas</h4>
                            <span class="badge badge-info"><i class="las la-user-check la-5x"></i></span>
                        </div>
                        <h2><span class="counter"><?= number_format($petugas) ?></span></h2>
                        <div class="iq-progress-bar bg-info-light mt-2">
                            <span class="bg-info iq-progress progress-1" data-percent="<?= number_format($petugas) ?>"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <br>
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="top-block d-flex align-items-center justify-content-between">
                            <h4>Data Masyarakat</h4>
                            <span class="badge badge-secondary"><i class="las la-users la-5x"></i></span>
                        </div>
                        <h2><span class="counter"><?= number_format($masyarakat) ?></span></h2>
                        <div class="iq-progress-bar bg-secondary-light mt-2">
                            <span class="bg-secondary iq-progress progress-1" data-percent="<?= number_format($masyarakat) ?>"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>