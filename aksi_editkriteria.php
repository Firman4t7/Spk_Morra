<?php

include "inc/koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama_kriteria'];
$bobot = $_POST['bobot_kriteria'];





$update = mysqli_query($koneksi, "UPDATE `tb_kriteria` SET `nama_kriteria`='$nama',`bobot_kriteria`='$bobot' WHERE id_kriteria='$id'");


if ($update) {
	echo "
	<script>
	alert('Data Berhasil Diupdate');
	window.location='index.php?module=kriteria_pestisida';
    </script>";
}else{
	echo "
	<script>alert('Data gagal Diupdate');
    </script>";
}



?>