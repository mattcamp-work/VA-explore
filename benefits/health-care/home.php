
<?php include 'super-header.php' ?>

        <div class="row row-content" id="content">
            <div class="main">
                <h3 class="section-title">How to Apply</h3>
                         <?php include 'apply-block.php'; ?>
                    <br class="clear">
                   
                     <div class="col-main">

                         <h3 class="">VA Health Care</h3>

                         <p>
                            VA provides world-class health coverage to eligible Veterans. The Veterans Health Administration is America’s largest integrated health care system with
                            more than 1,700 sites of care, and it is consistently ranked among the nation’s top health care providers.
                        </p>
                       
                        <p>
                            Many Veterans and their families may be eligible for VA health care. Enrollment in VA health care satisfies your Affordable Care Act health coverage
                            requirement—no add-on insurance plan is needed. VA encourages you to explore your health care benefits, including the following services:
                        </p>
                        <ul class="bullet-list">
                            <li>
                                <p>
                                <b>Women Veterans</b> can receive primary care, breast and cervical cancer screenings, prenatal care, maternity care coverage, and other gender-specific
                                services.
                             </p>
                            </li>
                            <li>
                                <p>
                                <b>Free health care</b> and prescription drug services are available to Veterans with service-connected conditions or those who have other qualifications, such
                                as being a former prisoner of war or having a disability rating of at least 50 percent.
                              </p>
                            </li>
                            <li>
                                <p>
                                <b>Veterans who have served in combat-zones </b> and their family members—may benefit by visiting VA’s many community-based Vet Centers, which provide no-cost
                                counseling, outreach, and referral services to help the whole family adjust to life after deployment.
                                </p>
                            </li>
                            <li>
                                <p>
                                <b>Combat Veterans</b> who were discharged or released from active service on or after Jan. 28, 2003, are eligible to enroll in the VA health care system for
                            five years from the date of their discharge or release, regardless of their disability claim status. (Learn more about these and other health    <a href="http://www.va.gov/healthbenefits/apply/returning_servicemembers.asp">benefits for returning Servicemembers</a> at VA’s health benefits page.)
                             </p>
                            </li>
                            <li>
                                <p>
                                <b>Other Veterans</b>, including those with higher incomes, may qualify for no- or low-copay comprehensive benefits packages. These packages may include
                                preventive and primary care; dental, eye, and hearing services; mental health care; home health care; geriatrics and extended care; medical equipment and
                                prosthetics; and more.
                                </p>
                            </li>
                        </ul>
                                               



                          <h3 class="">VA Requirements</h3>

                        <p>
                            To support a claim for service connection, the evidence must show the following:
                        </p>
                            <ul class="requirements">
                                <li>
                                  <p>Proof of discharge or separation papers such as a DD-214</p>
                                </li>
                                <li>
                                 <p>A VA-awarded service-connected disability rating of 10 percent or more</p>
                                </li>
                                <li>
                                   <p>Any additional health insurance, including coverage through a spouse or significant other</p>
                                </li>
                                <li>
                                    <p>
                                        Wage and financial information, including previous calendar-year gross annual income for the Veteran, spouse, and dependent children
                                    </p>
                                </li>
                               
                                
                            </ul>


                             <p class="explore-link-wrap ">
                                <a class="vae-button variation explore-link"  href="http://www.va.gov/healthbenefits/">Explore VA Health Care Today</a>
                            </p>


                             <h3>Eligibility</h3>
                                   <?php echo $eligibility; ?>

                                    <h3 class="section-title">Benefit Application Processs</h3>

                                    <p>
                                       <b>Applying is easy:</b> Submit an application form and, within a week, VA will send you written notification of your eligibility status.
                                    </p>
                                    <ul class="bullet-list">
                                        <li>
                                            <p>
                                            Explore your eligibility for health care using VA’s <a href="http://hbexplorer.vacloud.us/">Health Benefits Explorer</a> tool.
                                            <p>
                                        </li>
                                        <li>
                                            <p>
                                            The Affordable Care Act (ACA) is designed to expand access to health coverage, control health care costs, improve health care quality, and coordinate
                                            health care. Learn more about Veterans and ACA at <a href="http://www.va.gov/aca">VA’s ACA website</a>.
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
                                    For VA Health Care Benefits
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
