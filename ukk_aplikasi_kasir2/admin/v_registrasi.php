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
  <title>Registrasi</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
  <?php include "navbar.php"; ?>
  <h1>Daftar Pengguna</h1>
    <a href="v_tambah_pengguna.php"  class="btn btn-success">tambah pengguna</a>
    <br><br>
    <table class="table table-striped">
      <tr>
        <td>Id Login</td>
        <td>Nama</td>
        <td>Username</td>
        <td>Password</td>
        <td>Status</td>
        <td>Aksi</td>
      </tr>
      <?php
      //ambil koneksi
      include "../config.php";
      //ambil data di tb_login
      $sql = mysqli_query($koneksi, 'SELECT * FROM tb_login');
      foreach($sql as $pengguna) {
      ?>
      <tr>
        <td><?= $pengguna['id_login']?></td>
        <td><?= $pengguna['nama_pengguna']?></td>
        <td><?= $pengguna['username_pengguna']?></td>
        <td><?= $pengguna['password_pengguna']?></td>
        <td><?= $pengguna['status']?></td>
        <td><a href="v_ubah_pengguna.php?id_login=<?= $pengguna ['id_login'] ?>" class="btn btn-outline-primary">ubah</a></td>
        <script src="../js/bootstrap.min.js"></script>
      </tr>
      <?php } ?>
    </table>
</body>
</html>