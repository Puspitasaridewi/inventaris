<!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title?></h1>
    <div class="row">

      <div class="col-lg-10">

        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            
          </div>
          <div class="card-body">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th scope="col-lg-2">No</th>
                  <th scope="col-lg-4">Barang</th>
                  <th scope="col-lg-4">Jumlah</th>
                  <th scope="col-lg-4">Umur</th>
                  <th scope="col-lg-4">Kondisi</th>
                  <th scope="col-lg-4">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1;?>
                      <?php foreach($data as $barang):?>
                      <tr>
                        <td scope="row"><?= $i;?></td>
                        <td><?= $barang['barang_nama'];?></td>
                        <td><?= $barang['jumlah'];?></td>
                        <td><?= $barang['umur'];?></td>
                        <td><?= $barang['kondisi'];?></td>
                        <td>
                          <a href="" class="badge badge-success" data-id="" data-toggle="modal" data-target="#newTambahModal">ubah</a>
                         <a href="" class="badge badge-danger" data-id="" data-toggle="modal" data-target="#newTambahModal">hapus</a>
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
