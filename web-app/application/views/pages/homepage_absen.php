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
    <div class="row mt-6 justify-content-center">
        <div>
            <h1 class="myTime" id="jam"></h1>
            <p  class="myDate" id="tanggal"></p>
        </div>
    </div>
    <div class="row mt-3 justify-content-center">
        <div class="col-xl-4 ">
            <div class="card">
            <div class="card-body pb-9">
                <div class="col text-center">
                    <div id="absenArea">
                        <h6 class="text-uppercase text-muted ls-1 mb-1">selamat datang</h6>
                        <h5 class="h3 mb-0">Tempelkan kartu anda</h5>
                        <img src="<?php echo base_url('assets/img/icons/login.png') ?>" width="290" class="animate__animated animate__fadeInUp">
                        <div class="lds-ripple center-block d-block mx-auto"><div></div><div></div></div>
                    </div>
                    <div id="absenSuccess">
                        <h6 class='text-uppercase text-muted ls-1 mb-1'>absensi berhasil</h6>
                        <h5 class='h3 mb-0'>Halo, <span id="namanya"></span> </h5>
                        <img src='<?php echo base_url('assets/img/icons/success.png') ?>' width='290' class='animate__animated animate__fadeInUp'>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url("assets/vendor/jquery/dist/jquery.min.js") ?>"></script>
<script>
$(document).ready(function(){
    $("#absenSuccess").hide();
    setInterval(() => {
        getRFIDCode();
    }, 2000);

    function getRFIDCode(){
        $.ajax({
            type  : 'GET',
            url   : '<?php echo base_url()?>homepage/absen_action',
            async : true,
            dataType : 'json',
            success : function(response){
                let nama, idCard, nis;
                for(let i=0; i<response.length; i++){
                   nama = response[i].nama;  
                   idCard = response[i].id_card;  
                   nis = response[i].nis;  

                   $("#absenArea").hide();
                   $("#absenSuccess").show();
                   $("#namanya").html(nama);

                //    window.location.href="<?php echo base_url()?>homepage/absen?status=success&?nama="+ nama +"&?idcard="+ idCard +"&?nis="+nis
                //    window.location.href="<?php echo base_url()?>homepage/absen_success/" + nama
                }
            }

        });
    }
})

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