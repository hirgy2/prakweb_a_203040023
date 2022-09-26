<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "prakweb_a_203040023_pw");

// ambil dari tabel film / query
$result = mysqli_query($conn, "SELECT * FROM buku");

$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}
// tampung ke variabel buku
$buku = $rows;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buku</title>
</head>

<body>

  <h1>Daftar Buku Komik</h1>

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
      </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>