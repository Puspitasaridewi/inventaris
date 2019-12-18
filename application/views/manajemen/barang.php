


    
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title?></h1>
      <div class="row">

            <div class="col-lg-8">

              <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newTambahModal"><span class="fa fa-plus fa-fw"></span>Tambah Daftar Barang</a>
                </div>
                <div class="card-body">
                  <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th scope="col-lg-2">No</th>
                        <th scope="col-lg-6">Nama Barang</th>
                        <th scope="col-lg-4">Satuan Barang</th>
                      
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1;?>
                      <?php foreach($barang as $barang):?>
                      <tr>
                        <td scope="row"><?= $i;?></td>
                        <td><?= $barang['barang_nama'];?></td>
                        <td><?= $barang['barang_satuan'];?></td>  
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
<div class="modal fade" id="newTambahModal" tabindex="-1" role="dialog" aria-labelledby="newTambahModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newTambahModal">Tambah Barang </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="<?= base_url('manajemen/barang')?>" method="post">
      <div class="modal-body">
      <div class="form-group">
        
        <input type="text" class="form-control" id="barang_nama" name="barang_nama" aria-describedby="emailHelp" placeholder="Nama Barang">
        
        </div>
        <input type="text" class="form-control" id="barang_satuan" name="barang_satuan" aria-describedby="emailHelp" placeholder="Satuan Barang">
        
        
      </div>
      <div class="modal-footer">
      
      <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>
     
     