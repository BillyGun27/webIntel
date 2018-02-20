<?php
include("connect.php");
//header('Content-Type: application/json');
$nrp = $_POST["nrp"];

    $DB = new DB();
    
    $DB->query("UPDATE mahasiswa SET multi = NULL WHERE idmahasiswa = ?  ")
    ->param( [ $nrp ] );

    if($DB->send()){
        echo "sucess";
    }
    
?>