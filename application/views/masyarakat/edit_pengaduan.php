<div class="content-page">
    <div class="container-fluid">
        <a href="<?= base_url('Masyarakat/PengaduanController/history_pengaduan') ?>" class="btn btn-dark"><i class="las la-arrow-left">Back</i></a>
        <hr>
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Sampaikan Laporan Anda!</h4>
                            <br>
                            <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>') ?>
                            <?= $this->session->flashdata('msg'); ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <?= form_open_multipart('Masyarakat/PengaduanController/edit/' . $pengaduan['id_pengaduan']); ?>
                        <div class="form-group">
                            <label for="jenis_laporan">Jenis Laporan</label>
                            <input type="text" class="form-control" name="jenis_laporan" id="jenis_laporan" value="<?= $pengaduan['jenis_laporan'] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="judul_laporan">Judul Laporan</label>
                            <input type="text" class="form-control" name="judul_laporan" id="judul_laporan" value="<?= $pengaduan['judul_laporan'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="isi_laporan">Isi Laporan</label>
                            <textarea name="isi_laporan" id="isi_laporan" cols="30" rows="10" class="form-control"><?= $pengaduan['isi_laporan'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="lokasi_kejadian">Lokasi Kejadian</label>
                            <input type="text" class="form-control" name="lokasi_kejadian" id="lokasi_kejadian" value="<?= $pengaduan['lokasi_kejadian'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="foto"><b>Upload Foto</b></label>
                            <div class="custom-file">
                                <input type="file" class="dropify" id="foto" name="foto" data-height="250" data-default-file="<?= base_url() ?>assets/uploads/<?= $pengaduan['foto']; ?>">
                            </div>
                            <small id="foto" class="form-text text-danger">*Tipe file yang dapat di upload : png, jpg & jpeg
                            </small>
                        </div>

                        <button type="submit" class="btn btn-primary">Edit Laporan!</button>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>