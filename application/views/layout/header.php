<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Market Dinas Pertanian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Spectral:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/vanillajs-datepicker/dist/css/datepicker.css">

    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/vanillajs-datepicker/dist/js/datepicker-full.js"></script>
</head>

<body>
    <div class="container-fluid p-0 m-0">
        <div class="col-12 m-0 p-0">
            <!-- HEADER -->
            <div class="col-12 m-0 p-0 header">
                <div class="col-12 row p-0 m-0">
                    <div class="col-6 m-0 p-2 logo-dinas-pertanian">
                        <div class="col-12 m-0 p-0 row" style="height: 40px">
                            <img class="m-0 p-0" style="height: 40px; width: 40px" src="<?php echo base_url(); ?>assets/images/logo_dinas_pertanian.png">
                            <h1 class="col fs-4 d-inline-block h-100 align-middle m-0 py-2 ps-3 fm-spectral">Market Dinas Pertanian</h1>
                        </div>
                    </div>
                    <div class="col-6 m-0 p-0 row justify-content-end">
                        <?php
                        if($this->session->userdata('status') == "login_user") {
                        ?>
                            <div class="col-6 m-0 p-0 row justify-content-end dropdown">
                            <a class="row col-auto text-decoration-none text-black login-button pt-2 me-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="iconify fs-1 p-0 d-block col-auto" data-icon="mdi:user-circle"></span>
                                <span class="fs-5 px-1 py-1 col-auto fw-semibold"><?php echo $this->session->userdata("nama"); ?></span>
                            </a>
                        
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo base_url(); ?>keranjang">Keranjang</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url(); ?>pesanan">Pesanan</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url(); ?>login/logout">Log Out</a></li>
                            </ul>
                        </div>
                        <?php
                        } else {
                        ?>
                        <a href="<?php echo base_url(); ?>login" class="row col-auto text-decoration-none text-black login-button pt-2 me-2">
                            <span class="iconify fs-1 p-0 d-block col-auto" data-icon="solar:login-broken"></span>
                            <span class="fs-5 px-1 py-1 col-auto fw-semibold">Login</span>
                        </a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- END HEADER -->
            <!-- NAVBAR -->
            <div class="col-12 m-0 p-0 navbar">
                <div class="col-12 m-0 p-2">
                    <ul class="nav justify-content-center">
                        <li class="nav-item py-0">
                            <a class="nav-link py-0 px-4 text-white fm-spectral fw-semibold" href="<?php echo base_url(); ?>">Home</a>
                        </li>
                        <li class="nav-item py-0">
                            <a class="nav-link py-0 px-4 text-white fm-spectral" href="<?php echo base_url(); ?>bibit">Bibit Kepala Sawit</a>
                        </li>
                        <li class="nav-item py-0">
                            <a class="nav-link py-0 px-4 text-white fm-spectral" href="<?php echo base_url(); ?>pupuk">Pupuk</a>
                        </li>
                        <li class="nav-item py-0">
                            <a class="nav-link py-0 px-4 text-white fm-spectral" href="<?php echo base_url(); ?>tentang">Tentang</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>