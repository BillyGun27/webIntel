<?php
include("connect.php");
header('Content-Type: application/json');

if (isset( $_GET["offset"])) {
    # code...
    $offset = $_GET["offset"];
}else{
    $offset = 5;
}

$DB = new DB();
$DB->query("SELECT idmahasiswa,nama_mahasiswa,tanggal_lahir_mahasiswa,alamat_mahasiswa,nama_wali FROM mahasiswa ,wali WHERE wali.idwali = mahasiswa.wali_mahasiswa AND  del IS NULL  LIMIT $offset, 5");

echo json_encode($DB->view());
?>