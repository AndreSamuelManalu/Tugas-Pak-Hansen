<?php
include 'koneksi.php';
 
$id = $_POST['id'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$npm = $_POST['npm'];
$email = $_POST['email'];
$usia = $_POST['usia'];
$prodi = $_POST['prodi'];

$query = mysqli_query($conn, "INSERT into mahasiswa values(null,'$nama_mahasiswa','$npm','$email','$usia','$prodi')");

header("location:admin.php");
?>