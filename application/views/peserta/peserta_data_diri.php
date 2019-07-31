<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <!-- Body Section -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div id="body-alert-danger" class="row mx-1 my-3">
                    <div class="col-md-12 py-2">
                        <div class="alert small alert-danger alert-dismissible fade show" role="alert">
                            <span id="text-alert-danger"></span>
                        </div>
                    </div>
                </div>
                <div id="body-alert-success" class="row mx-1 my-3">
                    <div class="col-md-12 py-2">
                        <div class="alert small alert-success alert-dismissible fade show" role="success">
                            <span id="text-alert-success"></span>
                        </div>
                    </div>
                </div>
                <!-- Schedule Section -->
                <div class="row mx-1 my-3">
                
                    <div class="col-md-12 py-0">
                    <!-- Form Registration -->
                    <form id="form-data-diri" class="form row needs-validation" >
                    <input type="text" name="id_data_diri" value="<?= $data_diri_peserta['id_data_diri']; ?>" hidden>
                        <!-- Data Diri Section -->
                        <section class="col-md-12">
                            <div class="form-row my-2">
                                <div class="col-md-6 px-3 text-left ">
                                    <span class="small text-secondary">Jalur Pendaftaran</span>
                                    <input type="text" class="form-control form-input pb-2 mb-3 bg-light" value="Reguler" readonly>
                                </div>
                                <div class="col-md-6 px-3 text-left">
                                    <span class="small text-secondary">Sekolah</span>
                                    <input type="text" class="form-control form-input pb-2 mb-3 bg-light" value="Sekolah Menengah Atas" readonly>
                                </div>
                            </div>
                            <div class="form-row my-2">
                                <div class="col-md-6 px-3">
                                    <span class="small text-secondary">Nama Lengkap</span>
                                    <input type="text" class="form-control form-input pb-2 mb-3 bg-light" value="<?= $data_diri_peserta['nama_lengkap_data_diri']; ?>" readonly>
                                </div>
                                <div class="col-md-6 px-3">
                                    <span class="small text-secondary">Jenis Kelamin</span>
                                    <input type="text   " class="form-control form-input pb-2 mb-3 bg-light" value="<?= $data_diri_peserta['jenis_kelamin_data_diri']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-row my-2">
                                <div class="col-md-6 px-3">
                                    <span class="small text-secondary">NIK</span>
                                    <input name="nik_data_diri" type="text" class="form-control form-input pb-2 mb-3" placeholder="Bisa dilihat pada KTP atau Kartu Keluarga" value="<?= $data_diri_peserta['nik_data_diri']; ?>" required>
                                </div>
                                <div class="col-md-6 px-3">
                                    <span class="small text-secondary">NISN</span>
                                    <input type="number" class="form-control form-input pb-2 mb-3 bg-light" value="<?= $data_diri_peserta['nisn_data_diri']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-row my-2">
                                <div class="col-md-6 px-3 text-left">
                                    <span class="small text-secondary">Tempat Lahir</span>
                                    <input name="tempat_lahir_data_diri" type="text" class="form-control form-input pb-2 mb-3" placeholder="Kota Tempat Lahir" value="<?= $data_diri_peserta['tempat_lahir_data_diri']; ?>" required>
                                </div>
                                <div class="col-md-6 px-3 text-left ">
                                    <span class="small text-secondary">Tanggal Lahir</span>
                                    <input type="text" class="form-control form-input pb-2 mb-3 bg-light" value="<?=
                                    date("d-m-Y", strtotime($data_diri_peserta['tgl_lahir_data_diri']   )); ?>" readonly>
                                </div>
                            </div>
                            <div class="form-row my-2">
                                <div class="col-md-12 px-3">
                                    <span class="small text-secondary">Alamat Rumah</span>
                                    <textarea name="alamat_rumah_data_diri" class="form-control form-input pb-2 mb-3" rows=2 required><?= $data_diri_peserta['alamat_rumah_data_diri']; ?></textarea>
                                </div>
                            </div>
                        </section>
                        <!-- End Data Diri Section -->

                        <!-- Submit Section -->
                        <section class="col-md-12 text-center">
                            <button id="btnForm" type='submit' class="btn btn-danger px-5">Simpan</button>
                        </section>
                        <!-- End Submit Section -->

                    </form>
                    <!-- End Form Registration -->
                    </div>

                </div>
                <!-- End Schedule Section -->

            </div>
        </div>

    </div>

    <!-- Page JS  -->
    <script>
        $("#body-alert-danger").hide();
        $("#body-alert-success").hide();
        /* Get from elements values */
        $("#form-data-diri").submit(function(event){
            if ($('#form-data-diri')[0].checkValidity()){
                // Prevent default posting of form - put here to work in case of errors
                event.preventDefault();
                var values = $(this).serialize();

                $.ajax({
                    url: "<?= site_url('c_peserta_data_diri/update') ?>",
                    type: "post",
                    data: values ,
                    beforeSend: function() {
                        var image = '<img class="loading-button" src="' +
                            '<?= base_url("assets/img/loading/loading-button.gif"); ?>' +
                            '" />';
                        $("#btnForm").html(image);
                    },
                    success: function (response) {
                        var data_json = jQuery.parseJSON(response);
                        $("#btnForm").html("Simpan");
                        if (data_json.tipe == 'error'){
                            $("#body-alert-success").hide();
                            $("#text-alert-danger").html(data_json.msg);
                            $("#body-alert-danger").show();
                            
                        
                        }else if (data_json.tipe == 'success'){
                            $("#body-alert-danger").hide();
                            $("#text-alert-success").html(data_json.msg);
                            $("#body-alert-success").show();
                        }
                    },
                    error: function() {
                        $("#body-alert-success").hide();
                        $("#text-alert-danger").html("Server Error");
                        $("#body-alert-danger").show();
                    }
                });
            }

        });
    </script>
</body>
</html>