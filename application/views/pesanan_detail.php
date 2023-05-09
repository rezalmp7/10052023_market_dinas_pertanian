
        <!-- CONTENT -->
        <div class="col-12 m-0 p-0 content">
            <div class="row p-0 my-5 justify-content-center">
                <div class="card p-4 col-8">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>pesanan">Pesanan</a></li>
                            <li class="breadcrumb-item active" style="font-family: Consolas, monaco, monospace;" aria-current="page">#<?php echo $transaksi['kode_pesanan']; ?></li>
                        </ol>
                    </nav>
                    <h3 class="col-12 my-3 mb-5 p-0" style="font-family: Consolas, monaco, monospace;">#<?php echo $transaksi['kode_pesanan']; ?></h3>
                    <div class="col-12 m-0 p-0">
                        <div class="col-md-12 mt-2 mb-5">
                            <table class="table table-cart">
                                <tr>
                                    <td class="namaPerItem">Tanggal Pengambilan</td>
                                    <td class="hargaPerItem"><?php echo date('d F Y', strtotime($transaksi['tgl_pengambilan'])); ?></td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td class="totalPerItem">
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
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-12 mt-5">
                            <table class="table table-cart">
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
                                <tfoot>
                                    <tr>
                                        <td colspan="3">Total</td>
                                        <td><?php echo 'Rp. '.number_format($transaksi['total']); ?></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>