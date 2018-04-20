$(function(){
  $(".header-menuIcon").on("click", function(){
    var slidebar = $(".content").css("transform");
    $(".content").toggleClass("slider");
    $(".header-menu").toggleClass("slider");
  });
})
