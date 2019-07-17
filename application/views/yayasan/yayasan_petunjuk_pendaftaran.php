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
    <?php $petunjuk_json = json_decode($petunjuk_pendaftaran['step_petunjuk_pendaftaran'], true); ?>
    <!-- Body Section -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- Registration Picture Foundation -->
                 <div class="row justify-content-center text-center my-3">
                    <div class="col-md-11 border">
                        <img src="<?= base_url('uploads/registration/'.$petunjuk_pendaftaran['foto_petunjuk_pendaftaran']); ?>"
                             class="img-fluid" alt="Image Content">
                    </div>
                </div>
                <!-- End Registration Picture Foundation -->

                <!-- Registration Process Section -->
                <div class="row mx-3 justify-content-center">
                    <?php foreach ($petunjuk_json['step'] as $i => $petunjuk): ?>
                    <div class="col-md-3 m-1 py-2 text-justify border rounded">
                        <h3 class="d-none d-sm-inline text-danger font-weight-bold"><?= $i+1; ?>. </h3>
                        <h6 class="d-inline"><?= $petunjuk['judul']; ?></h6>
                        <p class="small text-secondary"><?= $petunjuk['isi']; ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
                <!-- End Registration Process Section -->


            </div>
        </div>
    </div>

    <!-- Page JS  -->
    <script src=""></script>

</body>
</html>