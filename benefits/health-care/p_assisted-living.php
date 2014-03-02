
<?php include 'super-header.php'; ?>
        <div class="row row-content" id="content">
            <div class="main">

                <div class="col-main">
                    <h3>VA Assisted Living and Home Health Services</h3>

                   <p>
                        VA offers many assisted living and home health services for eligible Veterans, including 132 Community Living Centers that provide short- and long-stay
                        services. Home and community-based services are also available. VA’s <a href="http://www.caregiver.va.gov">caregiver education and training</a> programs
                        help make sure all Veterans receive quality care by providing the following additional assisted living services:
                    </p>
                    <ul class="bullet-list">
                        <li>
                            <p>In-home and community-based care</p>
                            
                        </li>
                        <li>
                             <p>Respite care</p>
                           
                        </li>
                        <li>
                            <p>Family support services</p>
                            
                        </li>
                    </ul>


                                    
                   
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
