<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <!-- Page CSS -->
    <link href="<?= base_url('assets/css/yayasan_jenjang_pendidikan_daftar.css'); ?>" rel="stylesheet">
</head>
<body>
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

    <?php if ($jenjang['status_jenjang_pendidikan']): ?>
    <div class="col-md-12">
        <!-- Form Registration -->
        <form id="form-validation" class="form row" novalidate>
            <!-- Data Diri Section -->
            <section class="col-md-6">
                <h6 class="text-left">Data Diri</h6>
                <div class="form-row my-2">
                    <div class="col-md-6 px-3">
                        <input name="nama_lengkap_data_diri" type="text"
                               class="form-control form-input pb-2 mb-3" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="col-md-6 px-3">
                        <input name="nisn_data_diri" type="number"
                               class="form-control form-input pb-2 mb-3" placeholder="NISN" required number>
                    </div>
                </div>
                <div class="form-row my-2">
                    <div class="col-md-6 px-3 text-left ">
                        <span class="small text-secondary">Tanggal Lahir</span>
                        <input name="tgl_lahir_data_diri" type="date"
                               class="form-control form-input pb-2 mb-3 datepicker-here" data-language='en' data-date-format="dd/mm/yyyy" id="datepicker" required>
                    </div>
                    <div class="col-md-6 px-3 text-left">
                        <p class="small text-secondary">Jenis Kelamin</p>
                        <div class="form-check form-check-inline">
                            <input name="jenis_kelamin_data_diri" class="form-check-input" type="radio"
                                   id="inlineRadio1" value="Laki-laki" checked="checked" required>
                            <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input name="jenis_kelamin_data_diri" class="form-check-input" type="radio"
                                   id="inlineRadio2" value="Perempuan" required>
                            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="form-row my-2">
                    <div class="col-md-12 px-3">
                        <textarea name="alamat_rumah_data_diri" class="form-control form-input pb-2 mb-3"
                                  placeholder="Alamat Rumah" rows=2 required></textarea>
                    </div>
                </div>
            </section>
            <!-- End Data Diri Section -->

            <!-- Data Akun Section -->
            <section class="col-md-6">
                <h6 class="text-left">Data Akun</h6>
                <div class="form-row my-2">
                    <div class="col-md-6 px-3">
                        <input name="username_peserta" type="text"
                               class="form-control form-input pb-2 mb-3" placeholder="Username" required>
                    </div>
                    <div class="col-md-6 px-3">
                        <input name="email_peserta" type="email"
                               class="form-control form-input pb-2 mb-3" placeholder="Email" required email>
                    </div>
                </div>
                <div class="form-row my-2">
                    <div class="col-md-6 px-3">
                        <input name="password_peserta" type="password"
                               class="form-control form-input pb-2 mb-3" placeholder="Password" required id="password-user">
                    </div>
                    <div class="col-md-6 px-3">
                        <input type="password" class="form-control form-input pb-2 mb-3"
                               placeholder="Confirm Password" required id="confirm-password">
                        <div class="text-left invalid-feedback">Password tidak sama.</div>
                    </div>

                </div>
                <div class="form-row my-2">
                    <div class="col-md-12 px-3 text-left">
                        <div class="form-check  pb-2 mb-2">
                            <input type="checkbox" class="form-check-input" value="setuju" required>
                            <label class="form-check-label small text-justify">
                                Dengan ini saya menyatakan setuju mengikuti pendaftaran dan segala aturan yang
                                telah ditetapkan oleh penyelenggara.
                            </label>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Data Akun Section -->

            <!-- Data Pendaftaran Section -->
            <section class="col-md-12">
                <div class="form-row my-2">
                    <div class="col-md-6 px-3 text-left">
                        <input name="id_jenjang_pendidikan" value="<?= $jenjang['id_jenjang_pendidikan']; ?>" hidden>
                    </div>
                </div>
            </section>
            <!-- End Data Pendaftaran Section -->

            <!-- Submit Section -->
            <section class="col-md-12">
                <button id="btnForm" type='submit' class="btn btn-danger px-5">
                    Daftar
                </button>
            </section>
            <!-- End Submit Section -->

        </form>
        <!-- End Form Registration -->
    </div>
    <?php else: ?>
    <div class="col-md-12 text-center my-5">
        <h1 class="font-weight-bold text-danger">Pendaftaran Ditutup</h1>
    </div>
    <?php endif; ?>

    <script>
        $("#body-alert-danger").hide();
        /* Get from elements values */
        $("#form-validation").submit(function(event){
            if ($('#form-validation')[0].checkValidity()){
                // Prevent default posting of form - put here to work in case of errors
                event.preventDefault();
                var values = $(this).serialize();

                $.ajax({
                    url: "<?= site_url('c_yayasan_jenjang_pendidikan/pendaftaran') ?>",
                    type: "post",
                    data: values ,
                    beforeSend: function() {
                        var image = '<img class="loading-button" src="' +
                            '<?= base_url("assets/img/loading/loading-button.gif"); ?>' +
                            '" />';
                        $("#btnForm").html(image);
                    },
                    success: function (response) {
                        // You will get response from your PHP page (what you echo or print)
                        var data_json = jQuery.parseJSON(response);
                        // alert(data_json.msg);
                        $("#btnForm").html("Daftar");
                        // $("#text-alert-success").html(data_json['password_peserta']);
                        // $("#body-alert-success").show().delay(10000).fadeOut("slow");
                        if (data_json.tipe == 'error'){
                            $("#text-alert-danger").html(data_json.msg);
                            $("#body-alert-danger").show();
                        }else{
                            window.location.href = "<?= site_url(); ?>";
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        // console.log(textStatus, errorThrown);
                        $("#text-alert-danger").html("Server Error");
                        $("#body-alert-danger").show();
                    }
                });
            }

        });
    </script>
</body>
</html>