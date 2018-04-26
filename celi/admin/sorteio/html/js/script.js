$(function(){
  $('.editalInput').change(function() {
    var test = $(this).val();
    $.ajax({
      type: "GET",
      url: "../../control/pdaosorteio.php",
      /*success: function(){

      }*/
    });
  });
});
