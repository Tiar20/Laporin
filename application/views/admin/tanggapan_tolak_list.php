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
                                    </div>
                                    <div class=" row text-center mb-2 mx-auto">
                                        <div class="mx-2">
                                            <a href="<?= base_url('Admin/TanggapanController/tanggapan_tolak_detail/' . $dp['id_pengaduan']) ?>" class="btn btn-primary">Lihat Detail</a>
                                        </div>
                                        <div class="">
                                            <button class="btn btn-success" name="uploadbukti" data-toggle="modal" data-target="#UploadBuktiModal<?php echo $dp['id_pengaduan']; ?>">Upload Bukti</button>
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

<!-- Upload Bukti Modal -->
<?php $no = 0;
foreach ($data_pengaduan as $dp) : $no++ ?>
    <div class="modal fade bd-example-modal-lg" id="UploadBuktiModal<?php echo $dp['id_pengaduan']; ?>" tabindex="-1" role="dialog" aria-labelledby="UploadBuktiModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="UploadBuktiModalLabel">Upload Bukti</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= form_open_multipart('Admin/BuktiSelesaiController/bukti_tolak/'); ?>
                    <input type="hidden" name="id" value="<?= $dp['id_pengaduan']; ?>">
                    <div class="form-group">
                        <label for="pesan"><b>Alasan Tolak : </b></label>
                        <textarea name="pesan" class="form-control" id="pesan" cols="30" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="foto_bukti"><b>Upload Foto</b></label>
                        <div class="custom-file">
                            <input type="file" name="foto_bukti" class="dropify" id="foto_bukti">
                        </div>
                        <small id="foto_bukti" class="form-text text-danger">*Foto yang di upload adalah foto bukti laporan ditolak.
                            <br>(Tipe file yang dapat di upload : png, jpg & jpeg)
                        </small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="las la-upload"></i>Upload Bukti</button>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- End Upload Bukti Modal -->