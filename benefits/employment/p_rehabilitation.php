
<?php include 'super-header.php'; ?>
        <div class="row row-content" id="content">
            <div class="main">

                <div class="col-main">
                    <h3>Veterans Rehabilitation</h3>

                    <p>
                   If you’re a Veteran with a service-connected disability or a Servicemember who qualifies for automatic entitlement under the National Defense Authorization Act, VA provides rehabilitation services under the Vocational Rehabilitation and Employment program. This program helps you prepare for, find, and keep a suitable job. And if you’re unable to re-enter the workforce because of a severe disability, VA services will help you stay productive, remain healthy, and do more of what you already do well. 
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
