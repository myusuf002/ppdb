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
                        <!-- Profile Picture Foundation -->
                         <div class="row justify-content-center text-center my-3">
                            <div class="col-md-10 pt-3">
                            <a class="navbar-brand ml-2" href="<?php echo base_url(); ?>">
                                <img src="<?php echo base_url(); ?>uploads/foundation/logo-name-foundation.png"  width="70%">
                            </a>
                            </div>
                        </div>
                        <!-- End Profile Picture Foundation -->

                        <!-- Profile Foundation Section -->
                        <div class="row mx-1 my-3">
                            <div class="col-md-12 py-2">
                                <h5 class="font-weight-bold text-dark">Telkom Schools</h5>
                                <hr class="m-0">
                                <p class="text-justify mx-2 text-secondary">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. Elit ullamcorper dignissim cras tincidunt lobortis feugiat. Diam ut venenatis tellus in metus vulputate. Congue nisi vitae suscipit tellus mauris a diam. Pulvinar elementum integer enim neque volutpat ac. Duis convallis convallis tellus id interdum velit laoreet. Integer enim neque volutpat ac tincidunt vitae semper. Volutpat est velit egestas dui. Auctor elit sed vulputate mi sit amet mauris commodo quis.
                                </p>
                            </div>
                        </div>
                        <!-- End Profile Foundation Section -->
       
                        <!-- Vision and Mission Foundation Section -->
                        <div class="row mx-1 my-3">
                            <div class="col-md-6 py-2">
                                <h6 class="font-weight-bold text-danger">Visi</h6>
                                <hr class="m-0">
                                <p class="text-justify mx-2 text-secondary">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. Elit ullamcorper dignissim cras tincidunt lobortis feugiat. 
                                </p>
                            </div>
                            <div class="col-md-6 py-2">
                                <h6 class="font-weight-bold text-danger">Misi</h6>
                                <hr class="m-0">
                                <ol class="text-secondary mx-0">
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                    <li> Elementum curabitur vitae nunc sed, Risus sed vulputate odio ut.</li>
                                    <li>Maecenas volutpat blandit aliquam etiam erat velit scelerisque.</li>
                                </ol>
                            </div>
                        </div>
                        <!-- End Vision and Mission Foundation Section -->

                        <!-- Head of Foundation Section -->
                        <div class="row text-center p-3 my-3">
                            <div class="col-md-12 text-justify">
                                <h5 class="font-weight-bold text-dark">Ketua Yayasan</h5>
                                <hr class="m-0">
                            </div>
                            <img src="<?php echo base_url() ?>uploads/foundation/head-foundation.jpg" alt="Head of Foundation" class="col-md-2 my-3 mx-1 rounded-circle">
                            <div class="col-md text-justify">
                                <h4>John Doe</h4>
                                <p class="mx-2 text-secondary">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. Elit ullamcorper dignissim cras tincidunt lobortis feugiat.
                                </p>
                            </div>
                        </div>
                        <!-- End Head of Foundation Section -->
       
                        
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