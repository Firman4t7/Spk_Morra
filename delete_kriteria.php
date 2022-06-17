<?php

include "inc/koneksi.php";

$id =$_GET['id'];

mysqli_query($koneksi,"DELETE FROM `tb_kriteria` WHERE id_kriteria='$id'");

echo "<script>
alert('Data Berhasil Dihapus');
window.location='index.php?module=kriteria_pestisida'
</script>
";
