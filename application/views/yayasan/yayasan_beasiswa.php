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
                <!-- List of Schoolarship Section -->
                <?php foreach ($list_beasiswa as $beasiswa): ?>
                <a href="#" class="text-decoration-none text-dark">
                    <div class="media border p-2 my-3 mx-1">
                        <img src="<?php echo base_url('uploads/schoolarship/'.$beasiswa['foto_beasiswa']) ?>"
                             class="text-center m-0 d-none d-sm-block align-self-center rounded" style="width:128px">
                        <div class="media-body mx-3">
                            <h6 class="text-left"><?= $beasiswa['nama_beasiswa']; ?></h6>
                            <small class="text-left text-danger">
                                <?php
                                    $date1 = date_create(date("Y-m-d"));
                                    $date2 = date_create($beasiswa['tgl_deadline_beasiswa']);
                                    $diff = date_diff($date1, $date2);
                                    $diff = (int) $diff->format("%R%a");
                                    if ($diff < 0) echo 'Telah Berakhir';
                                    else echo 'Deadline: ' . date("d-m-Y", strtotime($beasiswa['tgl_deadline_beasiswa']));
                                ?>
<!--                                Deadline: 20 Juli 2019-->
                            </small>
                            <p class="text-secondary  text-justify">
                                <?= $beasiswa['deskripsi_beasiswa']; ?>
                            </p>
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>
                <!-- End List of Facilities Section -->
            </div>
        </div>
    </div>

    <!-- Page JS  -->
    <script src=""></script>

</body>
</html>