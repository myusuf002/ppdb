<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/logo/logo-ppdb.png'); ?>">

    <?php include "base/cdn_styles.php"; ?>
    <link href="<?php echo base_url('assets/css/main.css'); ?>" rel="stylesheet">
</head>
<body id="page-top">

    <div id="wrapper">
        <!-- Sidebar Section -->
        <?php include "base/yayasan_sidebar.php" ?>

        <div id="content-wrapper" class="d-flex flex-column mt-5 pt-3">
            <div id="content">
                    <div id="isi"></div>
            </div>
        </div>
    </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
    $(document).ready(function(){

        function load_page_details()
        {
            $.ajax({
                url:"<?php echo site_url('c_yayasan/petunjukPendaftaran'); ?>",
            }).done(function(data) { // data what is sent back by the php page
                $('#isi').html(data); // display data
            });
        }

        load_page_details();

        $('#isi').click(function(){
            var page_id = $(this).attr("id");
            load_page_details(page_id);
        });

    });
</script>

</body>
</html>
