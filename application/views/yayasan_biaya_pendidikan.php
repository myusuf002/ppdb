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
            <div class="container-fluid mt-5">
                <div class="row px-3">
                <h5 class="font-weight-bold">Sekolah Menengah Kejuruan</h5>
                <div class="col-md-12 py-0 my-3 table-responsive">
                    <!-- <h6 class="font-weight-bold text-danger">Persyaratan</h6>
                    <hr class="m-0"> -->
                    <table class="table">
                        <thead class="text-danger">
                        <tr>
                            <th scope="col">Jalur</th>
                            <th scope="col">Pendaftaran</th>
                            <th scope="col">Pendidikan</th>
                            <th scope="col">Pembangunan</th>
                            <th scope="col">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Reguler</td>
                            <td>Rp. 150.000</td>
                            <td>Rp. 650.000</td>
                            <td>Rp. 5.600.000</td>
                            <td>Rp. 6.400.000</td>
                        </tr>
                        <tr>
                            <td>Prestasi</td>
                            <td>Rp. 100.000</td>
                            <td>Rp. 650.000</td>
                            <td>Rp. 5.000.000</td>
                            <td>Rp. 6.750.000</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                </div>
                <div class="row px-3">
                <h5 class="font-weight-bold">Sekolah Menengah Atas</h5>
                <div class="col-md-12 py-0 my-3 table-responsive">
                    <!-- <h6 class="font-weight-bold text-danger">Persyaratan</h6>
                    <hr class="m-0"> -->
                    <table class="table">
                        <thead class="text-danger">
                        <tr>
                            <th scope="col">Jalur</th>
                            <th scope="col">Pendaftaran</th>
                            <th scope="col">Pendidikan</th>
                            <th scope="col">Pembangunan</th>
                            <th scope="col">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Reguler</td>
                            <td>Rp. 150.000</td>
                            <td>Rp. 650.000</td>
                            <td>Rp. 5.600.000</td>
                            <td>Rp. 6.400.000</td>
                        </tr>
                        <tr>
                            <td>Prestasi</td>
                            <td>Rp. 100.000</td>
                            <td>Rp. 650.000</td>
                            <td>Rp. 5.000.000</td>
                            <td>Rp. 6.750.000</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                </div>
                <div class="row px-3">
                <h5 class="font-weight-bold">Sekolah Menengah Pertama</h5>
                <div class="col-md-12 py-0 my-3 table-responsive">
                    <!-- <h6 class="font-weight-bold text-danger">Persyaratan</h6>
                    <hr class="m-0"> -->
                    <table class="table">
                        <thead class="text-danger">
                        <tr>
                            <th scope="col">Jalur</th>
                            <th scope="col">Pendaftaran</th>
                            <th scope="col">Pendidikan</th>
                            <th scope="col">Pembangunan</th>
                            <th scope="col">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Reguler</td>
                            <td>Rp. 150.000</td>
                            <td>Rp. 650.000</td>
                            <td>Rp. 5.600.000</td>
                            <td>Rp. 6.400.000</td>
                        </tr>
                        <tr>
                            <td>Prestasi</td>
                            <td>Rp. 100.000</td>
                            <td>Rp. 650.000</td>
                            <td>Rp. 5.000.000</td>
                            <td>Rp. 6.750.000</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                </div>
                <div class="row px-3">
                <h5 class="font-weight-bold">Sekolah Dasar</h5>
                <div class="col-md-12 py-0 my-3 table-responsive">
                    <!-- <h6 class="font-weight-bold text-danger">Persyaratan</h6>
                    <hr class="m-0"> -->
                    <table class="table">
                        <thead class="text-danger">
                        <tr>
                            <th scope="col">Jalur</th>
                            <th scope="col">Pendaftaran</th>
                            <th scope="col">Pendidikan</th>
                            <th scope="col">Pembangunan</th>
                            <th scope="col">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Reguler</td>
                            <td>Rp. 150.000</td>
                            <td>Rp. 650.000</td>
                            <td>Rp. 5.600.000</td>
                            <td>Rp. 6.400.000</td>
                        </tr>
                        <tr>
                            <td>Prestasi</td>
                            <td>Rp. 100.000</td>
                            <td>Rp. 650.000</td>
                            <td>Rp. 5.000.000</td>
                            <td>Rp. 6.750.000</td>
                        </tr>
                        </tbody>
                    </table>
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