<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = "SELECT * from mahasiswa where id='$id'";
$data = mysqli_query($conn,$query);
$row = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<div class="container">
        <form action="update_mahasiswa.php" method="post">
            <input type="hidden" name="id" id="id" placeholder="Masukkan nama Mahasiswa" value="<?= $row['id'] ?>" class="form-control">
            <label for="">Nama Mahasiswa</label>
            <input type="text" name="nama_mahasiswa" id="nama_mahasiswa" placeholder="Masukkan nama Mahasiswa" value="<?= $row['nama_mahasiswa'] ?>" class="form-control" required><br>
            <label for="">NPM</label>
            <input type="text" name="npm" id="npm" placeholder="Masukkan NPM" class="form-control" value="<?= $row['npm'] ?>" required><br> 
            <label for="">Email</label>
            <input type="text" name="email" id="email" placeholder="Masukkan Email" class="form-control" value="<?= $row['email'] ?>" required><br>
            <label for="">Usia</label>
            <input type="text" name="usia" id="usia" placeholder="Masukkan Usia anda" class="form-control" value="<?= $row['usia'] ?>" required><br>
            <label for="">Program Studi</label>
            <input type="text" name="prodi" id="prodi" placeholder="Masukkan Program Studi anda" class="form-control" value="<?= $row['prodi'] ?>" required><br>
            <input type="submit" value="Simpan">
        </form>
    </div>
</body>
</html>