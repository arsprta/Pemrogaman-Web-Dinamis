<?php
include_once("koneksi.php");
$sql = "select * from mahasiswa where nim='MHS01'";
$query = mysqli_query($koneksi, $sql);
while ($row = mysqli_fetch_assoc($query)) {
    $data[] = $row;
}
header('content-type: application/json');
echo json_encode($data);
mysqli_close($koneksi);
