





<?php include 'super-header-disability.php'; ?>
        <div class="row row-content" id="content">
            <div class="main">

                <div class="col-main">
                    <h3>VA Disability Compensation Benefits: Rating &amp; Rates</h3>
                    <p>
                    VA benefit payments for Veterans vary depending on a number of factors, including disability ratings and other special circumstances. Your disability
                    rating is determined by the severity of your disability as supported by the evidence submitted in your VA claim or contained in military records.
                    Disability compensation helps make up for a Veteran’s loss of working time from injury or illness tied to military service. Disability ratings are made in
                    increments of 10 percent, ranging from 0 percent to 100 percent.
                </p>
                <p>
                    Veterans may receive additional Special Monthly Compensation if they have dependents, multiple or severe disabilities, or special circumstances such as a
                    need for a clothing allowance, eligibility for a Medal of Honor Pension, or required hospitalization.
                </p>
                <p>
                    For example, a Veteran with a 30 percent rating …
                </p>
                <ul class="bullet-list">
                    <li>
                        Who has no dependents may receive $400.93 per month.
                    </li>
                    <li>
                        Who is married may receive $448.74 per month.
                    </li>
                    <li>
                        Who is married with one minor child may receive $483.75 per month.
                    </li>
                    <li>
                        Who has no dependents may receive $400.93 per month.
                    </li>
                </ul>

                <p>
    Learn more at <a href="http://www.benefits.va.gov/COMPENSATION/types-disability.asp">VA’s disability compensation</a> page.
</p>

                    <h3>Eligibility</h3>
                    <?php echo $eligibility; ?>
                </div> <!-- ./ col-main --> 

                <div class="col-sidebar">
                  

                      <?php include "resources-disability.php" ?>
                </div> <!-- ./ col-sidebar --> 

          

                  <h3 class="full-width">How to Apply</h3>
                         <?php include 'apply-block-disability.php'; ?>
             
             
       

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
