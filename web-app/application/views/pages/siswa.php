
<div class="header bg-primary pb-6">
    <div class="container-fluid">
    <div class="header-body">
        <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
        </div>
        <div class="col-lg-6 col-5 text-right">
            <a href="<?php echo site_url('/siswa/tambah') ?>" class="btn btn-sm btn-neutral"><i class="fas fa-user-plus mr-1"></i> Tambah Data Siswa</a>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Data Siswa</h3>
              <?php if($this->session->flashdata('success')) { ?>
              <div class="alert alert-primary alert-dismissible fade show" role="alert">
                  <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                  <span class="alert-text"><strong>Behasil !</strong> <?php echo $this->session->flashdata('success'); ?> </span>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <?php } ?>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">NO</th>
                    <th scope="col" class="sort" data-sort="name">Nama</th>
                    <th scope="col" class="sort" data-sort="budget">NIS</th>
                    <th scope="col" class="sort" data-sort="status">Email</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody class="list">
                <?php $no = 1; foreach($siswa as $s) { ?>
                  <tr>
                    <td scope="row">
                      <?php echo $no++ ?>
                    </td>
                    <td scope="row">
                      <?php echo $s->nama?>
                    </td>
                    <td class="budget">
                      <?php echo $s->nis ?>
                    </td>
                    <td class="budget">
                      <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Kirim email">
                        <?php echo $s->email ?>
                      </button>
                    </td>
                    <td>
                      <span class="badge badge-primary badge-lg"><strong> IX-8 </strong></span>
                    </td>
                    <td>
                    <?php if($s->status === "0") { ?>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>
                        <span class="status">Pending</span>
                      </span>
                    <?php } else { ?>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Active</span>
                      </span>
                    <?php } ?>
                      
                    </td>
                    <td>
                      <a href="" class="btn btn-success btn-sm"> <i class="fas fa-user-edit"></i> Edit </a>
                      <a href="<?php echo base_url(). 'siswa/delete?id='.$s->id ?>" class="btn btn-danger btn-sm"> <i class="fas fa-user-minus"></i> Hapus </a>
                    </td>
                    
                  </tr>
                <?php } ?>
                  
                </tbody>
              </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- Dark table -->
      
      </div>
    </div>