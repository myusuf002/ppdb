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
                <!-- Schedule Section -->
                <div class="row mx-1 my-3">
                    <div class="col-md-12 py-0">
                    <!-- Form Registration -->
                    <form id="form-validation" class="form row needs-validation" action="" method="POST" novalidate>
                        <!-- Data Diri Section -->
                        <section class="col-md-12">
                            <div class="form-row my-2">
                                <div class="col-md-6 px-3 text-left ">
                                    <span class="small text-secondary">Jenjang Pendidikan</span>
                                    <input type="text" class="form-control form-input pb-2 mb-3" placeholder="Jenjang Pendidikan Terakhir" required>
                                </div>
                                <div class="col-md-6 px-3 text-left">
                                    <span class="small text-secondary">Nama Sekolah Asal</span>
                                    <input type="text" class="form-control form-input pb-2 mb-3" placeholder="Nama Sekolah Asal" required>
                                </div>
                            </div>
                            <div class="form-row my-2">
                                <div class="col-md-6 px-3 text-left ">
                                    <span class="small text-secondary">Tahun Masuk</span>
                                    <input type="number" class="form-control form-input pb-2 mb-3" placeholder="Tahun Masuk Pendidikan Terakhir" required number>
                                </div>
                                <div class="col-md-6 px-3 text-left ">
                                    <span class="small text-secondary">Tahun Lulus</span>
                                    <input type="number" class="form-control form-input pb-2 mb-3" placeholder="Tahun Lulus Pendidikan Terakhir" required number>
                                </div>
                            </div>

                            <div class="form-row my-2">
                                <div class="col-md-12 px-3">
                                    <span class="small text-secondary">Alamat Sekolah Asal</span>
                                    <textarea class="form-control form-input pb-2 mb-3" rows=2 placeholder="Alamat Sekolah" required></textarea>
                                </div>
                                <div class="col-md-4 px-3 text-left ">
                                    <input type="text" class="form-control form-input pb-2 mb-3" placeholder="Desa/Kecamatan" required>
                                </div>
                                <div class="col-md-4 px-3 text-left ">
                                    <input type="text" class="form-control form-input pb-2 mb-3" placeholder="Kabupaten/Kota" required>
                                </div>
                                <div class="col-md-4 px-3 text-left ">
                                    <input type="text" class="form-control form-input pb-2 mb-3" placeholder="Provinsi" required>
                                </div>
                            </div>
                        </section>
                        <!-- End Data Diri Section -->

                        <!-- Submit Section -->
                        <section class="col-md-12 text-center">
                            <button type='submit' class="btn btn-danger px-5">Simpan</button>
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
    <script src="<?php echo base_url('assets/js/yayasan.js'); ?>"></script>

</body>
</html>