                <div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Edit Admin</h6>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/dashboard">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/admin">Data Admin</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <form method="POST" action="<?php echo base_url(); ?>admin/bibit/update/<?php echo $bibit['id']; ?>" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label class="form-label">Ganti Gambar Bibit <small class="text-danger">[ jpg | jpeg | png ]</small></label><br>
                                        <img class="my-1" style="height: 100px" src="<?php echo base_url(); ?>assets/images/bibit/<?php echo $bibit['gambar']; ?>" />
                                        <input type="file" id="input_gambar_bibit" name="gambar" class="filestyle" data-buttonname="btn-secondary" onChange='getoutput(this)' placeholder="Upload Gambar Bibit">
                                        <small class="text-danger" id="alert_input_gambar_bibit"></small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Produsen Bibit</label>
                                        <div class="col-sm-12">
                                            <input class="form-control" name="produsen" type="text" placeholder="PT. Makmur Jaya" value="<?php echo $bibit['produsen']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Jumlah</label>
                                        <div class="col-sm-12">
                                            <input class="form-control" name="jumlah" type="number" placeholder="1231" value="<?php echo $bibit['jumlah']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Satuan</label>
                                        <div class="col-sm-12">
                                            <input class="form-control" name="satuan" type="text" placeholder="Biji" value="<?php echo $bibit['satuan']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Waktu Semai</label>
                                        <div class="input-group" id="datepicker2">
                                            <input type="text" name="waktu_semai" class="form-control" placeholder="dd M yyyy"
                                                data-date-format="dd M yyyy" data-date-container='#datepicker2' data-provide="datepicker"
                                                data-date-autoclose="true" value="<?php echo $bibit['waktu_semai']; ?>">

                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                        </div><!-- input-group -->
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="input-currency">Harga</label>
                                        <input id="input-currency" name="harga" value="<?php echo $bibit['harga']; ?>" class="form-control input-mask text-start" data-inputmask="'alias': 'currency', 'groupSeparator': ',', 'digits': 0, 'digitsOptional': false, 'prefix': 'Rp ', 'placeholder': 'R...'" im-insert="true" style="text-align: right;">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="input-currency">Deskripsi</label>
                                        <textarea class="form-control" name="deskripsi" type="number" id="editor" placeholder="Deskripsi Produk..."><?php echo $bibit['deskripsi']; ?></textarea>
                                    </div>
                                    <div class="clearfix mb-3">
                                        <button type="submit" class="btn btn-success btn-sm btn-sm waves-effect waves-light float-end"><i class="fas fa-plus-circle"></i> Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <script>
                    $("#datatable").DataTable();

                    $(document).ready(function(){$(".input-mask").inputmask()});
                    
                    function getoutput(el) {
                        let filePath = el.files[0].type;
                        let extension = filePath.split("/").slice(-1).pop();
                        console.log(extension);
                        console.log(extension != "jpg" && extension != "jpeg" && extension != "png");
                        if(extension != "jpg" && extension != "jpeg" && extension != "png") {
                            console.log("Hapus Input");
                            $("#input_gambar_bibit").val('');
                            $("#alert_input_gambar_bibit").text("Gambar Harus berformat jpg | jpeg | png")
                        }
                    }

                    ClassicEditor.defaultConfig = {
                        toolbar: {
                            items: [
                            'heading',
                            '|',
                            'bold',
                            'italic',
                            '|',
                            'bulletedList',
                            'numberedList',
                            '|',
                            'insertTable',
                            '|',
                            'undo',
                            'redo'
                            ]
                        },
                        image: {
                            toolbar: [
                            'imageStyle:full',
                            'imageStyle:side',
                            '|',
                            'imageTextAlternative'
                            ]
                        },
                        table: {
                            contentToolbar: [ 'tableColumn', 'tableRow', 'mergeTableCells' ]
                        },
                        language: 'en'
                    }
                    ClassicEditor
                        .create( document.querySelector( '#editor' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>