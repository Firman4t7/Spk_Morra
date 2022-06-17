<?php

include 'inc/koneksi.php';

// session
session_start();

// cek jika belum login
if($_SESSION['status']!="login"){
        header("location:login.php");
    }

$tampil = mysqli_query($koneksi, "select * from tb_admin where username='$_SESSION[username]'");

$data = mysqli_fetch_array($tampil);

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SPK MOORA</title>

    <!-- Custom fonts for this template-->
    <link href="templete/isi/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="templete/isi/css/sb-admin-2.min.css" rel="stylesheet">

<!-- data tabel -->
 <link href="templete/isi/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">