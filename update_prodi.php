<?php
include 'koneksi.php'; 

$id = $_POST['id'];
$kode = $_POST['kode_prodi'];
$nama_prodi = $_POST['nama_prodi'];

$query = mysqli_query($conn, "UPDATE prodi set kode_prodi='$kode',nama_prodi='$nama_prodi' WHERE id='$id'");

header("location:prodi.php");
?>