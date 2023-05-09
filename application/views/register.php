<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Register | Market Dinas Pertanian</title>
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
            <div class="card-block" style="height: 100vh;overflow-y: scroll;">

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

                            <h4 class="font-size-18 mt-5 text-center">Daftar Gratis</h4>
                            <p class="text-muted text-center">Register untuk melanjutkan transaksi.</p>

                            <form class="mt-4" action="<?php echo base_url(); ?>register/register_aksi" method="POST">
                                <div class="mb-3">
                                    <label class="form-label" for="useremail">Nama Lengkap</label>
                                    <input class="form-control" name="nama" type="text" placeholder="Artisanal kale">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="username">Username</label>
                                    <input class="form-control" name="username" type="text" placeholder="Artisanal">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="userpassword">Password</label>
                                    <input class="form-control" name="password" type="password" placeholder="Qweq12asda.">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="userpassword">Jenis Kelamin</label><br>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" id="customRadioInline1" name="jenis_kelamin" value="l" class="form-check-input">
                                            <label class="form-check-label" for="customRadioInline1">Laki-laki</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="jenis_kelamin" value="p" class="form-check-input">
                                            <label class="form-check-label" for="customRadioInline2">Perempuan</label>
                                        </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="userpassword">No Handphone (Aktif Whatsapp)</label>
                                    <input class="form-control" name="no_hp" type="number" placeholder="0855979858522">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="userpassword">Alamat</label>
                                    <textarea id="textarea" class="form-control" name="alamat" maxlength="225" rows="3" placeholder="Jl. Ahmad Yani, No23, Surabaya"></textarea>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-12 text-end">
                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Register</button>
                                    </div>
                                </div>
                            </form>
                            <div class="mt-5 pt-4 text-center">
                                <p>Already have an account ? <a href="<?php echo base_url(); ?>login" class="fw-medium text-primary"> Login </a> </p>
                                <p>©
                                    <script>document.write(new Date().getFullYear())</script> Developer. Crafted by Informatika UPGRIS
                                </p>
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