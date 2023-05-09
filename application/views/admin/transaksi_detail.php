                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="page-title-box">
                                    <div class="row align-items-center">
                                        <div class="col-md-8">
                                            <h6 class="page-title">Transaksi</h6>
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/dashboard">Dashboard</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Transaksi</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->



                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="invoice-title">
                                                    <h4 class="float-end font-size-16" style="font-family: Consolas, monaco, monospace;"><strong>Order #<?php echo $transaksi['kode_pesanan']; ?></strong></h4>
                                                    <h3>
                                                        <img src="<?php echo base_url(); ?>assets/images/logo_dinas_pertanian.png" alt="logo" height="50"/>
                                                    </h3>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <address>
                                                            <strong>Pemesan:</strong><br>
                                                            <?php echo $pemesan['nama']; ?><br>
                                                            <?php echo $pemesan['alamat']; ?><br>
                                                            <?php echo $pemesan['no_hp']; ?><br>
                                                        </address>
                                                    </div>
                                                    <div class="col-6 text-end">
                                                        <address>
                                                            <b>Tanggal Pemesanan</b><br>
                                                            <?php echo date('d F Y', strtotime($transaksi['created_at'])); ?><br>
                                                            <b>Tanggal Pengambilan</b><br>
                                                            <?php echo date('d F Y', strtotime($transaksi['tgl_pengambilan'])); ?><br>
                                                        </address>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6 mt-4">
                                                    </div>
                                                    <div class="col-6 mt-4 text-end">
                                                        <address>
                                                            <strong>Status:</strong><br>
                                                            <?php
                                                            switch ($transaksi['status']) {
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
                                                            <br><br>
                                                        </address>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="row">
                                            <div class="col-12">
                                                <div>
                                                    <div class="p-2">
                                                        <h3 class="font-size-16"><strong>Order summary</strong></h3>
                                                    </div>
                                                    <div class="">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="table-active">Produk</th>
                                                                        <th class="table-active">Harga</th>
                                                                        <th class="table-active">Jml</th>
                                                                        <th class="table-active">Total</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    foreach ($pesanan as $key => $value) {
                                                                    ?>
                                                                    <tr>
                                                                        <td class="namaPerItem"><?php echo $value['produk']['nama']; ?></td>
                                                                        <td class="hargaPerItem">Rp. <?php echo number_format($value['harga']); ?></td>
                                                                        <td><?php echo $value['qty']; ?></td>
                                                                        <td class="totalPerItem"><?php echo 'Rp. '.number_format($value['harga']*$value['qty']); ?></td>
                                                                    </tr>
                                                                    <?php 
                                                                    }
                                                                    ?>
                                                                </tbody>
                                                                <tfoot class="fw-bold">
                                                                    <tr>
                                                                        <td colspan="3">Total</td>
                                                                        <td><?php echo 'Rp. '.number_format($transaksi['total']); ?></td>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
        
                                                        <div class="d-print-none">
                                                            <div class="float-end">
                                                                <!-- <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light"><i class="fa fa-print"></i></a> -->
                                                                <?php
                                                                if($transaksi['status'] == '1') {
                                                                ?>
                                                                    <a href="<?php echo base_url(); ?>admin/transaksi/updateStatus?id=<?php echo $transaksi['id']; ?>&status=2" class="btn btn-primary waves-effect waves-light">Diambil</a>
                                                                <?php
                                                                }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
        
                                            </div>
                                        </div> <!-- end row -->
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->