!function(a){
  "use strict";
  a("body").scrollspy({target:".navbar",offset:200}),
  a(".navbar .nav li > a, .btn-location").on("click",
  function(b){
    var c=this.hash;b.preventDefault(),
    a("body").scrollTo(
      c,800,{offset:-50,axis:"y"})
    });
    //Ubah Tanggal 
    var b=new Date;a("#countdown").countdown(
      "2019/11/02 08:00:00",function(b){a(this).html(b.strftime("<ul><li>%D <span>Hari</span></li> <li>%H <span>Jam</span></li> <li>%M <span>Menit</span></li> <li>%S <span>Detik</span></li> </ul>"))});
    
      a(document).ready(function(){var b=a("nav").offset().top;a(window).on("scroll",function(){var c=a(this).scrollTop(),d=b-c;d<b?(a("nav").addClass("navbar-fixed-top"),a("body").css("padding-top",a("nav").height()+"px")):(a("nav").removeClass("navbar-fixed-top"),a("body").css("padding-top","0px"))}),a(".yout-background").length&&a(".yout-background").YTPlayer()}),a("#hero .slider").bxSlider({pager:!1,controls:!1,auto:!0,mode:"fade",speed:700})}(jQuery);
