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
<body id="page-top" class="bg-light">
<div id="wrapper">
    <!-- Sidebar Section -->
    <?php // include "base/yayasan_sidebar.php" ?>

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <!-- Body Section -->
            <div class="container">
                <div class="row justify-content-center text-center my-3">
                    <div class="col-md-4 pt-3">
                    <a class="navbar-brand ml-2" href="<?php echo base_url(); ?>">
                        <img src="<?php echo base_url(); ?>uploads/foundation/logo-name-foundation.png"  height="42">
                    </a>
                    </div>
                </div>
                <div class="row my-3 p-3 justify-content-center text-center">
                    <div class="col-md-4 bg-white border-danger border rounded-lg p-3 m-1">
                        <!-- Login Form -->
                        <form class="form needs-validation" action="" method="POST" novalidate>
                            <div class="form-group mt-3 mb-4">
                                <label for="staticUsername" class="sr-only">Username</label>
                                <input type="text" class="form-control" id="staticUsername" placeholder="Username" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="inputPassword" class="sr-only">Password</label>
                                <input type="password" class="form-control" id="inputPassword" placeholder="Password" required>
                            </div>
                            <button type="submit" class="btn btn-danger btn-lg border btn-block mt-5">Login</button>             
                        </form>
                        <!-- End Login Form -->
                        
                        <!-- Login Options Link -->
                        <div class="row mt-3 small font-italic">
                            <div class="col text-left">
                                <a href="#" class="text-decoration-none text-dark">Forgot password?</a>
                            </div>
                            <div class="col text-right">
                                <a href="<?php echo site_url("Yayasan/pendaftaran") ?>" class="text-decoration-none text-dark">Create account</a>
                            </div>
                        </div>
                        <!-- End Login Options Link -->

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