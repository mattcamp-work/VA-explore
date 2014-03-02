
<?php include 'super-header.php'; ?>
        <div class="row row-content" id="content">
            <div class="main">

                <div class="col-main">
                <h3>VA Home Loans for Surviving Spouses </h3>

                    <p>
                        VA offers three home loan guaranty programs to eligible surviving spouses of Veterans and Servicemembers. These programs may be used to refinance a
                        mortgage or help purchase, construct, or improve a home. Certain surviving spouses may be eligible for the following programs:
                    </p>

                    <ul class="bullet-list">
                        <li>
                            <p>
                            <a href="http://benefits.va.gov/HOMELOANS/purchasecashout.asp">Purchase Loans </a>
                            </p>
                        </li>
                        <li>
                            <p>
                            <a href="http://benefits.va.gov/HOMELOANS/purchasecashout.asp">Cash-Out Refinance Home Loans</a>
                            </p>
                        </li>
                        <li>
                            <p>
                            <a href="http://benefits.va.gov/HOMELOANS/irrrl.asp">Interest Rate Reduction Refinance Loan</a>s
                            </p>
                        </li>
                    </ul>

                    <p>
                        <strong><a href="http://www.va.gov/explore/dependents-and-survivors.asp">Learn more</a>
                        about VA benefits for spouses, dependents, and survivors </strong>                      
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
