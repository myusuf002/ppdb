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
    <!-- Body Section -->
    <div class="container-fluid">
        <!-- Body Section -->
        <div class="container">
            <div class="row justify-content-center text-center my-3">
                <div class="col-md-4 pt-3">
                    <a class="navbar-brand ml-2" href="<?php echo base_url(); ?>">
                        <img src="<?php echo base_url('uploads/foundation/logo-name-foundation.png'); ?>"  height="42">
                    </a>
                </div>
            </div>
            <div class="row my-3 p-3 justify-content-center text-center">
                <div class="col-md-4 bg-white border-danger border rounded-lg p-3 m-1">
                    <!-- Login Form -->
                    <form class="form needs-validation" action="" method="POST" novalidate>
                        <div class="form-group mt-3 mb-4">
                            <label for="staticUsername" class="sr-only">Username</label>
                            <input type="text" class="form-control" id="staticUsername" placeholder="Username" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="inputPassword" class="sr-only">Password</label>
                            <input type="password" class="form-control" id="inputPassword" placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-danger btn-lg border btn-block mt-5">Login</button>
                    </form>
                    <!-- End Login Form -->

                    <!-- Login Options Link -->
                    <div class="row mt-3 small font-italic">
                        <div class="col text-left">
                            <a href="#" class="text-decoration-none text-dark">Forgot password?</a>
                        </div>
                        <div class="col text-right">
                            <a class="text-decoration-none text-dark" href="<?php echo site_url(); ?>?page=c_yayasan/registrasi">Create account</a>
                        </div>
                    </div>
                    <!-- End Login Options Link -->

                </div>
            </div>
        </div>
    </div>

    <!-- Page JS  -->
    <script src=""></script>
</body>
</html>
