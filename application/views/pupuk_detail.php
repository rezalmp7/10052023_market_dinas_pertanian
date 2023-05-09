
        <!-- CONTENT -->
        <div class="col-12 m-0 p-0 content">
            <div class="col-12 m-0 p-5 pt-3">
                <div class="col-12 m-0 p-5">
                    <div class="col-12 m-0 mt-5 p-0">
                        <div class="col-12 m-0 p-0 row">
                            <div class="col-6 p-3">
                                <div class="col-12 m-0 rounded background-corousel"
                                    style="background-image: url(<?php echo base_url(); ?>assets/images/pupuk/<?php echo $pupuk['gambar']; ?>); height: 400px;">
                                </div>
                            </div>
                            <div class="col m-0 p-3 fs-7 fm-inter">
                                <h3 class="fw-semibold mb-4"><?php echo $pupuk['nama']; ?></h3>
                                <table class="my-2">
                                    <tr>
                                        <td class="fw-semibold pe-5 py-1">Jumlah</td>
                                        <td>: <?php echo number_format($pupuk['jumlah']).' '.$pupuk['satuan']; ?></td>
                                    </tr>
                                </table>
                                <div class="col-12 m-0 p-0 fw-medium">
                                    <?php echo $pupuk['deskripsi']; ?>
                                </div>
                                <div class="col-12 m-0 p-0 mt-5 pt-5">
                                    <div class="fs-1 fw-semibold">
                                        <span class="fw-normal fs-7">Rp</span> <?php echo number_format($pupuk['harga']).' / '.$pupuk['satuan']; ?>
                                    </div>
                                    <div class="col-12 row m-0 p-0">
                                        <a href="<?php echo base_url(); ?>keranjang/add?type=pupuk&id=<?php echo $pupuk['id']; ?>" class="btn btn-success col-12 d-block mt-4">
                                            Simpan Ke Keranjang
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTENT -->