<?php

include 'inc/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "select * from tb_admin where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0){

	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";

	echo "<script>
	alert('Berhasil Login');
	window.location='index.php?module=dashboard'
	</script>
	";

}else{
	// gagal
	echo "<script>
	alert('gagal Login');
	window.location='login.php'
	</script>
	";
} 

?>