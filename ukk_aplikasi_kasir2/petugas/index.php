<?php
session_start();
//cek session 
if ($_SESSION['login'] != 'petugas') {
  //kembali ke halaman login
  header('location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Petugas</title>
</head>

<body>
  <?php include "navbar.php"; ?>
  <div class="container">
  <h1>Dasboard</h1>
  ID : <?= $_SESSION['id_login']; ?> <br> Pengguna : Petugas <?= $_SESSION['nama']; ?>
  <br> <img src="../img/petugas.jpg" class="rounded float-start" alt="..." height="300px">
  </div>
</body>

</html>