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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <!-- List of FAQ Section -->
                        <div class="media border-bottom p-2 my-3 mx-1">
                            <div class="media-body mx-3">
                                <a class="text-decoration-none" data-toggle="collapse" href="#faq_1" role="button" aria-expanded="false" aria-controls="faq_1">
                                    <h5 class="text-left text-danger">Kapan pendaftaran sekolah Dibuka?</h5>
                                </a>  
                                <p class="collapse text-secondary text-justify" id="faq_1">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. Elit ullamcorper dignissim cras tincidunt lobortis feugiat.
                                </p>
                            </div>
                        </div>
                        <div class="media border-bottom p-2 my-3 mx-1">
                            <div class="media-body mx-3">
                                <a class="text-decoration-none" data-toggle="collapse" href="#faq_2" role="button" aria-expanded="false" aria-controls="faq_2">
                                    <h5 class="text-left text-danger">Bagaimana cara pembayaran biaya pendaftaran?</h5>
                                </a>
                                <p class="collapse text-secondary text-justify" id="faq_2">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                </p>
                            </div>
                        </div>
                        <div class="media border-bottom p-2 my-3 mx-1">
                            <div class="media-body mx-3">
                                <a class="text-decoration-none" data-toggle="collapse" href="#faq_3" role="button" aria-expanded="false" aria-controls="faq_3">
                                    <h5 class="text-left text-danger">Berapa kuota pendaftar yang diterima?</h5>
                                </a>
                                <p class="collapse text-secondary text-justify" id="faq_3">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut. 
                                </p>
                            </div>
                        </div>
                        <div class="media border-bottom p-2 my-3 mx-1">
                            <div class="media-body mx-3"> 
                                <a class="text-decoration-none" data-toggle="collapse" href="#faq_4" role="button" aria-expanded="false" aria-controls="faq_4">
                                    <h5 class="text-left text-danger">Bagaimana cara mendaftar beasiswa?</h5>
                                </a>
                                <p class="collapse text-secondary text-justify" id="faq_4">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Cursus risus at ultrices mi tempus imperdiet nulla. Ut pharetra sit amet aliquam id diam. Tortor id aliquet lectus proin nibh nisl condimentum. Risus feugiat in ante metus dictum. Cras tincidunt lobortis feugiat vivamus at. Iaculis at erat pellentesque adipiscing commodo elit at imperdiet. Nunc consequat interdum varius sit amet mattis. Ut enim blandit volutpat maecenas volutpat blandit aliquam etiam erat. Vitae tempus quam pellentesque nec nam. Cras adipiscing enim eu turpis. Accumsan sit amet nulla facilisi morbi tempus iaculis urna. In nibh mauris cursus mattis molestie a iaculis at erat. Arcu bibendum at varius vel pharetra vel turpis nunc eget. Vitae turpis massa sed elementum tempus egestas sed sed. Vitae suscipit tellus mauris a diam maecenas. Fusce ut placerat orci nulla. Nullam ac tortor vitae purus faucibus ornare suspendisse sed nisi. Ac orci phasellus egestas tellus. Gravida arcu ac tortor dignissim convallis aenean.
                                </p>
                            </div>
                        </div>
                        <div class="media border-bottom p-2 my-3 mx-1">
                            <div class="media-body mx-3"> 
                                <a class="text-decoration-none" data-toggle="collapse" href="#faq_5" role="button" aria-expanded="false" aria-controls="faq_5">
                                    <h5 class="text-left text-danger">Dimana pengumuman kelulusan dilihat?</h5>
                                </a>
                                <p class="collapse text-secondary text-justify" id="faq_5">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. Elit ullamcorper dignissim cras tincidunt lobortis feugiat.
                                </p>
                            </div>
                        </div>
                        <div class="media border-bottom p-2 my-3 mx-1">
                            <div class="media-body mx-3"> 
                                <a class="text-decoration-none" data-toggle="collapse" href="#faq_6" role="button" aria-expanded="false" aria-controls="faq_6">
                                    <h5 class="text-left text-danger">Apakah ada jalur pendaftaran mandiri?</h5>
                                </a>
                                <p class="collapse text-secondary text-justify" id="faq_6">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. Elit ullamcorper dignissim cras tincidunt lobortis feugiat.
                                </p>
                            </div>
                        </div>

                        <!-- End List of FAQ Section -->
       
                        
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