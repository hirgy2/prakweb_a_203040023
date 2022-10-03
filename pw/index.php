<?php
session_start();

require 'function.php';
$buku = query("SELECT * FROM buku");


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buku</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <h1>Daftar Buku Komik uhuy</h1>
  <a href="tambah.php">Tambah Buku</a>
  <table border="1" cellpading="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Nama Buku</th>
      <th>Penulis Buku</th>
      <th>Harga Buku</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($buku as $row) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $row["gambar"]; ?>" alt="" width="100"></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["penulis"]; ?></td>
        <td><?= $row["harga"]; ?> </td>
        <td>
        <center>
          <a href="ubah.php?id=<?= $row["id"]; ?>" onclick="return confirm('Ubah Data??')">Ubah</a>
          <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Hapus Data??')">Hapus</a>
        </center>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>