<?php
include 'koneksi.php';
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
        <form action="input_mahasiswa.php" method="post">
            <label for="">Nama Mahasiswa</label>
            <input type="text" name="nama_mahasiswa" id="nama_mahasiswa" placeholder="Masukkan nama Mahasiswa" class="form-control" required><br>
            <label for="">NPM</label>
            <input type="text" name="npm" id="npm" placeholder="Masukkan NPM" class="form-control" required><br> 
            <label for="">Email</label>
            <input type="text" name="email" id="email" placeholder="Masukkan Email" class="form-control" required><br>
            <label for="">Usia</label>
            <input type="text" name="usia" id="usia" placeholder="Masukkan Usia anda" class="form-control" required><br>
            <label for="">Program Studi</label>
            <input type="text" name="prodi" id="prodi" placeholder="Masukkan Program Studi anda" class="form-control" required><br>
            <input type="submit" value="Simpan">
        </form>
    </div>
</body>
</html>