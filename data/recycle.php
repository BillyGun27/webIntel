<?php
include("connect.php");
//header('Content-Type: application/json');

    $DB = new DB();
    
    $DB->query("UPDATE mahasiswa SET del = NULL ");

    if($DB->send()){
        echo "sucess";
    }
    
?>