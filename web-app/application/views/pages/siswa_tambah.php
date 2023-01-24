
 <div class="header bg-primary pb-6">
</div>
<div class="container-fluid mt--5">
      <div class="row">

              <div class="col-lg-5 col-md-7 mx-auto">
                <div class="card bg-secondary border-0 mb-0">
                    <div class="card-body px-4 py-4">

                    <div class="alert alert-primary mb-4" role="alert">
                        <strong>Pendaftaran </strong> RFID Siswa
                    </div>


                    <form role="form" action="<?php echo base_url(). 'siswa/tambah_aksi?admin=1&?source=1 '; ?>" method="post">
                        <div class="form-group">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-badge"></i></span>
                                </div>
                                <input id="idcard" name="idcard" class="form-control" placeholder="ID Card" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                </div>
                                <input name="nama" class="form-control" placeholder="Nama lengkap" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-tag"></i></span>
                                </div>
                                <input name="nis" class="form-control" placeholder="NIS" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input name="email" class="form-control" placeholder="Email" type="email">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-money-coins"></i></span>
                                </div>
                                <input name="kelas" class="form-control" placeholder="Kelas" type="text">
                            </div>
                        </div>
                        
                       
                        <div class="text-center mt-5">
                            <div class="row">
                                <div class="col">
                                    <a href="<?php echo site_url('/siswa') ?>" class="btn btn-outline-primary btn-block" role="button" aria-pressed="true">Batal</a>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-primary btn-block">Daftarkan siswa</button>
                                </div>
                            </div>
                        </div>

                    </form>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                    <a href="#" class="text-light"><small>Forgot password?</small></a>
                    </div>
                    <div class="col-6 text-right">
                    <a href="#" class="text-light"><small>Create new account</small></a>
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
                                url   : '<?php echo base_url()?>/siswa/get_rfid',
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
              
            
      </div>
    </div>