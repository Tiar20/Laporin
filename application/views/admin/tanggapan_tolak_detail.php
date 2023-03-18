<div class="content-page">
    <div class="container-fluid">
        <a href="<?= base_url('Admin/TanggapanController/tanggapan_tolak/') ?>" class="btn btn-dark"><i class="las la-arrow-left">Back</i></a>
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <div class="card car-transparent">
                    <div class="card-body p-0">
                        <div class="profile-image position-relative">
                            <img src="<?= base_url('assets/uploads/' . $data_pengaduan['foto']) ?>" class="img-fluid rounded w-100" alt="profile-image">
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
                            <h5 class="card-title"> Status :
                                <p> <?php
                                    if ($data_pengaduan['status'] == '0') :
                                        echo '<span class="badge badge-secondary">Sedang di verifikasi</span>';
                                    elseif ($data_pengaduan['status'] == 'proses') :
                                        echo '<span class="badge badge-primary">Sedang di proses</span>';
                                    elseif ($data_pengaduan['status'] == 'selesai') :
                                        echo '<span class="badge badge-success">Selesai di kerjakan</span>';
                                    elseif ($data_pengaduan['status'] == 'tolak') :
                                        echo '<span class="badge badge-danger">Laporan di tolak</span>';
                                    else :
                                        echo '-';
                                    endif;
                                    ?>
                                </p>
                            </h5>
                            <h5 class="card-title">Jenis Laporan : <span class="text-muted">
                                    <p><?= $data_pengaduan['jenis_laporan'] ?></p>
                                </span></h5>
                            <h5 class="card-title">Judul Laporan : <span class="text-muted">
                                    <p><?= $data_pengaduan['judul_laporan'] ?></p>
                                </span></h5>
                            <h5 class="card-title">Isi Laporan : <span class="text-muted">
                                    <p><?= $data_pengaduan['isi_laporan'] ?></p>
                                </span></h5>
                            <h5 class="card-title">Lokasi : <span class="text-muted">
                                    <p><?= $data_pengaduan['lokasi_kejadian'] ?></p>
                                </span></h5>
                            <h5 class="card-title">Tanggal Pengaduan : <span class="text-danger">
                                    <p><?= $data_pengaduan['tgl_pengaduan'] ?></p>
                                </span></h5>
                            <h5 class="card-title">Tanggal Tanggapan : <span class="text-success">
                                    <p><?= $data_pengaduan['tgl_tanggapan'] ?></p>
                                </span></h5>
                            <h5 class="card-title">Tanggapan : <span class="text-muted">
                                    <p><?= $data_pengaduan['tanggapan'] ?></p>
                                </span></h5>
                        </div>
                        <div class="text-center mb-2">
                            <button class="btn btn-primary col-4" name="detail" data-toggle="modal" data-target="#BuktiSelesaiModal"><i class="las la-calendar-times"></i>Lihat Bukti Tolak</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bukti Selesai Modal -->
<div class="modal fade bd-example-modal-lg" id="BuktiSelesaiModal" tabindex="-1" role="dialog" aria-labelledata_buktiy="BuktiSelesaiModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="BuktiSelesaiModalLabel">Bukti Laporan Ditolak</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id" value="<?= $data_pengaduan['id_pengaduan']; ?>">
                <h5 class="card-title">Tanggal Ditolak : <span class="text-danger"><?= $data_pengaduan['tgl_selesai'] ?></span></h5>
                <h5 class="card-title">Alasan Tolak : <span class="text-muted"><?= $data_pengaduan['pesan'] ?></span></h5>
                <h5 class="card-title">Foto Bukti : </h5>
                <img height="400" src="<?= base_url() ?>assets/bukti/<?= $data_pengaduan['foto_bukti'] ?>" class="card-img-top">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="las la-arrow-left"></i>Back</button>
            </div>
        </div>
    </div>
</div>
<!-- End Bukti Selesai Modal -->