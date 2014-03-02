
<?php include 'super-header.php'; ?>
        <div class="row row-content" id="content">
            <div class="main">

                <div class="col-main">
                    <h3>Montgomery G.I. Bill</h3>

                    <p>
    The Montgomery GI Bill (MGIB) assists active duty Servicemembers and reservists in pursuing higher education degrees, certificates, and other education and
    training. MGIB supports those who enlist in the U.S. armed forces through two main programs:
</p>
<ul class="bullet-list">
    <li>
       <p>
       <a href="http://www.benefits.va.gov/gibill/mgib_ad.asp"><strong>Montgomery GI Bill Active Duty</strong></a><strong> </strong>– Sometimes known as Chapter
        30, this program provides education benefits to Veterans and Servicemembers who have completed at least two years of active duty service. Active duty
        personnel who enroll and pay $100 per month for 12 months are eligible for a monthly education benefit once they have completed a minimum service
        obligation. View the <a href="http://www.benefits.va.gov/gibill/docs/pamphlets/ch30_pamphlet.pdf">Montgomery GI Bill Active Duty</a> pamphlet (PDF) to find
        out more.
        </p>
    </li>
    <li>
        <p>
        <a href="http://www.benefits.va.gov/gibill/mgib_sr.asp"><strong>Montgomery GI Bill Selected Reserve</strong></a><strong> </strong>– Reservists with a
    six-year obligation in the Selected Reserve who are actively drilling may receive 36 months of education benefits. View the    <a href="http://www.benefits.va.gov/gibill/docs/pamphlets/ch1606_pamphlet.pdf">Montgomery GI Bill Selected Reserve</a> pamphlet to learn more.
        </p>
    </li>

</ul>

<p>
   <b> Veterans and Servicemembers may use MGIB benefits for: </b>
</p>

<ul class="bullet-list">
<li>
    <a href="http://www.benefits.va.gov/gibill/higher_learning.asp">College degree and certificate programs</a>
</li>
<li>
    <a href="http://www.benefits.va.gov/gibill/correspondence_training.asp">Correspondence courses</a>
</li>
<li>
    <a href="http://www.benefits.va.gov/gibill/flight_training.asp">Flight training</a>
</li>
<li>
    <a href="http://www.benefits.va.gov/gibill/accelerated_payments.asp">High-tech training</a>
</li>
<li>
    <a href="http://www.benefits.va.gov/gibill/licensing_certification.asp">Licensing and certification test reimbursement</a>
</li>
<li>
    <a href="http://www.benefits.va.gov/gibill/onthejob_apprenticeship.asp">On-the-job training</a>
</li>
<li>
    <a href="http://www.benefits.va.gov/gibill/non_college_degree.asp">Technical or vocational courses</a>
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
