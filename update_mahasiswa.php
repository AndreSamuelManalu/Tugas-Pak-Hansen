<?php
include 'koneksi.php'; 

$id = $_POST['id'];
$nama = $_POST['nama_mahasiswa'];
$npm = $_POST['npm'];
$email = $_POST['email'];
$usia = $_POST['usia'];
$prodi = $_POST['prodi'];

$query = mysqli_query($conn, "UPDATE mahasiswa set nama_mahasiswa='$nama',npm='$npm',email='$email',usia='$usia',prodi='$prodi' WHERE id='$id'");

header("location:admin.php");
?>