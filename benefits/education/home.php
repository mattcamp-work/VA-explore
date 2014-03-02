
<?php include 'super-header.php' ?>

        <div class="row row-content" id="content">
            <div class="main">
                <h3 class="section-title">How to Apply</h3>
                         <?php include 'apply-block.php'; ?>
                    <br class="clear">
                   
                     <div class="col-main">

                         <h3 class="">VA Education &amp; Training</h3>

                         <p>
                            VA can help you cover the cost of furthering your education and skills through benefits to pay for tuition, housing, training, and other costs. VA’s
                            education and training benefits are provided through these key programs:
                        </p>

                        <ul class="bullet-list" >
                            <li>
                                <a href="http://www.benefits.va.gov/gibill/post911_gibill.asp">Post-9/11 GI Bill</a>
                               
                            </li>
                            <li>
                                <a href="http://www.benefits.va.gov/gibill/montgomery_bill.asp">Montgomery GI Bill</a>
                                
                            </li>
                            <li>
                                <a href="http://www.benefits.va.gov/gibill/survivor_dependent_assistance.asp">Survivors’ and Dependents’ Assistance</a>
                            </li>
                            <li>
                                <a href="http://www.benefits.va.gov/gibill/yellow_ribbon.asp">Yellow Ribbon Program</a>
                                to help pay for private or graduate school
                            </li>
                        </ul>

                        <p>
                            Additional Veterans’ benefits include on-the-job and apprenticeship training and more.
                        </p>

                        <p>
                            VA also has services to help all Veterans transition from service to civilian employment. Service-disabled Veterans may be eligible for one-on-one support,
                            counseling, and training to boost skills and build careers. Explore VA <a href="http://www.va.gov/explore/employment-services.asp">employment services</a>
                            for details.
                        </p>
                                               



                          <h3 class="">VA Requirements</h3>

                        <p>
                            To support a claim for service connection, the evidence must show the following:
                        </p>
                            <ul class="requirements">
                                <li>
                                  <p>copies of your discharge or separation papers (DD-214 or equivalent)</p>
                                </li>
                                <li>
                                 <p>Documentation of an enlistment incentive or College Fund—sometimes called a “kicker” (not required to apply for the GI Bill)</p>
                                </li>
                                <li>
                                   <p> To qualify for housing assistance, you must attend school more than half time (e.g., seven out of 12 credit hours per term)</p>
                                </li>
                               
                                
                            </ul>

                             <p class="explore-link-wrap ">
                                <a class="vae-button variation explore-link" href="http://www.benefits.va.gov/gibill/education_programs.asp">Explore VA Education Benefits Today</a>
                            </p>


                             <h3>Eligibility</h3>
                                   <?php echo $eligibility; ?>

                                    <h3 class="section-title">VA Application Processs</h3>
                       
                        <p>
The application process for Veterans seeking education and training benefits varies for different types of applicants. Before you apply, use the chart on    <a href="http://www.benefits.va.gov/gibill/comparison_tool.asp">this page</a> to determine the right benefit for you.
</p>
<p>
    If you are eligible for the Post-9/11 GI Bill and the Montgomery GI Bill, you must choose which benefit to receive. This decision is final and cannot be
    changed.
</p>



<ul class="bullet-list">
                       
        <li>
          <p>Plan ahead and apply early because VA benefits can take a few weeks to process.</p>
        </li>
        <li>
          <p> Depending on where you live, your application is routed to one of four specialized regional claims processing centers in Atlanta; Buffalo, N.Y.;
            Muskogee, Okla.; and St. Louis.</p>
        </li>
        <li>
          <p> Get a sense of how quickly your claim will be processed by using <a href="http://www.vba.va.gov/reports/aspiremap.asp">VA’s interactive map</a>, which
            gives you the average number of days each regional education office is taking to approve applications.</p>
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

                         <h3 class="section-title">Files and Resources</h3>

                          <?php include "resources.php" ?>
                      
                    </div><!-- ./ col-sidebar -->

                    

                    <div class="apply-secondary">
                            <div class="decoration"></div>
                            <div class="call-to-action">
                                <a class="vae-button button-1 large" href="#">Apply Now</a>
                                <p>
                                    For Education Benefits
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
