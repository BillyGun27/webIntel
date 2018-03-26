<?php
include("../connect.php");
header('Content-Type: application/json');

$tahun = $_GET["thn"];
$DB = new DB();

//SELECT frs.idmahasiswa,mahasiswa.nama_mahasiswa ,semester ,SUM(sks) AS totalsks FROM frs,  mahasiswa , mata_kuliah WHERE frs.idmahasiswa = mahasiswa.idmahasiswa AND frs.idmatakuliah =  mata_kuliah.kode AND tahun = ? GROUP BY frs.idmahasiswa,semester
$DB->query("SELECT *  FROM frs WHERE tahun = ?" ) 
->param( [ $tahun ] );

//echo json_encode($DB->view());
echo json_encode($DB->viewnum());
//$data = $DB->view();


?>