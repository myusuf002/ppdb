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

    <?php if ($jenjang['status_jenjang_pendidikan']): ?>
    <div class="col-md bg-secondary"></div>
    <div class="col-md-12">
        <!-- Form Registration -->
        <form id="form-validation" class="form row" action="" method="POST" novalidate>
            <!-- Data Diri Section -->
            <section class="col-md-6">
                <h6 class="text-left">Data Diri</h6>
                <div class="form-row my-2">
                    <div class="col-md-6 px-3">
                        <input type="text" class="form-control form-input pb-2 mb-3" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="col-md-6 px-3">
                        <input type="number" class="form-control form-input pb-2 mb-3" placeholder="NISN" required number>
                    </div>
                </div>
                <div class="form-row my-2">
                    <div class="col-md-6 px-3 text-left ">
                        <span class="small text-secondary">Tanggal Lahir</span>
                        <input type="text" class="form-control form-input pb-2 mb-3 datepicker-here" data-language='en' data-date-format="dd/mm/yyyy" id="dp1" required>
                    </div>
                    <div class="col-md-6 px-3 text-left">
                        <p class="small text-secondary">Jenis Kelamin</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="l" required>
                            <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="p" required>
                            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="form-row my-2">
                    <div class="col-md-12 px-3">
                        <textarea class="form-control form-input pb-2 mb-3" placeholder="Alamat Rumah" rows=2 required></textarea>
                    </div>
                </div>
            </section>
            <!-- End Data Diri Section -->

            <!-- Data Akun Section -->
            <section class="col-md-6">
                <h6 class="text-left">Data Akun</h6>
                <div class="form-row my-2">
                    <div class="col-md-6 px-3">
                        <input type="text" class="form-control form-input pb-2 mb-3" placeholder="Username" required>
                    </div>
                    <div class="col-md-6 px-3">
                        <input type="text" class="form-control form-input pb-2 mb-3" placeholder="Token Pendaftaran">
                    </div>
                </div>
                <div class="form-row my-2">
                    <div class="col-md-6 px-3">
                        <input type="email" class="form-control form-input pb-2 mb-3" placeholder="Email" required email>
                    </div>
                    <div class="col-md-6 px-3">
                        <input type="number" class="form-control form-input pb-2 mb-3" placeholder="Nomor HP" required number>
                    </div>
                </div>
                <div class="form-row my-2">
                    <div class="col-md-6 px-3">
                        <input type="password" class="form-control form-input pb-2 mb-3" placeholder="Password" required id="password-user">
                    </div>
                    <div class="col-md-6 px-3">
                        <input type="password" class="form-control form-input pb-2 mb-3" placeholder="Confirm Password" required id="confirm-password">
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
                        <input class="form-control form-input pb-2 mb-3 text-left bg-white" value="<?= $jenjang['id_jenjang_pendidikan']; ?>" hidden>
                    </div>
                    <div class="col-md-6 px-3 text-left">
                        <input class="form-control form-input pb-2 mb-3 text-left bg-white" value="reguler" hidden>
                    </div>
                </div>
            </section>
            <!-- End Data Pendaftaran Section -->

            <!-- Submit Section -->
            <section class="col-md-12">
                <button type='submit' class="btn btn-danger px-5">Daftar</button>
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

</body>
</html>