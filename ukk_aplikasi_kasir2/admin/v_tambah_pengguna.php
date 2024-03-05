<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>tambah pengguna</title>
     <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
     <?php include "navbar.php"?>
     <h1>Tambah Pengguna Baru</h1>
     <form action="m_tambah_pengguna.php" method="post">
          <table>
               <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama_pengguna"  id="" class="form-control"></td>
               </tr>
               <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="username_pengguna"  id="" class="form-control"></td>
               </tr>
               <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="text" name="password_pengguna"  id="" class="form-control"></td>
               </tr>
               <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td> <select name="status" id="" class="form-select">
                         <option value="administrator">administrator</option>
                         <option value="petugas">petugas</option>
                    </select></td>
                    <script src="../js/bootstrap.min.js"></script>
               </tr>
               <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="simpan" class="btn btn-outline-success"></td>
               </tr>
          </table>
     </form>
</body>
</html>