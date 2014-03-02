
<?php include 'super-header.php'; ?>
        <div class="row row-content" id="content">
            <div class="main">

                <div class="col-main">
                    <h3>Scholarships &amp; Grants</h3>

                       <p>
                        VA scholarships and grants may be available to help Veterans and their family members further their educations. For instance, the    <a href="http://www.benefits.va.gov/gibill/docs/factsheets/fry_scholarship.pdf">Marine Gunnery Sergeant John David Fry Scholarship</a> is available to
                            children of Servicemembers who died in the line of duty after Sept. 11, 2001. Eligible children are entitled to 36 months of benefits for 100 percent of
                            their educational expenses, and they have 15 years from their 18th birthday to use the benefit.
                        </p>

                   
                    <h3>Eligibility for Benefits</h3>
                    <?php echo $eligibility; ?>
                </div> <!-- ./ col-main --> 

                <div class="col-sidebar">
                  
                    <?php include "resources.php" ?>
                </div> <!-- ./ col-sidebar --> 

              <h3 class="section-title">How to Apply</h3>
                         <?php include 'apply-block.php'; ?>

                 

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
