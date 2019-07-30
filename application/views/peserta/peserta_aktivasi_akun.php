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

        <div class="row justify-content-center text-center my-5">
            <div class="col-md-12">
                <div id="body-alert-danger" class="row mx-1">
                    <div class="col-md-12 py-2">
                        <div class="alert small alert-danger alert-dismissible fade show" role="alert">
                            <span id="text-alert-danger"></span>
                            <button type="button" class="close py-0 px-2 my-2" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div id="body-alert-success" class="row mx-1">
                    <div class="col-md-12 py-2">
                        <div class="alert small alert-success alert-dismissible fade show" role="success">
                            <span id="text-alert-success"></span>
                            <button type="button" class="close py-0 px-2 my-2" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div> 
            <?php if (!$peserta['status_aktivasi_akun_peserta']){ ?> 
                <div class="col-md-11 mx-auto border">
                    <form id="form-aktivasi" class="form">
                        <div class="form-row my-2">
                            <div class="col-md-12 text-left">
                                <span class="small text-secondary">Aktivasi Akun</span>
                            </div>
                            <div class="col-md-10 mx-0">
                                <input name="kode_token" type="text text-center" class="form-control form-input pb-2 mb-3" placeholder="Token Pendaftaran" required>
                            </div>
                            <div class="col-md-2 mx-0 text-right">
                            <button id="btnForm" type='submit' class="btn btn-danger">Aktivasi</button>
                            </div>
                        </div>
                    </form>
                </div>
            <?php } else{ ?>
                <div class="col-md-11 mx-auto border border-success text-center py-5">
                    <h3>Akun anda telah teraktivasi.</h3>
                </div>
            <?php } ?>
        </div>

        <div class="row p-3">
            <div class="col-md-12">
                <h6 class="font-weight-bold text-danger">Tata Cara Aktivasi Akun</h6>
                <hr class="m-0">
                <div class="row">
                    <div class="col-md-4 my-3">
                    <span class="font-weight-bold">Transfer Bank Mandiri</span>
                    <p class="text-justify text-secondary small">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut.
                    </p>
                    </div>

                    <div class="col-md-4 my-3">
                    <span class="font-weight-bold">Transfer Bank BNI</span>
                    <p class="text-justify text-secondary small">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut.
                    </p>
                    </div>

                    <div class="col-md-4 my-3">
                    <span class="font-weight-bold">Langsung PPDB Sekolah</span>
                    <p class="text-justify text-secondary small">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed.
                    </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Page JS  -->
    <script>
        $("#body-alert-danger").hide();
        $("#body-alert-success").hide();
        /* Get from elements values */
        $("#form-aktivasi").submit(function(event){
            if ($('#form-aktivasi')[0].checkValidity()){
                // Prevent default posting of form - put here to work in case of errors
                event.preventDefault();
                var values = $(this).serialize();

                $.ajax({
                    url: "<?= site_url('c_peserta_aktivasi_akun/activate') ?>",
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
                        $("#btnForm").html("Aktivasi");
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