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
                <!-- List of Achievements Section -->
                <div class="row mx-1 my-3 text-center">
                <?php foreach ($list_penghargaan as $penghargaan): ?>
                    <div class="card m-1" style="width:350px">
                        <img class="card-img-top" src="<?php echo base_url('/uploads/achievement/'.$penghargaan['foto_penghargaan']) ?>"
                             alt="Card image">
                        <div class="card-body">
                            <h6 class="card-title font-weight-bold text-danger"><?= $penghargaan['nama_penghargaan']; ?></h6>
                            <p class="card-text text-justify text-secondary small"><?= $penghargaan['deskripsi_penghargaan']; ?></p>
                            <a href="#" class="btn btn-danger">Selengkapnya</a>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
                <!-- End List of Achievements Section -->

            </div>
        </div>
    </div>

    <!-- Page JS  -->
    <script src=""></script>

</body>
</html>
</html>