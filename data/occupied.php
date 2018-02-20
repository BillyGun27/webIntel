<?php
include("connect.php");
//header('Content-Type: application/json');
$nrp = $_POST["nrp"];

    $DB = new DB();

    $DB->query("SELECT  multi FROM mahasiswa WHERE idmahasiswa = ? ")
    ->param( [ $nrp ] );
    $dat = $DB->view();
    
    $multi =  $dat[0]["multi"];

    if( $multi == 1){
        echo "Sedang Dipakai";//"sucess";
    }else{
        $DB->query("UPDATE mahasiswa SET multi = 1 WHERE idmahasiswa = ?  ")
        ->param( [ $nrp ] );
    
    
        if($DB->send()){
        
            echo "edit data";
          
        }
    }

  
    
?>