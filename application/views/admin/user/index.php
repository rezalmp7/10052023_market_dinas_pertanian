                <div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Data User</h6>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/dashboard">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data User</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="clearfix col-12 m-0 mb-4 p-0">
                                    <a href="<?php echo base_url(); ?>admin/user/create" class="btn btn-success btn-sm waves-effect waves-light float-end"><i class="fas fa-plus-circle"></i> Tambah User</a>
                                </div>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>NoHp</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($users as $key => $value) {
                                        ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td>
                                                <b><?php echo $value['nama']; ?></b>
                                                <hr class="p-0 m-0" />
                                                <small><?php echo $value['username']; ?></small>
                                            </td>
                                            <td><?php echo $value['no_hp']; ?></td>
                                            <td><?php echo $value['alamat']; ?></td>
                                            <td>
                                                <!-- <a href="<?php echo base_url(); ?>admin/user/show/<?php echo $value['id']; ?>" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fas fa-info"></i> Detail</a> -->
                                                <a href="<?php echo base_url(); ?>admin/user/edit/<?php echo $value['id']; ?>" class="btn btn-sm btn-warning waves-effect waves-light"><i class="fas fa-edit"></i> Edit</a>
                                                <a href="<?php echo base_url(); ?>admin/user/destroy/<?php echo $value['id']; ?>" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fas fa-trash"></i> Hapus</a>
                                            </td>
                                        </tr>
                                        <?php
                                        $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <script>
                    $("#datatable").DataTable();
                </script>