<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link rel="shortcut icon" href="<?= base_url('assets/img/logo/logo-ppdb.png'); ?>">

    <!-- Main CDN Styles -->
    <?php $this->load->view('cdn_styles'); ?>

    <!-- Main CSS -->
    <link href="<?= base_url('assets/css/main.css'); ?>" rel="stylesheet">

</head>
<body id="page-top">
    <div id="wrapper">
            <!-- Sidebar Section -->
            <?php $this->load->view('admin/admin_sidebar.php'); ?>

            <div id="content-wrapper" class="d-flex flex-column mt-5 pt-3 px-0 mx-0">
                <div id="content">
                    <!-- Header Section -->
                    <?php $this->load->view('admin/admin_header'); ?>

                    <!-- Body Section -->
                    <div class="container-fluid px-3">
                        <div id="loading" class="my-3"></div>
                        <div id="loading-image">
                            <img class="loading-image" src="<?= base_url('assets/img/loading/loading-page.gif'); ?>" />
                        </div>
                        <div id="ajax_content"></div>
                    </div>

                </div>
            </div>
        </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Main CDN JS -->
    <?php $this->load->view('cdn_scripts'); ?>
    <!-- Main JS  -->
    <script src="<?= base_url('assets/js/main.js'); ?>"></script>

    <script>
        $(document).ready(function(){
            function load_page_details() {
                var url_string = window.location.href;
                var url = new URL(url_string);
                var controller_name = url.searchParams.get("page");
                <?php if ($this->session->has_userdata('admin_logged_in')): ?>
                    if (controller_name == null) url_ajax = "<?= site_url('c_admin'); ?>";
                    else url_ajax = "<?= site_url(); ?>/" + controller_name;
                <?php else: ?>
                    url_ajax = "<?= site_url('c_admin/login'); ?>";
                <?php endif; ?>
                $.ajax({
                    url: url_ajax,
                    beforeSend: function() {
                        $("#loading").show();
                        $("#loading-image").show();
                    },
                }).done(function(data) {                 // data what is sent back by the php page
                    $('#ajax_content').html(data);       // display data
                    $("#loading-image").hide();
                    $("#loading").hide();
                });
            }

            load_page_details();

            $('.tombol').click(function(){
                var page = $(this).attr("id");
                window.history.pushState("", "", "<?= site_url(); ?>?page=" + page);
                load_page_details();
                $('.tombol').removeClass("active");
                $(this).addClass("active");
            });

        });
    </script>

</body>
</html>