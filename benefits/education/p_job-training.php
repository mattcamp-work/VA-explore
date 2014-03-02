
<?php include 'super-header.php'; ?>
        <div class="row row-content" id="content">
            <div class="main">

                <div class="col-main">
                    <h3>Veteran's Job Training</h3>

                    <p>
    VA benefits provide <a href="http://www.benefits.va.gov/gibill/onthejob_apprenticeship.asp">on-the-job training and apprenticeship</a> support through
programs that typically involve a training contract with an employer or union for a specific period of time. Use VA’s    <a href="http://inquiry.vba.va.gov/weamspub/buildSearchInstitutionCriteria.do">search tool</a> to locate training or apprenticeships in your state.
</p>
<p>
    Most Veterans receive a salary from the employer or union during training. As your skills increase, so may your salary. At the end of the VA-supported
    training period, Veterans receive a job certification or journeyman status.
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
