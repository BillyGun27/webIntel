<?php
include("../connect.php");

$tbname = "frs".$_POST["tbname"];//'frsstd';
$tahun = $_POST["tbname"];
$DB = new DB();

$DB->query("CREATE TABLE IF NOT EXISTS ".$tbname."(
  id INT NOT NULL AUTO_INCREMENT,
  idmahasiswa VARCHAR(45) NULL,
  nama_mahasiswa VARCHAR(45) NULL,
  semester VARCHAR(45) NULL,
  totalsks INT NULL,
  PRIMARY KEY (id)
  )") ;

  //UNIQUE INDEX frstd_unique (idmahasiswa ASC, semester ASC)

if($DB->send()){
    echo "success";
}else{
    echo "error";
}

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
}

      
 



?>