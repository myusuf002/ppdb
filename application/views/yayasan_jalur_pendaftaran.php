<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/logo/logo-ppdb.png">

    <!-- Main CDN Styles -->
     <?php include "base/cdn_styles.php"; ?>
    <!-- Page CDN Style -->
    <link href="" rel="stylesheet">
    
    <!-- Main CSS -->
    <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet">
    <!-- Page CSS -->
    <link href="" rel="stylesheet">

</head>
<body id="page-top">
<div id="wrapper">
    <!-- Sidebar Section -->
    <?php include "base/yayasan_sidebar.php" ?>

    <div id="content-wrapper" class="d-flex flex-column mt-5 pt-3">
        <div id="content">
            <!-- Header Section -->
            <?php include "base/header.php";?>    

            <!-- Body Section -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Registration Track Collapse -->
                        <div class="card my-3">
                            <!-- Card Header - Accordion -->
                            <a href="#collapseJalur_1" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseJalur_1">
                                <h6 class="m-0 text-dark">Jalur Prestasi
                                    <span class="badge badge-danger d-none d-sm-inline">SMP</span>
                                    <span class="badge badge-danger d-none d-sm-inline">SMA</span>
                                    <span class="badge badge-danger d-none d-sm-inline">SMK</span>
                                </h6>
                                <h6 class="d-block d-sm-none">
                                    <span class="badge badge-danger">SMP</span>
                                    <span class="badge badge-danger">SMA</span>
                                    <span class="badge badge-danger">SMK</span>
                                </h6>
                                
                            </a>
                            <!-- Card Content - Collapse -->
                            <div class="collapse show" id="collapseJalur_1">
                            <div class="card-body p-3">
                                <div class="row pb-3">
                                    <div class="col-md-12 small">
                                        <!-- Registration Track Section -->
                                        <h6 class="text-danger">Alur Pendaftaran</h6>
                                        <table>
                                            <tr>
                                                <td class="font-weight-bold">Periode Pendaftaran</td>
                                                <td class="px-1 font-weight-bold"> : </td>
                                                <td>12 Juli 2019 - 12 Agustus 2019</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Verifikasi Berkas</td>
                                                <td class="px-1 font-weight-bold"> : </td>
                                                <td>20 Juli 2019 - 15 Agustus 2019</td>
                                            </tr>
                                        </table>
                                        <!-- End Registration Track Section -->
                                        
                                        <!-- Detail Registration Section -->
                                        <h6 class="mt-3 text-danger">Keterangan</h6>
                                        <p class="text-justify">Jalur prestasi merupakan jalur tanpa tes dengan penilian dari rapor pada jenjang pendidikan terakhir sebagai penilaian.</p>
                                        <!-- End Detail Registration Section -->

                                        <!-- Registration's Requirement Section -->
                                        <h6 class="mt-3 text-danger">Persyaratan</h6>
                                        <ul>
                                            <li>Lulusan dua tahun terakhir (2018 - 2019).</li>
                                            <li>Rapor Semester terakhir dengan nilai rata-rata 75 untuk mata pelajaran Bahasa Indonesia, Bahasa Inggris, Matematika , dan IPA.</li>
                                            <li>Surat rekomendasi asal sekolah.</li>
                                            <li>Tidak pernah tinggal kelas pada jenjang pendidikan terakhir. Dibuktikan dengan surat keterangan dari sekolah.</li>
                                        </ul>
                                        <!-- End Registration's Requirement Section -->

                                        <!-- Registration Button List -->
                                        <h6 class="mt-3 text-danger">Daftar Sekarang</h6>
                                        <div class="pr-2">
                                            <a href="#" class="col-md-1 btn btn-danger m-1">SMP</a>
                                            <a href="#" class="col-md-1 btn btn-danger m-1">SMA</a>
                                            <a href="#" class="col-md-1 btn btn-danger m-1">SMK</a>
                                        </div>
                                        <!-- End Registration Button List -->
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>  
                        <!-- End Registration Track Collapse -->

                        <!-- Registration Track Collapse -->
                        <div class="card my-3">
                            <!-- Card Header - Accordion -->
                            <a href="#collapseJalur_2" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseJalur_2">
                                <!-- <i class="fa fa-bullhorn text-dark"></i> -->
                                <h6 class="m-0 text-dark">Jalur Reguler
                                    <span class="badge badge-danger d-none d-sm-inline">TK</span>
                                    <span class="badge badge-danger d-none d-sm-inline">SD</span>
                                    <span class="badge badge-danger d-none d-sm-inline">SMP</span>
                                    <span class="badge badge-danger d-none d-sm-inline">SMA</span>
                                    <span class="badge badge-danger d-none d-sm-inline">SMK</span>
                                </h6>
                                <h6 class="d-block d-sm-none">
                                    <span class="badge badge-danger">TK</span>
                                    <span class="badge badge-danger">SD</span>
                                    <span class="badge badge-danger">SMP</span>
                                    <span class="badge badge-danger">SMA</span>
                                    <span class="badge badge-danger">SMK</span>
                                </h6>
                            </a>
                            <!-- Card Content - Collapse -->
                            <div class="collapse show" id="collapseJalur_2">
                            <div class="card-body p-3">
                                <div class="row pb-3">
                                    <div class="col-md-12 small">
                                        <!-- Registration Track Section -->
                                        <h6 class="text-danger">Alur Pendaftaran</h6>
                                        <table>
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
                                        
                                        <!-- Detail Registration Section -->
                                        <h6 class="mt-3 text-danger">Keterangan</h6>
                                        <p class="text-justify">Jalur Reguler merupakan jalur dengan tes untuk menguji calon siswa dalam bidang akademik, psikologi dan kesehatan.</p>
                                        <!-- End Detail Registration Section -->

                                        <!-- Registration's Requirement Section -->
                                        <h6 class="mt-3 text-danger">Persyaratan</h6>
                                        <ul>
                                            <li>Lulusan dua tahun terakhir (2018 - 2019)* atau sudah mencukupi umur**.</li>
                                            <li>Rapor Semester terakhir dengan nilai rata-rata 50 untuk mata pelajaran Bahasa Indonesia, Bahasa Inggris, Matematika , dan IPA.*</li>
                                            <li>Surat keterangan lulus sekolah*.</li>
                                            <li>Tidak pernah tinggal kelas pada jenjang pendidikan terakhir. Dibuktikan dengan surat keterangan dari sekolah*.</li>
                                        </ul>
                                        <!-- End Registration's Requirement Section -->
                                        <i>* Khusus Pendaftar SMP, SMA dan SMK<br>
                                           ** Khusus Pendaftar TK dan SD</i>

                                        <!-- Registration Button List -->
                                        <h6 class="mt-3 text-danger">Daftar Sekarang</h6>
                                        <div class="pr-2">
                                            <a href="#" class="col-md-1 btn btn-danger m-1">TK</a>    
                                            <a href="#" class="col-md-1 btn btn-danger m-1">SD</a>
                                            <a href="#" class="col-md-1 btn btn-danger m-1">SMP</a>
                                            <a href="#" class="col-md-1 btn btn-danger m-1">SMA</a>
                                            <a href="#" class="col-md-1 btn btn-danger m-1">SMK</a>
                                        </div>
                                        <!-- End Registration Button List -->
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>  
                        <!-- End Registration Track Collapse -->

                        <!-- Registration Track Collapse -->
                        <div class="card my-3">
                            <!-- Card Header - Accordion -->
                            <a href="#collapseJalur_3" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseJalur_3">
                                <!-- <i class="fa fa-bullhorn text-dark"></i> -->
                                <h6 class="m-0 text-dark">Jalur Non-Reguler
                                    <span class="badge badge-danger d-none d-sm-inline">TK</span>
                                    <span class="badge badge-danger d-none d-sm-inline">SD</span>
                                </h6>
                                <h6 class="d-block d-sm-none">
                                    <span class="badge badge-danger">TK</span>
                                    <span class="badge badge-danger">SD</span>
                                </h6>
                            </a>
                            <!-- Card Content - Collapse -->
                            <div class="collapse show" id="collapseJalur_3">
                            <div class="card-body p-3">
                                <div class="row pb-3">
                                    <div class="col-md-12 small">
                                        <!-- Registration Track Section -->
                                        <h6 class="text-danger">Alur Pendaftaran</h6>
                                        <table>
                                            <tr>
                                                <td class="font-weight-bold">Periode Pendaftaran</td>
                                                <td class="px-1 font-weight-bold"> : </td>
                                                <td>20 Agustus 2019 - 30 Agustus 2019</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Tes Kesehatan</td>
                                                <td class="px-1 font-weight-bold"> : </td>
                                                <td>31 Agustus 2019</td>
                                            </tr>
                                        </table>
                                        <!-- End Registration Track Section -->
                                        
                                        <!-- Detail Registration Section -->
                                        <h6 class="mt-3 text-danger">Keterangan</h6>
                                        <p class="text-justify">Jalur Reguler merupakan jalur hanya dengan tes kesehatan.</p>
                                        <!-- End Detail Registration Section -->

                                        <!-- Registration Button List -->
                                        <h6 class="mt-3 text-danger">Daftar Sekarang</h6>
                                        <div class="pr-2">
                                            <a href="#" class="col-md-1 btn btn-danger m-1">TK</a>    
                                            <a href="#" class="col-md-1 btn btn-danger m-1">SD</a>
                                        </div>
                                        <!-- End Registration Button List -->
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>  
                        <!-- End Registration Track Collapse -->

                    </div>
                </div>
            </div>

            <!-- Footer Section -->
            <footer id="peserta-footer">
                <?php include "base/footer.php" ?>
            </footer>
        </div>
    </div>
</div>

 <!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Main CDN JS -->
<?php include "base/cdn_scripts.php"; ?>
<!-- Page CDN JS  -->
<script src="" charset="utf-8"></script>

<!-- Main JS  -->
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
<!-- Page JS  -->
<script>
</script>

</body>
</html>