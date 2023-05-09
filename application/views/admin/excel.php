<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap CSS -->
</head>
<body>
    <?php
        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=Laporan.xls");
    ?>
    <div>
        <table border="1">
            <thead>
                <tr>
                    <th colspan="5" style="font-size: 20px">Laporan <?php echo (isset($post['start'])) ? $post['start']."-".$post['end'] : "all"; ?></th>
                </tr>
                <tr>
                    <th>Kode Pesanan</th>
                    <th>Pemesan</th>
                    <th>Tanggal Pengambilan</th>
                    <th>Total Pembayaran</th>
                    <th>Status</th>
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
                </tr>
                <?php 
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>