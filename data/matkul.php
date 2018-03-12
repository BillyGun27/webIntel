<option value="">Pilih</option>
<?php
include("connect.php");
//header('Content-Type: application/json');

$DB = new DB();
$DB->query("SELECT * FROM mata_kuliah ");
$data =  $DB->view();
foreach ($data as $key ) {
    # code...
    echo "<option value='".$key["kode"]."'>".$key["kode"]." | ". $key["matakuliah"]." | ".$key["sks"]."</option>" ;
}
// echo json_encode($DB->view());
?>