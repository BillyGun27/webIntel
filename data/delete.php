<?php
include("connect.php");
//header('Content-Type: application/json');
    
    $DB = new DB();
    
     // $DB->query("SELECT id,NoPeserta ,anggota1,alamat FROM peserta LIMIT $offset, 5 ");
    
    echo $_POST["submit"];// $DB->send() ;
    
?>