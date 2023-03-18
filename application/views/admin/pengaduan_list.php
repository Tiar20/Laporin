<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-12">

                <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>') ?>
                <?= $this->session->flashdata('msg'); ?>

                <?php if (!empty($data_pengaduan)) : ?>

                    <div class="row no-gutters">
                        <?php foreach ($data_pengaduan as $dp) : ?>
                            <div class="col-md-4">
                                <div class="card shadow mb-4" style="width: 18rem;">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary"><?= $dp['nama'] ?></h6>
                                        <h6 class="text-gray"><?= $dp['nik'] ?></h6>
                                    </div>
                                    <img height="150" src="<?= base_url() ?>assets/uploads/<?= $dp['foto'] ?>" class="card-img-top">
                                    <div class="card-body">
                                        <span class="text-dark">Judul Laporan :</span>
                                        <p><?= $dp['judul_laporan'] ?></p>
                                        <span class="text-dark">Isi Laporan :</span>
                                        <p><?= $dp['isi_laporan'] ?></p>
                                        <span class="text-dark">Telp :</span>
                                        <p><?= $dp['telp'] ?></p>
                                        <span class="text-dark">Tanggal Pengaduan :</span>
                                        <p class="text-danger"><?= $dp['tgl_pengaduan'] ?></p>
                                    </div>
                                    <div class="text-center mb-2">
                                        <div class="">
                                            <?= form_open('Admin/TanggapanController/pengaduan_detail'); ?>
                                            <input type="hidden" name="id" value="<?= $dp['id_pengaduan'] ?>">
                                            <button class="btn btn-primary" name="terima">Lihat Detail</button>
                                            <?= form_close(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php else : ?>
                    <div class="text-center">Belum Ada Pengaduan</div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>