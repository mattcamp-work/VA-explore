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

         
        <?php include "partial-modals.php" ?>



        <!-- ============================= -->

         

<!-- === pull in twitter API -->
  

<!-- === pull in Pinterest API -->
      




<script>
//<![CDATA[

$(document).ready(function() {
  // Handler for .ready() called.

// load pinterest api - then rip out their styling once it's loaded


// load twitter api 
$.getScript('https://platform.twitter.com/widgets.js');

$.getScript('<?php echo $myPath; ?>js/jquery.func_toggle.js');

/* ===== make factoids ====== */
/*
$.getScript('<?php echo $myPath; ?>js/factoids.js').done(function() {

       $('.factoid-education').each(function(){
        $(this).html(makeFactoid("02_education"));
      });



  });
  */

$.getScript('<?php echo $myPath; ?>js/share-page.js');

$.getScript('<?php echo $myPath; ?>js/explore.js');




});// close doc load



//]]>
</script>


  <!-- ====== END parital-footer.php ====== -->

