
<?php include 'super-header.php'; ?>
        <div class="row row-content" id="content">
            <div class="main">

                <div class="col-main">
                    <h3>VA Dental Care</h3>

                   <p>
                        VA offers comprehensive dental care benefits to certain qualifying Veterans. In addition, Veterans enrolled in VA health care may purchase dental insurance
                        at a reduced cost through the VA Dental Insurance Program (VADIP). Beneficiaries of VA’s Civilian Health and Medical Program—a health insurance program for
                        dependents of Veterans—are also eligible for VADIP.
                    </p>
                    <p>
                        Services offered through VADIP include diagnostic, preventive, surgical, emergency, and endodontic and restorative treatment. Veterans and other
                        beneficiaries who choose to purchase VADIP pay a fixed monthly premium and any copayments required for coverage, depending on the type of plan selected.
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
