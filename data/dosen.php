<option value="">Pilih</option>
<?php
include("connect.php");
//header('Content-Type: application/json');

$DB = new DB();
$DB->query("SELECT idwali ,nama_wali FROM wali ");
$data =  $DB->view();
foreach ($data as $key ) {
    # code...
    echo "<option value='".$key["nama_wali"]."'>".$key["idwali"]." - ". $key["nama_wali"]."</option>" ;
}
 //json_encode($DB->view());
?>