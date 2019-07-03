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
    <?php include "base/peserta_sidebar.php" ?>

    <div id="content-wrapper" class="d-flex flex-column mt-5 pt-3">
        <div id="content">
            <!-- Header Section -->
            <?php include "base/peserta_header.php";?>    

            <!-- Body Section -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Notification Section -->
                        <div class="row mx-1 my-3">
                            <div class="col-md-12 py-2">
                            <div class="alert small alert-danger alert-dismissible fade show" role="alert">
                                Harap melakukan 
                                <a href="#" class="text-decoration-none font-weight-bold text-danger">aktivasi akun</a> 
                                dengan melakukan pembelian token pendaftaran.
                                <button type="button" class="close py-0 px-2 my-2" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                            </div>
                        </div>
                        <!-- End Notification Section -->

                        <!-- Summary Section -->
                        <div class="row mx-1 my-3">
                            <div class="col-md-4 py-2">
                                <h5 class="font-weight-bold text-dark">Status Peserta</h5>
                                <ul class="list-group">
                                <li class="list-group-item">
                                    Aktivasi Akun 
                                    <i class="d-none fas fa-check text-success float-right my-1"></i>
                                    <i class="fas fa-times text-danger float-right m-1"></i>
                                </li>
                                <li class="list-group-item">
                                    Kelengkapan Data
                                    <i class="fas fa-check text-success float-right my-1"></i>
                                    <i class="d-none fas fa-times text-danger float-right m-1"></i>
                                </li>
                                <li class="list-group-item">
                                    Kelengkapan Berkas
                                    <i class="d-none fas fa-check text-success float-right my-1"></i>
                                    <i class="fas fa-times text-danger float-right m-1"></i>
                                </li>
                                </ul>
                            </div>
                            <div class="col-md-4 py-2">
                                <h5 class="font-weight-bold text-dark">Status Pendaftaran</h5>
                                <ul class="list-group">
                                <li class="list-group-item">
                                    Verfikasi Data 
                                    <i class="d-none fas fa-check text-success float-right my-1"></i>
                                    <i class="fas fa-history text-secondary float-right my-1"></i>
                                    <i class="d-none fas fa-times text-danger float-right m-1"></i>
                                </li>
                                <li class="list-group-item">
                                    Verifikasi Berkas
                                    <i class="d-none fas fa-check text-success float-right my-1"></i>
                                    <i class="d-none fas fa-history text-secondary float-right my-1"></i>
                                    <i class="fas fa-times text-danger float-right m-1"></i>
                                </li>
                                <li class="list-group-item disabled">
                                    Kelulusan 
                                    <i class="d-none fas fa-check text-success float-right my-1"></i>
                                    <i class="d-none fas fa-times text-danger float-right m-1"></i>
                                </li>
                                </ul>
                            </div>
                            <div class="col-md-4 py-2">
                                <h5 class="font-weight-bold text-dark">Tahap Pendaftaran</h5>
                                <ul class="list-group">
                                <li class="list-group-item">
                                   Tes Akademik 
                                    <i class="d-none fas fa-check text-success float-right my-1"></i>
                                    <i class="fas fa-history text-secondary float-right my-1"></i>
                                    <i class="d-none fas fa-times text-danger float-right m-1"></i>
                                </li>
                                <li class="list-group-item disabled">
                                    Tes Psikologi
                                    <i class="d-none fas fa-check text-success float-right my-1"></i>
                                    <i class="d-none fas fa-history text-secondary float-right my-1"></i>
                                    <i class="d-none fas fa-times text-danger float-right m-1"></i>
                                </li>
                                <li class="list-group-item disabled">
                                    Tes Akademik 
                                    <i class="d-none fas fa-check text-success float-right my-1"></i>
                                    <i class="d-none fas fa-history text-secondary float-right my-1"></i>
                                    <i class="d-none fas fa-times text-danger float-right m-1"></i>
                                </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Summary Section -->

                        <!-- Schedule Section -->
                        <div class="row mx-1 my-3">
                            <div class="col-md-12 py-0">
                                <h5 class="font-weight-bold text-dark">Jadwal Penting</h5>
                            </div>
                            <div class="col-md-12 my-0 table-responsive">

                                <table class="table small my-0 table-borderless">
                                    <thead class="text-danger border-bottom">
                                    <tr>
                                        <th scope="col">Kegiatan</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Waktu</th>
                                        <th scope="col">Tempat</th>
                                        <th scope="col">Keterangan</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="border-top">
                                        <td>Pembukaan Pendaftaran</td>
                                        <td>12/08/2019</td>
                                        <td>08.00</td>
                                        <td>Online</td>
                                        <td>N/A</td>
                                    </tr>
                                    <tr class="border-top">
                                        <td>Batas Pendaftaran</td>
                                        <td>20/08/2019</td>
                                        <td>23.59</td>
                                        <td>Online</td>
                                        <td>N/A</td>
                                    </tr>
                                    <tr class="border-top">
                                        <td>Verifikasi Berkas</td>
                                        <td>12/08/2019</td>
                                        <td>09.00</td>
                                        <td>Online</td>
                                        <td>N/A</td>
                                    </tr>
                                    <tr class="border-top">
                                        <td>Hasil Verifikasi Berkas</td>
                                        <td>20/08/2019</td>
                                        <td>12.30</td>
                                        <td>Online</td>
                                        <td>Batas komplain hasil verifikasi berkas tanggal 21/09/17 pukul 17.30 langsung di sekolah bagian PPDB.</td>
                                    </tr>
                                    <tr class="border-top">
                                        <td>Tes Akademik</td>
                                        <td>22/08/2019</td>
                                        <td>08.30</td>
                                        <td>Ruang E301</td>
                                        <td>Materi yang diujikan Matematika, Bahasa Indonesia, Bahasa Inggris dan IPA.</td>
                                    </tr>
                                    <tr class="border-top">
                                        <td>Tes Psikologi</td>
                                        <td>23/08/2019</td>
                                        <td>08.30</td>
                                        <td>Ruang E301</td>
                                        <td>N/A</td>
                                    </tr>
                                    <tr class="border-top">
                                        <td>Tes Kesehatan</td>
                                        <td>25/08/2019</td>
                                        <td>08.30</td>
                                        <td>Ruang Kesehatan</td>
                                        <td>Harap tidak melakukan aktifitas berat sehari sebelum tes.</td>
                                    </tr>
                                    <tr class="border-top">
                                        <td>Pengumuman</td>
                                        <td>27/08/2019</td>
                                        <td>08.30</td>
                                        <td>Online</td>
                                        <td>N/A</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- End Schedule Section -->
                        
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
<script src="<?php echo base_url(); ?>assets/js/peserta.js"></script>
</body>
</html>