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
        <div class="row">
            <div class="col-md-12">
                <!-- List of Schools Section -->
                <div class="row pt-3 pr-3">
                    <?php foreach ($list_jenjang as $jenjang): ?>
                    <div class="card ml-3 mb-3 p-0 text-center" style="width:350px">
                        <div class="card-body">
                            <h6 class="card-title font-weight-bold text-danger"><?= $jenjang['nama_jenjang_pendidikan']; ?></h6>
                            <p class="card-text text-justify text-secondary small">
                                <?php
                                $string = strip_tags($jenjang['deskripsi_jenjang_pendidikan']);
                                if (strlen($string) > 150) {
                                    // truncate string
                                    $stringCut = substr($string, 0, 150);
                                    $endPoint = strrpos($stringCut, ' ');
                                    //if the string doesn't contain any space then it will cut without word basis.
                                    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                    $string .= '....';
                                }
                                echo $string;
                                ?>
                            </p>
                            <a class="btn btn-danger"
                               href="<?= site_url(); ?>?page=c_yayasan_jenjang_pendidikan/index/<?= $jenjang['id_jenjang_pendidikan']; ?>">
                                Pendaftaran
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <!-- End List of Schools Section -->
            </div>
        </div>
    </div>

    <!-- Page JS  -->
    <script src=""></script>
</body>
</html>
