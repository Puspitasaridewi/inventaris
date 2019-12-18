<!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title?></h1>
    <div class="row">

      <div class="col-lg-10">

        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <a href="" class="btn btn-primary mb-3 tambah" data-toggle="modal" data-target="#newBaruModal"><span class="fa fa-plus fa-fw"></span>Inventaris</a>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th scope="col-lg-2">No</th>
                  <th scope="col-lg-6">Tanggal Pembukuan</th>
                  <th scope="col-lg-4">Barang</th>
                   <th scope="col-lg-4">Jumlah</th>
                  <th scope="col-lg-4">Umur</th>
                  <th scope="col-lg-4">Nilai</th>
                  <th scope="col-lg-4">Kondisi</th>
                  <th scope="col-lg-4">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1;?>
                      <?php foreach($barang as $barang):?>
                      <tr>
                        <td scope="row"><?= $i;?></td>
                        <td><?= $barang['tgl_inventaris'];?></td>
                        <td><?= $barang['barang_nama'];?></td>
                        <td><?= $barang['jumlah'];?></td>
                        <td><?= $barang['umur'];?></td>
                        <td><?= $barang['nilai'];?></td>
                        <td><?= $barang['kondisi'];?></td>
                        <td>
                          <a href="" class="badge badge-success updateStatus" data-id="<?= $barang['inventaris_id'];?>" data-toggle="modal" data-target="#newEditModal">helpdesk</a>
                         
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
        <h5 class="modal-title" id="newBaruModalLabel">Inventaris Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="" method="post">
      <div class="modal-body">
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <select type="text" class="form-control" name="golongan" id="golongan" placeholder="" size="1">
                <option value=0>Pilih Golongan</option>
                <?php foreach($golongan->result() as $row):?>
                    <option value="<?php echo $row->gol_id;?>"><?php echo $row->gol_nama;?></option>
                <?php endforeach;?>
            </select>
            </div>
            <div class="col-sm-6">
              <input type="date" class="form-control" id="tgl_inventaris" name="tgl_inventaris" aria-describedby="emailHelp" placeholder="Tanggal Pembukuan">
            </div>
        </div>
        <div class="form-group">
          <select type="text" class="form-control" name="barang" id="barang" placeholder="" size="1">
            <option value=0>Pilih Barang</option>
            <?php foreach($barang as $row):?>
                <option value="<?php echo $row['pengadaan_id'];?>"><?php echo $row['barang_nama'];?></option>
            <?php endforeach;?>
          </select>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <input type="text" class="form-control" id="umur" name="umur"placeholder="Umur">
            </div>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="nilai" name="nilai" placeholder="Nilai Penyusutan">
            </div>
        </div>
        <div class="form-group">
          <select type="text" class="form-control" name="kondisi" id="kondisi" placeholder="" size="1">
            <option value=0>Pilih Kondisi</option>
            <option value="baik">Baik</option>
            <option value="rusak ringan">Rusak Ringan</option>
            <option value="rusak berat">Rusak Berat</option>
          </select>
        </div>
        
      </div>
      <div class="modal-footer">
      
      <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="newEditModal" tabindex="-1" role="dialog" aria-labelledby="newEditModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newEditModalLabel">Ubah Kondisi Inventaris</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="<?= base_url('manajemen/edit');?>" method="post">
      <div class="modal-body">
        <input type="hidden" name="inventaris_id" id="inventaris_id" value="<?= $barang['inventaris_id'];?>">
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <input type="text" class="form-control" id="barang" name="barang"placeholder="Barang" value="<?= $barang['barang_nama'];?>" disabled>
            </div>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah" value="<?= $barang['jumlah'];?>" disabled>
            </div>
        </div>
        <div class="form-group">
          <select type="text" class="form-control" name="kondisi" id="kondisi" placeholder="" size="1" value="<?= $barang['kondisi'];?>">
            <option value=0>Pilih Kondisi</option>
            <option value="rusak ringan">Rusak Ringan</option>
            <option value="rusak berat">Rusak Berat</option>
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save</button>
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
     