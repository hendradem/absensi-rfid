<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">

          <!-- Card stats -->
          <div class="row pt-4">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total traffic</h5>
                      <span class="h2 font-weight-bold mb-0">350,897</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-active-40"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">New users</h5>
                      <span class="h2 font-weight-bold mb-0">2,356</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni ni-chart-pie-35"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
                      <span class="h2 font-weight-bold mb-0">924</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                      <span class="h2 font-weight-bold mb-0">49,65%</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-chart-bar-32"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div id="app">
      <div class="container-fluid mt--6">
        <div class="row">
          <div class="col-xl-6">
            <div class="card">
              <div class="card-header bg-transparent">
                <div class="row align-items-center">
                  <div class="col">
                    <h6 class="text-uppercase ls-1 mb-1">Overview</h6>
                    <h5 class="h3 mb-0"><span class="badge badge-primary badge-sm"><strong>Log absensi</strong></span> </h5> 
                  </div>
                  <div class="col">
                    <ul class="nav nav-pills justify-content-end">
                      <li class="nav-item mr-2 mr-md-0" data-toggle="chart" data-target="#chart-sales-dark" >
                        <a href="#tabs-icons-text-1" class="nav-link py-2 px-3 active" data-toggle="tab">
                          <span class="d-none d-md-block">Masuk</span>
                        </a>
                      </li>
                      <li class="nav-item" data-toggle="chart" data-target="#chart-sales-dark" >
                        <a href="#tabs-icons-text-2" class="nav-link py-2 px-3" data-toggle="tab">
                          <span class="d-none d-md-block">Pulang</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="card-body">
                  <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">

                        <div v-for="(result, index) in absensi" class="alert alert-secondary alert-dismissible fade show py-2 px-3 m-0 mt-1 my-alert" role="alert">
                            <span class="alert-icon">
                            <i class="fas fa-address-card"></i>
                            </span>
                            <span class="alert-text">
                              <strong> {{ result.nama }} </strong> - <strong> {{ result.nis }}  </strong>
                            </span>
                            <div class="float-right">
                              <span class="badge badge-primary badge-lg">
                                <i class="fas fa-arrow-alt-circle-up mr-1"></i> <strong id="time"> {{ result.jam }} WIB  </strong>
                              </span>
                            </div>
                        </div>
                        
                      </div>

                      <!-- pulang -->
                      <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                        <div class="text-danger alert alert-secondary alert-dismissible fade show py-2 px-3 m-0 mt-1 my-alert-danger" role="alert">
                            <span class="alert-icon text-danger">
                              <i class="fas fa-user-check"></i>
                            </span>
                            <span class="alert-text text-danger"><strong>Ade Mahendra</strong> - 19.11.3235</span>
                            <div class="float-right">
                              <span class="badge badge-danger badge-lg"><strong> <i class="fas fa-arrow-alt-circle-down mr-1"></i> 17.31 WIB </strong></span>
                            </div>
                        </div>
                      </div>
                      
                  </div>
              </div>
            </div>
          </div>


          <div class="col-xl-6">
            <div class="card">
              <div class="card-header bg-transparent">
                <div class="row align-items-center">
                  <div class="col">
                    <h6 class="text-uppercase text-muted ls-1 mb-1">Request</h6>
                    <h5 class="h3 mb-0"><span class="badge badge-danger badge-sm"><strong>Request User baru</strong></span> </h5> 
                  </div>
                </div>
              </div>

              <?php if($this->session->flashdata('success')) { ?>
                <div class="alert alert-success mx-4 my-2 p-2 alert-dismissible fade show" role="alert">
                    <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                    <span class="alert-text"><strong>Behasil !</strong> <?php echo $this->session->flashdata('success'); ?> </span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
              <?php } ?>

              <div class="card-body p-0">

                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col" class="sort" data-sort="name">NO</th>
                        <th scope="col" class="sort" data-sort="name">Nama</th>
                        <th scope="col" class="sort" data-sort="budget">NIS</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody class="list">
                        <tr v-for="(result, index) in newUsers">
                          <td>#</td>
                          <td>{{ result.nama }}</td>
                          <td>{{ result.nis }}</td>
                          <td>
                            <a :href=" `${url}pages/acc_user_request?id=` + result.id " class="btn btn-success btn-sm" id="btnAcc"> <i class="fas fa-user-check"></i> ACC </a>
                          </td>
                        </tr>
                    </tbody>
                  </table>
                </div>


              </div>
            </div>
          </div>
        </div>
      
    </div>          
      
    <script src="https://unpkg.com/vue"></script>
    <script  language="JavaScript">
        const vm = new Vue({
          el: '#app',
          data(){
            return {
              no : 1,
              url : 'http://localhost/ci/',
              absensi : [],
              newUsers : [],
            }
          },
          mounted(){
            setInterval(() => {
              this.getAbsen();
              this.getNewUser();
            }, 100);
          },
          methods: {
            getAbsen(){
              axios.get(this.url + "pages/get_absensi").then(response => {
                this.absensi = response.data;
              })
            },
            getNewUser(){
              axios.get(this.url + "pages/get_new_user_request").then(response => {
                this.newUsers = response.data;
              })
            }
          },
        });
    </script>














      <!-- <script>
          $(document).ready(function(){
              var base_url = "<?= base_url(); ?>";

              setInterval(() => {
                getAbsensi();
                getNewUserRequest();
              }, 0);

              function getNewUserRequest(){
                $.ajax({
                      type  : 'GET',
                      url   : '<?php echo base_url()?>/pages/get_new_user_request',
                      async : true,
                      dataType : 'json',
                      success : function(data){
                        // console.log(data)
                          for(var i=0; i<data.length; i++){
                              $("#namaBaru").html(data[i].nama)
                              $("#nisBaru").html(data[i].nis)
                              const linkAcc = base_url + 'pages/acc_user_request?id=' + data[i].id;
                              $("#btnAcc").attr("href", linkAcc)
                          }
                      }
      
                });
              }

              function getAbsensi(){
                  $.ajax({
                      type  : 'GET',
                      url   : '<?php echo base_url()?>/pages/get_absensi',
                      async : true,
                      dataType : 'json',
                      success : function(data){
                          let html = "";
                          for(var i=0; i<data.length; i++){
                              // $("#name").text(data[i].nama)
                              // $("#nis").text(data[i].nis)
                              // $("#time").text(data[i].jam)
                              html += "


                                '<div class='alert alert-secondary alert-dismissible fade show py-2 px-3 m-0 mt-1 my-alert'>'
                                    <span class="alert-icon">
                                      <i class="fas fa-address-card"></i>
                                    </span>
                                    <span class="alert-text">
                                      <strong id="name"> </strong> - <strong id="nis"></strong>
                                    </span>
                                    <div class="float-right">
                                      <span class="badge badge-primary badge-lg">
                                        <i class="fas fa-arrow-alt-circle-up mr-1"></i> <strong id="time">  </strong>
                                      </span>
                                    </div>
                                '</div>'


                              ";
                               
                          }
                      }
      
                  });
              }
          })
      </script>
       -->