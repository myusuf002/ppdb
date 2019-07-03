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
                        <!-- List of Achievements Section -->
                        <div class="row mx-1 my-3 text-center">
                            <div class="card m-1" style="width:350px">
                                <img class="card-img-top" src="<?php echo base_url() ?>/uploads/achievement/public-charter.jpg" alt="Card image">
                                <div class="card-body">
                                    <h6 class="card-title font-weight-bold text-danger">Best Public-Charter School 2019</h6>
                                    <p class="card-text text-justify text-secondary small">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. 
                                    </p>
                                </div>
                            </div>
                            <div class="card m-1" style="width:350px">
                                <img class="card-img-top" src="<?php echo base_url() ?>/uploads/achievement/black-male.jpg" alt="Card image">
                                <div class="card-body">
                                    <h6 class="card-title font-weight-bold text-danger">Most Tolerance Schools 2019</h6>
                                    <p class="card-text text-justify text-secondary small">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed.
                                    </p>
                                </div>
                            </div>
                            <div class="card m-1" style="width:350px">
                                <img class="card-img-top" src="<?php echo base_url() ?>/uploads/achievement/computing.jpg" alt="Card image">
                                <div class="card-body">
                                    <h6 class="card-title font-weight-bold text-danger">School of Technology</h6>
                                    <p class="card-text text-justify text-secondary small">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. 
                                    </p>
                                </div>
                            </div>
                            <div class="card m-1" style="width:350px">
                                <img class="card-img-top" src="<?php echo base_url() ?>/uploads/achievement/best-school.png" alt="Card image">
                                <div class="card-body">
                                    <h6 class="card-title font-weight-bold text-danger">The Best School Awards</h6>
                                    <p class="card-text text-justify text-secondary small">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. 
                                    </p>
                                    <a href="#" class="btn btn-danger">Selengkapnya</a>
                                </div>
                            </div>
                            <div class="card m-1" style="width:350px">
                                <img class="card-img-top" src="<?php echo base_url() ?>/uploads/achievement/best-japan.jpg" alt="Card image">
                                <div class="card-body">
                                    <h6 class="card-title font-weight-bold text-danger">Japan Standarization Schools</h6>
                                    <p class="card-text text-justify text-secondary small">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. 
                                    </p>
                                    <a href="#" class="btn btn-danger">Selengkapnya</a>
                                </div>
                            </div>
                            <div class="card m-1" style="width:350px">
                                <img class="card-img-top" src="<?php echo base_url() ?>/uploads/achievement/blue.png" alt="Card image">
                                <div class="card-body">
                                    <h6 class="card-title font-weight-bold text-danger">School of Excellence Award</h6>
                                    <p class="card-text text-justify text-secondary small">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. 
                                    </p>
                                    <a href="#" class="btn btn-danger">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <!-- End List of Achievements Section -->    

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