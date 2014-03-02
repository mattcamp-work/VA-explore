
<?php include 'partials/partial-header.php'; ?>



 <body class="generic-page benefits-navigator-landing">

        <div class="row row-top-bar" id="top-bar">
            <div class="main">
                 <?php include 'partials/partial-top-bar.php'; ?> 

            </div><!-- ./ main -->

        </div><!-- close top-bar -->
        <div class="row row-banner" id="banner"> 
      
                    <?php include 'partials/partial-explore-bar.php'; ?> 
                    

            <div class="main">

                <div class="intro">
                    <img src="images/logo-benefitsNavigator.png">
                </div><!-- ./ intro -->
                
            </div><!-- ./main -->          
        </div><!-- ./ row -->



        <div class="row row-content" id="content">
            <div class="main">              
                <div class="full-width">


                      <h3 class="welcome">
                    Welcome to the VA Benefits Navigator
                      </h3>

                      <p>
                        This tool will help you explore VA benefits and identify those that you, your family members, or the person you care for may be eligible to receive. Just answer a few questions as best as you can. When you finish, a list of possible benefits will appear with easy-to-follow steps to start the benefits application process.
                    </p>
                    <p>
                        The information you submit through this system is completely anonymous and will not be stored. If you wish to save your information for future use, you can <a href="">enter your email address to create an account.</a>
                    </p>
                    <h4 class="expressive">
                    First, 
                    </h4>
                    <h5>
                        Tell us about yourself:
                    </h5>





                    <form >
                        <fieldset class="benefit-survey-doors">
                            <input id="door-veteran" type="radio" name="survey-doors">
                            <label for="door-veteran"><span>I served in the U.S. Military or I am a Veteran</span></label>

                            <input id="door-serviceMember" type="radio" name="survey-doors">
                            <label for="door-serviceMember"><span>I am a Servicemember, Reservist, or Guardsman</span></label>

                            <input id="door-familyMember" type="radio" name="survey-doors">
                            <label for="door-familyMember"><span>I am a family member of a Veteran, Servicemember, Reservist, or Guardsman</span></label>

                            <input id="door-other" type="radio" name="survey-doors">
                            <label for="door-other"><span>Other <br> &nbsp;</span></label>

                            <hr class="clear-me">

                           
                                
                        
                                <p class="call-to-action">
                                    <input type="submit" class="button-1 large" value="Next &rarr;"> 
                                    <br>

                                    <!-- Survey has 15 questions and will take about 5 minutes to complete. -->
                                </p>
                            </div>


                        </fieldset>
                       
                </div>
  
                
            </div><!-- ./ main -->
        </div> <!-- ./ row -->

        <!-- ============================= -->

     
        <!-- ============================= -->

        <?php include 'partials/partial-footer.php' ?>


    </body>
    </html>
