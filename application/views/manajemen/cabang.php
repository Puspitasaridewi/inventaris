


    
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title?></h1>
      <div class="row">

            <div class="col-lg-8">

              <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <a href="" class="btn btn-primary mb-3 tambah" data-toggle="modal" data-target="#newTambahModal"><span class="fa fa-plus fa-fw"></span>Tambah Daftar Cabang</a>
                </div>
                <div class="card-body">
                  <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th scope="col-lg-2">No</th>
                        <th scope="col-lg-6">Nama Cabang</th>
                        <th scope="col-lg-4">Alamat</th>
                        <th scope="col-lg-4">No.Telp</th>
                        <th scope="col-lg-4">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1;?>
                      <?php foreach($cabang as $cabang):?>
                      <tr>
                        <td scope="row"><?= $i;?></td>
                        <td><?= $cabang['cabang_nama'];?></td>
                        <td><?= $cabang['alamat'];?></td> 
                        <td><?= $cabang['no_telp'];?></td> 
                        <td>
                          <a href="" class="badge badge-success edit" data-id="<?= $cabang['id'];?>" data-toggle="modal" data-target="#newTambahModal">ubah</a>
                          <a href="" class="badge badge-danger">hapus</a>
                        </td> 
                      </tr>
                      <?php $i++?>
                      <?php endforeach;?>
                    </tbody>
                  </table>
                </div>
              </div>

            </div>

            

          </div>


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="newTambahModal" tabindex="-1" role="dialog" aria-labelledby="newTambahModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newTambahModalLabel">Tambah Cabang </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="<?= base_url('manajemen/cabang')?>" method="post">
      <div class="modal-body">
      <div class="form-group">
        
        <input type="text" class="form-control" id="cabang_nama" name="cabang_nama" aria-describedby="emailHelp" placeholder="Nama  Cabang">
        </div>
        <div class="form-group">
          <input type="text" class="form-control edit" id="alamat" name="alamat" aria-describedby="emailHelp" placeholder="Alamat">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="no_telp" name="no_telp" aria-describedby="emailHelp" placeholder="Nomor Telepon">
        </div>
        
        
      </div>
      <div class="modal-footer">
      
      <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </form>
    </div>
  </div>
</div>

     
     