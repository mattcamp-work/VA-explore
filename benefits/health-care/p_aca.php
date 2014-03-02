
<?php include 'super-header.php'; ?>
        <div class="row row-content" id="content">
            <div class="main">

                <div class="col-main">
                    <h3>Affordable Care Act</h3>

                    <p>
                        The Affordable Care Act (ACA) is designed to expand access to health care and requires all Americans to obtain health insurance. If you are enrolled in VA
                        health care, you have met your obligations under ACA to have health coverage. If you are not yet enrolled in VA health care, you can apply anytime and, if
                    approved, your enrollment will meet the ACA coverage requirements. Families of Veterans who are not enrolled in VA health care can use the    <a href="https://www.healthcare.gov/">ACA marketplace</a> to obtain health insurance coverage.
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
