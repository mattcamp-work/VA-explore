
<?php include 'super-header.php'; ?>
        <div class="row row-content" id="content">
            <div class="main">

                <div class="col-main">
                    <h3>VA Mental Health Services and Coverage</h3>

                   <p>
                        VA health benefits include top-notch mental health services for Veterans, including:
                    </p>
                    <ul class="bullet-list">
                        <li>
                            <p>Inpatient and outpatient care at VA medical centers</p>
                            
                        </li>
                        <li>
                            <p> Community-based outpatient treatment services</p>
                           
                        </li>
                        <li>
                            <p> Vet Center support, including individual and whole-family services, for post-traumatic stress disorder, military sexual trauma, depression, readjustment,
                            and substance use disorders</p>
                           
                        </li>
                    </ul><!-- ./ bullet list -->



                                    
                   
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
