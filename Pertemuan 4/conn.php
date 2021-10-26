<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "media";
$koneksi = mysqli_connect($host, $username, $password, $database);

if (!$koneksi) {
    echo "Error :" . mysqli_connect_error();
    exit();
}
