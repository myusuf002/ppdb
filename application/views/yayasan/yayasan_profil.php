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
    <?php $misi_json = json_decode($yayasan['misi_yayasan'], true); ?>
    <!-- Body Section -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- Profile Picture Foundation -->
                 <div class="row justify-content-center text-center my-3">
                    <div class="col-md-10 pt-3">
                    <a class="navbar-brand ml-2" href="<?= base_url(); ?>">
                        <img src="<?= base_url('uploads/foundation/'.$yayasan['sampul_yayasan']); ?>"  width="70%">
                    </a>
                    </div>
                </div>
                <!-- End Profile Picture Foundation -->

                <!-- Profile Foundation Section -->
                <div class="row mx-1 my-3">
                    <div class="col-md-12 py-2">
                        <h5 class="font-weight-bold text-dark"><?= $yayasan['nama_yayasan']; ?></h5>
                        <hr class="m-0">
                        <p class="text-justify mx-2 text-secondary"><?= $yayasan['profil_yayasan']; ?></p>
                    </div>
                </div>
                <!-- End Profile Foundation Section -->

                <!-- Vision and Mission Foundation Section -->
                <div class="row mx-1 my-3">
                    <div class="col-md-6 py-2">
                        <h6 class="font-weight-bold text-danger">Visi</h6>
                        <hr class="m-0">
                        <p class="text-justify mx-2 text-secondary"><?= $yayasan['visi_yayasan']; ?></p>
                    </div>
                    <div class="col-md-6 py-2">
                        <h6 class="font-weight-bold text-danger">Misi</h6>
                        <hr class="m-0">
                        <ol class="text-secondary mx-0">
                            <?php foreach ($misi_json['misi'] as $misi): ?>
                            <li> <?= $misi; ?></li>
                            <?php endforeach; ?>
                        </ol>
                    </div>
                </div>
                <!-- End Vision and Mission Foundation Section -->

                <!-- Head of Foundation Section -->
                <div class="row text-center p-3 my-3">
                    <div class="col-md-12 text-justify">
                        <h5 class="font-weight-bold text-dark">Ketua Yayasan</h5>
                        <hr class="m-0">
                    </div>
                    <img src="<?= base_url('uploads/foundation/'.$yayasan['foto_ketua_yayasan']) ?>" alt="Head of Foundation" class="col-md-2 my-3 mx-1 rounded-circle">
                    <div class="col-md text-justify">
                        <h4><?= $yayasan['nama_ketua_yayasan']; ?></h4>
                        <p class="mx-2 text-secondary"><?= $yayasan['profil_ketua_yayasan']; ?></p>
                    </div>
                </div>
                <!-- End Head of Foundation Section -->

            </div>
        </div>
    </div>

    <!-- Page JS  -->
    <script src=""></script>

</body>
</html>