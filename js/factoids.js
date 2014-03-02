

var myFactoids = new Array();

function Factoid (){}; // create ShareItem "class"

// set the default properties
Factoid.prototype._id = "";
Factoid.prototype._title = "Title Title";
Factoid.prototype._text = "Title Title";
Factoid.prototype.url = "";
Factoid.prototype.url_text = "Learn More";
Factoid.prototype.benefit = "00_general";
Factoid.prototype.benefit_sub = "";
Factoid.prototype.css_class = "";
Factoid.prototype.hidden = "";

/*

00_general
01_disability
02_education
03_employment
04_healthcare
05_homeloans
06_lifeinsurance
07_memorial
08_pensions
09_spouses

*/

var benefitType = "";
var lastPicked = "";

function pickFactoid(benefitType) {

	tempRand = Math.floor(Math.random()*myFactoids.length);
	myRandom = myFactoids[tempRand];

	if (myRandom._id === lastPicked) {
		return pickFactoid(benefitType);
	}

	if ((myRandom.benefit === benefitType) || (myRandom.benefit === "00_general")) {

		lastPicked = myRandom._id;
		console.log(myRandom);
		return myRandom;

	} else {
		return pickFactoid(benefitType);
	}

}




function makeFactoid(benefitType) {

	var myPickedFactoid = pickFactoid(benefitType);

	var temp =  "<h4>"+myPickedFactoid._title+"</h4> <p>"+myPickedFactoid._text+"</p>";
	return temp;
	console.log(temp);

}





/* ========== 01 ============*/
myFactoids[0] = new Factoid();
myFactoids[0]._id = "00";
myFactoids[0]._title = "Tax-Free";
myFactoids[0]._text = "Benefits are tax–free.";
myFactoids[0].url = "";
myFactoids[0].url_text = "Learn More";
myFactoids[0].benefit = "00_general";
myFactoids[0].benefit_sub = "";
myFactoids[0].css_class = "";
myFactoids[0].hidden = "";


/* ========== 02 ============*/
myFactoids[1] = new Factoid();
myFactoids[1]._id = "01";
myFactoids[1]._title = "You're Protected";
myFactoids[1]._text = "Compensation payments are exempt from claims from creditors.";
//myFactoids[1].url = "";
//myFactoids[1].url_text = "Learn More";
myFactoids[1].benefit = "00_general";
//myFactoids[1].benefit_sub = "";
//myFactoids[1].css_class = "";
//myFactoids[1].hidden = "";

/* ========== 04 ============*/
myFactoids[2] = new Factoid();
myFactoids[2]._id = "02";
myFactoids[2]._title = "1.3 Trillion";
myFactoids[2]._text = "VA provides more than $1.3 trillion in life insurance coverage to 6.7 million Veterans, Servicemembers, and their families.";
//myFactoids[2].url = "";
//myFactoids[2].url_text = "Learn More";
myFactoids[2].benefit = "06_lifeinsurance";
//myFactoids[2].benefit_sub = "";
//myFactoids[2].css_class = "";
//myFactoids[2].hidden = "";

/* ========== 04 ============*/
myFactoids[3] = new Factoid();
myFactoids[3]._id = "03";
myFactoids[3]._title = "Take Action";
myFactoids[3]._text = "If Veterans act within 240 days of separation, they can apply for Veterans' Group Life Insurance with no health questions asked.";
//myFactoids[3].url = "";
//myFactoids[3].url_text = "Learn More";
myFactoids[3].benefit = "06_lifeinsurance";
//myFactoids[3].benefit_sub = "";
//myFactoids[3].css_class = "";
//myFactoids[3].hidden = "";

/* ========== 05 ============*/
myFactoids[4] = new Factoid();
myFactoids[4]._id = "04";
myFactoids[4]._title = "Honor Their Service";
myFactoids[4]._text = "Help a Veteran you know. Honor their service and tell them about VA's 131 national cemeteries and 3.3 million gravesites ";
//myFactoids[4].url = "";
//myFactoids[4].url_text = "Learn More";
myFactoids[4].benefit = "07_memorial";
//myFactoids[4].benefit_sub = "";
//myFactoids[4].css_class = "";
//myFactoids[4].hidden = "";

/* ========== 06 ============*/
myFactoids[5] = new Factoid();
myFactoids[5]._id = "05";
myFactoids[5]._title = "Free of Charge";
myFactoids[5]._text = "VA provides burial and memorial services for Veterans free of charge.";
//myFactoids[5].url = "";
//myFactoids[5].url_text = "Learn More";
myFactoids[5].benefit = "07_memorial";
//myFactoids[5].benefit_sub = "";
//myFactoids[5].css_class = "";
//myFactoids[5].hidden = "";

/* ========== 07 ============*/
myFactoids[6] = new Factoid();
myFactoids[6]._id = "06";
myFactoids[6]._title = "Up to $14,000";
myFactoids[6]._text = "Average annual benefits for Post-9/11 Bill trainees can total more than $14,000 per year.";
//myFactoids[6].url = "";
//myFactoids[6].url_text = "Learn More";
myFactoids[6].benefit = "02_education";
//myFactoids[6].benefit_sub = "";
//myFactoids[6].css_class = "";
//myFactoids[6].hidden = "";

/* ========== 08 ============*/
myFactoids[7] = new Factoid();
myFactoids[7]._id = "07";
myFactoids[7]._title = "1 Million";
myFactoids[7]._text = "In 2013, over 1 million individuals received VA education benefits.";
//myFactoids[7].url = "";
//myFactoids[7].url_text = "Learn More";
myFactoids[7].benefit = "02_education";
//myFactoids[7].benefit_sub = "";
//myFactoids[7].css_class = "";
//myFactoids[7].hidden = "";

/* ========== 09 ============*/
myFactoids[8] = new Factoid();
myFactoids[8]._id = "08";
myFactoids[8]._title = "Get More Help";
myFactoids[8]._text = "Veterans rated 30% or more disabled are eligible to receive additional compensation for dependents.";
//myFactoids[8].url = "";
//myFactoids[8].url_text = "Learn More";
myFactoids[8].benefit = "01_disability";
//myFactoids[8].benefit_sub = "";
//myFactoids[8].css_class = "";
//myFactoids[8].hidden = "";

/* ========== 10 ============*/
myFactoids[9] = new Factoid();
myFactoids[9]._id = "09";
myFactoids[9]._title = "Help Getting Around";
myFactoids[9]._text = "Veterans and Servicemembers may be eligible for a one-time payment of not more than $19,505 toward the purchase of an automobile if they have service-connected loss or permanent loss of use of one or both hands or feet, or permanent impairment of vision of both eyes.";
//myFactoids[9].url = "";
//myFactoids[9].url_text = "Learn More";
myFactoids[9].benefit = "01_disability";
//myFactoids[9].benefit_sub = "";
//myFactoids[9].css_class = "";
//myFactoids[9].hidden = "";

/* ========== 11 ============*/
myFactoids[10] = new Factoid();
myFactoids[10]._id = "10";
myFactoids[10]._title = "500,000";
myFactoids[10]._text = "More than 500,000 Veterans and survivors currently receive VA pensions.";
//myFactoids[10].url = "";
//myFactoids[10].url_text = "Learn More";
myFactoids[10].benefit = "08_pensions";
//myFactoids[10].benefit_sub = "";
//myFactoids[10].css_class = "";
//myFactoids[10].hidden = "";

/* ========== 12 ============*/
myFactoids[11] = new Factoid();
myFactoids[11]._id = "11";
myFactoids[11]._title = "Tax Free";
myFactoids[11]._text = "Eligible Veterans may receive tax-free supplemental income from about $2,000 to $15,000 per month.";
//myFactoids[11].url = "";
//myFactoids[11].url_text = "Learn More";
myFactoids[11].benefit = "08_pensions";
//myFactoids[11].benefit_sub = "";
//myFactoids[11].css_class = "";
//myFactoids[11].hidden = "";

/* ========== 13 ============*/
myFactoids[12] = new Factoid();
myFactoids[12]._id = "12";
myFactoids[12]._title = "Save Thousands";
myFactoids[12]._text = "No VA loans require private mortgage insurance, saving Veterans thousands of dollars every year and over the life of the loan.";
//myFactoids[12].url = "";
//myFactoids[12].url_text = "Learn More";
myFactoids[12].benefit = "05_homeloans";
//myFactoids[12].benefit_sub = "";
//myFactoids[12].css_class = "";
//myFactoids[12].hidden = "";

/* ========== 14 ============*/
myFactoids[13] = new Factoid();
myFactoids[13]._id = "13";
myFactoids[13]._title = "Use it Multiple Times";
myFactoids[13]._text = "Eligible Veterans can get a VA-guaranteed home loan at any age and can reuse the benefit multiple times with almost any lender.";
//myFactoids[13].url = "";
//myFactoids[13].url_text = "Learn More";
myFactoids[13].benefit = "05_homeloans";
//myFactoids[13].benefit_sub = "";
//myFactoids[13].css_class = "";
//myFactoids[13].hidden = "";

/* ========== 15 ============*/
myFactoids[14] = new Factoid();
myFactoids[14]._id = "14";
myFactoids[14]._title = "Increase Your Salary";
myFactoids[14]._text = "Veterans receiving VA Vocational Rehabilitation and Employment benefits in a recent one-year period saw an average salary increase of 480%.";
//myFactoids[14].url = "";
//myFactoids[14].url_text = "Learn More";
myFactoids[14].benefit = "03_employment";
//myFactoids[14].benefit_sub = "";
//myFactoids[14].css_class = "";
//myFactoids[14].hidden = "";

/* ========== 16 ============*/
myFactoids[15] = new Factoid();
myFactoids[15]._id = "15";
myFactoids[15]._title = "12 Years";
myFactoids[15]._text = "VA employment benefits are available for 12 years from the time you separate from service or receive a service-connected disability rating.";
//myFactoids[15].url = "";
//myFactoids[15].url_text = "Learn More";
myFactoids[15].benefit = "03_employment";
//myFactoids[15].benefit_sub = "";
//myFactoids[15].css_class = "";
//myFactoids[15].hidden = "";

/* ========== 17 ============*/
myFactoids[16] = new Factoid();
myFactoids[16]._id = "16";
myFactoids[16]._title = "1,700 Care Sites";
myFactoids[16]._text = "VA has more than 1,700 care sites including 840 community-based outpatient clinics and 81 mobile clinics and Vet Centers. ";
//myFactoids[16].url = "";
//myFactoids[16].url_text = "Learn More";
myFactoids[16].benefit = "04_healthcare";
//myFactoids[16].benefit_sub = "";
//myFactoids[16].css_class = "";
//myFactoids[16].hidden = "";


/* ========== 18 ============*/
myFactoids[17] = new Factoid();
myFactoids[17]._id = "17";
myFactoids[17]._title = "Health Care for Women";
myFactoids[17]._text = "VA offers women Veterans primary care; cancer screenings; pre- and postnatal care, maternity care coverage and many other services.";
//myFactoids[17].url = "";
//myFactoids[17].url_text = "Learn More";
myFactoids[17].benefit = "04_healthcare";
//myFactoids[17].benefit_sub = "";
//myFactoids[17].css_class = "";
//myFactoids[17].hidden = "";











