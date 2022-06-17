<?php

include "inc/koneksi.php";

$id =$_GET['id'];

mysqli_query($koneksi,"DELETE FROM `tb_subkriteria` WHERE id_sup='$id'");

echo "<script>
alert('Data Berhasil Dihapus');
window.location='index.php?module=subkriteria'
</script>
";

?>