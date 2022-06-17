    <div class="">
                 <h1 class="h3 mb-2 text-gray-800"></h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Alternatif


                            	<a href=""class="btn btn-primary" data-toggle="modal" data-target="#tambahdata" style="float: right;"><i class="fas fa-plus"></i> Tambah Data</a>

                            	<a href="?module=perhitungan"class="btn btn-secondary mr-2"  style="float: right;"><i class="fas fa-calculator"></i> Perhitungan</a>
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Nama Alternatif</th>
                                            <th>C1</th>
                                            <th>C2</th>
                                            <th>C3</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                      <?php
                                      include 'inc/koneksi.php';

                                      $quary = mysqli_query($koneksi,"SELECT * FROM tb_alternatif");
                                      $no = 1;
                                      while ($data = mysqli_fetch_array($quary)) {

                                      ?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data['nama_alternatif']?></td>
                                            <td><?php echo $data['c1']?></td>
                                            <td><?php echo $data['c2']?></td>
                                            <td><?php echo $data['c3']?></td>
                                            <td>
                                              <a href="?module=editalternatif&id=<?php echo $data['id_alternatif']?>"class="btn btn-warning">Edit</a>
                                              <a href="delete_alternatif.php?id=<?php echo $data ['id_alternatif']?>"
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Alternatif</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="#" method="POST">
		      <div class="form-group">
		             <label for="">Nama Alternatif</label>
		             <input type="text" name="nama_alternatif" class="form-control" placeholder="Masukkan Nama Alternatif" required>
		      </div>
		      <div class="form-group">
		             <label for="">C1(Jenis)</label>
		             <select name="c1" class="form-control" required>
		             	<option value="">- Pilih -</option>
		             	<?php

		             	include 'inc/koneksi.php';
		             	$query =  mysqli_query($koneksi, "SELECT * FROM tb_kriteria RIGHT JOIN tb_subkriteria ON tb_kriteria.id_kriteria=tb_subkriteria.id_kriteria WHERE tb_subkriteria.id_kriteria='7'; ");
		             	while ($data = mysqli_fetch_array($query)) {
		             	
		             	?>

		             	<option value="<?php echo $data['nilai_bobot']?>"><?php echo $data['nama_subkriteria']?></option>

		             	<?php  } ?>

		             </select>
		      </div>
		      <div class="form-group">
		             <label for="">C2(Harga)</label>
		              <select name="c2" class="form-control" required>
		             	<option value="">- Pilih -</option>
		             	<?php

		             	include 'inc/koneksi.php';
		             	$query =  mysqli_query($koneksi, "SELECT * FROM tb_kriteria RIGHT JOIN tb_subkriteria ON tb_kriteria.id_kriteria=tb_subkriteria.id_kriteria WHERE tb_subkriteria.id_kriteria='8'; ");
		             	while ($data = mysqli_fetch_array($query)) {
		             	
		             	?>

		             	<option value="<?php echo $data['nilai_bobot']?>"><?php echo $data['nama_subkriteria']?></option>

		             	<?php  } ?>

		             </select>
		      </div>
		      <div class="form-group">
		             <label for="">C3(Kegunaan)</label>
		              <select name="c3" class="form-control" required>
		             	<option value="">- Pilih -</option>
		             	<?php

		             	include 'inc/koneksi.php';
		             	$query =  mysqli_query($koneksi, "SELECT * FROM tb_kriteria RIGHT JOIN tb_subkriteria ON tb_kriteria.id_kriteria=tb_subkriteria.id_kriteria WHERE tb_subkriteria.id_kriteria='9'; ");
		             	while ($data = mysqli_fetch_array($query)) {
		             	
		             	?>

		             	<option value="<?php echo $data['nilai_bobot']?>"><?php echo $data['nama_subkriteria']?></option>

		             	<?php  } ?>

		             </select>
		      </div>
		       
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="save" class="btn btn-primary">Save</button>
      </div>
  </form>
       <?php

       include 'inc/koneksi.php';

       if(isset($_POST['save'])) {
        $alternatif = $_POST['nama_alternatif'];
        $C1 = $_POST['c1'];
        $C2 = $_POST['c2'];
        $C3 = $_POST['c3'];

   
        $insert = mysqli_query($koneksi,"INSERT INTO `tb_alternatif`(`id_alternatif`, `nama_alternatif`, `c1`, `c2`, `c3`) VALUES ('','$alternatif','$C1','$C2','$C3')");

        if ($insert){
          echo "<script>alert('Data Berhasil Disimpan');
          window.location='?module=alternatif';
          </script>";

        }else{
          echo "<script>alert('Data Gagal Disimpan');
          window.location='?module=alternatif';
          </script>";

           }
         }

       ?>
    </div>
  </div>
</div>
</div>