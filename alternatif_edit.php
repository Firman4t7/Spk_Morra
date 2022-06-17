<div class="card">
  <div class="card-body">
    <h5 class="card-title">Form Edit Data Kriteria</h5>
    <hr>
    <?php 

    include 'inc/koneksi.php';

    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "SELECT * FROM `tb_alternatif` WHERE id_alternatif='$id'")or die(mysql_error());

    $data = mysqli_fetch_array($query);


    
    ?>

    <form action="aksi_editalternatif.php" method="POST">
       	
		      <div class="form-group">
                 <label for="">Nama Alternatif</label>
                 <input type="hidden" name="id" value="<?php echo $data['id_alternatif']?>">
                 <input type="text" name="nama_alternatif" class="form-control" value="<?php echo $data['nama_alternatif']?>" required>
          </div>
          <div class="form-group">
                 <label for="">C1(Jenis)</label>
                 <select name="c1" class="form-control" required>
                  <option value="">- Pilih -</option>
                  <?php

                  include 'inc/koneksi.php';
                  $query =  mysqli_query($koneksi, "SELECT * FROM tb_kriteria RIGHT JOIN tb_subkriteria ON tb_kriteria.id_kriteria=tb_subkriteria.id_kriteria WHERE tb_subkriteria.id_kriteria='7'; ");
                  while ($row1 = mysqli_fetch_array($query)) {
                  
                  ?>

                  <option value="<?php echo $row1['nilai_bobot']?>"><?php echo $row1['nama_subkriteria']?></option>

                  <?php  } ?>

                 </select>
                 <script>
                  document.getElementsByName('c1')[0].value = "<?php echo $data['c1']?>"
                 </script>
          </div>
          <div class="form-group">
                 <label for="">C2(Harga)</label>
                  <select name="c2" class="form-control" required>
                  <option value="">- Pilih -</option>
                  <?php

                  include 'inc/koneksi.php';
                  $query =  mysqli_query($koneksi, "SELECT * FROM tb_kriteria RIGHT JOIN tb_subkriteria ON tb_kriteria.id_kriteria=tb_subkriteria.id_kriteria WHERE tb_subkriteria.id_kriteria='8'; ");
                  while ($row2 = mysqli_fetch_array($query)) {
                  
                  ?>

                  <option value="<?php echo $row2['nilai_bobot']?>"><?php echo $row2['nama_subkriteria']?></option>

                  <?php  } ?>

                 </select>
                 <script>
                  document.getElementsByName('c2')[0].value = "<?php echo $data['c2']?>"
                 </script>
          </div>
          <div class="form-group">
                 <label for="">C3(Kegunaan)</label>
                  <select name="c3" class="form-control" required>
                  <option value="">- Pilih -</option>
                  <?php

                  include 'inc/koneksi.php';
                  $query =  mysqli_query($koneksi, "SELECT * FROM tb_kriteria RIGHT JOIN tb_subkriteria ON tb_kriteria.id_kriteria=tb_subkriteria.id_kriteria WHERE tb_subkriteria.id_kriteria='9'; ");
                  while ($row3 = mysqli_fetch_array($query)) {
                  
                  ?>

                  <option value="<?php echo $row3['nilai_bobot']?>"><?php echo $row3['nama_subkriteria']?></option>

                  <?php  } ?>
                 </select>
                  <script>
                  document.getElementsByName('c3')[0].value = "<?php echo $data['c3']?>"
                 </script>
          </div>
      <div class="modal-footer">
        <button type="submit" name="save" class="btn btn-primary">Save</button>
        <a href="?module=alternatif" class="btn btn-secondary">Back</a>
      </div>
  </form>
  </div>
</div>
<br>


