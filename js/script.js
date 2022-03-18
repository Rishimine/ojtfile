



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
    

   let state = false;
   let pos;
   $(".toggle_btn").on("click",function(){
       if(state == false){
           pos = $(window).scrollTop();
           $("body").addClass("fixed").css({"top": -pos});
           state = true;
       }else{
           $("body").removeClass("fixed").css({"top" : 0});
           window.scrollTo(0, pos);
           state = false;
       }
   });


        
});












