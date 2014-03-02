
<?php include 'super-header.php'; ?>
        <div class="row row-content" id="content">
            <div class="main">

                <div class="col-main">
                    <h3>VA Vocational Rehabilitation and Employment Benefits</h3>

                            <p>
                                For Veterans with service-connected disabilities, finding and keeping employment can be a challenge. Through VA’s Vocational Rehabilitation and Employment
                                (VR&amp;E) program, you may benefit from one-on-one support, counseling, and training to boost your skills and build your career. Family members caring for
                                a service-disabled Veteran may also be <a href="http://www.vba.va.gov/bln/vre/vec.htm">eligible</a> for career assistance, job training, and other
                                services. Dependents may benefit, too.
                            </p>


                          <h3 class="">Requirements</h3>

                       
                            <ul class="requirements">
                                <li>
                                  <p>A discharge that is other than dishonorable </p>
                                </li>
                                <li>
                                 <p>A service-connected disability rating of at least 10 percent or a memorandum rating of 20 percent or more from VA</p>
                                </li>
                                <li>
                                   <p>Vocational Rehabilitation – <a href="http://www.vba.va.gov/pubs/forms/VBA-28-1900-ARE.pdf">VA Form 28-1900</a></p>
                                </li>
                                <li>
                                    <p>
                                        Educational and Vocational Counseling – <a href="http://www.vba.va.gov/pubs/forms/VBA-28-8832-ARE.pdf">VA Form 28-8832</a>
                                    </p>
                                </li>
                               
                                
                            </ul>   
                   
                    <h3>Eligibility for Benefits</h3>
                    <?php echo $eligibility; ?>



                      <h3 class="section-title">Benefit Application Processs</h3>

                                    <p>
                                      To establish your eligibility for these VA services, meet with a Vocational Rehabilitation Counselor (VRC) for a comprehensive evaluation. The evaluation assesses:</p>
                                    <ul class="bullet-list">
                                        <li>
                                            <p>
                                           Your interests, aptitudes, and abilities 
                                            <p>
                                        </li>
                                        <li>
                                            <p>
                                            Whether service-connected disabilities impair your ability to find and/or hold a job using your current occupational skills 
                                        </p>
                                        </li>
                                        <li>
                                            <p>
                                                Which types of vocational exploration and goal development will lead to employment and/or maximum independence at home and in your community
                                            </p>
                                        </li>
                                    </ul>


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
