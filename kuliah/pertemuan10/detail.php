<?php 
  require "functions.php";

  //Ambil id dari url
  $id = $_GET['id'];

  //query mahasiswa berdasarkan id
  $m = query("SELECT * FROM mahasiswa WHERE id = $id");
  



?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>
<body>
  <h3>Detail Mahasiswa</h3>
  <ul>
    <li><img src="images/<?= $m['gambar']; ?>" alt="" width="60"></li>
    <li>NRP : <?= $m['nrp']; ?></li>
    <li>Nama : <?= $m['nama']; ?></li>
    <li>Jurusan : <?= $m['jurusan']; ?></li>
    <li>Email : <?= $m['email']; ?></li>
    <li>
      <a href="">Ubah</a> | <a href="">Hapus</a>
    </li>
    <a href="latihan3.php">Kembali ke daftar mahasiswa</a>
  </ul>
</body>
</html>