<?php
include("../connect.php");
header('Content-Type: application/json');

$tahun = $_GET["thn"];
$DB = new DB();


$DB->query("SELECT frs.idmahasiswa,mahasiswa.nama_mahasiswa ,semester ,SUM(sks) AS totalsks FROM frs,  mahasiswa , mata_kuliah WHERE frs.idmahasiswa = mahasiswa.idmahasiswa AND frs.idmatakuliah =  mata_kuliah.kode AND tahun = ? GROUP BY frs.idmahasiswa,semester") 
->param( [ $tahun ] );

echo json_encode($DB->view());
//$data = $DB->view();


?>