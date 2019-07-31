<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <!-- Page CSS -->
    <link href="<?= base_url('assets/css/admin_header.css'); ?>" rel="stylesheet">
</head>
<body>
    <!--  Header Peserta -->
    <nav class="navbar navbar-expand fixed-top navbar-dark bg-dark border-bottom dark topbar pr-0">
        <!-- Navigation Button -->
        <div class="row">
            <div class="col-md-12 my-2 ">
                <!-- Sidebar Toggle (Topbar) -->
                <div id="sidebarToggleTop" class="d-md-none text-center">
                    <i class="fa  fa-lg fa-bars text-light pt-3"></i>
                </div>
            </div>
        </div>
        <!-- End Navigation Button -->

        <!-- Image and text Brand -->
        <a class="navbar-brand ml-2" href="<?= site_url('c_home'); ?>">
            <img src="<?= base_url('assets/img/logo/logo-name-ppdb.png'); ?>"  height="30"
                 class="d-none d-sm-block">
            <span class="d-block d-sm-none font-italic pt-1 text-light ">i-PPDB</span>
        </a>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw text-light"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter px-2 py-2 font-italic">3</span>
                </a>
                <!-- Dropdown - Alerts -->
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                     aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                    Notifications
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-success">
                            <i class="fas fa-donate text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">December 7, 2019</div>
                        $290.29 has been deposited into your account!
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-success">
                            <i class="fas fa-donate text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">December 7, 2019</div>
                        $290.29 has been deposited into your account!
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-warning">
                            <i class="fas fa-exclamation-triangle text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">December 2, 2019</div>
                        Spending Alert: We've noticed unusually high spending for your account.
                    </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                </div>
            </li>

        </ul>

    </nav>
    <!-- End Header Peserta -->

    <!-- Page JS  -->
    <script src=""></script>

</body>
</html>