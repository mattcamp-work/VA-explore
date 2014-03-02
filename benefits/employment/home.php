
<?php include 'super-header.php' ?>

        <div class="row row-content" id="content">
            <div class="main">
                <h3 class="section-title">How to Apply</h3>
                         <?php include 'apply-block.php'; ?>
                    <br class="clear">
                   
                     <div class="col-main">

                         <h3>VA Employment Services</h3>

                    <p>
                        VA offers numerous benefits, resources, and services to help Veterans transition from service to civilian jobs and enhance their education, skills, and
                    careers. In addition to providing <a href="http://www.va.gov/explore/educational-services.asp">education and training assistance</a>,<a>vocational and employment counseling</a><a id="_anchor_1" href="#_msocom_1" name="_msoanchor_1">[EF1]</a> , and <a>job-seeking tools</a>    <a id="_anchor_2" href="#_msocom_2" name="_msoanchor_2">[EF2]</a> , VA connects Veterans with employers and helps employers find qualified Veterans for the
                        positions they’re seeking to fill.
                    </p>

                       
                     <p>Here are just some VA employment services that you may want to explore:</p>

                     <ul class="bullet-list">
                     <li><p><b> Do you have a service-connected disability that makes finding employment challenging?</b> You may be eligible for additional benefits for tuition, books, fees, supplies, monthly subsistence payments, and more through VA’s <a>Vocational Rehabilitation and Employment program</a>.
</p></li>
<li><p>
<b> Are you looking to earn a degree, go to technical school, or enhance your skills?</b> Check out the GI Bill and other    <a href="http://www.va.gov/explore/educational-services.asp">education and training</a> benefits.
</p></li>
<li><p>
 <b>Are you unsure about how to update your résumé or translate your military skills for civilian jobs? </b> At the    <a href="https://www.ebenefits.va.gov/ebenefits-portal/ebenefits.portal?_nfpb=true&amp;_nfxr=false&amp;_pageLabel=Jobs">eBenefits Employment Center</a>
    portal, use <a href="https://www.vetsuccess.va.gov/public/military_skills_translators.html">easy-to-use skills translation</a> tools, résumé builders, and
    more.
</p></li>
<li><p>
<b>Are you looking for a private-sector or federal job?</b> Search nearly 3 million jobs at the    <a href="https://www.ebenefits.va.gov/ebenefits-portal/ebenefits.portal?_nfpb=true&amp;_nfxr=false&amp;_pageLabel=Jobs">Jobs Bank</a>; you can narrow your
    search by rank, salary, and other factors.
</p></li> 
</ul>
                                               

                <!-- 

                          <h3 class="">Requirements</h3>

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
                               
                                
                            </ul>--> 


                             <p class="explore-link-wrap ">
                                <a class="vae-button variation explore-link" href="https://www.ebenefits.va.gov/ebenefits-portal/ebenefits.portal?_nfpb=true&amp;_nfxr=false&amp;_pageLabel=Jobs">Explore VA Employment Services Today</a>
                            </p>

                             <h3>Eligibility</h3>
                                   <?php echo $eligibility; ?>

                                   <!-- 

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

                                -->
                                                           
                                                           
                      
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
