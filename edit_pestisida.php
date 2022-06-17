<div class="card">
  <div class="card-body">
    <h5 class="card-title">Form Edit Data</h5>
    <hr>

    <?php 

    include 'inc/koneksi.php';

    $id = $_GET['id'];


    $query = mysqli_query($koneksi, "SELECT * FROM `tb_pestisida` WHERE id_pts='$id'")or die(mysql_error());

    $data = mysqli_fetch_array($query);

    ?>

    <form action="aksi_edit.php" method="POST">
       	<div class="form-group">
             <label for="">Kode Pestisida</label>
             <input type="hidden" name="id_pts" class="form-control" value="<?php echo $data['id_pts']?>">
             <input type="text" name="kode_pts" class="form-control" value="<?php echo $data['kode_pts'] ?>">
         </div>
		      <div class="form-group">
		             <label for="">Nama Pestisida</label>
		             <input type="text" name="nama_pts" class="form-control" value="<?php echo $data['nama_pts'] ?>">
		      </div>
		      <div class="form-group">	
		              <label for="">Bobot Pestisida</label>
		             <input type="text" name="bobot" class="form-control" value="<?php echo $data['bobot'] ?>">
		       </div>
		        <div class="form-group">
		             <label for="">Jumlah Pestisida</label>
		             <input type="text" name="jmlh" class="form-control" value="<?php echo $data['jmlh'] ?>">
		        </div>
		         <div class="form-group">
		             <label for="">Harga Pestisida</label>
		             <input type="text" name="harga_pts" class="form-control" value="<?php echo $data['harga_pts'] ?>">
                 </div>
      <div class="modal-footer">
        <button type="submit" name="save" class="btn btn-primary">Save</button>
        <a href="?module=pupuk" class="btn btn-secondary">Back</a>
      </div>
  </form>
  </div>
</div>
<br>


