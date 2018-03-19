<?php
include("../connect.php");
header('Content-Type: application/json');

$tbname = "frs".$_POST["tbname"];

$DB = new DB();

$DB->query("SELECT COUNT(*) AS frstable
FROM information_schema.tables 
WHERE table_schema = 'webintel' 
AND table_name = ? ") 
->param( [$tbname] );

echo json_encode($DB->view());
?>