<!doctype html>
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
    <div class="row">
        <div class="col-md-12">
            <!-- Important Announcement Section -->
            <div class="row mx-1 my-3 border-left border-right border-light">
                <div class="col-md-12">
                    <!-- Announcement Carousel -->
                    <div id="announcementCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <?php for ($i=0; $i < count($list_pengumuman); $i++): ?>
                                <li data-target="#announcementCarousel" data-slide-to="<?= $i; ?>"
                                    class="<?php if ($i == 0) echo 'active'; ?>"></li>
                            <?php endfor; ?>
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <?php $i = 0; ?>
                            <?php foreach ($list_pengumuman as $pengumuman): ?>
                                <div class="carousel-item text-center <?php if ($i == 0) echo 'active'; ?>">
                                    <img class="img-fluid text-danger" src="<?= base_url('uploads/announcement/' . $pengumuman['file_pengumuman']); ?>"
                                         alt="Image Carousel">
                                    <div class="carousel-caption">
                                        <p class="d-none d-sm-block"><?= $pengumuman['judul_pengumuman']; ?></p>
                                    </div>
                                </div>
                            <?php $i++; ?>
                            <?php endforeach; ?>
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

            <!-- Login and Registration Section -->
            <div class="row mx-4 my-3 bg-white border-danger border rounded-lg">
                <div class="col-md-12 p-2">
                    <div class="row">
                        <div class="col-md-10 pt-2">
                            <!-- Login Form -->
                            <form class="form-row needs-validation" action="" method="POST" novalidate>
                                <div class="form-group mb-2 col-md-5">
                                    <label for="staticUsername" class="sr-only">Username</label>
                                    <input type="text" class="form-control" id="staticUsername" placeholder="Username" required>
                                </div>
                                <div class="form-group col-md-5 mb-2">
                                    <label for="inputPassword" class="sr-only">Password</label>
                                    <input type="password" class="form-control" id="inputPassword" placeholder="Password" required>
                                </div>
                                <div class="form-group col-md-2 mb-2">
                                    <button type="submit" class="btn btn-light border col-md-8">Login</button>
                                    <span class="d-none d-sm-inline font-italic text-secondary pl-3">or</span>
                                </div>
                                <span class="col-md-2 text-center d-inline d-sm-none font-italic  mb-2 text-secondary">or</span>
                            </form>
                            <!-- End Login Form -->
                        </div>
                        <a href="<?= site_url(); ?>?page=c_yayasan/registrasi" class="btn btn-danger col-md-2 align-self-center">
                            Daftar Sekarang
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Login and Registration Section -->

            <!-- Profile Foundation Section -->
            <div class="row mx-1 my-3">
                <div class="col-md-12 py-2">
                    <h5 class="font-weight-bold text-dark"><?= $yayasan['nama_yayasan']; ?></h5>
                    <hr class="m-0">
                    <p class="text-justify mx-2 text-secondary"><?= $yayasan['profil_yayasan']; ?></p>
                </div>
            </div>
            <!-- End Profile Foundation Section -->

            <!-- List of Schools Section -->
            <div class="row mx-1 my-3 text-center">
                <?php foreach ($list_jenjang as $jenjang): ?>
                <div class="card m-1" style="width:350px">
                    <img class="card-img-top" src="<?= base_url('/uploads/school/'.$jenjang['foto_jenjang_pendidikan']) ?>"
                         alt="Card image">
                    <div class="card-body">
                        <h6 class="card-title font-weight-bold text-danger"><?= $jenjang['nama_jenjang_pendidikan']; ?></h6>
                        <p class="card-text text-justify text-secondary small">
                            <?php
                                $string = strip_tags($jenjang['deskripsi_jenjang_pendidikan']);
                                if (strlen($string) > 300) {
                                    // truncate string
                                    $stringCut = substr($string, 0, 300);
                                    $endPoint = strrpos($stringCut, ' ');
                                    //if the string doesn't contain any space then it will cut without word basis.
                                    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                    $string .= '....';
                                }
                                echo $string;
                            ?>
                        </p>
                        <a href="<?= site_url(); ?>?page=c_yayasan_jenjang_pendidikan/index/<?= $jenjang['id_jenjang_pendidikan']; ?>"
                           class="btn btn-danger">
                            Selengkapnya
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <!-- End List of Schools Section -->

        </div>
    </div>

    <!-- Page JS  -->
    <script src="<?= base_url('assets/js/yayasan.js'); ?>"></script>

</body>
</html>
