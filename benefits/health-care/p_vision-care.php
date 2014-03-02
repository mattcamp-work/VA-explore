
<?php include 'super-header.php'; ?>
        <div class="row row-content" id="content">
            <div class="main">

                <div class="col-main">
                    <h3>VA Vision Care</h3>

                   <p>
                        Veterans who are visually impaired may be eligible for VA’s vision health benefits. VA’s vision care ranges from primary eye care services to intermediate and advanced vision clinical care, including clinical examinations, vision-enhancing devices, and specialized training in the use of innovative vision technology.
                    </p>
                    <p>
                       VA also offers inpatient rehabilitation centers for Veterans who are blind. These centers focus on enhancing skills such as communication, orientation and mobility, manual skills, and recreational and daily living activities. 
                    </p>


                                    
                   
                    <h3>Eligibility for Benefits</h3>
                    <?php echo $eligibility; ?>
                </div> <!-- ./ col-main --> 

                <div class="col-sidebar">
                    
                    <?php include "resources.php" ?>
                </div> <!-- ./ col-sidebar --> 
             

                 

            </div><!-- ./ main -->
        </div><!-- ./ row -->

        <!-- ============================= -->

        <div class="row row-ad">
            <div class="main vet-angie">
                 <?php include $myPath.'partials/partial-benefit-ad.php' ?>
            </div><!-- ./ main -->
        </div><!-- close row-ad -->

        <!-- ============================= -->

        <?php include $myPath.'partials/partial-footer.php' ?>


    </body>
    </html>
