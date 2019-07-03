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
    <?php include "base/peserta_sidebar.php" ?>

    <div id="content-wrapper" class="d-flex flex-column mt-5 pt-3">
        <div id="content">
            <!-- Header Section -->
            <?php include "base/peserta_header.php";?>    

            <!-- Body Section -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Pembayaran Section -->
                        <div class="row mx-1 my-3">
                            <div class="col-md-12 py-0 px-3 text-justify py-2 font-weight-bold">
                            Proses daftar ulang dilakukan setelah pengumuman kelulusan dengan cara melakukan pelunasan biaya-biaya masuk sekolah.
                            </div>
                            <div class="col-md-12 py-0 my-3 table-responsive">
                            <table class="table">
                                <thead class="text-danger">
                                <tr>
                                    <th scope="col">Jenis Pembayaran</th>
                                    <th scope="col">Total Biaya</th>
                                    <th scope="col">Batas Pembayaran</th>
                                    <th scope="col">Bukti</th>
                                    <th scope="col">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Pendaftaran</td>
                                    <td>Rp. 150.000</td>
                                    <td>02/08/2019</td>
                                    <td>
                                    <button type="button" class="btn btn-light btn-sm" data-toggle="modal" data-target="#modalBuktiRegistrasi">Lihat</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="modalBuktiRegistrasi" tabindex="-1" role="dialog" aria-labelledby="modalBuktiRegistrasi" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Pembayaran Pendaftaran</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                           <img class="img-fluid" src="<?php echo base_url() ?>uploads/payment/registrasi.jpg">
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    </td>
                                    <td>
                                    <span class="font-weight-bold text-success">Lunas</span>
                                    <span class="font-weight-bold text-danger d-none">Belum Lunas</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pendidikan</td>
                                    <td>Rp. 650.000</td>
                                    <td>03/09/2019</td>
                                    <td>
                                    <button type="button" class="btn btn-light btn-sm" data-toggle="modal" data-target="#modalBuktiPendidikan">Upload</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="modalBuktiPendidikan" tabindex="-1" role="dialog" aria-labelledby="modalBuktiPendidikan" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Pembayaran Pendidikan</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                           <form class="form row" action="">
                                            <div class="custom-file col-md-9 ml-3">                    
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Scan Pembayaran</label>
                                            </div>
                                            <div class="text-center col-md">
                                            <button type="submit" class="btn btn-danger">Upload</button>
                                            </div>
                                           </form>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    </td>
                                    <td>
                                    <span class="font-weight-bold text-success  d-none">Lunas</span>
                                    <span class="font-weight-bold text-danger">Belum Lunas</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pendidikan Pembangunan</td>
                                    <td>Rp. 5.000.000</td>
                                    <td>03/09/2019</td>
                                    <td>
                                    <button class="btn btn-light btn-sm disabled">Upload</button>
                                    </td>
                                    <td>
                                    <span class="font-weight-bold text-success  d-none">Lunas</span>
                                    <span class="font-weight-bold text-danger">Belum Lunas</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                            <div class="col-md-12 py-0">
                                <h6 class="font-weight-bold text-danger">Tata Cara Pembayaran</h6>
                                <hr class="m-0">
                                <div class="row">
                                    <div class="col-md-4 my-3">
                                    <span class="font-weight-bold">Transfer Bank Mandiri</span>
                                    <p class="text-justify text-secondary small">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. 
                                    </p>
                                    </div>

                                    <div class="col-md-4 my-3">
                                    <span class="font-weight-bold">Transfer Bank BNI</span>
                                    <p class="text-justify text-secondary small">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. Elit ullamcorper dignissim cras tincidunt lobortis feugiat.
                                    </p>
                                    </div>

                                    <div class="col-md-4 my-3">
                                    <span class="font-weight-bold">Langsung PPDB Sekolah</span>
                                    <p class="text-justify text-secondary small">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. Elit ullamcorper dignissim cras tincidunt lobortis feugiat. Diam ut venenatis tellus in metus vulputate. Congue nisi vitae suscipit tellus mauris a diam. 
                                    </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Pembayaran Section -->
                        
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