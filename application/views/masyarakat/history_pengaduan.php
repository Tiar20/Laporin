<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">History Laporan</h4><br>
                            <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>') ?>
                            <?= $this->session->flashdata('msg'); ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table data-table table-striped table-bordered">
                                <thead>
                                    <tr class="ligth">
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Judul Laporan</th>
                                        <th>------------------ Isi Laporan ------------------</th>
                                        <th>Tanggal Melapor</th>
                                        <th>Foto</th>
                                        <th>Status</th>
                                        <th>Detail</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php $no = 1; ?>
                                        <?php foreach ($data_pengaduan as $dp) : ?>
                                    <tr>
                                        <th scope="row"><?= $no++; ?></th>
                                        <td><?= $dp['nama']; ?></td>
                                        <td><?= $dp['judul_laporan']; ?></td>
                                        <td><?= $dp['isi_laporan']; ?></td>
                                        <td><?= $dp['tgl_pengaduan']; ?></td>
                                        <td>
                                            <img width="100" src="<?= base_url() ?>assets/uploads/<?= $dp['foto']; ?>" alt="">
                                        </td>
                                        <td>
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
                                        </td>
                                        <td class="text-center">
                                            <a href="<?= base_url('Masyarakat/PengaduanController/pengaduan_detail/' . $dp['id_pengaduan']) ?>" class="btn btn-success text-dark"><i class="las la-eye"></i></a>
                                        </td>
                                        <?php if ($dp['status'] == '0') : ?>
                                            <td>
                                                <!-- <a href="<?= base_url('Masyarakat/PengaduanController/pengaduan_batal/' . $dp['id_pengaduan']) ?>" class="btn btn-danger mb-1 text-dark"><i class="las la-trash">Hapus</i></a> -->

                                                <a href="<?= base_url('Masyarakat/PengaduanController/edit/' . $dp['id_pengaduan']) ?>" class="btn btn-warning text-dark mb-1"><i class="las la-edit">Edit</i></a>

                                                <button class="btn btn-danger" name="hapuspengaduan" data-toggle="modal" data-target="#HapusModal<?php echo $dp['id_pengaduan']; ?>"><i class="las la-trash">Hapus</i></button>
                                            </td>

                                        <?php else : ?>
                                            <td><small>Tidak ada aksi</small></td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; ?>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Hapus Modal-->
<?php $no = 0;
foreach ($data_pengaduan as $dp) : $no++ ?>
    <div class="modal fade" id="HapusModal<?php echo $dp['id_pengaduan']; ?>" tabindex="-1" role="dialog" aria-labelledby="HapusModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="HapusModalLabel">Konfirmasi Hapus Pengaduan!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin Menghapus Pengaduan ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <a href="<?= base_url('Masyarakat/PengaduanController/pengaduan_batal/' . $dp['id_pengaduan']) ?>"><button type="button" class="btn btn-primary">Hapus</button></a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- End Hapus Modal-->