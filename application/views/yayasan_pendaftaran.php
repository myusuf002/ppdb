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
                        <!-- List of Schools Section -->
                        <div class="row pt-3 pr-3">  
                            <div class="card ml-3 mb-3 p-0 text-center" style="width:350px">
                                <div class="card-body">
                                    <h6 class="card-title font-weight-bold text-danger">Sekolah Menengah Kejuruan</h6>
                                    <p class="card-text text-justify text-secondary small">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. 
                                    </p>
                                    <a href="<?php echo site_url("Yayasan/sekolah/SMK"); ?>" class="btn btn-danger">Pendaftaran</a>
                                </div>
                            </div>
                            <div class="card ml-3 mb-3 p-0 text-center" style="width:350px">
                                <div class="card-body">
                                    <h6 class="card-title font-weight-bold text-danger">Sekolah Menengah Atas</h6>
                                    <p class="card-text text-justify text-secondary small">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed.
                                    </p>
                                    <a href="<?php echo site_url("Yayasan/sekolah/SMA"); ?>" class="btn btn-danger">Pendaftaran</a>
                                </div>
                            </div>
                            <div class="card ml-3 mb-3 p-0 text-center" style="width:350px">
                                <div class="card-body">
                                    <h6 class="card-title font-weight-bold text-danger">Sekolah Menengah Pertama</h6>
                                    <p class="card-text text-justify text-secondary small">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. 
                                    </p>
                                    <a href="<?php echo site_url("Yayasan/sekolah/SMP"); ?>" class="btn btn-danger">Pendaftaran</a>
                                </div>
                            </div>
                            <div class="card ml-3 mb-3 p-0 text-center" style="width:350px">
                                <div class="card-body">
                                    <h6 class="card-title font-weight-bold text-danger">Sekolah Dasar</h6>
                                    <p class="card-text text-justify text-secondary small">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. 
                                    </p>
                                    <a href="<?php echo site_url("Yayasan/sekolah/SD"); ?>" class="btn btn-danger">Pendaftaran</a>
                                </div>
                            </div>
                            <div class="card ml-3 mb-3 p-0 text-center" style="width:350px">
                                <div class="card-body">
                                    <h6 class="card-title font-weight-bold text-danger">Taman Kanak-Kanak</h6>
                                    <p class="card-text text-justify text-secondary small">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. 
                                    </p>
                                    <a href="<?php echo site_url("Yayasan/sekolah/TK"); ?>" class="btn btn-danger">Pendaftaran</a>
                                </div>
                            </div>
                            
                        </div>
                        <!-- End List of Schools Section -->    
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
