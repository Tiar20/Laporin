<div class="content-page">
    <div class="container-fluid">
        <a href="<?= base_url('Admin/TanggapanController') ?>" class="btn btn-dark"><i class="las la-arrow-left">Back</i></a>
        <hr>
        <div class="row">
            <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>') ?>
            <?= $this->session->flashdata('msg'); ?>
            <div class="col-lg-12">
                <div class="card car-transparent">
                    <div class="card-body p-0">
                        <div class="profile-image position-relative">
                            <img src="<?= base_url() ?>assets/uploads/<?= $data_pengaduan['foto'] ?>" class="img-fluid rounded w-100" alt="profile-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row m-sm-0 px-3">
                <div class="col-lg-12 card-profile">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <h5 class="card-title">Jenis Laporan : <span class="text-muted"><?= $data_pengaduan['jenis_laporan'] ?></span></h5>
                            <h5 class="card-title">Judul Laporan : <span class="text-muted"><?= $data_pengaduan['judul_laporan'] ?></span></h5>
                            <h5 class="card-title">Isi Laporan : <span class="text-muted"><?= $data_pengaduan['isi_laporan'] ?></span></h5>
                            <h5 class="card-title">Lokasi : <span class="text-muted"><?= $data_pengaduan['lokasi_kejadian'] ?></span></h5>
                            <h5 class="card-title"> Status : <span class="text-danger"><?= $data_pengaduan['status'] == 0 ? 'Belum di Verifikasi' : ''; ?></span></h5>
                            <h5 class="card-title">Tanggal Pengaduan : <span class="text-danger"><?= $data_pengaduan['tgl_pengaduan'] ?></span></h5>

                            <button type="button" class="btn btn-primary btn-lg mt-2" data-toggle="modal" data-target="#TanggapanModal">
                                Beri Tanggapan!
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tanggapan Modal -->
<div class="modal fade bd-example-modal-lg" id="TanggapanModal" tabindex="-1" role="dialog" aria-labelledby="TanggapanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Verifikasi & Beri Tanggapan Laporan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= form_open('Admin/TanggapanController/tambah_tanggapan'); ?>

                <input type="hidden" name="id" value="<?= $data_pengaduan['id_pengaduan']; ?>">
                <label for="status" class="card-title text-dark">Verifikasi Laporan : </label>
                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="status-setuju" value="proses" checked="">
                        <label class="form-check-label" for="status-setuju">Setuju</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="status-tolak" value="tolak">
                        <label class="form-check-label" for="status-tolak">Tolak</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="tanggapan" class="card-title text-dark">Tanggapan : </label>
                    <textarea name="tanggapan" class="form-control" id="tanggapan" cols="30" rows="7"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>
<!-- End Tanggapan Modal -->