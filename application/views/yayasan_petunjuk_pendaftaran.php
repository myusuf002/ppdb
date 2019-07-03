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
                        <!-- Registration Picture Foundation -->
                         <div class="row justify-content-center text-center my-3">
                            <div class="col-md-11 border">
                                <img src="<?php echo base_url(); ?>uploads/registration/registration-track.jpeg" class="img-fluid" >
                            </div>
                        </div>
                        <!-- End Registration Picture Foundation -->
                        
                        <!-- Registration Process Section -->
                        <div class="row mx-3 justify-content-center">
                            <div class="col-md-3 m-1 py-2 text-justify border rounded">
                                <h3 class="d-none d-sm-inline text-danger font-weight-bold">1. </h3>
                                <h6 class="d-inline">Buka i-PPDB</h6>
                                <p class="small text-secondary">Kunjungi <a href="#" class="text-danger font-weight-bold text-decoration-none">ppdb.telkom.sch.id</a></p>
                            </div>
                            <div class="col-md-3 m-1 py-2 text-justify border rounded">
                                <h3 class="d-none d-sm-inline text-danger font-weight-bold">2. </h3>
                                <h6 class="d-inline">Pilih Sekolah</h6>
                                <p class="small text-secondary">Pilih Sekolah yang akan didaftari.</p>
                            </div>
                            <div class="col-md-3 m-1 py-2 text-justify border rounded">
                                <h3 class="d-none d-sm-inline text-danger font-weight-bold">3. </h3>
                                <h6 class="d-inline">Isi Data Diri</h6>
                                <p class="small text-secondary">Pastikan sesuai dengan data pemerintah.</p>
                            </div>
                            <div class="col-md-3 m-1 py-2 text-justify border rounded">
                                <h3 class="d-none d-sm-inline text-danger font-weight-bold">4. </h3>
                                <h6 class="d-inline">Aktivasi Akun</h6>
                                <p class="small text-secondary">Beli token pendaftaran yang disediakan.</p>
                            </div>
                            <div class="col-md-3 m-1 py-2 text-justify border rounded">
                                <h3 class="d-none d-sm-inline text-danger font-weight-bold">5. </h3>
                                <h6 class="d-inline">Lengkapi Berkas</h6>
                                <p class="small text-secondary">Isi data dan berkas secara lengkap.</p>
                            </div>
                            <div class="col-md-3 m-1 py-2 text-justify border rounded">
                                <h3 class="d-none d-sm-inline text-danger font-weight-bold">6. </h3>
                                <h6 class="d-inline">Ikuti Ujian</h6>
                                <p class="small text-secondary">Ikuti tahapan pendaftaran sesuai jalur.</p>
                            </div>
                            <div class="col-md-3 m-1 py-2 text-justify border rounded">
                                <h3 class="d-none d-sm-inline text-danger font-weight-bold">7. </h3>
                                <h6 class="d-inline">Tunggu Pengumuman</h6>
                                <p class="small text-secondary">Pantau informasi kelulusan di i-PPDB.</p>
                            </div>
                            <div class="col-md-3 m-1 py-2 text-justify border rounded">
                                <h3 class="d-none d-sm-inline text-danger font-weight-bold">8. </h3>
                                <h6 class="d-inline">Daftar Ulang</h6>
                                <p class="small text-secondary">Lunasi seluruh biaya pendidikan.</p>
                            </div>
                            <div class="col-md-3 m-1 py-2 text-justify border rounded">
                                <h3 class="d-none d-sm-inline text-danger font-weight-bold">9. </h3>
                                <h6 class="d-inline">Selamat!</h6>
                                <p class="small text-secondary">Anda resmi menjadi peserta didik kami.</p>
                            </div>
                        </div>
                        <!-- End Registration Process Section -->
       
                        
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