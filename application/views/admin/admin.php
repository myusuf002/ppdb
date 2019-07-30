<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/datatables.css">
</head>
<body>
    <!-- Body Section -->
    <div class="container-fluid my-3">
        <!-- Notification Section -->
        <div class="row">
            <div class="col-md-12">
                <div class="alert small alert-danger alert-dismissible fade show" role="alert">
                    Harap melakukan 
                    <a href="#" class="text-decoration-none font-weight-bold text-danger">aktivasi akun</a> 
                    dengan melakukan pembelian token pendaftaran.
                    <button type="button" class="close py-0 px-2 my-2" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
         <!-- End Notification Section -->

         <!-- Status Section -->
        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon d-inline">
                            <i class="fas fa-fw fa-users"></i> Peserta
                        </div>
                        <h2 class="text-center font-weight-bold">4018</h2>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-white bg-warning o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon d-inline">
                            <i class="fas fa-fw fa-user-check"></i> Aktivasi
                        </div>
                        <h2 class="text-center font-weight-bold">3491</h2>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-white bg-success o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon d-inline">
                            <i class="fas fa-fw fa-check-square"></i> Verifikasi
                        </div>
                        <h2 class="text-center font-weight-bold">2845</h2>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-white bg-danger o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon d-inline">
                            <i class="fas fa-fw fa-trophy"></i> Daftar Ulang
                        </div>
                        <h2 class="text-center font-weight-bold">800</h2>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
         <!-- End Status Section -->

        <!-- Chart Section -->
        <div class="row">
            <div class="col-md-3 my-3">
                <h5>Status</h5>
                <span class="small text-secondary">Tanggal</span>
                <input type="text" class="form-control form-input pb-2 mb-3" data-date-format="dd/mm/yyyy" id="datepicker">

                <small>Verifikasi Data</small>
                <div class="progress mb-2">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100">78%</div>
                </div>
                <small>Verifikasi Berkas</small>
                <div class="progress mb-2">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 63%" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100">63%</div>
                </div>
                <small>Verifikasi Tes</small>
                <div class="progress mb-2">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                </div>
                
            </div>
            <div class="col-md-3 my-3">
                <h5>Proses Pendaftaran</h5>
                <canvas id="chartProses" width="150" height="150"></canvas>
            </div> 
            <div class="col-md-3 my-3">
                <h5>Gender Pendaftar</h5>
                <canvas id="chartKelamin" width="150" height="150"></canvas>
            </div>
            <div class="col-md-3 my-3">
                <h5>Jalur Pendaftar</h5>
                <canvas id="chartJalur" width="150" height="150"></canvas>
            </div>

            <div class="col-md-6 my-3">
                <h5>Pendaftar Baru</h5>
                <canvas id="chartSekolah" width="150" height="100"></canvas>
            </div>  
            <div class="col-md-6 my-3">
                <h5>Total Pendaftar</h5>
                <canvas id="chartRegistrasi" width="150"  height="100"></canvas>
            </div>         
        </div>
         <!-- End Notification Section -->

         <!-- Table Section -->
        <div class="row my-3">
            <div class="col-md-12 mb-3">
                <h5 class="d-inline">Daftar Peserta</h5>
                <a href="#" class="btn btn-sm btn-danger float-right d-inline">Tambah</a>
            </div>
            <div class="col-md-12">
                <div class="table-responsive">
                <table id="daftarPeserta" class="table hover row-border">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Nomor HP</th>
                        <th>Sekolah</th>
                        <th>Jalur</th>
                        <th>Aktivasi</th>
                        <th>Kelulusan</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>P2020001</td>
                        <td>John Doe</td>
                        <td>john@example.com</td>
                        <td>081231118329</td>
                        <td>SMP</td>
                        <td>Reguler</td>
                        <td class="text-center"><span class="badge badge-success">Aktif</span></td>
                        <td class="text-center"><span class="badge badge-primary">Proses</span></td>
                        <td class="text-center">
                            <a href=# class="badge badge-primary"><span class="fas fa-eye"></span></a>
                            <a href=# class="badge badge-warning"><span class="fas fa-pen"></span></a>
                            <a href=# class="badge badge-danger"><span class="fas fa-trash"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P2010012</td>
                        <td>Mary Moe</td>
                        <td>mary@example.com</td>
                        <td>081231118329</td>
                        <td>SMP</td>
                        <td>Prestasi</td>
                        <td class="text-center"><span class="badge badge-danger">Belum</span></td>
                        <td class="text-center"><span class="badge badge-danger">Tolak</span></td>
                        <td class="text-center">
                            <a href=# class="badge badge-primary"><span class="fas fa-eye"></span></a>
                            <a href=# class="badge badge-warning"><span class="fas fa-pen"></span></a>
                            <a href=# class="badge badge-danger"><span class="fas fa-trash"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P2010003</td>
                        <td>July Dooley</td>
                        <td>july@example.com</td>
                        <td>081231118329</td>
                        <td>SMP</td>
                        <td>Prestasi</td>
                        <td class="text-center"><span class="badge badge-success">Aktif</span></td>
                        <td class="text-center"><span class="badge badge-success">Lulus</span></td>
                        <td class="text-center">
                            <a href=# class="badge badge-primary"><span class="fas fa-eye"></span></a>
                            <a href=# class="badge badge-warning"><span class="fas fa-pen"></span></a>
                            <a href=# class="badge badge-danger"><span class="fas fa-trash"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P2010009</td>
                        <td>Sabi Cloe</td>
                        <td>Sabi@example.com</td>
                        <td>081231118329</td>
                        <td>SMP</td>
                        <td>Prestasi</td>
                        <td class="text-center"><span class="badge badge-success">Aktif</span></td>
                        <td class="text-center"><span class="badge badge-danger">Tolak</span></td>
                        <td class="text-center">
                            <a href=# class="badge badge-primary"><span class="fas fa-eye"></span></a>
                            <a href=# class="badge badge-warning"><span class="fas fa-pen"></span></a>
                            <a href=# class="badge badge-danger"><span class="fas fa-trash"></span></a>
                        </td>
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
         <!-- End Table Section -->
    </div>

    <!-- Page JS  -->
    <script>
        var sekolahCanvas = document.getElementById("chartSekolah");
        var sekolahData = {
            labels: ["TK","SD", "SMP", "SMA", "SMK"],
            datasets: [
                {
                    label: "Pendaftar Baru",
                    data: [342, 1320, 1140, 604, 612],
                    backgroundColor: ["#28a745", "#dc3545", "#17a2b8", "#ffc107", "#fd7e14"]
                }]
        };
        var sekolahChart = new Chart(sekolahCanvas, {type: 'bar', data: sekolahData});
        
        var genderCanvas = document.getElementById("chartKelamin");
        var genderData = {
            labels: ["Laki-laki","Perempuan"],
            datasets: [
                {
                    data: [1903, 2115],
                    backgroundColor: ["#17a2b8","#dc3545"]
                }]
        };
        var genderChart = new Chart(genderCanvas, {type: 'pie', data: genderData});

        var trackCanvas = document.getElementById("chartJalur");
        var trackData = {
            labels: ["Reguler","Prestasi", "Beasiswa"],
            datasets: [
                {
                    data: [2908, 1000, 110],
                    backgroundColor: ["#fd7e14", "#17a2b8", "#28a745"]
                }]
        };
        var trackChart = new Chart(trackCanvas, {type: 'pie', data: trackData});

        var processCanvas = document.getElementById("chartProses");
        var processData = {
            labels: ["Aktivasi","Verifikasi", "Daftar Ulang", "Ditolak", "Diterima"],
            datasets: [
                {
                    data: [527, 646, 1918, 127,  800],
                    backgroundColor: ["#17a2b8", "#fd7e14", "#ffc107", "#dc3545", "#28a745"]
                }]
        };
        var processChart = new Chart(processCanvas, {type: 'doughnut', data: processData});

        var registrationCanvas = document.getElementById("chartRegistrasi");
        var registrationData = {
            labels: ["2014","2015","2016","2017","2018","2019"],
            datasets: [
                {   
                    label: 'TK',
                    data: [102, 190, 243, 206, 329, 342],
                    backgroundColor: "#28a745",
                    borderColor: "#28a745",
                    fill: false
                }, {   
                    label: 'SD',
                    data: [925, 1082, 1012, 1209, 1286, 1320],
                    backgroundColor: "#dc3545",
                    borderColor: "#dc3545",
                    fill: false
                }, {   
                    label: 'SMP',
                    data: [857, 836, 943, 982, 1037, 1140],
                    backgroundColor: "#17a2b8",
                    borderColor: "#17a2b8",
                    fill: false
                }, {   
                    label: 'SMA',
                    data: [439, 476, 517, 492, 583, 604],
                    backgroundColor: "#ffc107",
                    borderColor: "#ffc107",
                    fill: false
                }, {   
                    label: 'SMK',
                    data: [488, 449, 534, 572, 599, 612],
                    backgroundColor: "#fd7e14",
                    borderColor: "#fd7e14",
                    fill: false
                }
                ],
        };
        var registrationChart = new Chart(registrationCanvas, {type: 'line', data: registrationData,});

        $(document).ready( function () {
            $('#daftarPeserta').DataTable();
            
            $('#datepicker').datepicker({
                format: "dd/mm/yyyy",
                todayHighlight: true,
                autoclose: true
            });
        } );
    </script>

</body>
</html>
