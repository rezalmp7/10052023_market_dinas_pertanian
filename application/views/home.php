        <!-- CONTENT -->
        <div class="col-12 m-0 p-0 content">
            <div class="col-12 p-0 m-0">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                            aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                            aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6"
                            aria-label="Slide 7"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="col-12 m-0 p-0 background-corousel vh-100" style="background-image: url(<?php echo base_url(); ?>assets/images/dinas/carousel-1.jpeg);" />
                        </div>
                        <div class="carousel-item">
                            <img class="col-12 m-0 p-0 background-corousel vh-100" style="background-image: url(<?php echo base_url(); ?>assets/images/dinas/carousel-2.jpg);" />
                        </div>
                        <div class="carousel-item">
                            <img class="col-12 m-0 p-0 background-corousel vh-100" style="background-image: url(<?php echo base_url(); ?>assets/images/dinas/carousel-3.jpg);" />
                        </div>
                        <div class="carousel-item">
                            <img class="col-12 m-0 p-0 background-corousel vh-100" style="background-image: url(<?php echo base_url(); ?>assets/images/dinas/carousel-4.jpg);" />
                        </div>
                        <div class="carousel-item">
                            <img class="col-12 m-0 p-0 background-corousel vh-100" style="background-image: url(<?php echo base_url(); ?>assets/images/dinas/carousel-5.jpg);" />
                        </div>
                        <div class="carousel-item">
                            <img class="col-12 m-0 p-0 background-corousel vh-100" style="background-image: url(<?php echo base_url(); ?>assets/images/dinas/carousel-6.jpg);" />
                        </div>
                        <div class="carousel-item">
                            <img class="col-12 m-0 p-0 background-corousel vh-100" style="background-image: url(<?php echo base_url(); ?>assets/images/dinas/carousel-7.jpg);" />
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-12 m-0 p-5">
                <div class="col-12 m-0 p-5">
                    <h3 class="fw-bold fs-4">Bibit Kelapa Sawit</h3>
                    <div class="col-12 m-0 mt-5 p-0">
                        <?php
                        foreach ($bibits as $key => $value) {
                        ?>
                        <div class="col-12 mb-3 p-0 shadow rounded">
                            <div class="col-12 m-0 p-0 row">
                                <div class="col-auto p-3">
                                    <div class="col-12 m-0 rounded background-corousel" style="background-image: url(<?php echo base_url(); ?>assets/images/bibit/<?php echo $value['gambar']; ?>); height: 150px; width: 250px;"></div>
                                </div>
                                <div class="col m-0 p-3 fs-7 fm-inter">
                                    <table>
                                        <tr>
                                            <td class="fw-semibold pe-5 py-1">Produsen Benih</td>
                                            <td>: <?php echo $value['produsen']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="fw-semibold pe-5 py-1">Jumlah Benih</td>
                                            <td>: <?php echo number_format($value['jumlah']).' '.$value['satuan']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="fw-semibold pe-5 py-1">Waktu Semai</td>
                                            <td>: <?php echo date('d/m/Y', strtotime($value['waktu_semai'])); ?></td>
                                        </tr>
                                    </table>
                                    <div class="col-12 row m-0 p-0">
                                        <div class="col-6 p-2">
                                            <a href="<?php echo base_url(); ?>keranjang/add?type=bibit&id=<?php echo $value['id']; ?>" class="btn btn-success col-12 d-block mt-4">Simpan Ke Keranjang</a>
                                        </div>
                                        <div class="col-6 p-2">
                                            <a href="<?php echo base_url(); ?>bibit/show/<?php echo $value['id']; ?>" class="btn btn-outline-primary col-12 d-block mt-4">Detail</a>
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
                <div class="col-12 m-0 p-5">
                    <h3 class="fw-bold fs-4">Pupuk</h3>
                    <div class="col-12 m-0 mt-5 p-0">
                        <?php
                        foreach ($pupuks as $key => $value) {
                        ?>
                        <div class="col-12 mb-3 p-0 shadow rounded">
                            <div class="col-12 m-0 p-0 row">
                                <div class="col-auto p-3">
                                    <div class="col-12 m-0 rounded background-corousel"
                                        style="background-image: url(<?php echo base_url(); ?>assets/images/pupuk/<?php echo $value['gambar']; ?>); height: 150px; width: 250px;">
                                    </div>
                                </div>
                                <div class="col m-0 p-3 fs-7 fm-inter">
                                    <table>
                                        <tr>
                                            <td class="fw-semibold pe-5 py-1">Nama Pupuk</td>
                                            <td>: <?php echo $value['nama']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="fw-semibold pe-5 py-1">Jumlah</td>
                                            <td>: <?php echo number_format($value['jumlah']).' '.$value['satuan']; ?></td>
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