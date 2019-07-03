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
    <link href="<?php echo base_url(); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    
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
                        <!-- Important Announcement Section -->
                        <div class="row mx-1 my-3 border-left border-right justify-content-center border-light">
                            <div class="col-md-12 py-2">
                                <h6 class="font-weight-bold text-dark">Pengumuman Penting</h6>
                                <hr class="m-0">
                            </div>
                            <div class="col-md-10">
                                <!-- Announcement Carousel -->
                                <div id="announcementCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ul class="carousel-indicators">
                                    <li data-target="#announcementCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#announcementCarousel" data-slide-to="1"></li>
                                    <li data-target="#announcementCarousel" data-slide-to="2"></li>
                                    </ul>

                                    <!-- The slideshow -->
                                    <div class="carousel-inner">
                                        <div class="carousel-item text-center active">
                                            <img class="img-fluid text-danger" src="<?php echo base_url(); ?>uploads/announcement/pendaftaran-SMA.png" alt="Pendaftaran SMA telah dibuka!">
                                            <div class="carousel-caption">
                                                <p class="d-none d-sm-block">Pendaftaran SMA telah dibuka!</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item text-center">
                                            <img class="img-fluid text-danger" src="<?php echo base_url(); ?>uploads/announcement/peresmian-gedung.png" alt="Peresmian gedung serbaguna SMP!">
                                            <div class="carousel-caption">
                                                <p class="d-none d-sm-block">Peresmian gedung serbaguna SMP!</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item text-center">
                                            <img class="img-fluid text-danger" src="<?php echo base_url(); ?>uploads/announcement/beasiswa-ozai.png" alt="Beasiswa Ozai di Telkom Schools!">
                                            <div class="carousel-caption">
                                                <p class="d-none d-sm-block">Beasiswa Ozai di Telkom Schools!</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Left and right controls -->
                                    <a class="carousel-control-prev" href="#announcementCarousel" data-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </a>
                                    <a class="carousel-control-next" href="#announcementCarousel" data-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </a>
                                </div>
                                <!-- End Announcement Carousel -->
                            </div>
                        </div>
                        <!-- End Important Announcement Section -->

                        <!-- List of Announcement Section -->
                        <div class="row mx-1 my-3 text-center">
                            <div class="col-md-12 py-2">
                                <h6 class="font-weight-bold text-dark text-left">Pengumuman Lainnya</h6>
                                <hr class="m-0">
                            </div>

                            <div class="col-md-12 table-responsive small">
                                <table class="table" id="dataTable" width="100%" cellspacing="0">
                                <thead><tr>
                                    <td>Tanggal</td>
                                    <td>Judul</td>
                                    <td>Keterangan</td>
                                    <td>Poster</td>
                                </tr></thead>
                                <tbody>
                                <tr>
                                    <td>20-05-2019</td>
                                    <td>Beasiswa Ozai di Telkom Schools!</td>
                                    <td>Beasiswa penuh Ozai buat kamu yang mendaftar di Telkom Schools.</td>
                                    <td>
                                        <!-- Extra large modal -->
                                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#poster_3">
                                            <span class="fas fa-file-image mx-2 my-1"></span>
                                        </button>

                                        <div id="poster_3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl modal-dialog-centered">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">Poster Pengumuman</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body"><img class="img-fluid" src="<?php echo base_url() ?>/uploads/announcement/beasiswa-ozai.png"></div>
                                            </div>
                                        </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10-06-2019</td>
                                    <td>Peresmian gedung serbaguna SMP!</td>
                                    <td>Gedung Serbaguna SMP selesai dibangun dan segera diresmikan.</td>
                                    <td>
                                        <!-- Extra large modal -->
                                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#poster_2">
                                            <span class="fas fa-file-image mx-2 my-1"></span>
                                        </button>

                                        <div id="poster_2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl modal-dialog-centered">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">Poster Pengumuman</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body"><img class="img-fluid" src="<?php echo base_url() ?>/uploads/announcement/peresmian-gedung.png"></div>
                                            </div>
                                        </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>23-07-2019</td>
                                    <td>Pendaftaran SMA telah dibuka!</td>
                                    <td>Daftarkan diri anda menjadi bagian dari SMA Telkom angkatan 2019.</td>
                                    <td>
                                        <!-- Extra large modal -->
                                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#poster_1">
                                            <span class="fas fa-file-image mx-2 my-1"></span>
                                        </button>

                                        <div id="poster_1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl modal-dialog-centered">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">Poster Pengumuman</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body"><img class="img-fluid" src="<?php echo base_url() ?>/uploads/announcement/pendaftaran-SMA.png"></div>
                                            </div>
                                        </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                                </table>
                            </div>

                        </div>
                        <!-- End List of Schools Section -->    

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
<script src="<?php echo base_url(); ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<script>
$(document).ready(function() {
    $('#dataTable').DataTable();
});
</script>

</body>
</html>