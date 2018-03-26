<?php
include("../connect.php");
$DB = new DB();
$list = $_POST["list"];

$DB->query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'webintel' AND TABLE_NAME = 'frsstd' ") ;

//echo json_encode($DB->view());
$data = $DB->view();

//echo $data[0]["idmahasiswa"];
//$idmhs ;$semester ;$sks; 

foreach ($data as $num => $key ) {
    # code...
//$list[$num],$list[0]
if($num>3){
    $DB->query("UPDATE frsstd SET ".$key["COLUMN_NAME"]." = ? WHERE NRP = ? AND Semester = ?  AND Tahun=? ")
    ->param( [ $list[$num] ,$list[0],$list[2],$list[3] ] );

}else if($num == 1){
    $DB->query("UPDATE frsstd SET ".$key["COLUMN_NAME"]." = ? WHERE NRP = ? AND Semester = ?  AND Tahun=? ")
    ->param( [ $list[$num] ,$list[0],$list[2],$list[3] ] );
}
$DB->send();
   // if(){
       // echo $key["COLUMN_NAME"].$list[$num].$list[0].$list[2].$list[3] ;
    //}

}
echo 'success';

?>