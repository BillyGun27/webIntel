<?php
include("../connect.php");
$DB = new DB();
$nrp = $_GET["nrp"];

$DB->query("SELECT * FROM frsstd WHERE NRP = ? ")
->param([$nrp]) ;

//echo json_encode($DB->view());
$single = $DB->viewnum();
//echo  json_encode($single);

$DB->query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'webintel' AND TABLE_NAME = 'frsstd' ") ;

//echo json_encode($DB->view());
$data = $DB->view();

//echo $data[0]["idmahasiswa"];
//$idmhs ;$semester ;$sks; 

foreach ($data as $num => $key ) {
    # code...
    echo ' <div class="form-group sp'.$key["COLUMN_NAME"].'" >
    <label class="control-label col-sm-3" >'.$key["COLUMN_NAME"].':</label>
    <div class="col-sm-5">
      <input type="text" class="form-control customdata"  value="'.$single[0][$num].'" id="'.$key["COLUMN_NAME"].'"  name="'.$key["COLUMN_NAME"].'"  >
    </div>
  </div>';
}

?>

<script>
    $("#NRP").prop('readonly', true);
    $(".spSemester").hide();
    $(".spTahun").hide();
</script>