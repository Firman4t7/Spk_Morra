<?php

include "inc/koneksi.php";

$id =$_GET['id'];

mysqli_query($koneksi,"DELETE FROM `tb_alternatif` WHERE id_alternatif='$id'");

echo "<script>
alert('Data Berhasil Dihapus');
window.location='index.php?module=alternatif'
</script>
";

?>