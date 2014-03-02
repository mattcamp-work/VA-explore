
/* === Add This js ====*/


/* ==== close add this ==== */



var downTriangle = "&#9656;";
var rightTriangle = "&#9662;";

/* === top va menu toggle, and flippy toggle ===*/
  

    $('#top-bar .va-menu-trigger').funcToggle('click', function() {
      $('.va-mega-menu').addClass("show-nav");
     $(this).find("span").html("&#9662;");
    },function() {
      $('.va-mega-menu').removeClass("show-nav");    
    $(this).find("span").html("&#9656;");
    });


/*=== explore menu flippy toggle ====*/

$('.va-explore-megamenu').hover(function(){
 $(this).find(".menu-trigger span").html("&#9662;");
}, function (){
 $(this).find(".menu-trigger span").html("&#9656;");
});




  
/* === benefits nav toggle ==== */

 $('.benefit-survey-doors label').click(function(){
        $('.benefit-survey-doors label').removeClass("selected");
        $(this).addClass("selected");
      });


/*==== build sticky nav =====*/

var stickyNavTop = $('.explore-nav').offset().top;   
var stickyNav = function(){  
var scrollTop = $(window).scrollTop();  
var introMain = $('.row-banner .main')[1];
var fbImg = $('.addthis_button_facebook img');
var twImg = $('.addthis_button_twitter img');
var moreImg = $('.addthis_button img');


       
if (scrollTop > stickyNavTop) {   
      $('.explore-nav').addClass('sticky'); 
      $(fbImg).attr("src",$(fbImg).attr("src").replace("social-lt","social-dk"));
      $(twImg).attr("src",$(twImg).attr("src").replace("social-lt","social-dk"));
      $(moreImg).attr("src",$(moreImg).attr("src").replace("social-lt","social-dk"));


     //  $('.intro').addClass(".backfill");   
  } else {  
      $('.explore-nav').removeClass('sticky');
      $(introMain).css({"margin-top":"0"});
      $(fbImg).attr("src",$(fbImg).attr("src").replace("social-dk","social-lt"));
      $(twImg).attr("src",$(twImg).attr("src").replace("social-dk","social-lt"));
      $(moreImg).attr("src",$(moreImg).attr("src").replace("social-dk","social-lt"));
      //$('.intro').removeClass(".backfill");     
  };  
};

stickyNav();  
  
$(window).scroll(function() {  
  stickyNav();  
});  





/* ==== share panel ==== */
/* === pull in pinterest === */





/*==== Set up the share panel  for the share page=== */








  var shareImageBlock = "";
  var shareTextBlock = "";

  for (var i=0;i<4;i++)
  { 
    shareImageBlock += makeShareImageTemplate(myImageShareItems[i]);
    shareTextBlock += makeShareTextTemplate(myTextShareItems[i]);
    console.log(i);
  }

  $("ul.share-images").html(shareImageBlock);
  $("ul.share-text").html(shareTextBlock);



  $('.share-content li').hover(function() {
 // $(this).children('ul.share-panel').toggleClass('show-share-panel');
    
}, function() {
  $(this).children('ul.share-panel').removeClass('show-share-panel');
});

$('.share-content li a.share-trigger').hover(function() {
  $(this).siblings('ul.share-panel').addClass('show-share-panel');
});










/*==== pull in youtube api ===*/


$.getScript('https://www.youtube.com/iframe_api');

// set the side of the video
var videoFrameWidth = $(window).width()*.8;
//var videoFrameRatio = (4/3);  //sd
//var videoFrameRatio = (16/9); //hdtv
var videoFrameRatio = (2.2);   //anamorphic


var getFrameWidth = function() {
  return $(window).width()*.8;
};

$(window).resize(function() {
  
    $("#video_modal").dialog("option", "position", ["center","100"]);

});

/*==== Set up the video modal === */

  $('.video-trigger').click(function() {

    $('#video_modal').dialog({
        autoOpen:false,
        dialogClass:'video-modal',
        resizable:false,
        modal:true,
        position:['center', '100'],
        minWidth:(700+40)
      });   

     $('#video_modal').dialog('open');

     
  
    });

    $(".ui-widget-overlay ").click(function() {
    // alert("cool2");
    });

   $("#video_modal a.close-modal").click(function(){
       $('#video_modal').dialog('close');
    });

  // $('#video_modal').dialog('open');





  /*==== make the col-main and col-sidebar the same height === */



  var sidebar_height = $(".col-sidebar").height();
  var main_height = ($(".col-main").height())-30;

  if (sidebar_height>main_height) {
   // $(".col-sidebar").toggleClass('show-part');
    $('.col-sidebar').append('<a class="show-more">+ more </a>');
     $('.col-sidebar').toggleClass('show-part');
  }

 $('.col-sidebar a.show-more').funcToggle('click',
    function(){
       $('.col-sidebar').removeClass('show-part');
       $('.col-sidebar a.show-more').html("&ndash; less");
    }, function() {
      $('.col-sidebar a.show-more').html("&plus; more");
       $('.col-sidebar').addClass('show-part');
    });
 
  /*===== manage the benefit subnav ==== */
  var currentUrl = $(location).attr("pathname");

  var navItems = $('ul.subnav li').length;
 // var i = 0;
  $('ul.subnav li').each(function(){

 // var tempObject
    $(this).css({"width":((100/navItems))+"%"});

      if (navItems>7) {
        $(this).addClass('condensed');
      }
    });

 




/*== utility function to extract clean urls === */
  function cleanThisUrl(tempUrl) {
  var sliceStart = tempUrl.lastIndexOf("/") + 1;
  var sliceEnd = tempUrl.lastIndexOf(".");
  return tempUrl.slice(sliceStart,sliceEnd);
  }

var currentUrl  = $(location).attr("pathname");
currentUrl = cleanThisUrl(currentUrl);


/*=== indicate current page === */





$('ul.subnav li a').each(function() {
  
    if ($(this).attr("href")) {
      if (currentUrl===cleanThisUrl($(this).attr("href"))) {
        $(this).addClass('selected');
      }
    }
 
   });

$('ul.subSubNav li a').each(function() {
  
    if ($(this).attr("href")) {
      if (currentUrl===cleanThisUrl($(this).attr("href"))) {
        $(this).addClass('selected');
        $('ul.subSubNav').addClass('showSubSubNav');
        $('ul.subnav li.subsub span').html(downTriangle);  
      }
    }
 
   });





/* =======  file count ========= */

/* ======= health-care nav solution ====*/
/*

$("ul.subnav li.subsub").funcToggle('click',function(){
    var temp = $('ul.subnav li').length;
  
    $('ul.subnav li').each(function(){
      $(this).css({"width":"3%"});
      $(this).css({"overflow":"hidden"});
       $(this).find("a").css({"white-space":"nowrap"});
    });

    $("ul.subnav li.subsub").css({'width':'90%'}); 
     $("ul.subnav li.subsub a").html("<b>Health Menu</b> item1 | item 2 | item 3 | item 4")      

  }, function(){

    var navItems = $('ul.subnav li').length;

    $('ul.subnav li').each(function(){
      $(this).css({"width":((100/navItems))+"%"});
       
      });// close ul

     $("ul.subnav li.subsub a").html("Survivors, Dependents & Whatevers"); 

  });// close toggle
*/

$("ul.subnav li.subsub").funcToggle('click',function(){

    $('li.subsub span').html(rightTriangle);
    
    $("ul.subSubNav").toggleClass('showSubSubNav');  

  }, function(){

    $("ul.subSubNav").toggleClass('showSubSubNav');

     $('li.subsub span').html(downTriangle);  

  });// close toggle


var tempTemp = $("li.subsub").position().left;





