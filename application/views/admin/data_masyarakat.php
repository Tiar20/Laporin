<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Data Masyarakat</h4>
                            <hr>
                        </div>
                        <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>') ?>
                        <?= $this->session->flashdata('msg'); ?>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table data-table table-striped table-bordered">
                                <thead>
                                    <tr class="ligth">
                                        <th scope="col">#</th>
                                        <th scope="col">NIK</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">No HP</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($masyarakat as $m) : ?>
                                        <tr>
                                            <th scope="row"><?= $no++; ?></th>
                                            <td><?= $m['nik']; ?></td>
                                            <td><?= $m['nama']; ?></td>
                                            <td><?= $m['alamat']; ?></td>
                                            <td><?= $m['telp']; ?></td>
                                            <td><?= $m['username']; ?></td>
                                            <td>
                                                <?php if ($m['username'] == $this->session->userdata('username')) : ?>
                                                    <small>Tidak ada aksi</small>
                                                <?php else : ?>
                                                    <button class="btn btn-warning mb-1" name="editpetugas" data-toggle="modal" data-target="#EditMasyarakatModal<?php echo $m['nik']; ?>"><i class="las la-edit">Edit</i></button>

                                                    <button class="btn btn-danger mb-1" name="editpetugas" data-toggle="modal" data-target="#HapusModal<?php echo $m['nik']; ?>"><i class="las la-trash">Hapus</i></button>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Edit Petugas Modal -->
<?php $no = 0;
foreach ($masyarakat as $m) : $no++ ?>
    <div class="modal fade bd-example-modal-lg" id="EditMasyarakatModal<?php echo $m['nik']; ?>" tabindex="-1" role="dialog" aria-labelledby="EditMasyarakatModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="EditMasyarakatModalLabel">Edit Masyarakat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= form_open('Admin/MasyarakatController/edit/' . $m['nik']); ?>
                    <div class="form-group">
                        <label for="nik">NIK : </label>
                        <input type="text" class="form-control" id="nik" placeholder="" name="nik" value="<?= $m['nik'] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama : </label>
                        <input type="text" class="form-control" id="nama" placeholder="" name="nama" value="<?= $m['nama'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat : </label>
                        <input type="text" class="form-control" id="alamat" placeholder="" name="alamat" value="<?= $m['alamat'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="telp">No HP : </label>
                        <input type="text" class="form-control" id="telp" placeholder="" name="telp" value="<?= $m['telp'] ?>" maxlength="13">
                    </div>
                    <div class="form-group">
                        <label for="username">Username : </label>
                        <input type="text" class="form-control" id="username" placeholder="" name="username" value="<?= $m['username'] ?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="las la-edit"></i>Edit Masyarakat</button>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- End Edit Petugas Modal -->

<!-- Hapus Modal-->
<?php $no = 0;
foreach ($masyarakat as $m) : $no++ ?>
    <div class="modal fade" id="HapusModal<?php echo $m['nik']; ?>" tabindex="-1" role="dialog" aria-labelledby="HapusModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="HapusModalLabel">Konfirmasi Hapus Akun!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin Menghapus Akun ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <a href="<?= base_url('Admin/MasyarakatController/delete/' . $m['nik']) ?>"><button type="button" class="btn btn-primary">Hapus</button></a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- End Hapus Modal-->