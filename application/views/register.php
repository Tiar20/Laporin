<div class="wrapper">
    <section class="login-content">
        <div class="container">
            <div class="row align-items-center justify-content-center height-self-center">
                <div class="col-lg-10">
                    <div class="card auth-card">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center auth-content">
                                <div class="col-lg-12 bg-primary content-center rounded">
                                    <div class="p-3">
                                        <h2 class="mb-2 text-white text-center">REGISTER</h2>
                                        <center>
                                            <img src="<?= base_url('assets/backend/img/Logo-Laporin1.png') ?>" width="200px">
                                        </center>
                                        <hr>

                                        <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>') ?>

                                        <?= $this->session->flashdata('msg'); ?>

                                        <?= form_open('Auth/RegisterController', 'class="user"') ?>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="floating-label form-group">
                                                    <input class="floating-input form-control" type="text" placeholder=" " name="nik" maxlength="16" value="<?= set_value('nik') ?>">
                                                    <label>NIK</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="floating-label form-group">
                                                    <input class="floating-input form-control" type="text" placeholder=" " name="alamat" value="<?= set_value('alamat') ?>">
                                                    <label>Alamat</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="floating-label form-group">
                                                    <input class="floating-input form-control" type="text" placeholder=" " name="nama" value="<?= set_value('nama') ?>">
                                                    <label>Nama</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="floating-label form-group">
                                                    <input class="floating-input form-control" type="email" placeholder=" " name="username" value="<?= set_value('username') ?>">
                                                    <label>Username</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="floating-label form-group">
                                                    <input class="floating-input form-control" type="text" placeholder=" " name="telp" maxlength="13">
                                                    <label>No HP</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="floating-label form-group">
                                                    <input class="floating-input form-control" type="password" name="password" id="password" placeholder=" ">
                                                    <label>Password</label>
                                                </div>
                                            </div>
                                            <div>
                                                <p></p>
                                                <span toggle="#password" class="las la-eye la-2x field-icon toggle-password"></span>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-user btn-block">REGISTER</button>
                                        <p class="mt-3 text-center">
                                            Sudah punya akun? <a href="<?= base_url('Auth/LoginController') ?>" class="text-white text-underline"> <strong>Login!</strong></a>
                                        </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>