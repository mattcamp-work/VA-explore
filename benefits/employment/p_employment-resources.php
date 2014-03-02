
<?php include 'super-header.php'; ?>
        <div class="row row-content" id="content">
            <div class="main">

                <div class="col-main">
                    <h3>VA Employment Services: Employment Resources</h3>

                    <p>
                    For all Veterans, VA collaborates with other federal partners to offer a variety of employment services and resources through the    <a href="https://www.ebenefits.va.gov/ebenefits-portal/ebenefits.portal?_nfpb=true&amp;_nfxr=false&amp;_pageLabel=Jobs">eBenefits Employment Center</a>.
                    Sign in at <a href="http://www.eBenefits.VA.gov">eBenefits.va.gov</a> and head to the    <a href="https://www.ebenefits.va.gov/ebenefits-portal/ebenefits.portal?_nfpb=true&amp;_nfxr=false&amp;_pageLabel=Jobs">Employment Center</a> to gain
                        access to the following resources:
                    </p>
                    <ul class="bullet-list">
                        <li><p>
                            A database of more than 2.7 million jobs, searchable by rank, salary, and other factors
                        </p></li>
                        <li><p>
                            A military-to-civilian skills translator tool for federal and private-sector jobs
                        </p></li>
                        <li><p>
                            Tools to build and post your résumé
                        </p></li>
                        <li><p>
                            Resources and benefits from VA’s Vocational Rehabilitation and Employment program
                        </p></li>
                    </ul>
                    <p>
                        Employers can <a href="https://www.vetsuccess.va.gov/public/employers.html">use this site</a> to post job openings and find Veteran job candidates to hire. Get these resources and much more at the <a href="https://www.ebenefits.va.gov/SiteDown/siteDown.html?_nfpb=true&amp;_nfxr=false&amp;_pageLabel=Jobs">eBenefits Employment Center</a>.
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
