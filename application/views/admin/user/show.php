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
                        
                        <div class="row">
                            <div class="col-xl-3">
                                <div class="user-sidebar">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="mt-n4 pt-4 position-relative">
                                                <div class="text-center">
                                                    <img src="<?php echo base_url(); ?>assets/admin/assets/images/users/avatar-1.jpg" alt="" class="avatar-xl rounded-circle img-thumbnail">
                                                    <div class="mt-3">
                                                        <h5 class="">Kat Macaulay</h5>
                                                        <div>
                                                            <a href="pages-profile.html#" class="text-muted m-1">User</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end card body -->
                                    </div> <!-- end card -->

                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Demographics</h4>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled mb-0">
                                                <li class="d-flex justify-content-between p-2 font-size-15"><span class="text-muted">Jenis Kelamin</span><span><?php echo $user['jenis_kelamin'] == 'l' ? "laki-laki" : "perempuan"; ?></span></li>
                                                <li class="d-flex justify-content-between p-2 font-size-15"><span class="text-muted">No Hp</span><span><?php echo $user['no_hp']; ?></span></li>
                                                <!-- <li class="d-flex justify-content-between p-2 font-size-15"><span class="text-muted">No Hp</span><span><?php echo date("d F Y", strtotime($user['no_hp'])); ?></span></li> -->
                                            </ul>
                                            <p class="mt-3 mb-0 fw-semibold">Alamat</p>
                                            <p><?php echo $user['alamat']; ?></p>
                                        </div> <!-- end card body -->
                                    </div> <!-- end card -->

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar-xs">
                                                        <div class="avatar-title rounded-circle bg-primary bg-gradient fs-4">
                                                            <i class="mdi mdi-shopping"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="text-muted mb-1">Pembelian Bibit</p>
                                                    <h5 class="mb-0">5,643</h5>
                                                </div>
                                                <div class="flex-shrink-0 align-self-end ms-2">
                                                    <div class="badge rounded-pill font-size-13 badge-soft-danger">- 0.82%
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end card body -->
                                    </div> <!-- end card -->


                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar-xs">
                                                        <div class="avatar-title rounded-circle bg-primary bg-gradient fs-4">
                                                            <i class="mdi mdi-account-multiple"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="text-muted mb-1">Pembelian Pupuk</p>
                                                    <h5 class="mb-0">45,254</h5>
                                                </div>
                                                <div class="flex-shrink-0 align-self-end ms-2">
                                                    <div class="badge rounded-pill font-size-13 badge-soft-danger">- 1.04%</div>
                                                </div>
                                            </div>
                                        </div> <!-- end card body -->
                                    </div> <!-- end card -->


                                </div>
                            </div>

                            <div class="col-xl-9">
                                <div class="card">
                                    <div class="card-body">
                                        <div id="profile-chart" class="apex-charts"></div>
                                    </div>
                                </div>


                                <div class="card p-4 rounded">
                                    <!-- Nav tabs -->
                                    <div>
                                        <h5 class="font-size-16 mb-4">Transaksi</h5>
                                        <div class="table-responsive">
                                            <table class="table table-nowrap table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Nomor Transaksi</th>
                                                        <th scope="col">Nama</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Produk</th>
                                                        <th scope="col" style="width: 120px;">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">01</th>
                                                        <td><a href="pages-profile.html#" class="text-dark">Brand Logo Design</a></td>
                                                        <td>
                                                            18 Jun, 2021
                                                        </td>
                                                        <td>
                                                            $523
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-soft-primary font-size-12">Open</span>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-18 px-2" href="pages-profile.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-vertical"></i>
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="pages-profile.html#">Action</a>
                                                                    <a class="dropdown-item" href="pages-profile.html#">Another action</a>
                                                                    <a class="dropdown-item" href="pages-profile.html#">Something else here</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">02</th>
                                                        <td><a href="pages-profile.html#" class="text-dark">Minible Admin</a></td>
                                                        <td>
                                                            06 Jun, 2021
                                                        </td>
                                                        <td>
                                                            $253
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-soft-primary font-size-12">Open</span>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-18 px-2" href="pages-profile.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-vertical"></i>
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="pages-profile.html#">Action</a>
                                                                    <a class="dropdown-item" href="pages-profile.html#">Another action</a>
                                                                    <a class="dropdown-item" href="pages-profile.html#">Something else here</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">03</th>
                                                        <td><a href="pages-profile.html#" class="text-dark">Chat app Design</a></td>
                                                        <td>
                                                            28 May, 2021
                                                        </td>
                                                        <td>
                                                            $356
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-soft-success font-size-12">Complete</span>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-18 px-2" href="pages-profile.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-vertical"></i>
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="pages-profile.html#">Action</a>
                                                                    <a class="dropdown-item" href="pages-profile.html#">Another action</a>
                                                                    <a class="dropdown-item" href="pages-profile.html#">Something else here</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">04</th>
                                                        <td><a href="pages-profile.html#" class="text-dark">Minible Landing</a></td>
                                                        <td>
                                                            13 May, 2021
                                                        </td>
                                                        <td>
                                                            $425
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-soft-success font-size-12">Complete</span>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-18 px-2" href="pages-profile.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-vertical"></i>
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="pages-profile.html#">Action</a>
                                                                    <a class="dropdown-item" href="pages-profile.html#">Another action</a>
                                                                    <a class="dropdown-item" href="pages-profile.html#">Something else here</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">05</th>
                                                        <td><a href="pages-profile.html#" class="text-dark">Authentication Pages</a></td>
                                                        <td>
                                                            06 May, 2021
                                                        </td>
                                                        <td>
                                                            $752
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-soft-success font-size-12">Complete</span>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-18 px-2" href="pages-profile.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-vertical"></i>
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="pages-profile.html#">Action</a>
                                                                    <a class="dropdown-item" href="pages-profile.html#">Another action</a>
                                                                    <a class="dropdown-item" href="pages-profile.html#">Something else here</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> <!-- end card -->
                            </div>
                        </div>
                        <!--end row-->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <script>
                    $("#datatable").DataTable();
                </script>