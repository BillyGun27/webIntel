<?php
include("../connect.php");

//$tbname = "frs".$_POST["tbname"];//'frsstd';
//$tahun = $_POST["tbname"];
$DB = new DB();

$DB->query(
    "INSERT INTO frsstd (NRP,Nama,Semester,Tahun)
SELECT DISTINCT frs.idmahasiswa ,nama_mahasiswa ,semester,tahun FROM frs JOIN mahasiswa ON frs.idmahasiswa = mahasiswa.idmahasiswa 
WHERE NOT EXISTS 
  (SELECT NRP,Nama,Semester,Tahun FROM frsstd WHERE NRP = frs.idmahasiswa AND frsstd.Semester = frs.semester AND frsstd.Tahun = frs.tahun)"
  ) ;

//SELECT table_name FROM information_schema.tables where table_schema='webintel' AND table_name LIKE 'frs%';

$DB->send();

$DB->query( 
"SELECT table_name FROM information_schema.tables where table_schema='webintel' AND table_name LIKE 'frs2%';"
);

$data = $DB->view();
foreach($data as $key){
   // echo $key['table_name'];
   $pieces = explode("s", $key['table_name']);
    $DB->query(    
        "DROP TABLE IF EXISTS ".$key['table_name'].";
    CREATE TABLE ".$key['table_name']." LIKE frsstd ;
    INSERT  ".$key['table_name']."
    SELECT DISTINCT * FROM frsstd WHERE tahun = ".$pieces[1].";
        ");
    
    $DB->send();
    echo $pieces[1];
}







?>