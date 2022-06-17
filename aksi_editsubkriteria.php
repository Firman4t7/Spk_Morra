<?php

include "inc/koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama_kriteria'];
$namasub = $_POST['nama_subkriteria'];
$bobot = $_POST['nilai_bobot'];



$update = mysqli_query($koneksi, "UPDATE `tb_subkriteria` SET `id_kriteria`='$nama',`nama_subkriteria`='$namasub',`nilai_bobot`='$bobot' WHERE id_sup='$id'");


if ($update) {
	echo "
	<script>
	alert('Data Berhasil Diupdate');
	window.location='index.php?module=subkriteria';
    </script>";
}else{
	echo "
	<script>alert('Data gagal Diupdate');
    </script>";
}

?>