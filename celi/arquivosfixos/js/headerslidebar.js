$(function(){
  var heightMain = $("#main").css("height");
  $(".header-nav").css("height", heightMain);
  $(".header-menuIcon").on("click", function(){
    $("#main").toggleClass("sliderCTT");
    $(".header-menu").toggleClass("sliderHDR");
  });
})
