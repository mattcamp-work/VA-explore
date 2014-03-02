
<?php include 'super-header.php'; ?>
        <div class="row row-content" id="content">
            <div class="main">

                <div class="col-main">
                <h3>VA Memorial Benefits: Overview of Veteran’s Spouse, Dependent, and Survivor Eligibility </h3>

                   <p>
                    VA honors many spouses, dependents, and survivors of eligible Veterans with a final resting place in one of 131 national cemeteries maintained by VA throughout the United States. Benefits may include burial with the Veteran, the inscription of name and date of birth and death on the headstone, and perpetual care of the gravesite. Eligible spouses, dependents, and survivors may be buried in a national cemetery even if their Veteran loved one is not buried or memorialized in a national cemetery, or if their death occurs before the Veteran’s. 
                   </p>
                   <p>
                    Consult the VA <a href="http://www.cem.va.gov/cem/burial_benefits/eligible.asp">National Cemetery Administration</a> for more information about burial
                    eligibility for Veterans’ spouses, dependents, and survivors.
                </p>

                <p>
                    <a href="http://www.va.gov/explore/dependents-and-survivors.asp"><strong>Learn more</strong></a>
                    <strong> about VA benefits for spouses, dependents, and survivors </strong>

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
