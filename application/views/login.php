<div class="wrapper">
    <section class="login-content">
        <div class="container">
            <div class="row align-items-center justify-content-center height-self-center">
                <div class="col-lg-10">
                    <div class="card auth-card">
                        <div class="card-body p-0">
                            <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>') ?>

                            <?= $this->session->flashdata('msg'); ?>
                            <div class="d-flex align-items-center auth-content">
                                <div class="col-lg-6 bg-primary content-left rounded">
                                    <div class="p-3">
                                        <h3 class="mb-1 text-white text-center">LOGIN</h3>
                                        <center>
                                            <img src="<?= base_url('assets/backend/img/Logo-Laporin1.png') ?>" width="200px">
                                        </center>
                                        <hr>
                                        <?= form_open('Auth/LoginController', 'class="user"'); ?>
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <div class="floating-label form-group">
                                                    <input class="floating-input form-control" type="email" name="username" placeholder=" " autofocus value="<?= set_value('username') ?>">
                                                    <label>Username</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-10">
                                                <div class="floating-label form-group">
                                                    <input class="floating-input form-control" type="password" id="password" name="password" placeholder=" ">
                                                    <label>Password</label>
                                                </div>
                                            </div>
                                            <div>
                                                <p></p>
                                                <span toggle="#password" class="las la-eye la-2x field-icon toggle-password"></span>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-user btn-block">LOGIN</button>
                                        <p class="mt-3 text-center">
                                            Belum punya akun? <a href="<?= base_url('Auth/RegisterController') ?>" class="text-white text-underline"> <strong>Register!</strong></a>
                                        </p>
                                        <a class="col-sm-12 btn btn-light" href="<?= base_url('Landing/LandingController') ?>"><i class="las la-arrow-left"> Back</i></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 content-right">
                                    <img src="<?= base_url() ?>assets/backend/images/login/01.png" class="img-fluid image-right" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>