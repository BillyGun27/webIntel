$("#dosen").load("data/dosen.php");
//modal
// Get the modal
var modal = document.getElementById('myModal');

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  closeModal();
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
      closeModal();
    }
}
/****/

window.onbeforeunload = function () {
  //return "Do you really want to close?";
  console.log("Do you really want to close");
  closeModal();
  
};

function closeModal(){
  modal.style.display = "none";
  $.post("data/free.php",
  {
      nrp:  $(".info").find(".nrp").html(),
      
  },
    function(data){
     //alert(data);
   //  location.reload(); 
    // $(".data_pengguna").load("routes/table/jenisbarang.php");    
  });


}

numb =0;
setInterval(disp,1000);
/*setInterval(function(numb){//take data

     console.log(numb);
    
  },1000)*/

function disp() {
  $.get("data/view.php",//?offset="+numb,
function(data){ 
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
  
 // console.log(data);
  //alert( data[0].anggota1 );
//$("#barang").eq(1) 
 });

}

$(".help-block").hide();
function InvalidId(textbox) {
  $.get("data/view.php",//?offset="+numb,
  function(data){ 
   
    //  $(".nrp").eq(i).html(data[i+numb].idmahasiswa );
      var duplicate='' ;
  //    $(".CatList").each(function(index){
  //      if(textbox.value.toLowerCase() == $(".CatList").eq(index).html().toLowerCase() ){
  //        duplicate = $(".CatList").eq(index).html();
  //      }
   //   })

      data.forEach(element => {
        if(textbox.value.toLowerCase() == element.idmahasiswa.toLowerCase() ){
          duplicate = element.idmahasiswa.toLowerCase();
         // console.log("duplicate");
        }
        console.log( element.idmahasiswa.toLowerCase());
      });
    
    
      if (textbox.value == '') {
            textbox.setCustomValidity('Input new category');

      }
      else if(textbox.value.toLowerCase() == duplicate.toLowerCase() ){
            textbox.setCustomValidity( duplicate +' category already exist');
          $("#nrp-form").addClass("has-error");
          $(".help-block").html( duplicate +' category already exist');
          $(".help-block").show();
      }
      else {
            textbox.setCustomValidity('');
            $("#nrp-form").removeClass("has-error");
            $(".help-block").hide();
        }
        return true;

   });
  
 
  }

//alert(window.location.pathname );
$("tr").click(function(){

  if(!$(this).hasClass("info")){
    current = $(".info");
    current.find(".fa").removeClass("fa-angle-double-right");
    current.removeClass("info");
  
    $(this).addClass("info");
    $(this).find(".fa").addClass("fa-angle-double-right");
  }else{
    //alert( $(this).find(".nama").html() );    
    //edit();"/webintel/index.html"  
    editfrs();
    
  }


});
/*
$(document).on('click', ".info", function() {
  alert( $(this).find("kode").html() );     
});
*/
function editfrs(){
  if( window.location.pathname == "/webintel/index.html" || window.location.pathname == "/webintel/"){
    sessionStorage.nrp = $(".info").find(".nrp").html();
    sessionStorage.nama = $(".info").find(".nama").html();
    sessionStorage.semester = $("#semester").val();
    sessionStorage.tahun = $("#tahun").val();
    window.location = "./frs.html";
    }
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
    console.log( $('this').attr('id') );
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

var submit;
function edit() {
  $.post("data/occupied.php",
  {
      nrp:  $(".info").find(".nrp").html(),
      
  },
    function(data){
    // alert(data);
     if(data == "edit data"){
      modal.style.display = "block";
     }else{
      alert(data);//multiuser
     }
   
   //  location.reload(); 
    // $(".data_pengguna").load("routes/table/jenisbarang.php");    
  });

  $("#nrp").prop('readonly', true);
  submit = "update";
  //alert("edit");
  var nrp = $(".info").find(".nrp").html();
  var nama = $(".info").find(".nama").html();
  var dosen = $(".info").find(".dosen").html();
  var tgl = $(".info").find(".tgl").html();
  var alamat = $(".info").find(".alamat").html();

  $("#nrp").val(nrp);
  $("#nama").val(nama);
  $("#dosen").val(dosen).change();
  $("#alamat").val(alamat);
  $("#tgl").val(tgl);
  
  $("#nrp-form").removeClass("has-error");
  $(".help-block").hide();
}

function ins() {
  $("#nrp").prop('readonly', false);
  $("#nrp").val('');
  $("#nama").val('');
  $("#dosen").val('').change();
  $("#alamat").val('');
  $("#tgl").val('');

  submit = "insert";
  // alert("insert");
  modal.style.display = "block";

  $("#nrp-form").removeClass("has-error");
  $(".help-block").hide();
 }

function del() {
  //alert("delete");
  var ask = confirm("Apakah Anda Ingin Menghapus\n" +  $(".info").find(".nama").html() +"?" );

  if(ask){
    $.post("data/delete.php",
    {
        nrp:  $(".info").find(".nrp").html(),
        
    },
      function(data){
       alert(data);
     //  location.reload(); 
      // $(".data_pengguna").load("routes/table/jenisbarang.php");    
    });
  }
  //disp();

}

function recycle() {

    $.post("data/recycle.php",
      function(data){
       alert(data);
       
      // $(".data_pengguna").load("routes/table/jenisbarang.php");    
    });
  
  

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
      case "KeyE":
        // Do something for "enter" or "return" key press.
        edit();
        break;
      case "Delete":
        // Do something for "esc" key press.
        del();
        break;
      case "Insert":
        // Do something for "Insert" key press.
        ins();
        break;
      default:
        return; // Quit when this doesn't handle the key event.
    }
  
    // Cancel the default action to avoid it being handled twice
    event.preventDefault();
  }, true);

  
  $("#former").submit(function(event) {

    /* stop form from submitting normally */
    event.preventDefault();

if(submit == "custom"){
  var list = $('.customdata').map(function() {
    return $(this).val();
}).toArray();
console.log(list);
  $.post("data/create/editfrscustom.php",
  {
      list:  list
      
  },
    function(data){
     alert(data);
     modal.style.display = "none";
    // $(".data_pengguna").load("routes/table/jenisbarang.php");    
  });

}else{
  $.post("data/edit.php",
  {
      submit: submit,
      nama:  $("#nama").val(),
      nrp: $("#nrp").val(),
      alamat: $("#alamat").val(),
      dosen: $("#dosen").val(),
      tgl: $("#tgl").val()
      
  },
    function(data){
     alert(data);
     modal.style.display = "none";
    // $(".data_pengguna").load("routes/table/jenisbarang.php");    
  });
}
  
 
});