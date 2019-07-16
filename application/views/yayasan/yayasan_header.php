<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <!-- Page CSS -->
    <link href="<?= base_url('assets/css/header.css'); ?>" rel="stylesheet">
</head>
<body>
    <!--  Header Yayasan -->
    <nav class="navbar navbar-expand fixed-top navbar-light bg-light border-bottom topbar">
         <!-- Navigation Button -->
        <div class="row">
            <div class="col-md-12 my-2 ">
                <!-- Sidebar Toggle (Topbar) -->
                <div id="sidebarToggleTop" class="d-md-none text-center">
                    <i class="fa  fa-lg fa-bars text-dark pt-3"></i>
                </div>
            </div>
        </div>
        <!-- End Navigation Button -->

        <!-- Image and text Brand -->
        <a class="navbar-brand ml-2" href="<?= base_url(); ?>">
            <img src="<?= base_url('assets/img/logo/logo-name-ppdb.png'); ?>"
                 height="30" class="d-none d-sm-block">
            <span class="d-block d-sm-none font-italic pt-1 text-danger ">i-PPDB</span>
        </a>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Login -->
            <li class="nav-item dropdown">
                <a class="nav-link tombol" id="c_peserta/login">
                    <span class="mr-2 d-none d-lg-inline text-danger small">Login</span>
                    <i class="fas fa-sign-in-alt fa-fw text-danger"></i>
                </a>
            </li>

        </ul>

    </nav>
    <!-- End Header Yayasan -->

    <!-- Page JS  -->
    <script src=""></script>

</body>
</html>