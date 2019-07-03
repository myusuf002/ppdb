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
                        <!-- Schedule Section -->
                        <div class="row mx-1 my-3">
                            <div class="col-md-12 py-0">
                            <!-- Form Registration -->
                            <form class="form row" action="" method="POST">
                                <!-- Data Diri Section -->
                                <section class="col-md-12">
                                    <div class="form-row my-2">
                                        <div class="col-md-12 px-3 text-justify py-2 font-weight-bold">
                                        Semua dokumen diunggah dengan format file PDF dan foto dengan format JPG/JPEG dengan ukuran maksimal 1 MB.
                                        </div>
                                        <div class="col-md-6 px-3 text-left ">
                                            <span class="small text-secondary">Pas Foto</span>
                                            <a class="small text-decoration-none float-right" href="#">lihat</a>
                                            <div class="custom-file">                    
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Foto 4x6</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 px-3 text-left">
                                            <span class="small text-secondary">Kartu Keluarga</span>
                                            <a class="small text-decoration-none float-right" href="#">lihat</a>
                                            <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Scan KK</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row my-2">
                                    <div class="col-md-6 px-3 text-left ">
                                            <span class="small text-secondary">Ijazah Terakhir</span>
                                            <a class="small text-decoration-none float-right" href="#">lihat</a>
                                            <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Scan Ijazah</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 px-3 text-left">
                                            <span class="small text-secondary">Nilai UAN</span>
                                            <a class="small text-decoration-none float-right" href="#">lihat</a>
                                            <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Scan Nilai</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row my-2">
                                    <div class="col-md-6 px-3 text-left ">
                                            <span class="small text-secondary">Kartu Identitas</span>
                                            <a class="small text-decoration-none float-right" href="#">lihat</a>
                                            <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Scan Identitas</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 px-3 text-left">
                                            <span class="small text-secondary">Formulir Pendaftaran</span>
                                            <a class="small text-decoration-none float-right" href="#">lihat</a>
                                            <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Scan Formulir</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row my-2">
                                    <div class="col-md-6 px-3 text-left ">
                                            <span class="small text-secondary">SK Kelakuan Baik</span>
                                            <a class="small text-decoration-none float-right" href="#">lihat</a>
                                            <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Scan SK</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 px-3 text-left">
                                            <span class="small text-secondary">SK Sehat</span>
                                            <a class="small text-decoration-none float-right" href="#">lihat</a>
                                            <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Scan SK</label>
                                            </div>
                                        </div>
                                    </div>            
                                </section>
                                <!-- End Data Diri Section -->  
                                
                                <!-- Submit Section -->
                                <section class="col-md-12 text-center py-3">
                                    <button type='submit' class="btn btn-danger px-5">Simpan</button>
                                </section>
                                <!-- End Submit Section -->
                                
                            </form> 
                            <!-- End Form Registration -->
                            </div>
                            
                        </div>
                        <!-- End Schedule Section -->
                        
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