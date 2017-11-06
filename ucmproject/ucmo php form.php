<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>
		University of Central Missouri
		</title>
		<meta name="description" content="Street Address:  WDE 1400, Warrensburg, MO 64093.  The University of Central Missouri is a four-year comprehensive university located 35 miles from suburban Kansas City.  877-729-8266 | admit@ucmo.edu " />
		<meta name="keywords" content=", University of Central Missouri UCM, Central Missouri,cmsu,cmsu.edu,formerly known as Central Missouri State University, Warrensburg, universities, university in Missouri, Mules, Jennies, Kansas City, Missouri, education, higher education, colleges in missouri, college" />
		<link rel="stylesheet" type="text/css" href="./css/master3.css">
		<link rel="stylesheet" type="text/css" href="./css/recruit.css">
		<link rel="stylesheet" type="text/css" href="./css/responsive-styles.css">
		<link rel="stylesheet" type="text/css" href="./css/top-center.css">
</head>

<p class="hide">
</p>
<body class="supports-media_queries">
<div id="header">
<div class="headerWrapper">
<!-- LOGO -->
	<div id="logo">	
	<a href="/"><img src="./home_images/mule_greater.png" width="216" height="95" alt="UCM logo" border="0"></a>
	</div>

	<div class="courtesy_nav">
                <p class="mobile_nav-trigger responsive_only top"></p>

        <div id = "bblogo">
					<a href="http://library.ucmo.edu" target="_blank"><img src="./images/menu/library.png" align="right" border="0"  width="40" hspace="5" alt="JCK Library"></a>
					<a href="http://mail.ucmo.edu" target="_blank"><img src="./images/menu/gmail.png" border="0" align="right" width="40" alt="Gmail"></a>
                    <a href="http://courses.ucmo.edu" target="_blank"><img src="./images/menu/bb.png" align="right" border="0"  width="45" hspace="5" alt="Blackboard"></a>
    </div><!-- end #logo -->





 <!-- MYCENTRAL LOGIN -->
   
		
 <div id="myCentral_head">
      <p class="head_trigger"><a href="https://mycentral.ucmo.edu" target="_blank" title="MyCentral"><img src="./images/menu/mycentral.png" alt="MyCentral"></a>
      </p>
      
</div> <!-- end #myCentral_head -->

  

 <!-- SEARCH -->

		
		<div id="mySearch_head">
	<p class="head_trigger">
		<a href="#"><img src="./images/menu/search.png" title="Search the UCM site"></a>
	</p>
    <div id="mySearch" class="dropit">



<div class="search"> 

   <form id="searchbox_004517223167991639561:bpywfzjlqhq" action="./search/gresults.cfm" method="get">

	<input type="hidden" name="cx" value="004517223167991639561:bpywfzjlqhq" id="cse" style=" text-align: leftz-index:2000;" />

	  <input type="hidden" name="cof" value="FORID:11" />
	  <input type="hidden" name="ie" value="UTF-8" />
      <input type="text" name="q" id="popular_search_trigger" autocomplete="on"  class="inp"  />&nbsp;

      <button class="btn_go_input over" type="submit">GO</button>
    </form> 

	
	<div id="popular">
<ul class="short small">
            <li>&nbsp;&nbsp;<a href="/search/most_popular.cfm">Most popular searches</a></li>
            <li>&nbsp;&nbsp;<a href="/about/offices.cfm">Administrative Offices</a></li>
			<li>&nbsp;&nbsp;<a href="/search">Directory</a></li>
            <li>&nbsp;&nbsp;<a href="/contact">Contact UCM</a></li>
            <li>&nbsp;&nbsp;<a href="/ps">Public Safety/University Police</a></li>
			<li>&nbsp;&nbsp;<a href="/hr">Work at UCM</a></li>
</ul>
	 </div> <!-- end #popular -->
	 
	 

</div> <!-- end #search -->

   <br class="clearFloat" />
</div> <!-- end #mySearch_head -->
</div> <!-- end #mySearch -->  
<ul class="nav_currently_affiliated">
  
 <li class="nav_currently_affiliated--item current_student">
    <a title="Current Students" class="nav_currently_affiliated--link nav_link">Current Students</a>

</li><li class="nav_currently_affiliated--item parent_fam">
    <a class="nav_currently_affiliated--link nav_link">Parents and Family</a>

</li><li class="nav_currently_affiliated--item faculty">
    <a  class="nav_currently_affiliated--link nav_link">Faculty and Staff</a>
</li>

<li class="nav_currently_affiliated--item alumni">
    <a class="nav_currently_affiliated--link nav_link">Alumni and Foundation</a>
</li>
					

					
</ul>
</div><!-- courtesy_nav --> 


<!-- Gateway Navigation  -->	



 <!-- Gateway Navigation  -->
	<div id="" class="header_nav">
		<ul class="header_nav--list nav">
			
			
<li id="about" class="header_nav--item"><a title="Learn about UCM" class="header_nav--link">About Us</a></li>			

<li id="academics" class="header_nav--item"><a  title="Explore your academic options" class="header_nav--link">Academics</a></li>
			<li id="cost" class="header_nav--item"><a title="Find out about costs and financial aid" href="/costs" class="header_nav--link">Costs</a></li>
			
			<li id="life" class="header_nav--item"><a  title="Learn about life at Central Missouri" class="header_nav--link">Student Life</a></li>
			

<li id="athletics" class="header_nav--item"><a href="http://ucmathletics.com" title="Athletics" target="_blank"  class="header_nav--link">Athletics</a></li>

<li id="inquire" class="header_nav--item"><a title="Inquire" class="header_nav--link">Inquire</a></li>
			<li id="visit" class="header_nav--item"><a title="Visit Our Campus" href="/undergrad/visit/" class="header_nav--link">Visit</a></li>
<li id="apply" class="header_nav--item"><a   class="header_nav--link" title="Apply Now">Apply</a></li>		
			
		</ul>
		<br class="clearFloat" />
	</div> <!-- .header_nav -->

</div> <!-- end .wrapper -->
</div> <!-- end #header -->
<hr class="hide" />


<div class="mainContentWrapper">


<?php
// define variables and set to empty values
$nameErr = $emailErr = $interestErr = $likeErr = "";
$name = $email = $interest = $comment = $like = "";
$validation=0;    
    

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    $validation=1;  
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
      $validation=1;
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["like"])) {
    $likeErr = "Select Atlest one Like Field";
      $validation;
  } else {
    $like = test_input($_POST["like"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["interest"])) {
    $interestErr = "Select Atleast one Interest";
      $validation=1;
  } else {
    $interest = test_input($_POST["interest"]);
  
  }
if ( (!empty($_POST["name"])) && (!empty($_POST["email"])) && (!empty($_POST["like"])) && (!empty($_POST["interest"]))) 
{
    $validation=2;
}

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Prospective Student Survey Form</h2>    
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
What You Like Most in Campus:<span class="error">*<?php echo $likeErr;?></span>
  <br><br>
<input type="checkbox" name="like" value="campus">Campus
<input type="checkbox" name="like" value="students" > students
<input type="checkbox" name="like" value=" location" > location
<input type="checkbox" name="like" value="atmosphere" > atmosphere
<input type="checkbox" name="like" value="dorm rooms" > dorm rooms
<input type="checkbox" name="like" value="sports" > sports

<br><br>
  What makes You Interested in the College:<span class="error">* <?php echo $interestErr;?></span>
<br><br>
<input type="radio" name="interest" value="friends">Friends
<input type="radio" name="interest" value="television">Television
<input type="radio" name="interest" value="internet">Internet
<input type="radio" name="interest" value="other">Other
 <br><br> 
Comment:<br> <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
<input type="reset" name="reset" value="reset"> 
</form>

<?php

    if($validation!=1 && $validation!=0 )
{
echo "<br>";
echo "<br>";
echo "Thank You! we received Your Valuable Information";
echo "<br>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $like;
echo "<br>";
echo $interest;
echo "<br>";
echo $comment;
}
?>

</div>

  





  <div class="primary_footer ">
        <div class="primary_footer--container">
            <div class="footer_contact">
                <h1 class="footer_contact--logo">
                    <a href="http://ucmo.edu"><img src="./home_images/3line_greater.png" alt="University of Central Missouri Logo" width="150" /></a></h1>

                <p class="footer_contact--item footer_contact--item-address">P.O. Box 800,<br/> Warrensburg, MO 64093</p>
                <p class="footer_contact--item footer_contact--item-phones">877-729-8266 <br/> Campus Operator: <br />
                660-543-4111</p>
                <p class="footer_contact--item footer_contact--item-email">General Info: <a href="mailto:admit@ucmo.edu" class="footer_link">admit@ucmo.edu</a></p>
                <p class="footer_contact--item footer_contact--item-copyright">Page last modified: 11/20/2014</p>
            </div>

            <div class="primary_footer--nav_wrapper">
                <div class="primary_footer--nav">
                    <ul class="primary_footer--nav_list">
                        <li class="primary_footer--nav_col">
                            <h3 class="footer_header">UCM Resources</h3>
                            <ul class="footer_nav--list">
                            	<li class="footer_nav--item"><a href="/upo/accessibilitynotice.cfm">Accessibility Notice</a></li>
                            	<li class="footer_nav--item"><a href="/provost/reports/federalcompliance2.cfm">Consumer Information</a></li>
								<li class="footer_nav--item"><a href="/ot/policy/DMCA.cfm">DMCA</a></li>
								<li class="footer_nav--item"><a href="/upo/bog/policy.cfm?upoID=1.2.150" title="Nondiscrimination/Equal Opportunity Statement" target="_blank">Nondiscrimination / Equal Opportunity Statement</a></li>
								<li class="footer_nav--item"><a href="/titleix">Title IX / Sexual Harassment and Violence Support</a></li>
								<li class="footer_nav--item"><a href="/free">Tobacco Free Campus</a></li>
                            </ul>
                        </li>

                        <li class="primary_footer--nav_col">
                            <h3 class="footer_header">Student Resources</h3>
                            <ul class="footer_nav--list">
                                <li class="footer_nav--item"><a href="/academics/catalogs">Catalogs</a></li>
								<li class="footer_nav--item"><a href="/diningservices">Dining</a></li>
								<li class="footer_nav--item"><a href="/registrar/dates/enroll.cfm">Enrollment Timeline</a></li>
								<li class="footer_nav--item"><a href="/housing">Housing</a></li>
								<li class="footer_nav--item"><a href="/sfs">Student Financial Services</a></li>
                            </ul>
                        </li>

                        <li class="primary_footer--nav_col">
                            <h3 class="footer_header">Popular Links</h3>
                            <ul class="footer_nav--list">
                                <li class="footer_nav--item"><a href="/campusmap">Campus Map</a></li>
								<li class="footer_nav--item"><a href="/search">Directory</a></li>
								<li class="footer_nav--item"><a href="/hr">Employment</a></li>
								<li class="footer_nav--item"><a href="/greaterdegree">Learning to a Greater Degree</a></li>
								<li class="footer_nav--item"><a href="/majors">Majors</a></li>
								<li class="footer_nav--item"><a href="employ.cfm">Student Employment</a> </li>
								<li class="footer_nav--item"><a href="/ot">Tech Support</a></li>
                            </ul>
                        </li>

                        <li class="primary_footer--nav_col footer_social_media">
                            <h3 class="footer_header">Social Media</h3>
                            <ul class="footer_social_media--list">
                                <li class="footer_social_media--item"><a href="https://www.facebook.com/UCentralMO?_rdr" class="footer_link" target="_blank"><img src="./images/footer/footer-facebook.png" alt="UCM Facebook" title="Like us on Facebok!" /></a></li>
                                <li class="footer_social_media--item"><a href="http://twitter.com/UCentralMO" class="footer_link" target="_blank"><img src="./images/footer/footer-twitter.png" alt="UCM Twitter" title="Follow us on Twitter!" /></a></li>
                                <li class="footer_social_media--item"><a href="https://www.pinterest.com/ucentralmo/" class="footer_link" target="_blank"><img src="./images/footer/footer-pinterest.png" alt="UCM Pinterest" title="Pin us on Pinterest!" /></a></li>
                                <li class="footer_social_media--item"><a href="https://www.youtube.com/user/UCMLive" class="footer_link" target="_blank"><img src="./images/footer/footer-youtube.png" alt="UCM Youtube" title="Like us on Youtube!" /></a></li>
                                <li class="footer_social_media--item"><a href="https://www.linkedin.com/company/university-of-central-missouri" class="footer_link" target="_blank"><img src="./images/footer/footer-linkedin.png" alt="UCM LinkedIn" title="Like us on LinkedIn!" /></a></li>
                            </ul>

                            <div class="accreddited">
                               
                                    <iframe frameborder="0" scrolling="no" allowTransparency="true" width="150"
height="166" src="https://cdn.yoshki.com/iframe/54732.html" style="border:0px;
margin:0px; padding:0px; backgroundColor:transparent;"></iframe>
                            </div>
                        </li>
                    </ul>
                </div>
                <br class="clearFloat" />
            </div>

            <div class="primary_footer--legal footer_legal">
                <p class="footer_legal--tobacco">UCM is smoke and tobacco free. Thank you for your cooperation.</p>
                <ul class="footer_legal--list">
                    <li class="footer_legal--item">
                        <a href="/ot/policy/DMCA.cfm" class="footer_link">Digital Millennium Copyright Act</a>
                    </li>

                    <li class="footer_legal--item">
                        <a href="/upo/bog/policy.cfm?upoID=1.2.150" class="footer_link">Nondiscrimination/Equal Opportunity Statement</a>
                    </li>

                    <li class="footer_legal--item">
                        <a href="/provost/reports/federalcompliance2.cfm" target="_blank" class="footer_link">Consumer Information</a>
                    </li>
                </ul>
            </div>
            <br class="clearFloat" />
        </div>
    </div>

</body>
</html>
