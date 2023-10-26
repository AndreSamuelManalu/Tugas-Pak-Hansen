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
          <a class="nav-link" href="Prodi.php">Prodi</a>
        </li>
      </ul>
</nav>
<body>
    <div class="container mt-5">
        <table class="table table-striped">
            <tr>
                <th>#</th>
                <th>Nama Mahasiswa</th>
                <th>NPM</th>
                <th>Email</th>
                <th>Usia</th>
                <th>Program Studi</th>
                <th>Nama Prodi</th>
            </tr>
            <?php
            $query = "SELECT * from mahasiswa join prodi on mahasiswa.id = prodi.id";
            $data = mysqli_query($conn,$query);
            $no=1;
            while($row = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $row['nama_mahasiswa'] ?></td>
                <td><?= $row['npm'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['usia'] ?></td>
                <td><?= $row['prodi'] ?></td>
                <td><?= $row['nama_prodi'] ?></td>
            </tr>
            <?php $no++; } ?>
        </table>
    </div>
</body>
</html>
</body>
</html>