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
        <form action="input_prodi.php" method="post">
            <label for="">Kode Prodi</label>
            <input type="text" name="kode_prodi" id="kode_prodi" placeholder="Masukkan Kode prodi" class="form-control" required><br>
            <label for="">Nama Prodi</label>
            <input type="text" name="nama_prodi" id="nama_prodi" placeholder="Masukkan nama Prodi" class="form-control" required><br> 
            <input type="submit" value="Simpan">
        </form>
    </div>
</body>
</html>