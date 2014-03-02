  <!-- ====== Begin partial-footer.php ====== -->

          <div class="row row-footer" id="footer">
              <div class="main">
                   <h5 class="section-title">Explore VA Benefits</h5>
                    <ul class="footer-links">
                           <li><a class="benefit-link" href="#" data-benefit="disability-compensation">Disability Compensation</a></li>
                           <li><a class="benefit-link" href="#" data-benefit="education-training" >Education &amp; Training</a></li>
                           <li><a class="benefit-link" href="#" data-benefit="employment-services" >Employment Services</a></li>
                           <li><a class="benefit-link" href="#" data-benefit="health-care" >Health Care</a></li> 
                           <li><a class="benefit-link" href="#" data-benefit="home-loans" >Home Loans &amp; Assistance</a></li>                      
                    </ul>
                    <ul class="footer-links with-divider">                           
                        
                           <li><a class="benefit-link" href="#" data-benefit="life-insurance" >Life Insurance</a></li>
                           <li><a class="benefit-link" href="#" data-benefit="memorial-benefits" >Memorial Benefits</a></li> 
                           <li><a class="benefit-link" href="#" data-benefit="pensions" >Pensions</a></li> 
                           <li><a class="benefit-link" href="#" data-benefit="spouses-dependents" >Spouses, Dependents, &amp; Survivors</a></li>                          
                    </ul>
                    <ul class="footer-links with-divider">
                           <li><a href="#">See All Veterans' Stories (videos)</a></li>
                           <li><a href="#">Social Hub</a></li>
                           <li><a href="#">FAQs</a></li>
                           <li><a href="#">* * * *</a></li>                        
                    </ul>
                    <ul class="footer-links">
                           <li><a href="#"><strong>Benefits Navigator</strong></a></li>
                           <li><a href="#">My Benefits</a></li>
                           
                           <li class="explore-search"><h6>Search: Explore VA</h6> 
                            <form><input   type="text" name="search-va" ><a class="search-button"></a></form>
                          </li>                        
                    </ul>
               </div><!-- ./ main -->
          </div><!-- close row-footer -->


           <div class="row row-va-subfooter" id="va-subfooter">
              <div class="main">
                <ul class="va-sub-nav">
                  <li class="first">
                    <a href="#" class="branding va-logo"></a>
                  </li>
                  <li>
                    <a class="va-link-home" href="">va.gov</a>
                  </li>
                  <li>
                    <a class="va-link-home" href="">Veteran Services</a>
                  </li>
                  <li>
                    <a class="va-link-home" href="">Business</a>
                  </li>
                  <li>
                    <a class="va-link-home" href="">About VA</a>
                  </li>
                  <li>
                    <a class="va-link-home" href="">Media Room</a>
                  </li>
                  <li>
                    <a class="va-link-home" href="">Locations</a>
                  </li>
                  <li>
                    <a class="va-link-home" href="">Contact Us</a>
                  </li>
                </ul>
                   
              </div><!-- ./ main -->
          </div><!-- close row-va-subfooter -->

          <div class="row row-subfooter" id="subfooter">
              <div class="main">
                   
              </div><!-- ./ main -->
          </div><!-- close row-subfooter -->

         
        <div id="video_modal" class="modal video-modal">
          <iframe width="560" height="315" src="//www.youtube.com/embed/92EChuYNV-M?rel=0&autoplay=0" frameborder="0" allowfullscreen></iframe>
          <h4>Video Title</h4>
          <p>sdjafklsdjf sd</p>
        </div>




        <!-- ============================= -->

         

<!-- === pull in twitter API -->
  

<!-- === pull in Pinterest API -->
      




<script>
//<![CDATA[

$( document ).ready(function() {
  // Handler for .ready() called.

// load pinterest api - then do some stuff once it's loaded
$.getScript('http://assets.pinterest.com/js/pinit_main.js').done(function(){
      //==== remove janky styling off pin buttons 
    $('ul.share-panel li.share-pinterest a').removeClass();
    //==== the pinterest js also takes out any text in the link...so we put it back
    $('ul.share-panel li.share-pinterest a').html("Pin");
});

// load twitter api 
$.getScript('https://platform.twitter.com/widgets.js').done();


/* ===== make factoids ====== */
$.getScript('js/factoids.js').done(function() {

   $('.factoid-education').each(function(){
    $(this).html(makeFactoid("02_education"));
  });


  });





/* === Load the FB api  ======= */

/*
$.ajaxSetup({ cache: true });
  $.getScript('//connect.facebook.net/en_UK/all.js', function(){
    FB.init({
      appId: '277574952399088',
    });     
    $('#loginbutton,#feedbutton').removeAttr('disabled');
    FB.getLoginStatus(updateStatusCallback);
  });
*/

/* === top va menu toggle ===*/
    $('#top-bar .va-menu-trigger').click(function(){
        $('.va-mega-menu').toggleClass("show-nav");
      });

/* === benefits nav toggle ==== */

 $('.benefit-survey-doors label').click(function(){
        $('.benefit-survey-doors label').removeClass("selected");
        $(this).addClass("selected");
      });




/* === Video Modal === */



//$('#video_modal').dialog();


$('#video_modal').dialog({
    autoOpen:false,
    dialogClass:'video-modal',
   /* title:'Sign Up for Updates',*/
    modal:true,
    position:['center', 100],
    minWidth:630
  });



$('.share-video li').hover(function() {
//  $(this).children('ul.share-panel').toggleClass('show-share-panel');
    
}, function() {
  $(this).children('ul.share-panel').removeClass('show-share-panel');
});

$('.share-video li a.share-trigger').click(function() {
  $(this).siblings('ul.share-panel').addClass('show-share-panel');
});


  //$('.share-video li').find('ul.share-panel').addClass('show-share-panel');

  var currentUrl = $(location).attr("pathname");


  $('.watch-video').click(function() {
   /* if ($(this).hasClass('iframe')) {
      var src = $(this).attr('href');
      var width = $(this).data('width');
      var height = $(this).data('height');
      if (!width) width=540;
      if (!height) height=350;
      
      $('#newsletter-signup').html(
      '<iframe src="'+src+'" width="'+width+'" height="'+height+'" frameborder="0" style=""></iframe>'
      );
    }*/
   // alert("works");

    $('#video_modal').dialog('open');
   // return false;
  });

 
  /*===== select the right subnav tab ==== */

  function cleanThisUrl(tempUrl) {
  var chopStart = tempUrl.lastIndexOf("/") + 1;
  var chopEnd = tempUrl.lastIndexOf(".php");
  return tempUrl.slice(chopStart,chopEnd);
  }

var currentUrl  = $(location).attr("pathname");
currentUrl = cleanThisUrl(currentUrl);


$('ul.subnav li a').each(function() { 
  
    if (currentUrl==cleanThisUrl($(this).attr("href"))) {
      $(this).addClass('selected');
    }
 
   });




});

  /* ==== columnizer ===== */

  //$('.test-col').columnize({ columns:2 });


//]]>
</script>


  <!-- ====== END parital-footer.php ====== -->

