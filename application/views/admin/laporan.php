                <div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Laporan</h6>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/dashboard">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Laporan</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="col-12 clearfix my-3">
                                    <form method="GET" class="row col-6" action="<?php echo base_url(); ?>admin/laporan">
                                        <select name="bulan" class="form-select form-control-sm col mx-1" aria-label="Default select example" required>
                                            <option selected="">-- Pilih Bulan --</option>
                                            <option value="1" <?php if($bulan == 1) echo "selected"; ?>>Januari</option>
                                            <option value="2" <?php if($bulan == 2) echo "selected"; ?>>Februari</option>
                                            <option value="3" <?php if($bulan == 3) echo "selected"; ?>>Maret</option>
                                            <option value="4" <?php if($bulan == 4) echo "selected"; ?>>April</option>
                                            <option value="5" <?php if($bulan == 5) echo "selected"; ?>>Mei</option>
                                            <option value="6" <?php if($bulan == 6) echo "selected"; ?>>Juni</option>
                                            <option value="7" <?php if($bulan == 7) echo "selected"; ?>>Juli</option>
                                            <option value="8" <?php if($bulan == 8) echo "selected"; ?>>Agustus</option>
                                            <option value="9" <?php if($bulan == 9) echo "selected"; ?>>September</option>
                                            <option value="10" <?php if($bulan == 10) echo "selected"; ?>>Oktober</option>
                                            <option value="11" <?php if($bulan == 11) echo "selected"; ?>>November</option>
                                            <option value="12" <?php if($bulan == 12) echo "selected"; ?>>Desember</option>
                                        </select>
                                        <select name="tahun" class="form-select form-control-sm col mx-1" aria-label="Default select example" required>
                                            <option selected="">-- Pilih Tahun --</option>
                                            <?php
                                            for ($i=2022; $i <= 2040; $i++) { 
                                            ?>5
                                            <option value="<?php echo $i; ?>" <?php if($tahun == $i) echo "selected"; ?>><?php echo $i; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                        <button class="col btn btn-sm btn-primary mx-1" type="submit">Filter</button>
                                    </form>
                                    <form method="POST" action="<?php echo base_url(); ?>admin/laporan/cetakExcel">
                                        <input type="hidden" name="bulan" value="<?php echo $bulan; ?>">
                                        <input type="hidden" name="tahun" value="<?php echo $tahun; ?>">
                                        <button type="submit" class="btn btn-sm btn-primary float-end">Cetak Excel</button>
                                    </form>
                                </div>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
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
                        </div>
                        <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <script>
                    $("#datatable").DataTable();
                </script>