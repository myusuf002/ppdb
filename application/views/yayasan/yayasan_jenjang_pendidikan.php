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
    <?php
        $persyaratan_json = json_decode($jenjang['persyaratan_jenjang_pendidikan'], true);
        $kelengkapan_json = json_decode($jenjang['kelengkapan_jenjang_pendidikan'], true);
    ?>
    <!-- Body Section -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- Details School Section -->
                <div class="row mx-1 my-3">
                    <!-- Name School Title -->
                    <div class="col-md-12 my-3">
                        <h6 class="text-danger font-weight-bold my-0">
                            Akreditasi <?= $jenjang['akreditasi_jenjang_pendidikan']; ?>
                        </h6>
                        <h5 class="d-none d-sm-block font-weight-bold text-dark">
                            <?= $jenjang['nama_jenjang_pendidikan']; ?>
                        </h5>
                        <h6 class="d-block d-sm-none font-weight-bold text-dark text-center">
                            <?= $jenjang['nama_jenjang_pendidikan']; ?>
                        </h6>
                    </div>
                    <!-- End Name School Title -->

                    <div class="col-md-12 py-3">
                        <!--  Detail School Tab Menu -->
                        <ul class="nav row  justify-content-md-left border-bottom" id="myTab" role="tablist">
                            <li class="nav-item col-md-2 col-6">
                                <a class="nav-link active text-secondary text-center" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="true">
                                    <span class="fas fa-info fa-lg"></span>
                                    <p class="small font-weight-bold">Info</p>
                                </a>
                            </li>
                            <li class="nav-item col-md-2 col-6">
                                <a class="nav-link text-secondary text-center" id="rule-tab" data-toggle="tab" href="#rule" role="tab" aria-controls="rule" aria-selected="false">
                                    <span class="fas fa-book fa-lg"></span>
                                    <p class="small font-weight-bold">Aturan</p>
                                </a>
                            </li>
                            <li class="nav-item col-md-2 col-6">
                                <a class="nav-link text-secondary text-center" id="fee-tab" data-toggle="tab" href="#fee" role="tab" aria-controls="fee" aria-selected="false">
                                    <span class="fas fa-money-bill-wave fa-lg"></span>
                                    <p class="small font-weight-bold">Biaya</p>
                                </a>
                            </li>
                            <li class="nav-item col-md-2 col-6">
                                <a class="nav-link text-secondary text-center" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">
                                    <span class="fas fa-list-alt fa-lg"></span>
                                    <p class="small font-weight-bold">Daftar</p>
                                </a>
                            </li>
                        </ul>
                        <!-- End Detail School Tab Menu -->

                        <!-- Detail School Tab Content -->
                        <div class="tab-content" id="myTabContent">

                        <!-- Info Detail School Tab Panel -->
                        <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
                        <div class="row my-2 py-2">
                            <div class="col-md-12">
                                <!-- <h6 class="font-weight-bold text-danger">Persyaratan</h6>
                                <hr class="m-0"> -->
                                <p class="text-justify text-secondary small"><?= $jenjang['deskripsi_jenjang_pendidikan']; ?></p>
                                <!-- Registration Track Section -->
                                <h6 class="text-danger font-weight-bold m-0">Alur Pendaftaran</h6>
                                <table class="small">
                                    <tr class="border-bottom">
                                        <td class="font-weight-bold pt-3" colspan=3>Jalur Prestasi</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Periode Pendaftaran</td>
                                        <td class="px-1 font-weight-bold"> : </td>
                                        <td>12 Juli 2019 - 12 Agustus 2019</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Verfikasi Berkas</td>
                                        <td class="px-1 font-weight-bold"> : </td>
                                        <td>20 Juli 2019 - 15 Agustus 2019</td>
                                    </tr>

                                    <tr class="border-bottom">
                                        <td class="font-weight-bold pt-3" colspan=3>Jalur Reguler</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Periode Pendaftaran</td>
                                        <td class="px-1 font-weight-bold"> : </td>
                                        <td>12 Agustus 2019 - 20 Agustus 2019</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Tes Akademik</td>
                                        <td class="px-1 font-weight-bold"> : </td>
                                        <td>21 Agustus 2019</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Tes Psikologi</td>
                                        <td class="px-1 font-weight-bold"> : </td>
                                        <td>23 Agustus 2019</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Tes Kesehatan</td>
                                        <td class="px-1 font-weight-bold"> : </td>
                                        <td>25 Agustus 2019</td>
                                    </tr>
                                </table>
                                <!-- End Registration Track Section -->


                            </div>
                        </div>
                        </div>
                        <!-- End Info Detail School Tab Panel -->

                        <!-- Rules Detail School Tab Panel -->
                        <div class="tab-pane fade" id="rule" role="tabpanel" aria-labelledby="rule-tab">
                        <div class="row my-2 py-2">
                            <div class="col-md-6">
                                <h6 class="font-weight-bold text-danger">Persyaratan</h6>
                                <hr class="m-0">
                                <ol class="text-secondary mx-0">
                                    <?php foreach ($persyaratan_json['persyaratan'] as $persyaratan): ?>
                                        <li><?= $persyaratan; ?></li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                            <div class="col-md-6">
                                <h6 class="font-weight-bold text-danger">Kelengkapan</h6>
                                <hr class="m-0">
                                <ol class="text-secondary mx-0">
                                    <?php foreach ($kelengkapan_json['kelengkapan'] as $kelengkapan): ?>
                                        <li><?= $kelengkapan; ?></li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                        </div>
                        </div>
                        <!-- End Rules Detail School Tab Panel -->

                        <!-- Fee Detail School Tab Panel -->
                        <div class="tab-pane fade" id="fee" role="tabpanel" aria-labelledby="fee-tab">
                        <div class="row text-center my-2 py-2">
                            <div class="col-md-12 my-0 p-0 table-responsive">
                                <!-- <h6 class="font-weight-bold text-danger">Persyaratan</h6>
                                <hr class="m-0"> -->
                                <table class="table my-0 table-borderless">
                                    <thead class="text-danger border-bottom">
                                    <tr>
                                        <th scope="col">Jalur</th>
                                        <th scope="col">Pendaftaran</th>
                                        <th scope="col">Pendidikan</th>
                                        <th scope="col">Pembangunan</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="border-top">
                                        <td>Reguler</td>
                                        <td>Rp. 150.000</td>
                                        <td>Rp. 650.000</td>
                                        <td>Rp. 5.600.000</td>
                                        <td>Rp. 6.400.000</td>
                                    </tr>
                                    <tr class="border-top">
                                        <td>Prestasi</td>
                                        <td>Rp. 100.000</td>
                                        <td>Rp. 650.000</td>
                                        <td>Rp. 5.000.000</td>
                                        <td>Rp. 6.750.000</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                        <!-- End Fee Detail School Tab Panel -->

                        <!-- Registration School Tab Panel -->
                        <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                        <div class="row text-center my-2 py-2">
                            <?php $this->load->view('yayasan/yayasan_jenjang_pendidikan_daftar'); ?>
                        </div>
                        </div>
                        <!-- End Registration School Tab Panel -->

                        </div>
                        <!-- Detail School Tab Content -->
                    </div>
                </div>
                <!-- End Detail School Section -->


            </div>
        </div>
    </div>

    <!-- Page JS  -->
    <script src="<?php echo base_url('assets/js/yayasan_jenjang_pendidikan.js') ?>"></script>
</body>
</html>