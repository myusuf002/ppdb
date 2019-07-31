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
    <div id="body-alert-danger" class="row mx-1 my-3">
        <div class="col-md-12 py-2">
            <div class="alert small alert-danger alert-dismissible fade show" role="alert">
                <span id="text-alert-danger"></span>
            </div>
        </div>
    </div>
    <div id="body-alert-success" class="row mx-1 my-3">
        <div class="col-md-12 py-2">
            <div class="alert small alert-success alert-dismissible fade show" role="alert">
                <span id="text-alert-success"></span>
            </div>
        </div>
    </div>
    <!-- Body Section -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- Schedule Section -->
                <div class="row mx-1 mt-5 mb-3 pb-1">
                    <div class="col-md-12 py-0">
                        <!-- Form Registration -->
                        <form id="form-token" class="form row needs-validation">
                            <!-- Data Diri Section -->
                            <section class="col-md-12">
                                <div class="form-row my-2">
                                    <div class="col-md-12 px-3">
                                        <span class="text-danger font-weight-bold">Jalur Pendaftaran</span>
                                        <select name="id_jalur_pendaftaran"
                                                class="form-control form-input pb-2 mb-3" required>
                                            <?php foreach ($jalur_pendaftaran as $jp): ?>
                                            <option value="<?= $jp['id_jalur_pendaftaran']; ?>">
                                                <?= $jp['nama_jalur_pendaftaran']; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row my-2">
                                    <div class="col-md-12 px-3">
                                        <span class="text-danger font-weight-bold">Banyak Token</span>
                                        <input name="n_token" type="number"
                                               class="form-control form-input pb-2 mb-3" min="1" required>
                                    </div>
                                </div>
                            </section>
                            <!-- End Data Diri Section -->

                            <!-- Submit Section -->
                            <section class="col-md-12 text-center">
                                <button id="btnForm" type='submit' class="btn btn-danger px-5">Generate</button>
                            </section>
                            <!-- End Submit Section -->

                        </form>
                        <!-- End Form Registration -->
                    </div>

                </div>
                <!-- End Schedule Section -->

                <!-- Table Section -->
                <div class="row my-3">
                    <div class="col-md-12 mb-3">
                        <h5 class="d-inline">Daftar Token</h5>
                        <a href="#" class="btn btn-sm btn-danger float-right d-inline">Tambah</a>
                    </div>
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table id="daftarPeserta" class="table hover row-border">
                                <thead>
                                <tr>
                                    <?php foreach ($list_column as $lc): ?>
                                    <th><?= $lc['COLUMN_NAME']; ?></th>
                                    <?php endforeach; ?>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($list_token as $token): ?>
                                    <tr id="<?= $token[$list_column[0]['COLUMN_NAME']]; ?>">
                                        <?php foreach ($list_column as $lc): ?>
                                            <td><?= $token[$lc['COLUMN_NAME']]; ?></td>
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
            $('#daftarPeserta').DataTable();
        });

        $("#body-alert-danger").hide();
        $("#body-alert-success").hide();
        /* Get from elements values */
        $("#form-token").submit(function(event){
            if ($('#form-token')[0].checkValidity()){
                // Prevent default posting of form - put here to work in case of errors
                event.preventDefault();
                var values = $(this).serialize();

                $.ajax({
                    url: "<?= site_url('c_admin_token/generate') ?>",
                    type: "post",
                    data: values ,
                    beforeSend: function() {
                        var image = '<img class="loading-button" src="' +
                            '<?= base_url("assets/img/loading/loading-button.gif"); ?>' +
                            '" />';
                        $("#btnForm").html(image);
                        $("#body-alert-danger").hide();
                        $("#body-alert-success").hide();
                    },
                    success: function (response) {
                        var data_json = jQuery.parseJSON(response);
                        $("#btnForm").html("Generate");
                        if (data_json.tipe == 'error'){
                            $("#text-alert-danger").html(data_json.msg);
                            $("#body-alert-danger").show();
                        }else if (data_json.tipe == 'success'){
                            $("#text-alert-success").html(data_json.msg);
                            $("#body-alert-success").show();
                        }
                    },
                    error: function() {
                        $("#text-alert-danger").html("Server Error");
                        $("#body-alert-danger").show();
                    }
                });
            }

        });
    </script>

</body>
</html>