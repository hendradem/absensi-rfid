<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/nucleo/css/nucleo.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/argon.css?v=1.2.0') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/homepage.css') ?>" type="text/css">
</head>
<body>
    

<div class="container">
    <div class="row mt-6 justify-content-center">
        <div>
            <h1 class="myTime" id="jam"></h1>
            <p  class="myDate" id="tanggal"></p>
        </div>
    </div>
    <div class="row mt-3 justify-content-center">
        <div class="col-xl-4 ">
            <div class="card">
            <div class="card-header bg-transparent">
                <div class="row align-items-center">
                <div class="col text-center">
                    <h6 class="text-uppercase text-muted ls-1 mb-1">selamat datang</h6>
                    <h5 class="h3 mb-0">Halaman Absensi</h5>
                </div>
                </div>
            </div>
            <div class="card-body pt-0 pb-0">
                <div class="row">
                        <a href="<?php echo site_url('/homepage/absen') ?>" class="col p-2">
                            <div class="card card-stats">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col text-center">
                                            <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                                <i class="ni ni-money-coins"></i>
                                            </div>
                                        </div>
                                        <div class="col text-center mt-3">
                                            <span class="h2 font-weight-bold mb-0 text-center">Absen</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="<?php echo site_url('/homepage/daftar?status='.'registration') ?>" class="col p-2">
                            <div class="card card-stats">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col text-center">
                                            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                                <i class="ni ni-folder-17"></i>
                                            </div>
                                        </div>
                                        <div class="col text-center mt-3">
                                            <span class="h2 font-weight-bold mb-0 text-center">Daftar</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                </div>
            </div>
            </div>
        </div>
</div>
</div>


<script>

tanggal();
function tanggal(){
    var date = new Date();
    var tahun = date.getFullYear();
    var bulan = date.getMonth();
    var tanggal = date.getDate();
    var hari = date.getDay();
    var jam = date.getHours();
    var menit = date.getMinutes();
    var detik = date.getSeconds();
    switch(hari) {
    case 0: hari = "Minggu"; break;
    case 1: hari = "Senin"; break;
    case 2: hari = "Selasa"; break;
    case 3: hari = "Rabu"; break;
    case 4: hari = "Kamis"; break;
    case 5: hari = "Jum'at"; break;
    case 6: hari = "Sabtu"; break;
    }
    switch(bulan) {
    case 0: bulan = "Januari"; break;
    case 1: bulan = "Februari"; break;
    case 2: bulan = "Maret"; break;
    case 3: bulan = "April"; break;
    case 4: bulan = "Mei"; break;
    case 5: bulan = "Juni"; break;
    case 6: bulan = "Juli"; break;
    case 7: bulan = "Agustus"; break;
    case 8: bulan = "September"; break;
    case 9: bulan = "Oktober"; break;
    case 10: bulan = "November"; break;
    case 11: bulan = "Desember"; break;
    }
    var tampilTanggal =  hari + ", " + tanggal + " " + bulan + " " + tahun;
    var tampilWaktu = jam + ":" + menit  + " WIB";

    let jamnya = document.getElementById("jam")
    let tanggalnya = document.getElementById("tanggal")

    jamnya.innerHTML = tampilWaktu;
    tanggalnya.innerHTML = tampilTanggal;
}

</script>
</body>
</html>