<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Data Petugas</h4>
                            <hr>
                            <button class="btn btn-success" name="detail" data-toggle="modal" data-target="#TambahPetugasModal"><i class="las la-user-plus">Tambah Petugas</i></button>
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
                                        <th scope="col">Nama</th>
                                        <th scope="col">Nomor HP</th>
                                        <th scope="col">Level</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($data_petugas as $dp) : ?>
                                        <tr>
                                            <th scope="row"><?= $no++; ?></th>
                                            <td><?= $dp['nama_petugas']; ?></td>
                                            <td><?= $dp['telp']; ?></td>
                                            <td><?= $dp['level']; ?></td>
                                            <td>
                                                <?php if ($dp['username'] == $this->session->userdata('username')) : ?>
                                                    <small>Tidak ada aksi</small>
                                                <?php else : ?>
                                                    <button class="btn btn-warning" name="editpetugas" data-toggle="modal" data-target="#EditPetugasModal<?php echo $dp['id_petugas']; ?>"><i class="las la-edit">Edit</i></button>

                                                    <button class="btn btn-danger" name="hapuspetugas" data-toggle="modal" data-target="#HapusModal<?php echo $dp['id_petugas']; ?>"><i class="las la-trash">Hapus</i></button>
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

<!-- Tambah Petugas Modal -->
<div class="modal fade bd-example-modal-lg" id="TambahPetugasModal" tabindex="-1" role="dialog" aria-labelledby="TambahPetugasModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TambahModalLabel">Laporin! | Tambah Petugas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= form_open('Admin/PetugasController'); ?>
                <div class="form-group">
                    <label for="nama">Nama : </label>
                    <input type="text" class="form-control" id="nama" placeholder="" name="nama" value="<?= set_value('nama') ?>">
                </div>

                <div class="form-group">
                    <label for="username">Username : </label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="" value="<?= set_value('username') ?>">
                </div>

                <div class="form-group">
                    <label for="password">Passsword : </label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="">
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" id="show-password"> Tampilkan Password
                    </div>
                </div>
                <div class="form-group">
                    <label for="telp">No HP : </label>
                    <input type="text" class="form-control" id="telp" placeholder="" name="telp" value="<?= set_value('telp') ?>" maxlength="13">
                </div>

                <label for="">Level : </label>
                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="level" id="admin" value="admin">
                        <label class="form-check-label" for="admin">Admin</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="level" id="petugas" value="petugas" checked="">
                        <label class="form-check-label" for="petugas">Petugas</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary"><i class="las la-plus"></i>Tambah Petugas</button>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>
<!-- End Tambah Petugas Modal -->

<!-- Edit Petugas Modal -->
<?php $no = 0;
foreach ($data_petugas as $dp) : $no++ ?>
    <div class="modal fade bd-example-modal-lg" id="EditPetugasModal<?php echo $dp['id_petugas']; ?>" tabindex="-1" role="dialog" aria-labelledby="EditPetugasModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="EditPetugasModalLabel">Edit Petugas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= form_open('Admin/PetugasController/edit/' . $dp['id_petugas']); ?>
                    <div class="form-group">
                        <label for="nama">Nama : </label>
                        <input type="text" class="form-control" id="nama" placeholder="" name="nama" value="<?= $dp['nama_petugas'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="telp">No HP : </label>
                        <input type="text" class="form-control" id="telp" placeholder="" name="telp" value="<?= $dp['telp'] ?>">
                    </div>
                    <label for="">Level : </label>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="level" id="admin" value="admin" <?= $dp['level'] == 'admin' ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="admin">Admin</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="level" id="petugas" value="petugas" <?= $dp['level'] == 'petugas' ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="petugas">Petugas</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="las la-edit"></i>Edit Petugas</button>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- End Edit Petugas Modal -->

<!-- Hapus Modal-->
<?php $no = 0;
foreach ($data_petugas as $dp) : $no++ ?>
    <div class="modal fade" id="HapusModal<?php echo $dp['id_petugas']; ?>" tabindex="-1" role="dialog" aria-labelledby="HapusModalLabel" aria-hidden="true">
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
                    <a href="<?= base_url('Admin/PetugasController/delete/' . $dp['id_petugas']) ?>"><button type="button" class="btn btn-primary">Hapus</button></a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- End Hapus Modal-->