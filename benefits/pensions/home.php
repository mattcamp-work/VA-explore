
<?php include 'super-header.php' ?>

        <div class="row row-content" id="content">
            <div class="main">
                <h3 class="section-title">How to Apply</h3>
                         <?php include 'apply-block.php'; ?>
                    <br class="clear">
                   
                     <div class="col-main">

                         <h3>Veterans’ Pension</h3>

                        <p>
                            Veterans who’ve served with honor, and their loved ones, have earned the right to live with the dignity that comes with greater economic security. A VA
                            pension may provide income to make life more secure for Veterans and their loved ones.
                        </p>

                        <p>
                            VA pensions are needs-based benefits for wartime Veterans with limited or no income who are age 65 or older or who have a permanent and total
                            nonservice-connected disability. Surviving family members or dependents may qualify as well.
                        </p>
                        <p>
                            Veterans who establish eligibility for a basic pension but are more seriously disabled may qualify for pension at an increased rate provided to those who
                            are housebound or require the aid and attendance of another person (this is called a “special monthly pension”).
                        </p>
                       
                        
                     
       

                          <h3 class="">VA Requirements</h3>

                         
                            <ul class="requirements">
                                <li>
                                  <p>Proof of income and net worth information (e.g., bank statements, paystubs)</p>
                                </li>
                                <li>
                                 <p>Private medical treatment records and where to find any relevant treatment records that might be held by a federal facility, such as a VA medical center</p>
                                </li>
                                <li>
                                 <p>Completed pension program applications:</p>
                                    <ul>
                                      <li>
                                        <p>                                         
                                           Veterans Pension <a href="http://www.vba.va.gov/pubs/forms/VBA-21-527EZ-ARE.pdf">VA Form 21-527EZ</a>
                                        </p>
                                      </li>
                                      <li>
                                        <p>
                                          Survivors Pension (or “Death Pension”) – <a href="http://www.vba.va.gov/pubs/forms/VBA-21-534EZ-ARE.pdf">VA Form 21-534EZ</a>
                                        </p>
                                      </li>
                                      <li>
                                        <p>
                                          Special Monthly Pension for Veterans and Surviving Spouses (if applicable) – <a href="http://www.vba.va.gov/pubs/forms/VBA-21-2680-ARE.pdf">VA Form 21-2680</a>
                                        </p>
                                      </li>
                                   </ul><!-- Circle List -->
                                </li>
                                
                                                             
                                
                            </ul>

                             <p class="explore-link-wrap">
                                <a class="vae-button variation explore-link" href="http://www.benefits.va.gov/pension/">Explore VA Pension Benefits Today</a>
                            </p>

                             
                             <h3>Eligibility</h3>
                                   <?php echo $eligibility; ?>

                            

                            <h3 class="section-title">VA Application Processs</h3>
                            <p>
                               Pension claim decision times vary depending on the complexity of the case and evidence. The fastest way to obtain a VA benefits decision is to file a Fully Developed Claim (FDC). Here are some typical steps in the process:
                            </p>

                       
                        <ul class="bullet-list">
                            <li>
                                <p>
Select the type of pension claim and gather the evidence it requires.
</p>
                            </li>
                            <li>
                                <p>
                                 Collect military medical and other records.
                                </p>
                            </li>

                            <li>
                                  <p>
                                Gather any private medical records.
                                 </p>
                            </li>
                            <li>
                                  <p>
                                Certify that there is no more evidence.
                                 </p>
                            </li>
                            <li>
                                  <p>
                                Submit your application.
                                 </p>
                            </li>
                          
                        </ul>


                    </div><!-- ./ col-main -->
                    <div class="col-sidebar">
                        <div class="content-box testimonial">
                          <div class="inset">
                            <div class="gutter">                           
                                <a href="" class="video-testimonial"><img src="http://placehold.it/360x160"></a>

                              <!--   <blockquote>
                                    <p>I think This is really Awesome</p>
                                </blockquote> 
                                <p class="caption">
                                    Globally facilitate ubiquitous innovation after B2B e-services. 
                                </p>-->
                                    <p class="attribution">
                                       <b>Maj. Awesome, Retired Army </b> <br>
                                        1980-2009 <br>
                                        Persian Gulf, Iraqi Freedom, <br> Afghanistan

                                    </p> 
                                </div><!-- close gutter -->                           
                           </div><!-- close inset -->
                        </div><!-- ./ content-box testimonial -->

                        <br class="clear-me" >

                        <?php include "resources.php" ?>
                      
                    </div><!-- ./ col-sidebar -->

                    

                    <div class="apply-secondary">
                            <div class="decoration"></div>
                            <div class="call-to-action">
                                <a class="vae-button button-1 large" href="#">Apply Now</a>
                                <p>
                                    For VA Home Loan Benefits
                                </p>
                            </div>
                            <div class="decoration"></div>
                    </div>

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
