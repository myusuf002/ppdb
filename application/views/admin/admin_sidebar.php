<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Page CSS -->
    <link href="<?php echo base_url('assets/css/admin_sidebar.css'); ?>" rel="stylesheet">

</head>
<body>

<!-- Start Sidebar Peserta -->
<ul class="navbar-nav sidebar sidebar-dark bg-dark pt-5" id="accordionSidebar">
    <!-- Heading -->
    <div class= mt-4></div>
    <div class="sidebar-heading mt-3 d-none d-sm-block">
        <span class="text-light">Yayasan</span>
    </div>

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= site_url('c_home'); ?>">
    <div class="sidebar-brand-icon">
        <img src="<?= base_url('uploads/foundation/logo-foundation.png'); ?>" width="30" height="30"
             class="d-inline-block align-top">
    </div>
    <div class="sidebar-brand-text mx-3">
        <span class="font-weight-bold">Telkom Schools</span>
    </div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    
    <!-- Nav Item - Tables Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseYayasan"
           aria-expanded="true" aria-controls="collapseYayasan">
            <i class="fas fa-fw fa-landmark"></i>
            <span>Tables</span>
        </a>
        <div id="collapseYayasan" class="collapse" aria-labelledby="headingYayasan" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Kelola Table</h6>
            <?php foreach ($list_table as $table): ?>
                <a class="collapse-item tombol" id="c_admin_table/index/<?= $table['TABLE_NAME']; ?>">
                    <?= $table['TABLE_NAME']; ?>
                </a>
            <?php endforeach; ?>
        </div>
    </li>

    <!-- Nav Item - Dasar Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link tombol" id="c_admin_token">
            <i class="fas fa-fw fa-user-cog"></i>
            <span>Token</span>
        </a>
    </li>

    <!-- Nav Item - Dasar Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link tombol" id="administrator">
            <i class="fas fa-fw fa-user-cog"></i>
            <span>Administrator</span>
        </a>
    </li>

    <!-- Nav Item - Informasi Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInformasi"
           aria-expanded="true" aria-controls="collapseInformasi">
            <i class="fas fa-fw fa-user"></i>
            <span>Akun Admin</span>
        </a>
        <div id="collapseInformasi" class="collapse" aria-labelledby="headingInformasi" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Informasi Akun:</h6>
            <a class="collapse-item tombol" id="c_peserta_pengaturan">Pengaturan</a>
            <a class="collapse-item" href="<?php echo site_url("c_home/admin_logout"); ?>">Keluar</a>
            </div>
        </div>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>


<!-- End Sidebar Peserta -->

<!-- Page JS  -->
<script src=""></script>

</body>
</html>