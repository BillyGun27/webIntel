<?php
include("connect.php");
header('Content-Type: application/json');
$offset = $_GET["offset"];
$DB = new DB();
$DB->query("SELECT id_mahasiswa,nama_mahasiswa,tanggal_lahir_mahasiswa,alamat_mahasiswa,wali_mahasiswa FROM mahasiswa LIMIT $offset, 5 ");

echo json_encode($DB->view());
?>