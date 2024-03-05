<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "db_kasir_08";

$koneksi = mysqli_connect($hostname, $username, $password, $database);

if (!$koneksi){
     echo "koneksi Gagal";
}
