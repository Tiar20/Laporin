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
                                        <span class="text-dark"> Status :</span>
                                        <p><?php
                                            if ($dp['status'] == '0') :
                                                echo '<span class="badge badge-secondary">Sedang di verifikasi</span>';
                                            elseif ($dp['status'] == 'proses') :
                                                echo '<span class="badge badge-primary">Sedang di proses</span>';
                                            elseif ($dp['status'] == 'selesai') :
                                                echo '<span class="badge badge-success">Selesai di kerjakan</span>';
                                            elseif ($dp['status'] == 'tolak') :
                                                echo '<span class="badge badge-danger">Laporan di tolak</span>';
                                            else :
                                                echo '-';
                                            endif;
                                            ?>
                                        </p>
                                        <span class="text-dark">Judul Laporan :</span>
                                        <p><?= $dp['judul_laporan'] ?></p>
                                        <span class="text-dark">Isi Laporan :</span>
                                        <p><?= $dp['isi_laporan'] ?></p>
                                        <span class="text-dark">Telp :</span>
                                        <p><?= $dp['telp'] ?></p>
                                        <span class="text-dark">Tanggal Pengaduan :</span>
                                        <p class="text-danger"><?= $dp['tgl_pengaduan'] ?></p>
                                        <span class="text-dark">Tanggal Tanggapan :</span>
                                        <p class="text-success"><?= $dp['tgl_tanggapan'] ?></p>
                                    </div>
                                    <div class="text-center mb-2">
                                        <div class="">
                                            <input type="hidden" name="id" value="<?= $dp['id_pengaduan'] ?>">
                                            <a href="<?= base_url('Admin/TanggapanController/tanggapan_selesai_detail/' . $dp['id_pengaduan']) ?>" class="btn btn-primary">Lihat Detail</a>
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

<!-- Tanggapan Modal -->
<div class="modal fade bd-example-modal-lg" id="TanggapanModal" tabindex="-1" role="dialog" aria-labelledby="TanggapanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tanggapan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id" value="<?= $dp['id_pengaduan']; ?>">
                <h5 class="card-title"> Status :
                    <?php
                    if ($dp['status'] == '0') :
                        echo '<span class="badge badge-secondary">Sedang di verifikasi</span>';
                    elseif ($dp['status'] == 'proses') :
                        echo '<span class="badge badge-primary">Sedang di proses</span>';
                    elseif ($dp['status'] == 'selesai') :
                        echo '<span class="badge badge-success">Selesai di kerjakan</span>';
                    elseif ($dp['status'] == 'tolak') :
                        echo '<span class="badge badge-danger">Laporan di tolak</span>';
                    else :
                        echo '-';
                    endif;
                    ?>
                </h5>
                <h5 class="card-title">Tanggal Pengaduan : <span class="text-danger"><?= $dp['tgl_pengaduan'] ?></span></h5>
                <h5 class="card-title">Tanggal Tanggapan : <span class="text-success"><?= $dp['tgl_tanggapan'] ?></span></h5>
                <h5 class="card-title">Tanggapan : <span class="text-muted"><?= $dp['tanggapan'] ?></span></h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="las la-arrow-left"></i>Back</button>
            </div>
        </div>
    </div>
</div>
<!-- End Tanggapan Modal -->