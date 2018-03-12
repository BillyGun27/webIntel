<?php
include("../connect.php");
header('Content-Type: application/json');
//SELECT * FROM webintel.frs,  webintel.mahasiswa , webintel.mata_kuliah WHERE webintel.frs.idmahasiswa = webintel.mahasiswa.id AND webintel.frs.idmatakuliah =  webintel.mata_kuliah.id AND webintel.mahasiswa.id = 1;
/*
if (isset( $_GET["offset"])) {
    # code...
    $offset = $_GET["offset"];
}else{
    $offset = 5;
}*/

$idmahasiswa = $_GET["mhs"];
$semester = $_GET["smt"];
$tahun= $_GET["thn"];

$DB = new DB();
$DB->query("SELECT * FROM frs,  mahasiswa , mata_kuliah WHERE frs.idmahasiswa = mahasiswa.idmahasiswa AND frs.idmatakuliah =  mata_kuliah.kode AND mahasiswa.idmahasiswa = ? AND semester = ? AND tahun = ? ") 
->param( [$idmahasiswa , $semester , $tahun ] );

echo json_encode($DB->view());
?>