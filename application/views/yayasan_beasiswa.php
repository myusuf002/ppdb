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
                        <!-- List of Schoolarship Section -->
                        <a href="#" class="text-decoration-none text-dark">
                        <div class="media border p-2 my-3 mx-1">
                            <img src="<?php echo base_url() ?>uploads/schoolarship/tahfidz.jpeg" class="text-center  m-0 d-none d-sm-block align-self-center rounded" style="width:128px">
                            <div class="media-body mx-3">
                                <h6 class="text-left">Beasiswa Tahfidz</h6>
                                <small class="text-left text-danger">Deadline: 20 Juli 2019</small>
                                <p class="text-secondary  text-justify">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. Elit ullamcorper dignissim cras tincidunt lobortis feugiat.
                                </p>
                            </div>
                        </div>
                        </a>
                        <a href="#" class="text-decoration-none text-dark">
                        <div class="media border p-2 my-3 mx-1">
                            <img src="<?php echo base_url() ?>uploads/schoolarship/prestasi.jpeg" class="text-center  m-0 d-none d-sm-block align-self-center rounded" style="width:128px">
                            <div class="media-body mx-3">
                                <h6 class="text-left">Beasiswa Siswa Berprestasi</h6>
                                <small class="text-left text-danger">Deadline: 15 Juli 2019</small>
                                <p class="text-secondary  text-justify">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. Elit ullamcorper dignissim cras tincidunt lobortis feugiat.
                                </p>
                            </div>
                        </div>
                        </a>
                        <a href="#" class="text-decoration-none text-dark">
                        <div class="media border p-2 my-3 mx-1">
                            <img src="<?php echo base_url() ?>uploads/schoolarship/inovasi.jpeg" class="text-center  m-0 d-none d-sm-block align-self-center rounded" style="width:128px">
                            <div class="media-body mx-3">
                                <h6 class="text-left">Beasiswa Inovasi</h6>
                                <small class="text-left text-danger">Deadline: 2 Agustus 2019</small>
                                <p class="text-secondary  text-justify">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. Elit ullamcorper dignissim cras tincidunt lobortis feugiat.
                                </p>
                            </div>
                        </div>
                        <a href="#" class="text-decoration-none text-dark">
                        <div class="media border p-2 my-3 mx-1">
                            <img src="<?php echo base_url() ?>uploads/schoolarship/tahfidz.jpeg" class="text-center  m-0 d-none d-sm-block align-self-center rounded" style="width:128px">
                            <div class="media-body mx-3">
                                <h6 class="text-left">Beasiswa Youthmanual</h6>
                                <small class="text-left text-danger">Telah Berakhir</small>
                                <p class="text-secondary  text-justify">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. Elit ullamcorper dignissim cras tincidunt lobortis feugiat.
                                </p>
                            </div>
                        </div>
                        </a>
                        <!-- End List of Facilities Section -->
       
                        
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