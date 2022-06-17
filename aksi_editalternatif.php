<?php

include 'inc/koneksi.php';

$id = $_POST['id'];
$alternatif = $_POST['nama_alternatif'];
$C1 = $_POST['c1'];
$C2 = $_POST['c2'];
$C3 = $_POST['c3'];




$update = mysqli_query($koneksi, "UPDATE `tb_alternatif` SET `nama_alternatif`='$alternatif',`c1`='$C1',`c2`='$C2',`c3`='$C3' WHERE id_alternatif='$id'");


if ($update) {
	echo "
	<script>
	alert('Data Berhasil Diupdate');
	window.location='index.php?module=alternatif';
    </script>";
}else{
	echo "
	<script>alert('Data gagal Diupdate');
    </script>";
}


?>