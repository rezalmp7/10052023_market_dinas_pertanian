
        <!-- CONTENT -->
        <div class="col-12 m-0 p-0 content">
            <div class="row p-0 my-5 justify-content-center">
                <div class="card p-4 col-8">
                    <h3 class="col-12 my-3 mb-5 p-0">Pesanan</h3>
                    <div class="col-12 m-0 p-0">
                        <form method="POST" action="<?php echo base_url(); ?>pesanan/store">
                            <div class="col-md-12">
                                <table class="table table-cart">
                                        <thead>
                                        <tr>
                                            <th class="table-active">Kode Pesanan</th>
                                            <th class="table-active">Tgl Pengambilan</th>
                                            <th class="table-active">Total</th>
                                            <th class="table-active">Status</th>
                                            <th class="table-active"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($transaksi as $key => $value) {
                                        ?>
                                        <tr>
                                            <td style="font-family: Consolas, monaco, monospace;">#<?php echo $value['kode_pesanan']; ?></td>
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
                                                <a href="<?php echo base_url(); ?>pesanan/show/<?php echo $value['id']; ?>" class="btn btn-sm btn-primary">Info</a>
                                            </td>
                                        </tr>
                                        <?php 
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            total_all();
            function total_all() {
                let namaPerItem = document.getElementsByClassName("namaPerItem");
                for (let index = 0; index < namaPerItem.length; index++) {
                    console.log(index);
                    
                    let hargaPerItem = document.getElementsByClassName("hargaPerItem")[index].textContent;
                    let arrayNumberHarga = hargaPerItem.match(/\d/g);
                    let numberHarga = arrayNumberHarga.join("");

                    let totalPerItem = document.getElementsByClassName("totalPerItem")[index];
                    let qtyPerItem = document.getElementsByClassName("qtyPerItem")[index].value;

                    let totalHargaPerItem = qtyPerItem * numberHarga;

                    totalPerItem.textContent = "Rp. "+totalHargaPerItem.toLocaleString('en-US');
                }
                updateTotalBelanja();
                // console.log(namaPerItem);
            }

            function changeQty(index, el) {
                console.log(index);
                let idPerItem = document.getElementsByClassName("idPerItem")[index].value;
                console.log(idPerItem);
                let hargaPerItem = document.getElementsByClassName("hargaPerItem")[index].textContent;
                let totalPerItem = document.getElementsByClassName("totalPerItem")[index];
                let arrayNumberHarga = hargaPerItem.match(/\d/g);
                let numberHarga = arrayNumberHarga.join("");
                
                let totalHargaPerItem = el.value * numberHarga;

                totalPerItem.textContent = "Rp. "+totalHargaPerItem.toLocaleString('en-US');

                update_dataBase(idPerItem, el.value);
                updateTotalBelanja();
            }

            function updateTotalBelanja() {
                let total = 0;
                let totalBelanjaEl = document.getElementById("totalBelanja");
                let namaPerItem = document.getElementsByClassName("namaPerItem");
                for (let index = 0; index < namaPerItem.length; index++) {
                    console.log(index);
                    
                    let hargaPerItem = document.getElementsByClassName("hargaPerItem")[index].textContent;
                    let arrayNumberHarga = hargaPerItem.match(/\d/g);
                    let numberHarga = arrayNumberHarga.join("");

                    let totalPerItem = document.getElementsByClassName("totalPerItem")[index];
                    let qtyPerItem = document.getElementsByClassName("qtyPerItem")[index].value;

                    let totalHargaPerItem = qtyPerItem * numberHarga;

                    total += parseInt(totalHargaPerItem);
                }
                totalBelanjaEl.textContent = "Rp. "+total.toLocaleString('en-US');
            }

            function update_dataBase(id, qty) {
                console.log('<?php echo base_url(); ?>/keranjang/updateQty?id='+id+'&qty='+qty);
                fetch('<?php echo base_url(); ?>/keranjang/updateQty?id='+id+'&qty='+qty, {
                    method: 'GET',
                    headers: {
                        'Content-type': 'application/json; charset=UTF-8',
                    }
                })
            }
        </script>