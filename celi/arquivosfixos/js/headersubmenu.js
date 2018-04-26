$(function(){
  $(".menuItem-edital").on("mouseover", function(){
    $(".header-subMenu-edital").slideDown(300);
  });
  $(".menuItem-edital").on("mouseleave", function(){
    $(".header-subMenu-edital").slideUp(0);
  });
  $(".menuItem-curso").on("mouseover", function(){
    $(".header-subMenu-curso").slideDown(300);
  });
  $(".menuItem-curso").on("mouseleave", function(){
    $(".header-subMenu-curso").slideUp(0);
  });
});
