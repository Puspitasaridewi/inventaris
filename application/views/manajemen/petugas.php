


    
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title?></h1>
      <div class="row">

            <div class="col-lg-8">

              <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <a href="" class="btn btn-primary mb-3 tambah" data-toggle="modal" data-target="#newTambahModal"><span class="fa fa-plus fa-fw"></span>Tambah Petugas</a>
                </div>
                <div class="card-body">
                  <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th scope="col-lg-2">No</th>
                        <th scope="col-lg-6">Username</th>
                        <th scope="col-lg-4">Hak Akses</th>
                        <th scope="col-lg-4">Cabang</th>
                        <th scope="col-lg-4">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1;?>
                      <?php foreach($data as $data):?>
                      <tr>
                        <td scope="row"><?= $i;?></td>
                        <td><?= $data['username'];?></td>
                        <td><?= $data['role_name']  ;?></td>
                        <td><?= $data['cabang_nama'];?></td>
                        <td>
                          <a href="" class="badge badge-success edit" data-toggle="modal" data-target="#newTambahModal">ubah</a>
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
        <h5 class="modal-title" id="newTambahModalLabel">Tambah Petugas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="user" method="post" action="<?= base_url('Auth/registration');?>">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= set_value('username')?>">
           <?= form_error('username','<small class="text-danger pl-3">','</small>');?>
          </div>
          <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <input type="password" class="form-control" id="password" name="password"placeholder="Password">
               <?= form_error('password','<small class="text-danger pl-3">','</small>');?>
            </div>
            <div class="col-sm-6">
              <input type="password" class="form-control" id="password1" name="password1" placeholder="Ulangi Password">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-5 mb-3 mb-sm-0">
              <select name="hak_akses" id="hak_akses" class="form-control">
                <option value="0">- Hak Akses -</option>
                <?php foreach($petugas->result() as $row):?>
                    <option value="<?php echo $row->role_id;?>"><?php echo $row->role_name;?></option>
                <?php endforeach;?>
              </select>
            </div>
            <div class="col-sm-7 mb-3 mb-sm-0">
              <select type="text" class="form-control" name="cabang" id="cabang" placeholder="Hak akses" size="1">
                <option value=0>Pilih Cabang</option>
                <?php foreach($cabang->result() as $row):?>
                    <option value="<?php echo $row->id;?>"><?php echo $row->cabang_nama;?></option>
                <?php endforeach;?>
            </select>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">
            Simpan
          </button>
        </div>  
      </form>
    </div>
  </div>
</div>

     
     