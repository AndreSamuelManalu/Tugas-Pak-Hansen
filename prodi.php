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
<nav class="navbar navbar-expand-lg bg-primary ">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin.php">Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="prodi.php">Prodi</a>
        </li>
      </ul>
</nav>
<body>
    <div class="container mt-5">
        <a href="tambah_prodi.php" class="btn btn-primary">Tambah Data Prodi</a>
        <table class="table table-striped">
            <tr>
                <th>#</th>
                <th>Kode Prodi</th>
                <th>Nama Prodi</th>
                <th>Aksi</th>
                <th>Aksi</th>
            </tr>
            <?php
            $query = "SELECT * from prodi";
            $data = mysqli_query($conn,$query);
            $no=1;
            while($row = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $row['kode_prodi'] ?></td>
                <td><?= $row['nama_prodi'] ?></td>
                <td><a href="edit_prodi.php?id=<?= $row['id'] ?>" class="btn btn-warning">Edit</a></td>
                <td><a href="hapus_prodi.php?id=<?= $row['id'] ?>" class="btn btn-danger">Hapus</a></td>
            </tr>
            <?php $no++; } ?>
        </table>
    </div>
</body>
</html>