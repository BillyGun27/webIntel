<thead>
           <tr class="headerfrs">
               <th></th>
             <!-- <th></th>
              <th>NRP</th>
              <th>Nama</th>
              <th>Semester</th>
              <th>Total SKS</th>   -->            
          <?php
include("../connect.php");
$DB = new DB();

$DB->query("SELECT COLUMN_NAME  FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'webintel' AND TABLE_NAME = 'frsstd'  ") ;

//echo json_encode($DB->view());
$datacol = $DB->view();
$size = sizeof($datacol);

//$noselect = ["id","idmahasiswa","wali_mahasiswa","idmatakuliah","semester","wali", "multi" ,"del","kode","matakuliah","sks"];
//echo $data[0]["idmahasiswa"];
//$idmhs ;$semester ;$sks; 
//$tableview='frs.idmahasiswa';
foreach ($datacol as $key ) {
    # code...

    echo '<th>'.$key["COLUMN_NAME"].'</th> ';
//echo $key["COLUMN_NAME"];
/*
$add =true;
foreach($noselect as $exclude ){
    if($key["COLUMN_NAME"] == $exclude ){
        $add = false;
    //$tableview = $tableview." ".$key["COLUMN_NAME"];
    }
    
}

if($add){
    $tableview = $tableview." ,".$key["COLUMN_NAME"];
    echo '<th>'.$key["COLUMN_NAME"].'</th> ';
}*/

}


     //echo $tableview;

   
    
?>

 </tr>
      
      </thead>
      <tbody>
          <?php
        $tahun = $_GET['thn'];
//SELECT frs.idmahasiswa,mahasiswa.nama_mahasiswa ,semester  FROM frs,  mahasiswa WHERE frs.idmahasiswa = mahasiswa.idmahasiswa  AND tahun = ? GROUP BY frs.idmahasiswa,semester
          $DB->query("SELECT * FROM frsstd WHERE tahun = ? " ) 
          ->param( [ $tahun ] );
          
          //echo json_encode($DB->view());
          //echo json_encode($DB->viewnum());

          $datacol = $DB->viewnum();
          foreach ($datacol as $n => $key ) {
            // <i class="fa fa-angle-double-right" aria-hidden="true"></i>
            if($n == 0) {echo '<tr class="info" >
                <td></td>
                ' ; 
            }else{
                echo '<tr>
                <td></td>';
            }
            
            foreach ($key as $num => $value ) {
                echo '<td class="'.$num.'">'.$value.'</td>';
            }
            for ($i=0; $i < $size -sizeof($key) ; $i++) { 
                # code...
                echo '<td>'.'</td>';
            }
            echo '</tr>';
        }
     
        
       
      ?>
      </tbody>

<!--<script>
   // alert($( "th" ).length);
    for(i=0 ;i<$( "th" ).length-5 ;i++){
  $("tr").append("<td></td>");
   }
</script>-->
            
                    
             
          
   