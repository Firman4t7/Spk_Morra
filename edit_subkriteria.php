<div class="card">
  <div class="card-body">
    <h5 class="card-title">Form Edit Data Sub Kriteria</h5>
    <hr>
    <?php 

    include 'inc/koneksi.php';

    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "SELECT * FROM `tb_subkriteria` WHERE id_sup='$id'")or die(mysql_error());

    $data = mysqli_fetch_array($query);

    
    ?>

    <form action="aksi_editsubkriteria.php" method="POST">
		      <div class="form-group">
		             <label for="">Nama Kriteria</label>
                 	 <input type="hidden" name="id" value="<?= $data['id_sup']?>">
		             <select name="nama_kriteria" class="form-control" required>
		             	<option value="">- Pilih -</option>
		             	<?php

		             	include 'inc/koneksi.php';
		             	$query =  mysqli_query($koneksi, "SELECT * FROM tb_kriteria");
		             	while ($row = mysqli_fetch_array($query)) {
		             	
		             	?>

		             	<option value="<?php echo $row['id_kriteria']?>"><?php echo $row['nama_kriteria']?></option>

		             	<?php  } ?>
		             </select>
		             <script>
		             	document.getElementsByName('nama_kriteria')[0].value = "<?php echo $data['id_kriteria']?>"
		             </script>
		      </div>

		      <div class="form-group">
		      	<label for="">Nama SubKriteria</label>
		             <input type="text" name="nama_subkriteria" class="form-control" value="<?php echo $data['nama_subkriteria']?>">
		      </div>
		       <div class="form-group">
		             <label for="">Nilai Bobot</label>
		             <input type="text" name="nilai_bobot" class="form-control" value="<?php echo $data['nilai_bobot'] ?>">
		       </div>
      <div class="modal-footer">
        <button type="submit" name="save" class="btn btn-primary">Save</button>
        <a href="?module=subkriteria" class="btn btn-secondary">Back</a>
      </div>
  </form>
  </div>
</div>
<br>


