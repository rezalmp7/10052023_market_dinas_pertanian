
        <!-- CONTENT -->
        <div class="col-12 m-0 p-0 content">
            <div class="col-12 m-0 p-5">
                <div class="col-12 m-0 p-5">
                    <div class="col-12 m-0 mt-5 p-0 search-produk">
                        <form method="GET" action="<?php echo base_url(); ?>pupuk">
                            <div class="col-12 m-0 p-0 row bg-white rounded-pill">
                                <div class="col m-0 p-0 ps-3">
                                    <input class="col-12" type="text" placeholder="Search..." name="search" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ""; ?>"  />
                                </div>
                                <div class="col-auto m-0 p-0">
                                    <button class="px-5" type="submit"><span class="iconify fs-3"
                                            data-icon="material-symbols:search-rounded"></span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 m-0 mt-5 p-0">
                        <?php
                        foreach ($pupuks as $key => $value) {
                        ?>
                        <div class="col-12 mb-3 p-0 shadow rounded">
                            <div class="col-12 m-0 p-0 row">
                                <div class="col-auto p-3">
                                    <div class="col-12 m-0 rounded background-corousel"
                                        style="background-image: url(<?php echo base_url(); ?>assets/images/pupuk/<?php echo $value['gambar']; ?>); height: 190px; width: 350px;">
                                    </div>
                                </div>
                                <div class="col m-0 p-3 fs-7 fm-inter">
                                    <table>
                                        <tr>
                                            <td class="fw-semibold pe-5 py-1">Nama</td>
                                            <td>: <?php echo $value['nama']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="fw-semibold pe-5 py-1">Jumlah Benih</td>
                                            <td>: <?php echo number_format($value['jumlah']).' '.$value['satuan']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="fw-semibold pe-5 py-1 fs-2" colspan="2"><span class="fw-light fs-5">Rp </span><?php echo number_format($value['harga']).' / '.$value['satuan']; ?></td>
                                        </tr>
                                    </table>
                                    <div class="col-12 row m-0 p-0">
                                        <div class="col-6 p-2">
                                            <a href="<?php echo base_url(); ?>keranjang/add?type=pupuk&id=<?php echo $value['id']; ?>" class="btn btn-success col-12 d-block mt-4">Simpan Ke Keranjang</a>
                                        </div>
                                        <div class="col-6 p-2">
                                            <a href="<?php echo base_url(); ?>pupuk/show/<?php echo $value['id']; ?>" class="btn btn-outline-primary col-12 d-block mt-4">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTENT -->