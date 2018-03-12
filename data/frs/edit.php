<?php
include("../connect.php");

$idmahasiswa = $_POST["mhs"];
$semester = $_POST["smt"];
$tahun= $_POST["thn"];
$kode = $_POST["kode"];

$DB = new DB();
if($_POST["submit"] == "insert"){
$DB->query("INSERT INTO frs(idmahasiswa,idmatakuliah,semester,tahun) VALUES(?,?,?,?)") 
->param( [$idmahasiswa, $kode , $semester , $tahun ] );
}else if($_POST["submit"] == "delete"){
    $DB->query("DELETE FROM frs WHERE idmahasiswa = ? AND idmatakuliah = ? AND semester = ? AND tahun = ?") 
->param( [$idmahasiswa, $kode , $semester , $tahun ] );
}

if($DB->send()){
    echo "success";
}else{
    echo "duplicate";
}
//echo $kode;
?>