<!doctype html>
<html lang="en">

    <head>
    
        <meta charset="utf-8">
        <title>Login | Market Dinas Pertanian</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/admin/assets/images/favicon.ico">
    
        <!-- Bootstrap Css -->
        <link href="<?php echo base_url(); ?>assets/admin/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="<?php echo base_url(); ?>assets/admin/assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="<?php echo base_url(); ?>assets/admin/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
    
    </head>

    <body class="account-pages">
        <!-- Begin page -->
        <div class="accountbg" style="background: url('<?php echo base_url(); ?>assets/admin/assets/images/bg.jpg');background-size: cover;background-position: center;"></div>
        <div class="wrapper-page account-page-full">
            <div class="card shadow-none">
                <div class="card-block">
                    <div class="account-box">
                        <div class="card-box shadow-none p-4">
                            <div class="p-2">
                                <div class="text-center mt-4">
                                    <a href="index.html" class="logo logo-dark">
                                        <span class="logo-lg">
                                            <img src="<?php echo base_url(); ?>assets/images/logo_dinas_pertanian_text.png" alt="" height="50">
                                        </span>
                                    </a>
                                    <a href="index.html" class="logo logo-light">
                                        <span class="logo-lg">
                                            <img src="<?php echo base_url(); ?>assets/images/logo_dinas_pertanian_text.png" alt="" height="50">
                                        </span>
                                    </a>
                                </div>
                                <h4 class="font-size-18 mt-5 text-center">Selamat Datang !</h4>
                                <p class="text-muted text-center">Masuk untuk melanjutkan transaksi.</p>
                                <form method="POST" action="<?php echo base_url(); ?>login/login_aksi" class="mt-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="username">Username</label>
                                        <input type="text" name="username" class="form-control" id="username" placeholder="Enter username">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="userpassword">Password</label>
                                        <input type="password" name="password" class="form-control" id="userpassword" placeholder="Enter password">
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-sm-6">
                                            <!-- <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customControlInline">
                                                <label class="form-check-label" for="customControlInline">Remember me</label>
                                            </div> -->
                                        </div>
                                        <div class="col-sm-6 text-end">
                                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                        </div>
                                    </div>
                                    <!-- <div class="mb-3 mt-2 mb-0 row">
                                        <div class="col-12 mt-3">
                                            <a href="pages-recoverpw-2.html"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                        </div>
                                    </div> -->
                                </form>
                                <div class="mt-5 pt-4 text-center">
                                    <p>Belum punya akun ? <a href="<?php echo base_url(); ?>register" class="fw-medium text-primary"> Daftar Sekarang </a> </p>
                                    <p>© <script>document.write(new Date().getFullYear())</script> Developer. Create by Informatika UPGRIS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- JAVASCRIPT -->
        <script src="<?php echo base_url(); ?>assets/admin/assets/libs/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/assets/libs/node-waves/waves.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/assets/js/app.js"></script>
    </body>
</html>
