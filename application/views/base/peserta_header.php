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
<nav class="navbar navbar-expand fixed-top navbar-light bg-light border-bottom topbar pr-0">
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
    <a class="navbar-brand ml-2" href="<?php echo site_url("Peserta"); ?>">
        <img src="<?php echo base_url(); ?>assets/img/logo/logo-name-ppdb.png"  height="30" class="d-none d-sm-block">
        <span class="d-block d-sm-none font-italic pt-1 text-danger ">i-PPDB </span>
    </a>
    
    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Nav Item - Alerts -->
        <li class="nav-item dropdown mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw text-dark"></i>
            <!-- Counter - Alerts -->
            <span class="badge badge-danger badge-counter px-2 py-2 font-italic">3</span>
            </a>
            <!-- Dropdown - Alerts -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">
                Notifications
            </h6>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="mr-3">
                    <div class="icon-circle bg-success">
                        <i class="fas fa-donate text-white"></i>
                    </div>
                </div>
                <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="mr-3">
                    <div class="icon-circle bg-success">
                        <i class="fas fa-donate text-white"></i>
                    </div>
                </div>
                <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="mr-3">
                    <div class="icon-circle bg-warning">
                        <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                </div>
                <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                </div>
            </a>
            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
            </div>
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown mr-2">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-danger small"><?php echo $nama_peserta; ?></span>
                <img class="img-profile rounded-circle" src="<?php echo base_url() ?>assets/img/user/<?php echo $foto_peserta; ?>">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>

<!-- End Header Peserta -->

<!-- Page JS  -->
<script src=""></script>

</body>
</html>