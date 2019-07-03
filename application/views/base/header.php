<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Page CSS -->
    <link href="<?php echo base_url(); ?>assets/css/header.css" rel="stylesheet">

</head>
<body>

<!--  Header Peserta -->
<nav class="navbar navbar-expand fixed-top navbar-light bg-light border-bottom topbar">
     <!-- Navigation Button -->
    <div class="row">
        <div class="col-md-12 my-2 ">
            <!-- Sidebar Toggle (Topbar) -->
            <div id="sidebarToggleTop" class="d-md-none text-center">
                <i class="fa  fa-lg fa-bars text-dark pt-3"></i>                
            </div>                            
        </div>
    </div>
    <!-- End Navigation Button -->
    
    <!-- Image and text Brand -->
    <a class="navbar-brand ml-2" href="<?php echo base_url(); ?>">
        <img src="<?php echo base_url(); ?>assets/img/logo/logo-name-ppdb.png"  height="30" class="d-none d-sm-block">
        <span class="d-block d-sm-none font-italic pt-1 text-danger ">i-PPDB </span>
    </a>
    
    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Login -->
        <li class="nav-item dropdown">
            <a class="nav-link" href="<?php echo site_url("Peserta/login") ?>">
                <span class="mr-2 d-none d-lg-inline text-danger small">Login</span>
                <i class="fas fa-sign-in-alt fa-fw text-danger"></i>
            </a>
        </li>

    </ul>

</nav>

<!-- End Header Peserta -->

<!-- Page JS  -->
<script src=""></script>

</body>
</html>