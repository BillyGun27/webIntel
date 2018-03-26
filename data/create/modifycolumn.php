<?php
include("../connect.php");
//header('Content-Type: application/json');
$column =$_POST["col"];

$DB = new DB();

$DB->query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'webintel' AND TABLE_NAME = 'frsstd' ") ;

//echo json_encode($DB->view());
$data = $DB->view();

foreach ($data as $num => $key ) {
    # code...
    $DB->query("ALTER TABLE frsstd CHANGE COLUMN ".$key["COLUMN_NAME"]." ".$column[$num]." VARCHAR(45) NULL DEFAULT NULL ");
  
    $DB->send();
    
    //if($DB->send()){
       // echo "sucess";
   // }

   // echo $key["COLUMN_NAME"].$column[$num].$num;

}

    
echo "sucess";

     //echo $column[0];
   
    

    


?>