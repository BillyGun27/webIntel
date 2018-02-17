<?php
include("connect.php");
header('Content-Type: application/json');
$offset = $_GET["offset"];
$DB = new DB();
$DB->query("SELECT id,NoPeserta ,anggota1,alamat FROM peserta LIMIT $offset, 5 ");

echo json_encode($DB->view());
?>