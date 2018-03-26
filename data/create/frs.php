<?php
include("../connect.php");

$tbname = "frs".$_POST["tbname"];//'frsstd';
$tahun = $_POST["tbname"];
$DB = new DB();
/*
$DB->query("CREATE TABLE IF NOT EXISTS ".$tbname."(
  id INT NOT NULL AUTO_INCREMENT,
  idmahasiswa VARCHAR(45) NULL,
  semester VARCHAR(45) NULL,
  tahun INT(11),
  PRIMARY KEY (id)
  )") ;
*/
//SELECT frs.idmahasiswa,mahasiswa.nama_mahasiswa ,semester ,SUM(sks) AS totalsks FROM frs,  mahasiswa , mata_kuliah WHERE frs.idmahasiswa = mahasiswa.idmahasiswa AND frs.idmatakuliah =  mata_kuliah.kode AND tahun = ? GROUP BY frs.idmahasiswa,semester
/*
$DB->query(
    "INSERT INTO frsstd (NRP,Nama,Semester,Tahun)
SELECT DISTINCT frs.idmahasiswa ,nama_mahasiswa ,semester,tahun FROM frs JOIN mahasiswa ON frs.idmahasiswa = mahasiswa.idmahasiswa 
WHERE NOT EXISTS 
  (SELECT NRP,Nama,Semester,Tahun FROM frsstd WHERE NRP = frs.idmahasiswa AND frsstd.Semester = frs.semester AND frsstd.Tahun = frs.tahun);
     ) ") ;

  //UNIQUE INDEX frstd_unique (idmahasiswa ASC, semester ASC)

$DB->send();*/

$DB->query(
    "CREATE TABLE ".$tbname." LIKE frsstd; 
    INSERT  ".$tbname.
    " SELECT DISTINCT * FROM frsstd WHERE tahun = ".$tahun 
    ."; )") ;

  //UNIQUE INDEX frstd_unique (idmahasiswa ASC, semester ASC)

if($DB->send()){
    echo "success";
}else{
    echo "error";
}
/*
$DB->query("SELECT frs.idmahasiswa,mahasiswa.nama_mahasiswa ,semester,SUM(sks) AS totalsks FROM frs,  mahasiswa , mata_kuliah WHERE frs.idmahasiswa = mahasiswa.idmahasiswa AND frs.idmatakuliah =  mata_kuliah.kode AND tahun = ? GROUP BY frs.idmahasiswa,semester") 
->param( [ $tahun ] );

//echo json_encode($DB->view());
$data = $DB->view();

//echo $data[0]["idmahasiswa"];
//$idmhs ;$semester ;$sks; 

foreach ($data as $key ) {
    # code...
$DB->query("INSERT INTO ".$tbname."(idmahasiswa , nama_mahasiswa ,semester , totalsks ) VALUES(?,?,?,?) ")
->param( [$key["idmahasiswa"] ,$key["nama_mahasiswa"] ,$key["semester"], $key["totalsks"] ]);
  
 $DB->send();
}*/

      
 



?>