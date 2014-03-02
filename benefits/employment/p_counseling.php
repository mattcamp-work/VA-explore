
<?php include 'super-header.php'; ?>
        <div class="row row-content" id="content">
            <div class="main">

                <div class="col-main">
                <h3>Veterans Counseling</h3>

                    <p>
                   One-on-one counseling is a key benefit for Veterans and Servicemembers provided by VA’s employment services program. If you are eligible, you will be assigned an advocate who coordinates all services—education, employment, medical care, and more—to keep you on track to meeting your employment and training goals, every step of the way.
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
