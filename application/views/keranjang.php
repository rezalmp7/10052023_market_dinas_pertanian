
        <!-- CONTENT -->
        <div class="col-12 m-0 p-0 content">
            <div class="row p-0 my-5 justify-content-center">
                <div class="card p-4 col-8">
                    <h3 class="col-12 my-3 mb-5 p-0">Keranjang</h3>
                    <div class="col-12 m-0 p-0">
                        <form method="POST" action="<?php echo base_url(); ?>pesanan/store">
                            <div class="col-md-12">
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
                                        foreach ($keranjang as $key => $value) {
                                        ?>
                                        <tr>
                                            <input type="hidden" class="idPerItem" name="id[]" value="<?php echo $value['id']; ?>">
                                            <input type="hidden" class="hargaPerItemInput" name="harga[]" value="<?php echo $value['produk']['harga']; ?>">
                                            <td class="namaPerItem"><?php echo $value['produk']['nama']; ?></td>
                                            <td class="hargaPerItem">Rp. <?php echo number_format($value['produk']['harga']); ?></td>
                                            <td><input type="number" style="width: 100px" class="form-control qtyPerItem" value="<?php echo $value['qty']; ?>" onkeyup="changeQty(<?php echo $key; ?>, this)" name="qty[]"></td>
                                            <td class="totalPerItem"></td>
                                        </tr>
                                        <?php 
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-12 my-4 col-centered rounded p-4 p-footer-gray bg-light">
                                    <h5 class="text-dark">Total Belanja</h5>
                                    <table class="table">
                                        <thead>
                                            <tr></tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><b class="">Total</b></td>
                                                <td class="text-dark" id="totalBelanja"></td>
                                            </tr>
                                            <tr>
                                                <td><b class="">Tanggal Pengambilan</b></td>
                                                <td class="text-dark" id="totalBelanja">
                                                    <input type="date" class="form-control" name="tgl_pengambilan">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                    <div class="col-12 row m-0 p-0">
                                        <div class="col-6 p-2">
                                            <a href="<?php echo base_url(); ?>bibit" class="btn btn-outline-primary col-12 d-block mt-4">Lanjut Belanja</a>
                                        </div>
                                        <div class="col-6 p-2">
                                            <button type="submit" class="btn btn-success col-12 d-block mt-4">Proses</button>
                                        </div>
                                    </div>
                                </div>
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