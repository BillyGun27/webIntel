<?php
include("connect.php");
//header('Content-Type: application/json');
$nrp = $_POST["nrp"];

    $DB = new DB();
    
    $DB->query("UPDATE mahasiswa SET del = 1 WHERE idmahasiswa = ?  ")
    ->param( [ $nrp ] );

    if($DB->send()){
        echo "sucess";
    }
    
?>