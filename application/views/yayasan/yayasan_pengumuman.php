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
                                             alt="Image <?= $pengumuman['judul_pengumuman']; ?>">
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
                            <?php foreach ($list_pengumuman as $pengumuman): ?>
                                <tr>
                                    <td><?= date('d-m-Y', strtotime($pengumuman['tgl_pengumuman'])); ?></td>
                                    <td><?= $pengumuman['judul_pengumuman']; ?></td>
                                    <td><?= $pengumuman['keterangan_pengumuman']; ?></td>
                                    <td>
                                        <!-- Extra large modal -->
                                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#poster<?= $pengumuman['id_pengumuman']; ?>">
                                            <span class="fas fa-file-image mx-2 my-1"></span>
                                        </button>

                                        <div id="poster<?= $pengumuman['id_pengumuman']; ?>" class="modal fade" tabindex="-1" role="dialog"
                                             aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl modal-dialog-centered">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Poster Pengumuman</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="<?= base_url('uploads/announcement/' . $pengumuman['file_pengumuman']); ?>"
                                                         alt="Image <?= $pengumuman['judul_pengumuman']; ?>">
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                </div>
                <!-- End List of Schools Section -->

            </div>
        </div>
    </div>

    <!-- Page JS  -->
    <script src=""></script>
</body>
</html>