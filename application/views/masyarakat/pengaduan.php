<div class="content-page">
    <div class="container-fluid">
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
                        <?= form_open_multipart('Masyarakat/PengaduanController'); ?>
                        <div class="form-group">
                            <label for="jenis_laporan">Jenis Laporan</label>
                            <select class="form-control mb-3" name="jenis_laporan" id="jenis_laporan">
                                <option selected="" disabled>Pilih Jenis Laporan...</option>
                                <option value="Pengaduan">Pengaduan</option>
                                <option value="Aspirasi">Aspirasi</option>
                                <option value="Permintaan Informasi">Permintaan Informasi</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="judul_laporan">Judul Laporan : </label>
                            <input type="text" class="form-control" id="judul_laporan" name="judul_laporan">
                        </div>
                        <div class="form-group">
                            <label for="isi_laporan"><b>Isi Laporan</b></label>
                            <textarea name="isi_laporan" id="isi_laporan" cols="20" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="lokasi_kejadian"><b>Lokasi Kejadian</b></label>
                            <input type="text" name="lokasi_kejadian" id="lokasi_kejadian" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="foto"><b>Upload Foto</b></label>
                            <div class="custom-file">
                                <input type="file" class="dropify" id="foto" name="foto" data-height="250">
                            </div>
                            <small id="foto" class="form-text text-danger">*Tipe file yang dapat di upload : png, jpg & jpeg
                            </small>
                        </div>

                        <button type="submit" class="btn btn-primary">Lapor!</button>
                        <button type="reset" class="btn bg-danger">Cancel</button>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>