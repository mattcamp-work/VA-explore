
<?php include 'super-header.php'; ?>
        <div class="row row-content" id="content">
            <div class="main">

                <div class="col-main">
                    <h3>VA Health Care: Overview of Veteran’s Spouse, Dependent, &amp; Survivor Eligibility  </h3>

                    <p>
                       If you are a family member caring for a service-disabled Veteran, you may be eligible for counseling to determine your career goals and training to increase your skills. 


                    </p>

                  <p>
                       Veterans’ dependents who are eligible for the VA Survivors’ and Dependents’ Educational Assistance program may also receive the following assistance from the Vocational Rehabilitation and Employment program: 

                  </p> 

                  <ul class="bullet-list" >

                                      <li><p>
                        § Career choice – Understand the best career options based on your interests and capabilities.
                    </p></li>
                    <li><p>
                        § Benefits coaching – Make effective use of your VA benefits and/or other resources to achieve education and career goals.
                    </p></li>

                            <li><p>Personalized support – Receive academic or adjustment counseling and personalized support to remove barriers to your success.</p></li>

                    </ul>
                
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
