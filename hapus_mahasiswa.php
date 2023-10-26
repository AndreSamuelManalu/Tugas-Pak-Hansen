<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($conn, "DELETE from mahasiswa where id='$id'");

header("location:admin.php");
?>