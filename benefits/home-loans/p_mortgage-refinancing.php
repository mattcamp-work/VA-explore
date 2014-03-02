
<?php include 'super-header.php'; ?>
        <div class="row row-content" id="content">
            <div class="main">

                <div class="col-main">
                <h3>VA Mortgage Refinancing</h3>

                   <p>
                        More and more Veterans who own homes are using VA’s mortgage refinancing options to conserve cash through lower interest rates—or take advantage of their
                        home’s equity to pay for school, debt, or home improvements. The following programs may be available to qualifying Veterans:
                    </p>
                    <ul class="bullet-list">
                        <li>
                            <p>
                                <a href="http://benefits.va.gov/homeloans/purchasecashout.asp">Cash-Out Refinance Home Loans</a> – Take advantage of your home’s equity to take cash out
                                through refinancing, or refinance a non-VA loan into a VA-guaranteed loan.
                            </p>
                        </li>
                        <li>
                            <p>
                                <a href="http://benefits.va.gov/homeloans/irrrl.asp">Interest Rate Reduction Refinance Loan</a>s – See if you can lower your monthly mortgage payment by
                                obtaining a lower-interest loan—or stabilize your monthly payments by moving from a loan with an adjustable interest rate to one that’s fixed.
                            </p>
                        </li>
                    </ul>
                    
                    
                    
                    <p>
                    Explore more about VA <a href="http://benefits.va.gov/homeloans/purchasecashout.asp">refinancing</a> and <a href="http://benefits.va.gov/homeloans/irrrl.asp">interest rate reduction</a> programs and see if one of these options is right for you.
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
