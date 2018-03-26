<?php
include("../connect.php");
//header('Content-Type: application/json');
//$data = $_POST["type"];
$column =$_POST["col"];
$change = $_POST["type"];
$DB = new DB();

if($change == "ADD"){
    $DB->query("ALTER TABLE frsstd ADD ".$column." VARCHAR(45) ");
}else if($change == "DROP") {
    $DB->query("ALTER TABLE frsstd DROP ".$column );
}

     
   
    
    if($DB->send()){
        echo "sucess";
    }

    


?>