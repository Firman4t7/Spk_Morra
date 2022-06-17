    <div class="">
                 <h1 class="h3 mb-2 text-gray-800"></h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Pestisida

                            	<a href=""class="btn btn-primary" data-toggle="modal" data-target="#tambahdata" style="float: right;"><i class="fas fa-plus"></i> Tambah Data</a>
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Kode Pestisida</th>
                                            <th>Nama Pestisida</th>
                                            <th>Bobot</th>
                                            <th>Jumlah</th>
                                            <th>Harga Pestisida</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                      <?php
                                      include 'inc/koneksi.php';

                                      $quary = mysqli_query($koneksi,"SELECT * FROM `tb_pestisida`");
                                      $no = 1;
                                      while ($data = mysqli_fetch_array($quary)) {

                                      ?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data['kode_pts']?></td>
                                            <td><?php echo $data['nama_pts']?></td>
                                            <td><?php echo $data['bobot']?></td>
                                            <td><?php echo $data['jmlh']?></td>
                                            <td><?php echo $data['harga_pts']?></td>

                                            <td>
                                              <a href="?module=editpestisida&id=<?php echo $data['id_pts']?>"class="btn btn-warning">Edit</a>
                                              <a href="delete.php?id=<?php echo $data ['id_pts']?>"
                                                onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini?')" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                      <?php }?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

</div>
<!-- Modal -->
<div class="modal fade" id="tambahdata" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Pestisida</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="#" method="POST">
       	<div class="form-group">
             <label for="">Kode Pestisida</label>
             <input type="text" name="kode_pts" class="form-control" placeholder="Masukkan Kode Pestisida">
         </div>
		      <div class="form-group">
		             <label for="">Nama Pestisida</label>
		             <input type="text" name="nama_pts" class="form-control" placeholder="Masukkan Nama Pestisida">
		      </div>
		         <div class="form-group">
		             <label for="">Bobot Pestisida</label>
		             <input type="text" name="bobot" class="form-control" placeholder="Masukkan Bobot Pestisida">
		         </div>

		         <div class="form-group">
		             <label for="">Jumlah Pestisida</label>
		             <input type="text" name="jmlh" class="form-control" placeholder="Masukkan  Jumlah Pestisida">
		         </div>
		         <div class="form-group">
		             <label for="">Harga Pestisida</label>
		             <input type="text" name="harga_pts" class="form-control" placeholder="Masukkan Harga Pestisida">
     </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="save" class="btn btn-primary">Save</button>
      </div>
  </form>
       <?php

       include 'inc/koneksi.php';

       if(isset($_POST['save'])) {
        $kode = $_POST['kode_pts'];
        $nama_pts = $_POST['nama_pts'];
        $bobot = $_POST['bobot'];
        $jmlh = $_POST['jmlh'];
        $harga_pts = $_POST['harga_pts'];


         
        $insert = mysqli_query($koneksi,"INSERT INTO `tb_pestisida`(`id_pts`, `kode_pts`, `nama_pts`, `bobot`, `jmlh`, `harga_pts`) VALUES ('','$kode','$nama_pts','$bobot','$jmlh','$harga_pts')");

        if ($insert){
          echo "<script>alert('Data Berhasil Disimpan');
          window.location='?module=pupuk';
          </script>";

        }else{
          echo "<script>alert('Data Gagal Disimpan');
          window.location='?module=pupuk';
          </script>";

           }
         }

       ?>
    </div>
  </div>
</div>
</div>