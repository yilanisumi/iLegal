$(document).ready(function(){
  $(".ui.checkbox").checkbox();
  $(".ui.radio.checkbox").checkbox();
  $(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });
});

$("#logout").on("click", function(){
  window.location.href="login.php";
});

$("#edit-account").on("click", function(){
  $(this).parent().find("input").removeAttr("readonly");
  $(this).addClass("hidden");
  $("#cancel-edit").removeClass("hidden");
  $("#logout").addClass("hidden");
  $("#save-info").removeClass("hidden");
});

$("#cancel-edit").on("click", function(){
  window.location.href="account.php";
});

$("#savepdf").on("click", function(){
  var doc = $(this).parent().find("embed");
  doc.print();
  console.log(doc);
});