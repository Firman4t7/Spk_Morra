<div class="card">
  <div class="card-body">
    <h5 class="card-title">Form Edit Data Kriteria</h5>
    <hr>
    <?php 

    include 'inc/koneksi.php';

    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "SELECT * FROM `tb_kriteria` WHERE id_kriteria='$id'")or die(mysql_error());

    $data = mysqli_fetch_array($query);
    
    ?>

    <form action="aksi_editkriteria.php" method="POST">
       	
		      <div class="form-group">
		             <label for="">Nama Kriteria</label>
                 <input type="hidden" name="id" value="<?= $data['id_kriteria']?>">
		             <input type="text" name="nama_kriteria" class="form-control" value="<?php echo $data['nama_kriteria'] ?>">
		      </div>
		        <div class="form-group">
		             <label for="">Bobot</label>
		             <input type="text" name="bobot_kriteria" class="form-control" value="<?php echo $data['bobot_kriteria'] ?>">
		        </div>
      <div class="modal-footer">
        <button type="submit" name="save" class="btn btn-primary">Save</button>
        <a href="?module=kriteria_pestisida" class="btn btn-secondary">Back</a>
      </div>
  </form>
  </div>
</div>
<br>


