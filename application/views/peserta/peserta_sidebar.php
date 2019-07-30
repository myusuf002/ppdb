<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Page CSS -->
    <link href="<?php echo base_url('assets/css/yayasan_sidebar.css'); ?>" rel="stylesheet">

</head>
<body>

<!-- Start Sidebar Peserta -->
<ul class="navbar-nav sidebar sidebar-light bg-light pt-5" id="accordionSidebar">
    <!-- Heading -->
    <div class= mt-4></div>
    <div class="sidebar-heading mt-3 d-none d-sm-block">
    Yayasan
    </div>

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url(); ?>">
    <div class="sidebar-brand-icon">
        <img src="<?php echo base_url('uploads/foundation/logo-foundation.png'); ?>" width="30" height="30"
             class="d-inline-block align-top">
    </div>
    <div class="sidebar-brand-text mx-3">
        <span class="font-weight-bold">Telkom Schools</span>
        
    </div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - Registration Collapse Menu -->
    <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRegistration"
       aria-expanded="true" aria-controls="collapseRegistration">
        <i class="fas fa-fw fa-list"></i>
        <span>Data Peserta</span>
    </a>
    <div id="collapseRegistration" class="collapse" aria-labelledby="headingRegistration" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Kelengkapan Data:</h6>
        <a class="collapse-item tombol" id="c_peserta_data_diri">Data Diri</a>
        <a class="collapse-item tombol" id="c_peserta_data_sekolah_asal">Data Sekolah Asal</a>
    </div>
    </li>

    <!-- Nav Item - About Collapse Menu -->
    <li class="nav-item">
    <a class="nav-link tombol" id="c_peserta_berkas">
        <i class="fas fa-fw fa-folder"></i>
        <span>Berkas Peserta</span>
    </a>
    </li>


    <!-- Nav Item - Pendidikan Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link tombol" id="c_peserta_daftar_ulang">
        <i class="fas fa-fw fa-share"></i>
        <span>Daftar Ulang</span>
    </a>
    
    </li>

    <!-- Nav Item - Informasi Collapse Menu -->
    <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInformasi" aria-expanded="true" aria-controls="collapseInformasi">
        <i class="fas fa-fw fa-user"></i>
        <span>Akun Peserta</span>
    </a>
    <div id="collapseInformasi" class="collapse" aria-labelledby="headingInformasi" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Informasi Akun:</h6>
        <a class="collapse-item tombol" id="c_peserta_aktivasi_akun">Aktivasi Akun</a>
        <a class="collapse-item tombol" id="c_peserta_pengaturan">Pengaturan</a>
        <a class="collapse-item" href="<?= site_url("c_home/logout"); ?>">Keluar</a>
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