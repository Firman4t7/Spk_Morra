<?php

include "inc/koneksi.php";

$id = $_POST['id_pts'];
$kode = $_POST['kode_pts'];
$nama = $_POST['nama_pts'];
$bobot = $_POST['bobot'];
$jumlah = $_POST['jmlh'];
$harga = $_POST['harga_pts'];


$update = mysqli_query($koneksi, "UPDATE `tb_pestisida` SET `kode_pts`='$kode',`nama_pts`='$nama',`bobot`='$bobot',`jmlh`='$jumlah',`harga_pts`='$harga' WHERE id_pts='$id'");


if ($update) {
	echo "
	<script>
	alert('Data Berhasil Diupdate');
	window.location='index.php?module=editpestisida&id=$id';
    </script>";
}else{
	echo "
	<script>alert('Data gagal Diupdate');
    </script>";
}



?>