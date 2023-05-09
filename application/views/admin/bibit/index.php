                <div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Data Bibit</h6>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/dashboard">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data Bibit</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="clearfix col-12 m-0 mb-4 p-0">
                                    <a href="<?php echo base_url(); ?>admin/bibit/create" class="btn btn-success btn-sm waves-effect waves-light float-end"><i class="fas fa-plus-circle"></i> Tambah Bibit Pohon Sawit</a>
                                </div>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Gambar</th>
                                            <th>Produsen</th>
                                            <th>Jumlah</th>
                                            <th>Waktu Semail</th>
                                            <th>Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($bibits as $key => $value) {
                                        ?>
                                        <tr>
                                            <td><?php echo $key+1; ?></td>
                                            <td><img style="height: 100px" src="<?php echo base_url(); ?>assets/images/bibit/<?php echo $value['gambar']; ?>" /></td>
                                            <td><?php echo $value['produsen']; ?></td>
                                            <td><?php echo $value['jumlah'].' '.$value['satuan']; ?></td>
                                            <td><?php echo date("d F Y", strtotime($value['waktu_semai'])); ?></td>
                                            <td><?php echo 'Rp '.number_format($value['harga']).' / '.$value['satuan']; ?></td>
                                            <td>
                                                <!-- <a href="<?php echo base_url(); ?>admin/bibit/show/<?php echo $value['id']; ?>" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fas fa-info"></i> Detail</a> -->
                                                <a href="<?php echo base_url(); ?>admin/bibit/edit/<?php echo $value['id']; ?>" class="btn btn-sm btn-warning waves-effect waves-light"><i class="fas fa-edit"></i> Edit</a>
                                                <a href="<?php echo base_url(); ?>admin/bibit/destroy/<?php echo $value['id']; ?>" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fas fa-trash"></i> Hapus</a>
                                            </td>
                                        </tr>
                                        <?php
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