
<?php include 'super-header.php'; ?>
        <div class="row row-content" id="content">
            <div class="main">

                <div class="col-main">
                    <h3>VA Education and Training: Overview of Veteran’s Spouse, Dependent, &amp; Survivor Eligibility </h3>

                    <p>
                        VA provides education and training opportunities for Veterans’ spouses, dependents, and survivors through various benefits programs to help cover the cost
                        of tuition, housing, books, and fees. Some programs may offer up to 48 months of education benefits for degree and certificate programs, apprenticeship,
                        and on-the-job training. Explore the following programs:
                    </p>

                    <ul>
                        <li>
                            <a href="http://www.benefits.va.gov/gibill/survivor_dependent_assistance.asp">Dependents’ Educational Assistance</a>
                        </li>
                        <li>
                            <a href="http://www.benefits.va.gov/gibill/docs/factsheets/fry_scholarship.pdf">Marine Gunnery Sergeant John David Fry Scholarship</a>
                        </li>
                        <li>
                            <a href="http://www.benefits.va.gov/gibill/post911_transfer.asp">Transfer of Post-9/11 GI-Bill Benefits to Dependents</a>
                        </li>
                    <ul>
                    <p>
                        <a href="http://www.va.gov/explore/dependents-and-survivors.asp"><strong>Learn more</strong></a>
                        <strong> about VA benefits for Veterans’ spouses, dependents, and survivors</strong>
                        <strong> &gt;</strong>
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
