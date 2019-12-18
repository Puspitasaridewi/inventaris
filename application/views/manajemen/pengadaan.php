


    
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title?></h1>
      <div class="row">

            <div class="col-lg-10">

              <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <a href="" class="btn btn-primary mb-3 tambah" data-toggle="modal" data-target="#newBaruModal"><span class="fa fa-plus fa-fw"></span>Pengadaan Baru</a>
                </div>
                <div class="card-body">
                  <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th scope="col-lg-2">No</th>
                        <th scope="col-lg-4">Tanggal Pengadaan</th>
                        <th scope="col-lg-4">Cabang</th>
                        <th scope="col-lg-6">Nama Barang</th>
                        <th scope="col-lg-4">Jumlah</th>
                        <th scope="col-lg-4">Harga</th>
                        <th scope="col-lg-4">Status</th>
                        <th scope="col-lg-4">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1;?>
                      <?php foreach($data as $data):?>
                      <tr>
                        <td scope="row"><?= $i;?></td>
                        <td><?= $data['tgl_pengadaan'];?></td>
                        <td><?= $data['cabang_nama'];?></td> 
                        <td><?= $data['barang_nama'];?></td> 
                        <td><?= $data['jumlah'];?></td> 
                        <td><?= $data['harga'];?></td>
                        <td><?= $data['status'];?></td> 
                        <td>
                          <a href="" class="badge badge-success updateStatus" data-userid="<?= $data['pengadaan_id'];?>" onclick="getProduct('<?= $data['pengadaan_id'] ?>','<?= $data['status'] ?>')" data-toggle="modal" data-target="#editModal">status</a>
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
<div class="modal fade" id="newBaruModal" tabindex="-1" role="dialog" aria-labelledby="newBaruModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newBaruModalLabel">Pengadaan Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="<?= base_url('manajemen/pengadaan')?>" method="post">
      <div class="modal-body">
        <div class="form-group">
          <input type="date" class="form-control" id="tgl_pengadaan" name="tgl_pengadaan" aria-describedby="emailHelp" placeholder="Tanggal Pengadaan">
        </div>
        <div class="form-group">
          <select type="text" class="form-control" name="cabang" id="cabang" placeholder="Hak akses" size="1">
                <option value=0>Pilih Cabang</option>
                <?php foreach($cabang->result() as $row):?>
                    <option value="<?php echo $row->id;?>"><?php echo $row->cabang_nama;?></option>
                <?php endforeach;?>
            </select>
        </div>
        <div class="form-group">
          <select type="text" class="form-control" name="barang" id="barang" placeholder="Barang" size="1">
            <option value=0>Pilih Barang</option>
            <?php foreach($barang->result() as $row):?>
                <option value="<?php echo $row->barang_id;?>"><?php echo $row->barang_nama;?></option>
            <?php endforeach;?>
          </select>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <input type="text" class="form-control" id="jumlah" name="jumlah" aria-describedby="emailHelp" placeholder="Jumlah">
            </div>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="harga" name="harga" aria-describedby="emailHelp" placeholder="Harga">
            </div>
          </div>
      </div>
      <div class="modal-footer">
      
      <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </form>
    </div>
  </div>
</div>

<!--edit-->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #e5e5e5;">
        <h5 class="modal-title" id="editModal">Ubah Status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url('manajemen/updateStatus')?>">
          <input type="hidden" name="pengadaan_id" id="pengadaan_id" value="<?= $data['pengadaan_id'];?>">
          <center>
            <div class="row col-md-12" id="inactive" style="display:block; margin-top: 5%;">
              <div class="col-md-6">
                <button type="submit" class="btn btn-lg btn-danger waves-effect">Tidak Setujui</button>
              </div>
            </div>
          </center>
          <center>
            <div class="row col-md-12" id="active" style="display: none; margin-top: 5%;">
              <div class="col-md-6">
                <button type="submit" class="btn btn-lg btn-danger waves-effect">Setujui</button>
              </div>
            </div>
          </center>
      </div>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $('#tgl_pengadaan').datepicker({
      format:"dd-mm-yyyy",
      autoclose:true
    });
  });
  $(document).on('click', '.updateStatus', function() {
    var userID = $(this).attr('data-userid');
    $('#pengadaan_id').val(userID);
  });

  function getProduct(id, item) {
    if (item == 'active') {
      $("#active").css('display', 'none');
      $("#inactive").css('display', 'block');
    } else {
      $("#active").css('display', 'block');
      $("#inactive").css('display', 'none');
    }

  }
</script>
     
     