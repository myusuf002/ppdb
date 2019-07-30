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
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
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
    
    <!-- Nav Item - Yayasan Collapse Menu -->
    <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseYayasan"
       aria-expanded="true" aria-controls="collapseYayasan">
        <i class="fas fa-fw fa-landmark"></i>
        <span>Yayasan</span>
    </a>
    <div id="collapseYayasan" class="collapse" aria-labelledby="headingYayasan" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Kelola Yayasan</h6>
        <a class="collapse-item tombol" id="c_peserta_data_diri">Profil</a>
        <a class="collapse-item tombol" id="c_peserta_data_sekolah_asal">Pendidikan</a>
        <a class="collapse-item tombol" id="c_peserta_data_sekolah_asal">Fasilitas</a>
        <a class="collapse-item tombol" id="c_peserta_data_sekolah_asal">Penghargaan</a>
    </div>
    </li>

    <!-- Nav Item - Sekolah Collapse Menu -->
    <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSekolah"
       aria-expanded="true" aria-controls="collapseSekolah">
        <i class="fas fa-fw fa-graduation-cap"></i>
        <span>Sekolah</span>
    </a>
    <div id="collapseSekolah" class="collapse" aria-labelledby="headingSekolah" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Kelola Sekolah</h6>
        <a class="collapse-item tombol" id="c_peserta_data_diri">Info Sekolah</a>
        <a class="collapse-item tombol" id="c_peserta_data_sekolah_asal">Aturan Sekolah</a>
        <a class="collapse-item tombol" id="c_peserta_data_sekolah_asal">Biaya Sekolah</a>
        <a class="collapse-item tombol" id="c_peserta_data_sekolah_asal">Pendaftaran Sekolah</a>
    </div>
    </li>

    <!-- Nav Item - Veritication Collapse Menu -->
    <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseVeritication"
       aria-expanded="true" aria-controls="collapseVeritication">
        <i class="fas fa-fw fa-check-square"></i>
        <span>Verifikasi</span>
    </a>
    <div id="collapseVeritication" class="collapse" aria-labelledby="headingVeritication" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Verifikasi Data</h6>
        <a class="collapse-item tombol" id="c_peserta_data_diri">Data Diri</a>
        <a class="collapse-item tombol" id="c_peserta_data_sekolah_asal">Data Berkas</a>
    </div>
    </li>

    <!-- Nav Item - Registration Collapse Menu -->
    <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRegistration"
       aria-expanded="true" aria-controls="collapseRegistration">
        <i class="fas fa-fw fa-address-card"></i>
        <span>Pendaftaran</span>
    </a>
    <div id="collapseRegistration" class="collapse" aria-labelledby="headingRegistration" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Informasi Pendaftaran</h6>
        <a class="collapse-item tombol" id="c_peserta_data_sekolah_asal">Akun Peserta</a>
        <a class="collapse-item tombol" id="c_peserta_data_sekolah_asal">Jadwal Penting</a>
        <a class="collapse-item tombol" id="c_peserta_data_sekolah_asal">Tahap Pendaftaran</a>
        <a class="collapse-item tombol" id="c_peserta_data_sekolah_asal">Daftar Ulang</a>
    </div>
    </li>


    <!-- Nav Item - Information Collapse Menu -->
    <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInformation"
       aria-expanded="true" aria-controls="collapseInformation">
        <i class="fas fa-fw fa-info-circle"></i>
        <span>Informasi</span>
    </a>
    <div id="collapseInformation" class="collapse" aria-labelledby="headingInformation" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Kelola Informasi</h6>
        <a class="collapse-item tombol" id="c_peserta_data_sekolah_asal">Petunjuk Pendaftaran</a>
        <a class="collapse-item tombol" id="c_peserta_data_sekolah_asal">Jalur Pendaftaran</a>
        <a class="collapse-item tombol" id="c_peserta_data_sekolah_asal">Biaya Pendidikan</a>
        <a class="collapse-item tombol" id="c_peserta_data_sekolah_asal">Beasiswa</a>
        <a class="collapse-item tombol" id="c_peserta_data_diri">Pengumuman</a>
        <a class="collapse-item tombol" id="c_peserta_data_sekolah_asal">FAQ</a>
    </div>
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
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInformasi" aria-expanded="true" aria-controls="collapseInformasi">
        <i class="fas fa-fw fa-user"></i>
        <span>Akun Admin</span>
    </a>
    <div id="collapseInformasi" class="collapse" aria-labelledby="headingInformasi" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Informasi Akun:</h6>
        <a class="collapse-item tombol" id="c_peserta_pengaturan">Pengaturan</a>
        <a class="collapse-item" href="<?php echo site_url("c_home_admin/logout"); ?>">Keluar</a>
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