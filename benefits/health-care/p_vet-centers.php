
<?php include 'super-header.php'; ?>
        <div class="row row-content" id="content">
            <div class="main">

                <div class="col-main">
                    <h3>VA Health Care Vet Center Services </h3>

                   <p>
                    VA’s <a href="http://www.vetcenter.va.gov/index.asp">Vet Centers</a> provide community-based counseling, outreach, and referral services to    <a href="http://www.vetcenter.va.gov/Eligibility.asp">eligible</a> Veterans who served in any combat zone and their families. Services include counseling
                        for transitioning and readjustment, military sexual trauma, and issues related to marriage, family, and bereavement. Referrals to VA mental health care,
                        employment, education, and other services and benefits are also provided.
                    </p>
                    <p>
                        More than 300 Vet Centers are located throughout the United States. Veterans living in rural areas may also access these services through Mobile Vet
                        Centers (MVCs), which travel from county to county to reach as many Veteran as possible.
                    </p>
                  
                    <p>
                        <a href="http://www.vetcenter.va.gov/Vet_Center_Services.asp">Learn more</a> about Vet Centers and MVCs or <a href="http://www2.va.gov/directory/guide/vetcenter_flsh.asp">find one</a>  near you for fast access to quality VA care.
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
