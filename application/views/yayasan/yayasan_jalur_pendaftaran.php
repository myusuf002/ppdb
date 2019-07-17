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
                <?php foreach ($list as $list): ?>
                <!-- Registration Track Collapse -->
                <div class="card my-3">
                    <!-- Card Header - Accordion -->
                    <a href="#collapseJalur<?= $list['jalur']['id_jalur_pendaftaran']; ?>" class="d-block card-header py-3" data-toggle="collapse" role="button"
                       aria-expanded="true" aria-controls="collapseJalur<?= $list['jalur']['id_jalur_pendaftaran']; ?>">
                        <!-- <i class="fa fa-bullhorn text-dark"></i> -->
                        <h6 class="m-0 text-dark">Jalur <?= $list['jalur']['nama_jalur_pendaftaran']; ?>
                            <?php foreach ($list['jenjang'] as $jenjang): ?>
                            <span class="badge badge-danger d-none d-sm-inline"><?= $jenjang['kode_jenjang_pendidikan']; ?></span>
                            <?php endforeach; ?>
                        </h6>
                        <h6 class="d-block d-sm-none">
                            <?php foreach ($list['jenjang'] as $jenjang): ?>
                            <span class="badge badge-danger"><?= $jenjang['kode_jenjang_pendidikan']; ?></span>
                            <?php endforeach; ?>
                        </h6>
                    </a>

                    <!-- Card Content - Collapse -->
                    <div class="collapse show" id="collapseJalur<?= $list['jalur']['id_jalur_pendaftaran']; ?>">
                    <div class="card-body p-3">
                        <div class="row pb-3">
                            <div class="col-md-12 small">
                                <!-- Registration Track Section -->
                                <h6 class="text-danger">Alur Pendaftaran</h6>
                                <table>
                                    <?php foreach ($list['alur'] as $alur): ?>
                                    <tr>
                                        <td class="font-weight-bold"><?= $alur['nama_alur_pendaftaran']; ?></td>
                                        <td class="px-1 font-weight-bold"> : </td>
                                        <td>
                                            <?= date('d F Y', strtotime($alur['tgl_mulai_alur_pendaftaran'])); ?>
                                            <?php
                                                if (!empty($alur['tgl_selesai_alur_pendaftaran'])) {
                                                    echo ' - ' . date('d F Y', strtotime($alur['tgl_selesai_alur_pendaftaran']));
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </table>
                                <!-- End Registration Track Section -->

                                <!-- Detail Registration Section -->
                                <?php if (!empty($list['jalur']['keterangan_jalur_pendaftaran'])): ?>
                                <h6 class="mt-3 text-danger">Keterangan</h6>
                                <p class="text-justify"><?= $list['jalur']['keterangan_jalur_pendaftaran']; ?></p>
                                <?php endif; ?>
                                <!-- End Detail Registration Section -->

                                <!-- Registration's Requirement Section -->
                                <?php if (!empty($list['jalur']['persyaratan_jalur_pendaftaran'])): ?>
                                <h6 class="mt-3 text-danger">Persyaratan</h6>
                                <ul>
                                    <?php $persyaratan_json = json_decode($list['jalur']['persyaratan_jalur_pendaftaran'], true); ?>
                                    <?php foreach ($persyaratan_json['syarat'] as $syarat): ?>
                                    <li><?= $syarat; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php endif; ?>
                                <!-- End Registration's Requirement Section -->
                                <?php if (!empty($list['jalur']['tambahan_jalur_pendaftaran'])): ?>
                                <i>
                                    <?php $tambahan_json = json_decode($list['jalur']['tambahan_jalur_pendaftaran'], true); ?>
                                    <?php foreach ($tambahan_json['tambahan'] as $tambahan): ?>
                                        <?= $tambahan; ?><br>
                                    <?php endforeach; ?>
                                </i>
                                <?php endif; ?>

                                <!-- Registration Button List -->
                                <h6 class="mt-3 text-danger">Daftar Sekarang</h6>
                                <div class="pr-2">
                                    <?php foreach ($list['jenjang'] as $jenjang): ?>
                                        <a href="<?= site_url(); ?>?page=c_yayasan_jenjang_pendidikan/index/<?= $jenjang['id_jenjang_pendidikan']; ?>"
                                           class="col-md-1 btn btn-danger m-1">
                                            <?= $jenjang['kode_jenjang_pendidikan']; ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                                <!-- End Registration Button List -->
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- End Registration Track Collapse -->
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- Page JS  -->
    <script src=""></script>

</body>
</html>