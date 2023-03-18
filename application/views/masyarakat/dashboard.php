<div class="content-page">
    <div class="container-fluid">
        <h3>Selamat datang di Laporin! <?= $user['nama']; ?></h3>
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <br>
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="top-block d-flex align-items-center justify-content-between">
                            <h5>Semua Laporan Saya</h5>
                            <span class="badge badge-primary"><i class="las la-comments la-5x"></i></span>
                        </div>
                        <h2><span class="counter"><?= number_format($pengaduan) ?></span></h2>
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
            <div class="col-md-6 col-lg-6">
                <br>
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="top-block d-flex align-items-center justify-content-between">
                            <h5>Laporan Saya (Selesai)</h5>
                            <span class="badge badge-success"><i class="las la-check-double la-5x"></i></span>
                        </div>
                        <h2><span class="counter"><?= number_format($pengaduan_selesai) ?></span></h2>
                        <div class="col-sm-12">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="iq-progress-bar bg-success-light">
                                    <span class="bg-success iq-progress progress-1" data-percent="<?= number_format($pengaduan) ?>"></span>
                                </div>
                                <span class="ml-3 text-success"><?= number_format($pengaduan_selesai) ?>%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-12">
                <br>
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="top-block d-flex align-items-center justify-content-between">
                            <h5>Laporan Saya (Tolak)</h5>
                            <span class="badge badge-danger"><i class="las la-comment-slash la-5x"></i></span>
                        </div>
                        <h2><span class="counter"><?= number_format($pengaduan_tolak) ?></span></h2>
                        <div class="col-sm-12">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="iq-progress-bar bg-danger-light">
                                    <span class="bg-danger iq-progress progress-1" data-percent="<?= number_format($pengaduan) ?>"></span>
                                </div>
                                <span class="ml-3 text-danger"><?= number_format($pengaduan_tolak) ?>%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>