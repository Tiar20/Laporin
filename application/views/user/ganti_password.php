<div class="content-page">
    <div class="container-fluid">
        <a href="<?= base_url('User/ProfileController'); ?>" class="btn btn-dark"><i class="las la-arrow-left">Back</i></a>
        <hr>
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Ganti Password</h4>
                            <br>
                            <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>') ?>
                            <?= $this->session->flashdata('msg'); ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <?= form_open('Auth/ChangePasswordController') ?>
                        <div class="form-group">
                            <label for="pwd">Password Sekarang : </label>
                            <input type="password" class="form-control" id="current_password" name="current_password">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password Baru : </label>
                            <input type="password" class="form-control" id="new_password" name="new_password">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Konfirmasi Password Baru : </label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" aria-describedby="currentPasswordHelp">
                            <small id="currentPasswordHelp" class="form-text text-muted">Jangan pernah beritahukan password Anda kepada siapapun.</small>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="show-password"> Tampilkan Password
                            </div>
                        </div>
                        <div class="checkbox mb-3">
                            <label for="check_confirmation_password"><input type="checkbox" id="check_confirmation_password" name="confirmation_password" value="agree"> Anda yakin mengganti ingin Password ?</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Ganti Password</button>
                        <button type="reset" class="btn bg-danger">Cancel</button>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>