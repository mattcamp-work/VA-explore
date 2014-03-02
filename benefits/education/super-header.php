
<?php 


$myPath = "../../";

$benefit_section = "education";
$page_title = "Education";
$hero_title = "Education &amp; Training";
$hero_primer = "Learn about VA benefits you may have earned.";




include $myPath.'global-benefit-settings.php';
include $myPath.'partials/partial-header.php'; 
?>

    <body class="benefit-page benefit-education">

        <div class="row row-top-bar" id="top-bar">
            <div class="main">
                 <?php include $myPath.'partials/partial-top-bar.php'; ?> 

            </div><!-- ./ main -->

        </div><!-- close top-bar -->
         <div class="row row-banner" id="banner"> 
                          
                    <?php include $myPath.'partials/partial-explore-bar.php'; ?> 
                     
            <div class="main">                
                <div class="intro">                

                        <h1><?php echo $hero_title; ?></h1>
                        <h4><?php echo $hero_primer; ?></h4>                            

                </div> <!-- ./ intro -->

                 <a href="#" class="vae-button button-video" id="hero-video">Watch Video</a>  
            </div><!-- ./ main -->           
          
        </div><!-- ./ row -->
        <div class="row row-subnav">
             <div class="main">
                 <?php include "sub-nav.php" ?>                         
            </div> <!-- ./ main -->
        </div>