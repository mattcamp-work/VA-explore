var matt = "cool";
var myShareItems = new Array();
var myTextShareItems = new Array();
var myVideoShareItems = new Array();
var myImageShareItems = new Array();

function ShareItem (){}; // create ShareItem "class"

// set the default properties
ShareItem.prototype._id = "not set";
ShareItem.prototype.share_title = "TitleTitle";
ShareItem.prototype.share_text = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et ma";
ShareItem.prototype.share_img = "http://placehold.it/500x300";
ShareItem.prototype.share_url = "http://www.google.com";
ShareItem.prototype.share_page_url = "http://www.reingold.com";
ShareItem.prototype.share_page_text = "lorem ipsum";
ShareItem.prototype.share_page_title = "Title Ipsum Title";
ShareItem.prototype.media_type = "not set";
ShareItem.prototype.benefit_type = "not set";
ShareItem.prototype.pub_date = new Date();
ShareItem.prototype.audience_type = "";
ShareItem.prototype.campaign_type = "not set";
ShareItem.prototype.hidden = false;
ShareItem.prototype.property_2 = "no";
ShareItem.prototype.property_3 = "no";

var i = 0;

while (i<25) {
	myTextShareItems[i] = new ShareItem();
	myTextShareItems[i].media_type = "text";

	myVideoShareItems[i] = new ShareItem();
	myVideoShareItems[i].media_type = "video";

	myImageShareItems[i] = new ShareItem();
	myImageShareItems[i].media_type = "image";
	i++;
}


//========================================
//====== Begin textShare items ===========
//========================================


//myShareItems[0] = new shareItem();
myTextShareItems[0]._id = "0001";
myTextShareItems[0].share_title = "Explore. Click. Apply.";
myTextShareItems[0].share_text = "One click can make all the difference. #ExploreVA to see how Veterans can take the first step to accessing benefits.";
myTextShareItems[0].share_url = "http://www.va.gov/explore/";
myTextShareItems[0].share_page_url = "http://google.com";
myTextShareItems[0].benefit_type = "general";
//myTextShareItems[0].pub_date = new Date("jan 14, 2014");
myTextShareItems[0].audience_type = "";

//============== 0002 ========
myTextShareItems[1]._id = "0002";
myTextShareItems[1].share_title = "Explore. Click. Apply.";
myTextShareItems[1].share_text = "It takes just 30 minutes for the Veteran in your life to #ExploreVA & apply online for some benefits. Share this:";
myTextShareItems[1].share_url = "http://www.va.gov/explore/";
//myTextShareItems[1].share_page_url = "http://google.com";
myTextShareItems[1].benefit_type = "general";
//myTextShareItems[1].pub_date = new Date("jan 14, 2014");
//myTextShareItems[1].audience_type = "";

//============== 0003 ========
myTextShareItems[2]._id = "0003";
myTextShareItems[2].share_title = "Explore. Click. Apply.";
myTextShareItems[2].share_text = "No matter when you served, #ExploreVA benefits for you & your family. ";
myTextShareItems[2].share_url = "http://www.va.gov/explore/";
//myTextShareItems[2].share_page_url = "http://google.com";
myTextShareItems[2].benefit_type = "general";
//myTextShareItems[2].pub_date = new Date("jan 14, 2014");
//myTextShareItems[2].audience_type = "";


//============== 0004 ========
myTextShareItems[3]._id = "0004";
myTextShareItems[3].share_title = "Explore. Click. Apply.";
myTextShareItems[3].share_text = "VA is here for Veterans. Share this website & encourage them to #ExploreVA benefits.";
myTextShareItems[3].share_url = "http://www.va.gov/explore/";
//myTextShareItems[3].share_page_url = "http://google.com";
myTextShareItems[3].benefit_type = "general";
//myTextShareItems[3].pub_date = new Date("jan 14, 2014");
//myTextShareItems[3].audience_type = "";

//============== 0005 ========
myTextShareItems[4]._id = "0005";
myTextShareItems[4].share_title = "Explore VA: Life Insurance";
myTextShareItems[4].share_text = "Life insurance can make a difference for Veterans & their loved ones. #ExploreVA:";
myTextShareItems[4].share_url = "http://www.va.gov/explore/";
//myTextShareItems[4].share_page_url = "http://google.com";
myTextShareItems[4].benefit_type = "life-insurance";
//myTextShareItems[4].pub_date = new Date("jan 14, 2014");
//myTextShareItems[4].audience_type = "";

//============== 0006 ========
myTextShareItems[5]._id = "0006";
myTextShareItems[5].share_title = "Explore VA: Memorial Benefits";
myTextShareItems[5].share_text = "#ExploreVA & learn how to honor Veterans & their families with final resting places in national cemeteries.";
myTextShareItems[5].share_url = "http://www.va.gov/explore/memorial-benefits.asp";
//myTextShareItems[5].share_page_url = "http://google.com";
myTextShareItems[5].benefit_type = "memorial-benefits";
//myTextShareItems[5].pub_date = new Date();
//myTextShareItems[5].audience_type = "";

//============== 0007 ========
myTextShareItems[6]._id = "0007";
myTextShareItems[6].share_title = "Explore VA: Pensions";
myTextShareItems[6].share_text = "#ExploreVA & learn how to honor Veterans & their families with final resting places in national cemeteries.";
myTextShareItems[6].share_url = "http://www.va.gov/explore/memorial-benefits.asp";
//myTextShareItems[6].share_page_url = "http://google.com";
myTextShareItems[6].benefit_type = "pensions";
//myTextShareItems[6].pub_date = new Date();
//myTextShareItems[6].audience_type = "";

//============== 0008 ========
myTextShareItems[7]._id = "0008";
myTextShareItems[7].share_title = "Explore VA: Employment";
myTextShareItems[7].share_text = "#ExploreVA resources on employment benefits with Veterans interested in building their careers.";
myTextShareItems[7].share_url = "http://www.va.gov/explore/employment-services.asp";
//myTextShareItems[7].share_page_url = "http://google.com";
myTextShareItems[7].benefit_type = "employment";
//myTextShareItems[7].pub_date = new Date();
//myTextShareItems[7].audience_type = "";

//============== 0009 ========
myTextShareItems[8]._id = "0009";
myTextShareItems[8].share_title = "Explore VA: Dependents' Benefits";
myTextShareItems[8].share_text = "In times of loss, VA stands by Veterans’ families. #ExploreVA benefits for dependents’ & survivors’ and apply.";
myTextShareItems[8].share_url = "http://www.va.gov/explore/dependents-and-survivors.asp";
//myTextShareItems[8].share_page_url = "http://google.com";
myTextShareItems[8].benefit_type = "dependents";
//myTextShareItems[8].pub_date = new Date();
//myTextShareItems[8].audience_type = "";


//============== 0010 ========
myTextShareItems[9]._id = "0010";
myTextShareItems[9].share_title = "Explore VA: Disability Compensation";
myTextShareItems[9].share_text = "#ExploreVA and discover support for a Veteran to overcome challenges with a disability from military service.";
myTextShareItems[9].share_url = "http://www.va.gov/explore/disability-compensation.asp";
//myTextShareItems[9].share_page_url = "http://google.com";
myTextShareItems[9].benefit_type = "disability";
//myTextShareItems[9].pub_date = new Date();
//myTextShareItems[9].audience_type = "";

//============== 0011 ========
myTextShareItems[10]._id = "0011";
myTextShareItems[10].share_title = "Explore VA: Education";
myTextShareItems[10].share_text = "Encourage the Veterans in your life to #ExploreVA education benefits to help transition to life after the military.";
myTextShareItems[10].share_url = "http://www.va.gov/explore/educational-services.asp";
//myTextShareItems[10].share_page_url = "http://google.com";
myTextShareItems[10].benefit_type = "education";
//myTextShareItems[10].pub_date = new Date();
//myTextShareItems[10].audience_type = "";

//============== 0012 ========
myTextShareItems[11]._id = "0012";
myTextShareItems[11].share_title = "Explore VA: Healthcare";
myTextShareItems[11].share_text = "Encourage Veterans in your life to #ExploreVA’s world-class health care.";
myTextShareItems[11].share_url = "http://www.va.gov/explore/health-care.asp";
//myTextShareItems[11].share_page_url = "http://google.com";
myTextShareItems[11].benefit_type = "healthcare";
//myTextShareItems[11].pub_date = new Date();
//myTextShareItems[11].audience_type = "";


//============== 0013 ========
myTextShareItems[12]._id = "0013";
myTextShareItems[12].share_title = "Explore VA: Housing ";
myTextShareItems[12].share_text = "#ExploreVA: regardless of their era of service, eligible Veterans can get a VA home loan at any age.";
myTextShareItems[12].share_url = "http://www.va.gov/explore/home-loans.asp";
//myTextShareItems[12].share_page_url = "http://google.com";
myTextShareItems[12].benefit_type = "housing";
//myTextShareItems[12].pub_date = new Date();
//myTextShareItems[12].audience_type = "";



//========================================
//====== End textShare items ===========
//========================================


//========================================
//====== begin imageShare items ===========
//========================================

//============== 0001 ========
//myImageShareItems[0] = new shareItem();
myImageShareItems[0]._id = "0001";
myImageShareItems[0].share_title = "";
myImageShareItems[0].share_text = "Benefits are tax–free.";
myImageShareItems[0].share_url = "http://www.va.gov/explore/";
myImageShareItems[0].share_img = "share-assets/images/share_life_insurance_01.jpg";
//myImageShareItems[0].share_page_url = "http://google.com";
myImageShareItems[0].benefit_type = "general";
//myImageShareItems[0].pub_date = new Date("jan 14, 2014");
myImageShareItems[0].audience_type = "";
myImageShareItems[0].campaign_type = "did-you-know";

//============== 0002 ========
//myImageShareItems[1] = new shareItem();
myImageShareItems[1]._id = "0002";
myImageShareItems[1].share_title = "";
myImageShareItems[1].share_text = "Compensation payments are exempt from claims from creditors.  ";
myImageShareItems[1].share_url = "http://www.va.gov/explore/";
myImageShareItems[1].share_img = "share-assets/images/share_life_insurance_02.jpg";
//myImageShareItems[1].share_page_url = "http://google.com";
myImageShareItems[1].benefit_type = "general";
//myImageShareItems[1].pub_date = new Date("jan 14, 2014");
myImageShareItems[1].audience_type = "";
myImageShareItems[1].campaign_type = "did-you-know";


//============== 0003 ========
//myImageShareItems[2] = new shareItem();
myImageShareItems[2]._id = "0003";
myImageShareItems[2].share_title = "";
myImageShareItems[2].share_text = "VA provides more than $1.3 trillion in life insurance coverage to 6.7 million Veterans, Servicemembers, and their families.";
myImageShareItems[2].share_url = "http://www.va.gov/explore/";
myImageShareItems[2].share_img = "share-assets/images/share_life_insurance_03.jpg";
//myImageShareItems[2].share_page_url = "http://google.com";
myImageShareItems[2].benefit_type = "general";
//myImageShareItems[2].pub_date = new Date("jan 14, 2014");
myImageShareItems[2].audience_type = "";
myImageShareItems[2].campaign_type = "did-you-know";

//============== 0003 ========
//myImageShareItems[2] = new shareItem();
myImageShareItems[3]._id = "0004";
myImageShareItems[3].share_title = "";
myImageShareItems[3].share_text = "VA provides more than $1.3 trillion in life insurance coverage to 6.7 million Veterans, Servicemembers, and their families.";
myImageShareItems[3].share_url = "http://www.va.gov/explore/";
myImageShareItems[3].share_img = "share-assets/images/share_life_insurance_04.jpg";
//myImageShareItems[3].share_page_url = "http://google.com";
myImageShareItems[3].benefit_type = "general";
//myImageShareItems[3].pub_date = new Date("jan 14, 2014");
myImageShareItems[3].audience_type = "";
myImageShareItems[3].campaign_type = "did-you-know";




//========================================
//====== end imageShare items ===========
//========================================




/* ==== Notes on 1-29-2014 

need to add blockquote to text template
need to add new template for images and video
need to kill the loop at the top and just create a new object 1 by 1.
take out the filter on the bottom


=========*/



















function makeShareTextTemplate(thisObject) {

var tempBlock =   '<li data-benefitType="'+thisObject.benefit_type+'"  data-pubDate="'+thisObject.pub_date+'" data-hidden="'+thisObject.hidden+'" data-audienceType="'+thisObject.audience_type+'" data-campaignType="'+thisObject.campaign_type+'">'
							+'<blockquote>'
	                           +'<h6>'+thisObject.share_title+'</h6>'
	                           +'<p>'+thisObject.share_text+'</p>'
	                             +'</blockquote>'
	                            +'<a class="share-trigger" >share</a>'
	                            +'<ul class="share-panel">'
	                                +'<li class="share-facebook" target="_blank" >'
	                                    +'<a target="_blank" href="http://www.facebook.com/sharer.php?u='+thisObject.share_page_url+'" >Post</a>'
	                                +'</li>'
	                                +'<li class="share-twitter" >'
	                                    +'<a target="_blank" href="http://twitter.com/home/?status='+encodeURIComponent(thisObject.share_text)+'" data-url="'+thisObject.share_url+'" >Tweet</a>'
	                                +'</li>'
	                                +'<li class="share-pinterest" >'
	                                   +'<a target="_blank" href="http://www.pinterest.com/pin/create/button/?url='+thisObject.share_url+'" data-pin-do="" data-pin-config="" >Pin</a>'
	                                +'</li>'
	                            +'</ul>'
	                        +'</li>';
	                        return tempBlock;
}



function makeShareImageTemplate(thisObject) {

var tempBlock =   '<li data-benefitType="'+thisObject.benefit_type+'"  data-pubDate="'+thisObject.pub_date+'" data-hidden="'+thisObject.hidden+'" data-audienceType="'+thisObject.audience_type+'" data-campaignType="'+thisObject.campaign_type+'">'
							+'<a href=""><img src="'+thisObject.share_img+'"></a>'
	                           +'<h5 class="item-title">'+thisObject.share_title+'</h5> '
	                            +'<a class="share-trigger" >share</a>'
	                            +'<ul class="share-panel">'
	                                +'<li class="share-facebook" target="_blank" >'
	                                    +'<a target="_blank" href="http://www.facebook.com/sharer.php?u='+thisObject.share_page_url+'" >Post</a>'
	                                +'</li>'
	                                +'<li class="share-twitter" >'
	                                    +'<a target="_blank" href="http://twitter.com/home/?status='+encodeURIComponent(thisObject.share_text)+'" data-url="'+thisObject.share_url+'" >Tweet</a>'
	                                +'</li>'
	                                +'<li class="share-pinterest" >'
	                                    +'<a href="http://www.pinterest.com/pin/create/button/?url='+thisObject.share_img+'" data-pin-do="" data-pin-config="" >Pin</a>'
	                                +'</li>'
	                            +'</ul>'
	                        +'</li>';
	                        return tempBlock;
}

function makeShareVideoTemplate(thisObject) {

var tempBlock =   '<li data-benefitType="'+thisObject.benefit_type+'"  data-pubDate="'+thisObject.pub_date+'" data-hidden="'+thisObject.hidden+'" data-audienceType="'+thisObject.audience_type+'" data-campaignType="'+thisObject.campaign_type+'">'
							+''
	                           +' '
	                            +'<a class="share-trigger" >share</a>'
	                            +'<ul class="share-panel">'
	                                +'<li class="share-facebook" target="_blank" >'
	                                    +'<a href="http://www.facebook.com/sharer.php?u='+thisObject.share_page_url+'" >Post</a>'
	                                +'</li>'
	                                +'<li class="share-twitter" >'
	                                    +'<a target="_blank" href="http://twitter.com/home/?status='+thisObject.share_text+'" data-url="'+thisObject.share_url+'" >Tweet</a>'
	                                +'</li>'
	                                +'<li class="share-pinterest" >'
	                                   +'<a href="" >Pin</a>'
	                                +'</li>'
	                            +'</ul>'
	                        +'</li>';
	                        return tempBlock;
}








var videoBlock = "";
var textBlock = "";
var imageBlock = "";

for (var i=0;i<4;i++) {
	var tempItem = myShareItems[i];

	if (tempItem.media_type == "video") {
	    videoBlock += makeShareTemplate(tempItem);
	}

	if (tempItem.media_type == "image") {
		   imageBlock += makeShareTemplate(tempItem);
	}

	if (tempItem.media_type == "text") {		
	    textBlock += makeShareTextTemplate(tempItem);
	}

}




$('.share-video li').hover(function() {
//  $(this).children('ul.share-panel').toggleClass('show-share-panel');
    
}, function() {
  $(this).children('ul.share-panel').removeClass('show-share-panel');
});

$('.share-video li a.share-trigger').click(function() {
  $(this).siblings('ul.share-panel').addClass('show-share-panel');
});


$.getScript('http://assets.pinterest.com/js/pinit_main.js').done(function(){
      //==== remove janky styling off pin buttons 
    $('ul.share-panel li.share-pinterest a').removeClass();
    //==== the pinterest api also takes out any text in the a tag...so we put it back
    $('ul.share-panel li.share-pinterest a').html("Pin");
});


/*
_id = "not set";
share_title = "TitleTitle";
share_text = "Lorem ipsum"
share_img = "http://placehold.it/500x300";
share_url = "http://www.google.com";
share_page_url = "http://www.reingold.com";
share_page_text = "lorem ipsum";
share_page_title = "Title Ipsum Title";
media_type = "not set";
benefit_type = "not set";
pub_date = new Date();
audience_type = "";
campaign_type = "not set";
hidden = false;
*/







