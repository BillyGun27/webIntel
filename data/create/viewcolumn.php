<?php
include("../connect.php");
$DB = new DB();

$DB->query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'webintel' AND TABLE_NAME = 'frsstd' ") ;

//echo json_encode($DB->view());
$data = $DB->view();

//echo $data[0]["idmahasiswa"];
//$idmhs ;$semester ;$sks; 

foreach ($data as $key ) {
    # code...
echo '<div class="col-sm-9">';
echo '<div class="form-group">
<input type="text" class="form-control frscolumn" id="column" value='.$key["COLUMN_NAME"].' >
</div>';
echo '</div>';
echo '<div class="col-sm-3">';
echo '<div class="form-group">
<button class="btn btn-danger" onclick="delcolumn(\''.$key["COLUMN_NAME"].'\');">DELETE</button>        
</div>';
echo '</div>';
//echo $key["COLUMN_NAME"];
}

?>