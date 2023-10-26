<?php
include 'koneksi.php';
 
$id = $_POST['id'];
$kode_prodi = $_POST['kode_prodi'];
$nama_prodi = $_POST['nama_prodi'];

$query = mysqli_query($conn, "INSERT into prodi values(null,'$kode_prodi','$nama_prodi')");

header("location:prodi.php");
?>