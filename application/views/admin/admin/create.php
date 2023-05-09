                <div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Tambah Admin</h6>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/dashboard">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/admin">Data Admin</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Tambah</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <form method="POST" action="<?php echo base_url(); ?>admin/admin/store">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-12">
                                            <input class="form-control" name="nama" type="text" placeholder="Artisanal kale">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-12">
                                            <input class="form-control" name="username" type="text" placeholder="Artisanal">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-12">
                                            <input class="form-control" name="password" type="password" placeholder="Qweq12asda.">
                                        </div>
                                    </div>
                                    <div class="clearfix mb-3">
                                        <button type="submit" class="btn btn-success btn-sm btn-sm waves-effect waves-light float-end"><i class="fas fa-plus-circle"></i> Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <script>
                    $("#datatable").DataTable();
                </script>