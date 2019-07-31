<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
<div id="body-alert-danger" class="row mx-1 my-3">
    <div class="col-md-12 py-2">
        <div class="alert small alert-danger alert-dismissible fade show" role="alert">
            <span id="text-alert-danger"></span>
        </div>
    </div>
</div>

<!-- Body Section -->
<div class="container-fluid">
    <!-- Body Section -->
    <div class="container">
        <div class="row justify-content-center text-center my-3">
            <div class="col-md-4 pt-3">
                <h4>Admin Yayasan</h4>
            </div>
        </div>
        <div class="row my-3 p-3 justify-content-center text-center">
            <div class="col-md-4 bg-white border-dark border rounded-lg p-3 m-1">
                <!-- Login Form -->
                <form id="form-login" class="form needs-validation">
                    <div class="form-group mt-3 mb-4">
                        <label for="staticUsername" class="sr-only">Username</label>
                        <input name="username_admin" type="text" class="form-control"
                               id="staticUsername" placeholder="Username" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input name="password_admin" type="password" class="form-control"
                               id="inputPassword" placeholder="Password" required>
                    </div>
                    <button id="btnForm" type="submit" class="btn btn-dark btn-lg border btn-block mt-5">
                        Login
                    </button>
                </form>
                <!-- End Login Form -->

            </div>
        </div>
    </div>
</div>

<!-- Page JS  -->
<script>
    $("#body-alert-danger").hide();
    $("#form-login").submit(function(event){
        if ($('#form-login')[0].checkValidity()){
            event.preventDefault();
            var values = $(this).serialize();

            $.ajax({
                url: "<?= site_url('c_admin/login') ?>",
                type: "post",
                data: values ,
                beforeSend: function() {
                    var image = '<img class="loading-button" src="' +
                        '<?= base_url("assets/img/loading/loading-button.gif"); ?>' +
                        '" />';
                    $("#btnForm").html(image);
                },
                success: function (response) {
                    var data_json = jQuery.parseJSON(response);
                    $("#btnForm").html("Login");
                    if (data_json.tipe == 'error'){
                        $("#text-alert-danger").html(data_json.msg);
                        $("#body-alert-danger").show();
                    }else{
                        window.location.href = "<?= site_url('c_home'); ?>";
                    }
                },
                error: function() {
                    $("#text-alert-danger").html("Server Error");
                    $("#body-alert-danger").show();
                }
            });
        }

    });
</script>

</body>
</html>
