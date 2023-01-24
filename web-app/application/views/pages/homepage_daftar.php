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
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
</head>
<body>
    

<div class="container">
    <div class="row mt-3 justify-content-center">
        <div class="col-xl-4 ">
            <div class="card">
            <div class="card-body px-2">
                <div class="col text-center">
                    <h6 class="text-uppercase text-muted ls-1 mb-1">Pendaftaran Siswa Baru</h6>
                    <h5 class="h3 mb-0">Tempelkan kartu anda</h5>
                    <img src="<?php echo base_url('assets/img/icons/login.png') ?>" width="290">
                    <div class="lds-ripple center-block d-block mx-auto"><div></div><div></div></div>

                    <form class="mt-8" role="form" action="<?php echo base_url(). 'siswa/tambah_aksi?admin=0&?source=0  '; ?>" method="post">
                        <div class="form-group">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-badge"></i></span>
                                </div>
                                <input id="idcard" name="idcard" class="form-control disabled" placeholder="ID Card" type="text">
                            </div>
                        </div>

                        <div class="form-group m-0 mt-2 animate__animated animate__fadeInUp">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                </div>
                                <input name="nama" class="form-control" placeholder="Nama lengkap" type="text">
                            </div>
                        </div>

                        <div class="form-group m-0 mt-2 animate__animated animate__fadeInUp">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-tag"></i></span>
                                </div>
                                <input name="nis" class="form-control" placeholder="NIS" type="text">
                            </div>
                        </div>

                        <div class="form-group m-0 mt-2 animate__animated animate__fadeInUp">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input name="email" class="form-control" placeholder="Email" type="email">
                            </div>
                        </div>

                        <div class="form-group m-0 mt-2 animate__animated animate__fadeInUp">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-money-coins"></i></span>
                                </div>
                                <input name="kelas" class="form-control" placeholder="Kelas" type="text">
                            </div>
                        </div>

                        <div class="text-center mt-5 animate__animated animate__fadeInUp">
                            <button class="btn btn-primary btn-block" type="submit"> Daftar </button>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url("assets/vendor/jquery/dist/jquery.min.js") ?>"></script>
<script>
$(document).ready(function(){

    setInterval(() => {
        getRFIDCode();
    }, 0);
    
    function getRFIDCode(){
        $.ajax({
            type  : 'GET',
            url   : '<?php echo base_url()?>siswa/get_rfid',
            async : true,
            dataType : 'json',
            success : function(data){
                for(var i=0; i<data.length; i++){
                    $("#idcard").val(data[i].id_card)
                }
            }

        });
    }
})
</script>


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