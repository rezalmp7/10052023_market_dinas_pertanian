<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Pesanan #<?php echo $transaksi['kode_pesanan']; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Spectral:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
</head>
<body>
    <script>
        window.print();
    </script>
    <h3 class="col-12 my-3 mb-5 p-0" style="font-family: Consolas, monaco, monospace;">#<?php echo $transaksi['kode_pesanan']; ?></h3>
    <div class="row">
        <div class="col-6">
            <address>
                <strong>Pemesan:</strong><br>
                <?php echo $user['nama']; ?><br>
                <?php echo $user['alamat']; ?><br>
                <?php echo $user['no_hp']; ?><br>
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
    <div class="col-12 m-0 p-0">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
</body>
</html>