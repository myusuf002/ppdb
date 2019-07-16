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
                <!-- List of Facilities Section -->
                <?php foreach ($list_fasilitas as $fasilitas): ?>
                <div class="media border p-2 my-3 mx-1">
                    <img src="<?= base_url('uploads/facility/'.$fasilitas['foto_fasilitas']) ?>"
                         class="text-center  m-1 d-none d-sm-block" style="width:100px"
                         alt="Image <?= $fasilitas['nama_fasilitas']; ?>">
                    <div class="media-body mx-3">
                        <h6 class="text-left"><?= $fasilitas['nama_fasilitas']; ?></h6>
                        <p class="text-secondary text-justify"><?= $fasilitas['deskripsi_fasilitas']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
                <!-- End List of Facilities Section -->
            </div>
        </div>
    </div>

    <!-- Page JS  -->
    <script src=""></script>

</body>
</html>