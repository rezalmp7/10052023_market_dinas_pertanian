                <div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Dashboard</h6>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item active">Welcome to Veltrix Dashboard</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-start mini-stat-img me-4">
                                                <img src="<?php echo base_url(); ?>assets/admin/assets/images/services-icon/01.png" alt="">
                                            </div>
                                            <h5 class="font-size-16 text-uppercase text-white-50">Jumlah Transaksi</h5>
                                            <h4 class="fw-medium font-size-24">
                                                <?php echo number_format($countTransaksi); ?>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-start mini-stat-img me-4">
                                                <img src="<?php echo base_url(); ?>assets/admin/assets/images/services-icon/02.png" alt="">
                                            </div>
                                            <h5 class="font-size-16 text-uppercase text-white-50">User</h5>
                                            <h4 class="fw-medium font-size-24">
                                                <?php echo number_format($countUser); ?>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-start mini-stat-img me-4">
                                                <img src="<?php echo base_url(); ?>assets/admin/assets/images/services-icon/03.png" alt="">
                                            </div>
                                            <h5 class="font-size-16 text-uppercase text-white-50">Produk</h5>
                                            <h4 class="fw-medium font-size-24">
                                                <?php echo number_format($countProduk); ?>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-start mini-stat-img me-4">
                                                <img src="<?php echo base_url(); ?>assets/admin/assets/images/services-icon/04.png" alt="">
                                            </div>
                                            <h5 class="font-size-16 text-uppercase text-white-50">Total Transaksi</h5>
                                            <h4 class="fw-medium font-size-24">
                                                Rp. <?php echo number_format($totalTransaksi['sum_total']); ?>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="">Transaksi</h6>
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>Kode Pesanan</th>
                                                    <th>Pemesan</th>
                                                    <th>Tanggal Pengambilan</th>
                                                    <th>Total Pembayaran</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($transaksi as $key => $value) {
                                                ?>
                                                <tr>
                                                    <td style="font-family: Consolas, monaco, monospace;">#<?php echo $value['kode_pesanan']; ?></td>
                                                    <td><?php echo $value['nama_user']; ?></td>
                                                    <td><?php echo date('d F Y', strtotime($value['tgl_pengambilan'])); ?></td>
                                                    <td>Rp. <?php echo number_format($value['total']); ?></td>
                                                    <td>
                                                        <?php
                                                        switch ($value['status']) {
                                                            case '1':
                                                                echo '<span class="badge bg-warning">Menunggu</span>';
                                                                break;
                                                            case '2':
                                                                echo '<span class="badge bg-success">Berhasil</span>';
                                                                break;
                                                            default:
                                                                echo '<span class="badge bg-danger">Gagal</span>';
                                                                break;
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo base_url(); ?>admin/transaksi/show/<?php echo $value['id']; ?>" class="btn btn-sm btn-primary">Detail</a>
                                                    </td>
                                                </tr>
                                                <?php 
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->