numb =0;
disp(numb);
function disp(numb) {

  $.get("php/data.php?offset="+numb,
function(data){ 
  for(i=0;i<5;i++){
    console.log(data[i].anggota1);
    $(".barang").eq(i).html(data[i].anggota1 );
    
  }
  
  console.log(data);
  //alert( data[0].anggota1 );
//$("#barang").eq(1) 
 });

}


$("tr").click(function(){

  if(!$(this).hasClass("info")){
    current = $(".info");
    current.find(".fa").removeClass("fa-angle-double-right");
    current.removeClass("info");
  
    $(this).addClass("info");
    $(this).find(".fa").addClass("fa-angle-double-right");
  }else{
    alert( $(this).find("#kode").html() );     
  }


});
/*
$(document).on('click', ".info", function() {
  alert( $(this).find("kode").html() );     
});
*/
function up() {
    current = $(".info");
    if (current.prev().length > 0){
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
    if (current.next().length > 0){
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
    disp(numb);
    //alert("left"+numb);
  }else{
    alert("end left");
  }
 

}

function right() {
  if(numb<150){
    
    numb+=5;
    disp(numb);
    //alert("right"+numb);
  }else{
    alert("end right");
  }
 

}

function edit() {
  alert("edit");
}

function del() {
  alert("delete");
}

function ins() {
  alert("insert");
}
window.addEventListener("keydown", function (event) {
    if (event.defaultPrevented) {
      return; // Do nothing if the event was already processed
    }
  
    switch (event.key) {
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
      case "Enter":
        // Do something for "enter" or "return" key press.
        edit();
        break;
      case "Delete":
        // Do something for "esc" key press.
        del();
        break;
      case "Insert":
        // Do something for "esc" key press.
        ins();
        break;
      default:
        return; // Quit when this doesn't handle the key event.
    }
  
    // Cancel the default action to avoid it being handled twice
    event.preventDefault();
  }, true);
