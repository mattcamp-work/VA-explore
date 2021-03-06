
<?php include 'super-header.php'; ?>
        <div class="row row-content" id="content">
            <div class="main">

                <div class="col-main">
                    <h3>VA Health Care: Overview of Veteran’s Spouse, Dependent, &amp; Survivor Eligibility  </h3>

                    <p>
                       A Veteran’s spouse, dependent, or survivor may be eligible for VA health care benefits through programs such as the Civilian Health and Medical Program, Spina Bifida, Children of Women Vietnam Veterans, Foreign Medical Program, and Caregivers. Enrolling in these programs may reduce or eliminate your costs for medical supplies, office visits, or prescriptions. 
                    </p>

                  <p>
                        <a href=""><strong>Learn more about VA benefits for Veterans’ spouses, dependents, and survivors &rsaquo; </strong></a>
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
