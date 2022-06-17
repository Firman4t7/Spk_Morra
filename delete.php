<?php

include "inc/koneksi.php";

$id =$_GET['id'];

mysqli_query($koneksi,"DELETE FROM `tb_pestisida` WHERE id_pts='$id'");

echo "<script>
alert('Data Berhasil Dihapus');
window.location='index.php?module=pupuk'
</script>
";

?>