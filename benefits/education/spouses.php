
<?php include 'super-header-disability.php'; ?>
        <div class="row row-content" id="content">
            <div class="main">
                

                <div class="col-main">
                    <h3>VA Disability Compensation: Overview of Veteran’s Spouse, Dependent, &amp; Survivor Eligibility </h3>

                    <p>
                        Family members and dependents of Veterans and Servicemembers who died or were seriously injured in the line of duty may be eligible for many types of VA
                        benefits.
                    </p>
                    <p>
                        The Dependency and Indemnity Compensation (DIC) program provides monthly benefits to surviving spouses and dependent children in recognition of the
                        economic loss caused by a Servicemember’s death during military service, or by the death of a Veteran as a result of a service-connected disability. VA
                        also pays these benefits to the survivors of a Veteran whose death is not service-connected but who was rated by VA as being totally disabled due to
                        service-connected disability for a specified period of time immediately preceding death.
                    </p>
                    <p>
                        In addition to the DIC program for surviving spouses and dependent children, surviving dependent parents of Servicemembers or Veterans whose deaths were
                    service-connected may be eligible for DIC if they meet the income requirements. Click    <a href="http://benefits.va.gov/compensation/types-dependency_and_indemnity.asp">here</a> to find out if you are eligible for this tax-free benefit and
                        learn how to apply.
                    </p>

                    <p>
                       <a href=""><strong>Watch</strong></a> the Veteran’s spouse, dependent, and survivor benefits overview 
                    </p>

                    <p>
                        <a href="http://www.va.gov/explore/dependents-and-survivors.asp"><strong>Learn more</strong></a>
                    about VA benefits for Veterans’ spouses, dependents, and survivors
                      
                    </p>

                   
                    <h3>Eligibility for Benefits</h3>
                    <?php echo $eligibility; ?>
                </div> <!-- ./ col-main --> 

                <div class="col-sidebar">
                    <h3>Files &amp; Resources</h3>
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
