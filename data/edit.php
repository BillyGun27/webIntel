<?php
include("connect.php");
//header('Content-Type: application/json');
if(isset($_POST["submit"]) ){
    
    $DB = new DB();
    
    if($_POST["submit"] == "insert"){
     // $DB->query("SELECT id,NoPeserta ,anggota1,alamat FROM peserta LIMIT $offset, 5 ");
    }else if($_POST["submit"] == "update"){
       // $DB->query("SELECT id,NoPeserta ,anggota1,alamat FROM peserta LIMIT $offset, 5 ");
    }
    echo $_POST["submit"];// $DB->send() ;
    
}

?>