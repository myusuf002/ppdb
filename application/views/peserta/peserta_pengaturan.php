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
                            <button type="button" class="close py-0 px-2 my-2" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div id="body-alert-success" class="row mx-1 my-3">
                    <div class="col-md-12 py-2">
                        <div class="alert small alert-success alert-dismissible fade show" role="success">
                            <span id="text-alert-success">asa</span>
                            <button type="button" class="close py-0 px-2 my-2" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Schedule Section -->
                <div class="row mx-1 mt-5 mb-3 pb-1">
                    <div class="col-md-12 py-0">
                    <!-- Form Registration -->
                    <form id="form-pengaturan" class="form row">
                        <input type="text" name="id_data_diri" value="<?= $data_diri_peserta['id_data_diri']; ?>" hidden>
                        <!-- Data Diri Section -->
                        <section class="col-md-12">
                            <div class="form-row my-2">
                                <div class="col-md-12 px-3">
                                    <span class="text-danger font-weight-bold">Ubah Nomor HP</span>
                                    <input name="no_hp_data_diri" type="number" class="form-control form-input pb-2 mb-3" value="<?= $data_diri_peserta['no_hp_data_diri']; ?>" required>
                                </div>
                            </div>
                            <div class="form-row my-2">
                                <div class="col-md-12 px-3">
                                    <span class="text-danger font-weight-bold">Ubah Email</span>
                                    <input name="email_peserta" type="text " class="form-control form-input pb-2 mb-3" value="<?= $peserta['email_peserta']; ?>" required>
                                </div>
                            </div>
                            <div class="form-row my-2">
                                <div class="col-md-6 px-3">
                                <span class="text-danger font-weight-bold">Ubah Password</span>
                                </div>
                                <div class="col-md-6 px-3">
                                <span id="status_password" class="small text-danger"></span>
                                </div>
                                <div class="col-md-6 px-3">
                                    <input id="password_baru" name="password_peserta" type="password" class="form-control form-input pb-2 mb-3" placeholder="Password Baru">
                                </div>
                                <div class="col-md-6 px-3">
                                    <input id="konfirmasi_password" type="password" class="form-control form-input pb-2 mb-3" placeholder="Konfirmasi Password">                                    
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
        $('#password_baru, #konfirmasi_password').on('keyup', function () {
            if ($('#password_baru').val() == $('#konfirmasi_password').val()) {
                $('#status_password').html('xo');
            } else 
                $('#status_password').html('Passwords do not match.');
        });
        $("#body-alert-danger").hide();
        $("#body-alert-success").hide();
        /* Get from elements values */
        $("#form-pengaturan").submit(function(event){
            if ($('#form-pengaturan')[0].checkValidity()){
                // Prevent default posting of form - put here to work in case of errors
                event.preventDefault();
                var values = $(this).serialize();

                $.ajax({
                    url: "<?= site_url('c_peserta_pengaturan/update') ?>",
                    type: "post",
                    data: values ,
                    beforeSend: function() {
                        var image = '<img class="loading-button" src="' +
                            '<?= base_url("assets/img/loading/loading-button.gif"); ?>' +
                            '" />';
                        $("#btnForm").html(image);
                        $("#body-alert-danger").hide();
                        $("#body-alert-success").hide();
                    },
                    success: function (response) {
                        var data_json = jQuery.parseJSON(response);
                        $("#btnForm").html("Simpan");
                        if (data_json.tipe == 'error'){
                            $("#text-alert-danger").html(data_json.msg);
                            $("#body-alert-danger").show();
                        
                        }else if (data_json.tipe == 'success'){
                            $("#text-alert-success").html(data_json.msg);
                            $("#body-alert-success").show();
                        
                        }
                    },
                    error: function() {
                        $("#text-alert-danger").html("Server Error");
                        $("#body-alert-danger").show();
                    }
                });
            }

        });
    </script>
</body>
</html>