<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>ubah pengguna</title>
</head>
<body>
     <?php include "navbar.php" ?>
     <h1>ubah pengguna</h1>
     <?php 
     // ambil koneksi
     include "../config.php";
     // ambil id_login dari url
     $id_login = $_GET ['id_login'];
     // cari id_login di tb_login
     $sql = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE id_login='$id_login'");
     //ambil datanya
     $pengguna = mysqli_fetch_assoc($sql);
     ?>
     <form action="m_ubah_pengguna.php" method="post">
          <input type="hidden" name="id_login" id="" value="<?= $pengguna ['id_login'] ?>">
          <table>
               <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama_pengguna" id="" value="<?= $pengguna['nama_pengguna']?>"></td>
               </tr>
               <tr>
                    <td>username</td>
                    <td>:</td>
                    <td><input type="text" name="username_pengguna" id="" value="<?= $pengguna['username_pengguna']?>"></td>
               </tr>
               <tr>
                    <td>password</td>
                    <td>:</td>
                    <td><input type="text" name="password_pengguna" id="" value="<?= $pengguna['password_pengguna']?>"></td>
               </tr>
               <tr>
                    <td>status</td>
                    <td>:</td>
                    <td> <select name="status" id="">
                         <?php
                         if ($pengguna['status'] == "administrator"){
                              echo "<option value='administrator' selected>administrator</option>";
                         } else {
                              echo "<option value='administrator' >administrator</option>";
                         }

                         if ($pengguna['status'] == "petugas") {
                              echo "<option value='petugas' selected >petugas</option>";
                         } else {
                              echo "<option value='petugas' >petugas</option>";
                         }
                         ?>
                    </select></td>
               </tr>
               <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="simpan"></td>
               </tr>
          </table>
     </form>
</body>
</html>