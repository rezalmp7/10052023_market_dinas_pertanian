<!doctype html>
<html lang="en">

    <head>
    
        <meta charset="utf-8">
        <title>Panel Admin | Market Dinas Pertanian</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Market Dinas Pertanian" name="description">
        <meta content="sda" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/admin/assets/images/favicon.ico">
        <link href="<?php echo base_url(); ?>assets/admin/assets/libs/chartist/chartist.min.css" rel="stylesheet">
    
        <link href="<?php echo base_url(); ?>assets/admin/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/admin/assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/admin/assets/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/admin/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet">

        <!-- Bootstrap Css -->
        <link href="<?php echo base_url(); ?>assets/admin/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="<?php echo base_url(); ?>assets/admin/assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="<?php echo base_url(); ?>assets/admin/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
    
        <!-- DataTables -->
        <link href="<?php echo base_url(); ?>assets/admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/admin/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
    

        <script src="<?php echo base_url(); ?>assets/admin/assets/libs/jquery/jquery.min.js"></script>

        <!-- Required datatable js -->
        <script src="<?php echo base_url(); ?>assets/admin/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        
        <script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>
    </head>

    <body data-sidebar="dark">
        <!-- Begin page -->
        <div id="layout-wrapper">
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="<?php echo base_url(); ?>assets/images/logo_dinas_pertanian.png" alt="" height="30">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?php echo base_url(); ?>assets/images/logo_dinas_pertanian_text.png" alt="" height="20">
                                </span>
                            </a>
                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="<?php echo base_url(); ?>assets/images/logo_dinas_pertanian.png" alt="" height="30">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?php echo base_url(); ?>assets/images/logo_dinas_pertanian_text.png" alt="" height="50">
                                </span>
                            </a>
                        </div>
                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </div>
                    <div class="d-flex">
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="<?php echo base_url(); ?>assets/admin/assets/images/users/user-4.jpg"
                                    alt="Header Avatar"> <span class="m-0 ms-2 p-0"><?php echo $this->session->userdata('nama'); ?></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <!-- <a class="dropdown-item" href="index.html#"><i class="mdi mdi-account-circle font-size-17 align-middle me-1"></i> Profile</a>
                                <a class="dropdown-item" href="index.html#"><i class="mdi mdi-wallet font-size-17 align-middle me-1"></i> My Wallet</a>
                                <a class="dropdown-item d-flex align-items-center" href="index.html#"><i class="mdi mdi-cog font-size-17 align-middle me-1"></i> Settings<span class="badge bg-success ms-auto">11</span></a>
                                <a class="dropdown-item" href="index.html#"><i class="mdi mdi-lock-open-outline font-size-17 align-middle me-1"></i> Lock screen</a>
                                <div class="dropdown-divider"></div> -->
                                <a class="dropdown-item text-danger" href="<?php echo base_url();?>login/logout"><i class="bx bx-power-off font-size-17 align-middle me-1 text-danger"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Main</li>
                            <li>
                                <a href="<?php echo base_url(); ?>admin/dashboard" class="waves-effect">
                                    <i class="ti-home"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="menu-title">User</li>
                            <li>
                                <a href="<?php echo base_url(); ?>admin/admin" class=" waves-effect">
                                    <i class="ti-user"></i>
                                    <span>Admin</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>admin/user" class=" waves-effect">
                                    <i class="ti-id-badge"></i>
                                    <span>User</span>
                                </a>
                            </li>
                            <li class="menu-title">Produk</li>
                            <li>
                                <a href="<?php echo base_url(); ?>admin/bibit" class=" waves-effect">
                                    <i class="ti-archive"></i>
                                    <span>Produk Bibit Sawit</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>admin/pupuk" class=" waves-effect">
                                    <i class="ti-archive"></i>
                                    <span>Produk Pupuk</span>
                                </a>
                            </li>
                            <li class="menu-title">Transaksi</li>
                            <li>
                                <a href="<?php echo base_url(); ?>admin/transaksi" class=" waves-effect">
                                    <i class="ti-calendar"></i>
                                    <span>Transaksi</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>admin/laporan" class=" waves-effect">
                                    <i class="ti-calendar"></i>
                                    <span>Laporan</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
