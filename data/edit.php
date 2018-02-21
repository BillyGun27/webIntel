<?php
include("connect.php");
//header('Content-Type: application/json');
$id = $_POST["nrp"];
$nama = $_POST["nama"];
$dosen =  $_POST["dosen"];
$tgl =  $_POST["tgl"];
$alamat =  $_POST["alamat"];
if(isset($_POST["submit"]) ){
    
    $DB = new DB();
    $DB->query("SELECT  idwali FROM wali WHERE nama_wali= ? ")
    ->param( [ $dosen ] );
    $dat = $DB->view();
    
    if($_POST["submit"] == "insert"){
      $DB->query("INSERT INTO mahasiswa(idmahasiswa,nama_mahasiswa,tanggal_lahir_mahasiswa,alamat_mahasiswa,wali_mahasiswa) VALUES(?,?,?,?,?) ")
     ->param( [$id ,$nama ,$tgl ,$alamat ,$dat[0]["idwali"] ] );
    }else if($_POST["submit"] == "update"){
        $DB->query("UPDATE mahasiswa SET nama_mahasiswa = ?,tanggal_lahir_mahasiswa = ? , alamat_mahasiswa = ? ,wali_mahasiswa = ? ,multi = NULL WHERE idmahasiswa = ?  ")
       ->param( [ $nama ,$tgl ,$alamat ,$dat[0]["idwali"],$id ] );
    }
    
    if($DB->send()){
        echo "sucess";
    }

    
}

?>