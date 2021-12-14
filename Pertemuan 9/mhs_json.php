<?php
include_once("koneksi.php");
$sql = "select * from mahasiswa order by nim";
$tampil = mysqli_query($koneksi, $sql);
if (mysqli_num_rows($tampil) > 0) {
    $no = 1;
    $response = array();
    $response["data"] = array();
    while ($r = mysqli_fetch_array($tampil)) {
        $h['nim'] = $r['nim'];
        $h['nama'] = $r['namaMHS'];
        $h['jkel'] = $r['jkel'];
        $h['alamat'] = $r['alamat'];
        $h['tgllhr'] = $r['tgllhr'];
        $h['jurusan'] = $r['jurusan'];
        array_push($response["data"], $h);
    }
    echo json_encode($response);
} else {
    $response["message"] = "tidak ada data";
    echo json_encode($response);
}
