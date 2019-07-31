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
<!--<div id="body-alert-danger" class="row mx-1 my-3">-->
<!--    <div class="col-md-12 py-2">-->
<!--        <div class="alert small alert-danger alert-dismissible fade show" role="alert">-->
<!--            <span id="text-alert-danger"></span>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<div id="body-alert-success" class="row mx-1 my-3">-->
<!--    <div class="col-md-12 py-2">-->
<!--        <div class="alert small alert-success alert-dismissible fade show" role="alert">-->
<!--            <span id="text-alert-success"></span>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- Body Section -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            <!-- Table Section -->
            <div class="row my-3">
                <div class="col-md-12 mb-3">
                    <h5 class="d-inline">Tabel <?= $table_name; ?></h5>
                    <a href="#" class="btn btn-sm btn-danger float-right d-inline">Tambah</a>
                </div>
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table id="tables" class="table hover row-border">
                            <thead>
                            <tr>
                                <?php foreach ($list_column as $lc): ?>
                                    <th><?= $lc['COLUMN_NAME']; ?></th>
                                <?php endforeach; ?>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($list_data as $data): ?>
                                <tr id="<?= $data[$list_column[0]['COLUMN_NAME']]; ?>">
                                    <?php foreach ($list_column as $lc): ?>
                                        <td><?= $data[$lc['COLUMN_NAME']]; ?></td>
                                    <?php endforeach; ?>
                                    <td class="text-center">
                                        <a href=# class="badge badge-primary"><span class="fas fa-eye"></span></a>
                                        <a href=# class="badge badge-warning"><span class="fas fa-pen"></span></a>
                                        <a href=# class="badge badge-danger"><span class="fas fa-trash"></span></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End Table Section -->

        </div>
    </div>

</div>

<!-- Page JS  -->
<script src="<?php echo base_url('assets/js/yayasan.js'); ?>"></script>
<script>
    $(document).ready( function () {
        $('#tables').DataTable();
    });
</script>

</body>
</html>