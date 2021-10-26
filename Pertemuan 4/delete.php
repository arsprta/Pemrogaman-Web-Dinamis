<?php
// include database connection file
include_once("conn.php");
// Get id from URL to delete that user
$nama = $_GET['nama'];
// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM komen WHERE nama='$nama'");
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
