                <div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Tambah User</h6>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/dashboard">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/user">Data User</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Tambah</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <form method="POST" action="<?php echo base_url(); ?>admin/user/store">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="example-text-input" class="col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-12">
                                            <input class="form-control" name="nama" type="text" placeholder="Artisanal kale">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="example-text-input" class="col-form-label">Username</label>
                                        <div class="col-sm-12">
                                            <input class="form-control" name="username" type="text" placeholder="Artisanal">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="example-text-input" class="col-form-label">Password</label>
                                        <div class="col-sm-12">
                                            <input class="form-control" name="password" type="password" placeholder="Qweq12asda.">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label mb-3 d-flex">Jenis Kelamin :</label>
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
                                        <label for="example-text-input" class="col-form-label">No Handphone (Aktif Whatsapp)</label>
                                        <div class="col-sm-12">
                                            <input class="form-control" name="no_hp" type="number" placeholder="0855979858522">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="example-text-input" class="col-form-label">Alamat</label>
                                        <div class="col-sm-12">
                                            <textarea id="textarea" class="form-control" name="alamat" maxlength="225" rows="3" placeholder="Jl. Ahmad Yani, No23, Surabaya"></textarea>
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