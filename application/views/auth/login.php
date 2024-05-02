<?php
    if(isset($_SESSION['username'])) {
        redirect('user');
    }
?>

<div class="container">
    
    <!-- Outer Row -->
    <div style="margin-left: -40px;">
        <a href="<?= base_url('home'); ?>" class="btn btn-secondary" style="margin-top: 25px;"><i class="fas fa-arrow-left"></i> Back</a>
    </div>
    
    <div class="row justify-content-center">

        <div class="col-lg-6" style="margin-top: -45px;">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="pt-4 pb-4 pl-5 pr-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
                                </div>

                                <?= $this->session->flashdata('message'); ?>

                                <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="username" name="username" value="<?= set_value('username'); ?>" placeholder="Enter Username...">
                                        <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <span class="form-control-icon">
                                            <i class="far fa-fw fa-eye" id="togglePassword"></i>
                                        </span>
                                        <input class="form-control form-control-user" type="password" name="password" id="password" placeholder="Enter Password">

                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                                <hr class="pb-2">
                                <div class="text-center">
                                    <a class="text-decoration-none" href="<?= base_url('auth/registration'); ?>">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<script type="text/javascript" src="<?= base_url('assets/js/jquery.js'); ?>"></script>