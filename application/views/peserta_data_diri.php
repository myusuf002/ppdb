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
                        <!-- Schedule Section -->
                        <div class="row mx-1 my-3">
                            <div class="col-md-12 py-0">
                            <!-- Form Registration -->
                            <form id="form-validation" class="form row needs-validation" action="" method="POST" novalidate>
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
                                            <input type="text" class="form-control form-input pb-2 mb-3 bg-light" value="<?php echo $nama_peserta; ?>" readonly>
                                        </div>
                                        <div class="col-md-6 px-3">
                                            <span class="small text-secondary">Jenis Kelamin</span> 
                                            <input type="text   " class="form-control form-input pb-2 mb-3 bg-light" value="Laki-laki" readonly>
                                        </div>
                                    </div>
                                    <div class="form-row my-2">
                                        <div class="col-md-6 px-3">
                                            <span class="small text-secondary">NIK</span>                
                                            <input type="text" class="form-control form-input pb-2 mb-3" placeholder="Bisa dilihat pada KTP atau Kartu Keluarga" required>
                                        </div>
                                        <div class="col-md-6 px-3">
                                            <span class="small text-secondary">NISN</span> 
                                            <input type="number" class="form-control form-input pb-2 mb-3 bg-light" value="9981028444" readonly>
                                        </div>
                                    </div>
                                    <div class="form-row my-2">
                                        <div class="col-md-6 px-3 text-left">
                                            <span class="small text-secondary">Tempat Lahir</span>
                                            <input type="text" class="form-control form-input pb-2 mb-3" placeholder="Kota Tempat Lahir" required>
                                        </div>
                                        <div class="col-md-6 px-3 text-left ">
                                            <span class="small text-secondary">Tanggal Lahir</span>
                                            <input type="text" class="form-control form-input pb-2 mb-3 bg-light" value="22/09/2002" readonly>
                                        </div>
                                    </div>
                                    <div class="form-row my-2">
                                        <div class="col-md-12 px-3">
                                            <span class="small text-secondary">Alamat Rumah</span>
                                            <textarea class="form-control form-input pb-2 mb-3" rows=2 required>Jalan jalan No. 01</textarea>
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
<script src="<?php echo base_url(); ?>assets/js/yayasan.js"></script>
</body>
</html>