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
    <div class="container-fluid mt-5">
        <?php foreach ($list as $list): ?>
        <div class="row px-3">
            <h5 class="font-weight-bold"><?= $list['jenjang']['nama_jenjang_pendidikan']; ?></h5>
            <div class="col-md-12 py-0 my-3 table-responsive">
                <!-- <h6 class="font-weight-bold text-danger">Persyaratan</h6>
                <hr class="m-0"> -->
                <table class="table">
                    <thead class="text-danger">
                        <tr>
                            <th scope="col">Jalur</th>
                            <th scope="col">Pendaftaran</th>
                            <th scope="col">Pendidikan</th>
                            <th scope="col">Pembangunan</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($list['jalur'] as $jalur): ?>
                        <tr>
                            <td><?= $jalur['nama_jalur_pendaftaran']; ?></td>
                            <td>Rp<?= number_format($jalur['biaya_pendaftaran_jalur_pendaftaran']); ?></td>
                            <td>Rp<?= number_format($jalur['biaya_pendidikan_jalur_pendaftaran']); ?></td>
                            <td>Rp<?= number_format($jalur['biaya_pembangunan_jalur_pendaftaran']); ?></td>
                            <?php
                                $total = $jalur['biaya_pendaftaran_jalur_pendaftaran'];
                                $total += $jalur['biaya_pendidikan_jalur_pendaftaran'];
                                $total += $jalur['biaya_pembangunan_jalur_pendaftaran'];
                            ?>
                            <td>Rp<?= number_format($total); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- Page JS  -->
    <script src=""></script>

</body>
</html>