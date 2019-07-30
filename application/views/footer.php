<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Page CSS -->
    <link href="" rel="stylesheet">
</head>
<body>
    <?php
        $kontak_json = json_decode($yayasan['kontak_yayasan'], true);
        $medsos_json = json_decode($yayasan['media_sosial_yayasan'], true);
    ?>
    <!-- Footer Peserta -->
    <div id="contacts" class="container-fluid">
        <div class="row bg-light">
            <div class="col-md-4 p-3 text-secondary">
                <span>
                    <h6 class="text-danger font-weight-bold">Alamat</h6>
                    <address><?= $yayasan['alamat_yayasan']; ?></address>
                </span>
            </div>
            <div class="col-md-4 p-3 text-secondary">
                <span>
                    <h6 class="text-danger font-weight-bold">Kontak</h6>
                    <?php foreach ($kontak_json as $kontak): ?>
                    <div class="m-0">
                        <a class="text-secondary text-decoration-none">
                            <i class="<?= $kontak['icon']; ?>"></i>
                            <span class="ml-2 text-secondary"><?= $kontak['data']; ?></span>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </span>
            </div>
            <div class="col-md-4 p-3 text-secondary">
                <span>
                    <h6 class="text-danger font-weight-bold">Media Sosial</h6>
                    <?php foreach ($medsos_json as $medsos): ?>
                    <div class="m-0">
                        <a href="<?= $medsos['link']; ?>" class="text-secondary text-decoration-none" target="_blank">
                            <i class="<?= $medsos['icon']; ?>"></i>
                            <span class="ml-2 text-secondary"><?= $medsos['name']; ?></span>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </span>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-12 border-top bg-light py-3 px-3 text-dark">
            <span>
                Copyright &copy;
                <a href="https://baramijintegrasi.com/" style="text-decoration:none" class="text-danger font-weight-bold" target="_blank">
                    Baramij Integration
                </a>
            </span>
            </div>
        </div>
    </div>

    <!-- Start Footer Peserta -->

    <!-- Page JS  -->
    <script src=""></script>

</body>
</html>