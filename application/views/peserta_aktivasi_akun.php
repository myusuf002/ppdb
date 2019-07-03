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
                
                <div class="row justify-content-center text-center my-5">
                    <div class="col-md-11 border">
                        <form class="form needs-validation" novalidate>
                            <div class="form-row my-2">
                                <div class="col-md-12 text-left">
                                    <span class="small text-secondary">Aktivasi Akun</span>
                                </div>
                                <div class="col-md-10 mx-0">
                                    <input type="text text-center" class="form-control form-input pb-2 mb-3" placeholder="Token Pendaftaran" required>
                                </div>
                                <div class="col-md-2 mx-0 text-right">
                                <button type='submit' class="btn btn-danger">Aktivasi</button>
                                </div>
                            </div>
                        </form>
                    </div>
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