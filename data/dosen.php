<option value="">Pilih</option>
<?php
include("connect.php");
//header('Content-Type: application/json');

$DB = new DB();
$DB->query("SELECT id,NoPeserta ,anggota1,alamat FROM peserta ");
$data =  $DB->view();
foreach ($data as $key ) {
    # code...
    echo "<option value='".$key["anggota1"]."'>".$key["id"]."-". $key["anggota1"]."</option>" ;
}
 //json_encode($DB->view());
?>