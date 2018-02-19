<?php
include("connect.php");
//header('Content-Type: application/json');
$id = $_POST["id"];
if(isset($_POST["submit"]) ){
    
    $DB = new DB();
    
    if($_POST["submit"] == "insert"){
     // $DB->query("INSERT INTO pengguna(kd_pengguna,nm_pengguna,nm_login,pass_login,level) VALUES('$kd_pengguna','$nm_pengguna','$nm_login','$pass_login','$level') ")
     //->param( [$value->farm_id ,$value->PH ,$value->TDS ,$value->suhu ,$value->kelembapan , $value->status_pompa_utama ,$value->status_pompa_a ,$value->status_pompa_b, $value->ketinggian_pompa_a ,$value->ketinggian_pompa_b, $value->baterai, $value->sumber_listrik ] );
    }else if($_POST["submit"] == "update"){
       // $DB->query("UPDATE pengguna SET kd_pengguna = '$kd_pengguna',nm_pengguna = '$nm_pengguna',nm_login = '$nm_login',pass_login = '$pass_login',level = '$level' WHERE kd_pengguna = '$kd_pengguna'")
       //->param( [$value->farm_id ,$value->PH ,$value->TDS ,$value->suhu ,$value->kelembapan , $value->status_pompa_utama ,$value->status_pompa_a ,$value->status_pompa_b, $value->ketinggian_pompa_a ,$value->ketinggian_pompa_b, $value->baterai, $value->sumber_listrik ] );
    }
    echo $_POST["submit"];// $DB->send() ;
    
}

?>