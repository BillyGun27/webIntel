var url;// = "data/view.php";
var tableValue;/* = function (data){

    for(i=0;i<5;i++){
        $(".nrp").eq(i).html("");
        $(".nama").eq(i).html("");
        $(".alamat").eq(i).html("");
        $(".dosen").eq(i).html("");
        $(".tgl").eq(i).html("");
    
      }
    //console.log(data);
      for(i=0;i<5;i++){
       // console.log(data[i].nama_mahasiswa);
        $(".nrp").eq(i).html(data[i+numb].idmahasiswa );
        $(".nama").eq(i).html(data[i+numb].nama_mahasiswa );
        $(".alamat").eq(i).html(data[i+numb].alamat_mahasiswa);
        $(".dosen").eq(i).html(data[i+numb].nama_wali);
        $(".tgl").eq(i).html(data[i+numb].tanggal_lahir_mahasiswa)
      }
      
}*/
numb =0;
setInterval(disp,1000);
/*setInterval(function(numb){//take data

     console.log(numb);
    
  },1000)*/

  
  function disp() {
    /*$.get(url,
  function(data){

  tableValue(data);
 
   });*/

 //$(".customfrs").load("data/create/colname.php?thn="+  $("#tahun").val());
   
  
  }
  
  //alert(window.location.pathname );
  $(".customfrs").on("click","tr", function(event){

    if(!$(this).hasClass("info")){
      current = $(".info");
      current.find(".fa").removeClass("fa-angle-double-right");
      current.removeClass("info");
    
      $(this).addClass("info");
      $(this).find(".fa").addClass("fa-angle-double-right");
    }else{
      editfrs();
      
    }
});
/*
$("tr").click(function(){
alert("clock");
if(!$(this).hasClass("info")){
  current = $(".info");
  current.find(".fa").removeClass("fa-angle-double-right");
  current.removeClass("info");

  $(this).addClass("info");
  $(this).find(".fa").addClass("fa-angle-double-right");
}else{
  //alert( $(this).find(".nama").html() );    
  //edit();"/webintel/index.html"  
  //if( window.location.pathname == "/webintel/index.html" || window.location.pathname == "/webintel/"){
  //sessionStorage.nrp = $(".info").find(".nrp").html();
  //sessionStorage.nama = $(".info").find(".nama").html();
  //sessionStorage.semester = $("#semester").val();
  //sessionStorage.tahun = $("#tahun").val();
  //window.location = "./frs.html";
  //}
  editfrs();
  
}


});
*/
function editfrs(){
 // if( window.location.pathname == "/webintel/index.html" || window.location.pathname == "/webintel/"){
    sessionStorage.nrp = $(".info").find(".0").html();
    sessionStorage.nama = $(".info").find(".1").html();
    sessionStorage.semester = $(".info").find(".2").html();
    sessionStorage.tahun = $("#tahun").val();
    window.location = "./frs.html";
//    }
}

function up() {
    current = $(".info");
    if (current.prev().length > 0 ){
      current.removeClass("info");
    current.find(".fa").removeClass("fa-angle-double-right");
   
    next =current.prev().addClass("info");
    next.find(".fa").addClass("fa-angle-double-right");
    
    
    }else{
      left();
      if(numb>0){
        down();down();down();down();
      }
    }
}

function down() {
    current = $(".info");
    //console.log( $('this').attr('id') );
    if (current.next().length > 0  ){
      current.removeClass("info");
        current.find(".fa").removeClass("fa-angle-double-right");
    
    next = current.next().addClass("info");
    next.find(".fa").addClass("fa-angle-double-right");

   
    }else{
      right();
      if(numb<150){
      up();up();up();up();
      }
    }

    
}

function left(){
  if(numb>0){
    numb-=5;
    disp();
    //alert("left"+numb);
  }else{
    alert("end left");
  }

 

}

function right() {
  if(numb<150){
    
    numb+=5;
   disp();
    //alert("right"+numb);
  }else{
    alert("end right");
  }
 

}

window.addEventListener("keydown", function (event) {
    if (event.defaultPrevented) {
      return; // Do nothing if the event was already processed
    }
  
    switch (event.code) {
      case "ArrowDown":
        // Do something for "down arrow" key press.
        down();
        break;
      case "ArrowUp":
        // Do something for "up arrow" key press.
        up();
        break;
      case "ArrowLeft":
        // Do something for "left arrow" key press.
        left();
        break;
      case "ArrowRight":
        // Do something for "right arrow" key press.
        right();
        break;
      default:
        return; // Quit when this doesn't handle the key event.
    }
  
    // Cancel the default action to avoid it being handled twice
    event.preventDefault();
  }, true);



