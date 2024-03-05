<?php
session_start();
//cek session 
if ($_SESSION['login'] != 'admin') {
  //kembali ke halaman login
  header('location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Barang</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>
  <?php include "navbar.php"; ?>
  <h1>Tambah Barang</h1>
  <form action="m_tambah_barang.php" method="post">
    <table>
      <tr>
        <td>Nama Barang</td>
        <td>:</td>
        <td><input type="text" name="nama_barang"  id=""  class="form-control"></td>
      </tr>
      <tr>
        <td><span class="input-text" id="addon-wrapping">Stok Barang</span></td>
        <td><span class="input-text" id="addon-wrapping">:</span></td>
        <td class="input-group">
          <span class="input-group-text"><i class="bi bi-bag-plus-fill"></i></span>
          <input type="text" name="stok_barang"  id=""  class="form-control" aria-describedby="addon-wrapping"></td>
      </tr>
      <tr>
        <td>Harga</td>
        <td>:</td>
        <td>
          <input type="text" name="harga_barang"  id=""  class="form-control"></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td><input type="submit" value="Simpan" class="btn btn-outline-success" ></td>
      </tr>
      <script src="../js/bootstrap.min.js"></script>
    </table>
</body>

</html>