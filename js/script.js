


let swipeOption = {
    loop: true,
    effect: 'fade',
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    speed: 3000,
  }
  new Swiper('.swiper-container', swipeOption);

$(function(){

   $(".toggle_btn").on("click",function(){
       if($("header").hasClass("open")){
           $("header").removeClass("open");
       }else{
           $("header").addClass("open");
       }
   })
   
   $("#navi a").on("click",function(){
       $("header").removeClass("open");
   })
    
















})