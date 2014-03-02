
<?php include 'super-header.php'; ?>
        <div class="row row-content" id="content">
            <div class="main">

                <div class="col-main">
                <h3>VA Pension Benefits: Overview of Veteran’s Spouse, Dependent, and Survivor Eligibility</h3>

                   <p>
                    VA offers pension benefits to survivors of wartime Veterans who meet certain criteria. Among other requirements, yearly family income must be less than the amount set by Congress. Those eligible may receive tax-free supplemental income. VA offers the following two pension programs for Veterans’ survivors: 
                   </p>


                   <ul class="bullet-list">

                        <li>
                        <p>
                            <a href="http://benefits.va.gov/pension/spousepen.asp">Survivors Pension</a> (or “Death Pension”) – Surviving spouses and dependent children of deceased
                            wartime Veterans are eligible for monthly pension benefits if they meet the net worth and income requirements.
                        </p>
                       </li>
                       <li>
                        <p>
                            <a href="http://benefits.va.gov/pension/aid_attendance_housebound.asp">Special Monthly Pension for Veterans and Surviving Spouses</a> – Surviving spouses
                            and dependent children of deceased wartime Veterans may receive a larger pension if they can provide evidence (e.g., an attending physician letter or
                            nursing home report) that verifies that the aid and attendance of another person is required to perform activities of daily living or that shows that they
                            are housebound.
                        </p>
                       </li>
                   
                    
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
