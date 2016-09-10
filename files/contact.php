<!DOCTYPE html>

<html lang="en-gb">

<head>
	<!--[if lt IE 7]><style type="text/css">html{display:none;}</style><script>alert('Please get a new browser!');</script><![endif]-->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
	<script>!window.jQuery && document.write('<script src="js/jquery.1.5.2.js"><\/script>')</script>

	<script>
		jQuery.noConflict();
	</script>

	<!--[if IE]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="robots" content="index, follow" />
	<meta name="keywords" content="restaurant, cafe, template, coffee shop, ChintaMani Bakery" />
	<meta name="rights" content="Demente Design" />
	<meta name="language" content="en-GB" />
	<meta name="title" content="Welcome to Te Contei" />
	<meta name="description" content="ChintaMani Bakery." />

	<title>ChintaMani Bakery </title>
	
	<link href="favicon.ico" rel="shortcut icon" />

	<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/template.css" media="screen" />
	<link rel="stylesheet" href="css/colorbox.css" />
	<link rel="stylesheet" href="css/options.css" /> 
	
	<noscript>
		<style>
		#nav li:hover > ul, #nav li ul li:hover > ul,.sidebar ul.menu li:hover > ul, .sidebar ul.menu ul li:hover > ul{display: block;}
		</style>
	</noscript>

	<script src="js/scripts.js"></script>
	
	<script language="javascript">

function checkEmail()
{ 
	var email = document.forms["emailForm"]["email"].value;
	var nm1 = document.forms["emailForm"]["name"].value;
	var sub1 = document.forms["emailForm"]["subject"].value;
   var re = /^(([^<>()[\]\\.#$^&*%,;:\s@\"]+(\.[^<>()[\]\\.#$^&*%,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!re.test(email))
	{
	alert("Inavalid Email");
	return false;
	}
	 if(email.length<16)
	 {
		 alert("Inavalid Email");
		 return false;
	 }
	 
		   if (!isNaN(nm1)) {
 alert("Enter Valid Name");
 
  
  return false;
 }
 if (!isNaN(sub1)) {
 alert("Enter Valid subject");
 return false;
 }
}


</script>
	
</head>

<!--[if IE 7 ]>    <body class="ie7 ie"> <![endif]--> 
<!--[if IE 8 ]>    <body class="ie8 ie"> <![endif]--> 
<!--[if !IE]><!--> <body> <!--<![endif]-->

	<div id="headercloth"></div>

	<header id="header" class="clearfix">
		<div class="wrap">
	
			<div id="logo" class="left">
				<a href="index.html">
					ChintaMani Bakery
					<img src="img/logo30.JPG" alt="ChintaMani Bakery" />
                    <img src="img/tag3.JPG" alt="Love at First Bite"/>
				</a>
			</div>
 <div class="make-me-btn1">
             <a href="signout.php"> <img src="img/logout1.png" class="sign" width="130" height="30"></a> 
             </div>
						
			<div id="nav">

				<nav class="jquery-menu clearfix">
					<ul class="menu">
						<li><a href="index.php">Home</a></li>
						<li class="current active parent"><a href="menu.php">Menu</a>
							<ul>
								<li><a href="menu.php">Sweets</a></li>
                                <li><a href="cakes.php">Cakes</a></li>
                                <li><a href="namkeen.php">Namkeen</a></li>
                                <li><a href="season_special.php">Season Special</a></li>
								<li><a href="gifts.php">Gifts</a></li>
							</ul>
						</li>
						<li><a href="quickbuy1.php">Quick Buy</a></li>	
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</nav>
			</div>
			
		</div>
	</header>

	<div class="clear"></div>
	<div id="carte">
		<div id="carte-top" class="wrap"></div>
		<div id="content-block" class="wrap">

			<div class="separator top-separator content left"></div>
			<div class="separator top-separator content right"></div>
			
			<div id="main" class="content">

				<h1>Feedback..</h1>

				<div>
					<details class="contact-details down-block">
							
						<address>
							<br />
							<br/>
							<br/>

						</address>

						<ul class="plain-list">
							<li class="contact-telephone">
								<span></span>
								<b></b>
							</li>	
			
							<li class="contact-fax">

								<span>Phone:</span>
								<b>9417172405</b>
							</li>	
						</ul>

						<p>Information about the contact.</p>

						<div class="separator"></div>			
			 
					</details>

				</div>

				<div id="contact-form-wrap" class="contact down-block">
                <?php
				  include('connM.php');
				?>
				
<form action="contact1.php" method="post" name="emailForm" id="emailForm" class="contact-form form-validate" onSubmit="return checkEmail()">
						
<input type="text" name="name" id="contact_name" size="30" class="hidevalue inputbox" value="" placeholder="Name" required/><br />
<input type="email"  name="email" size="30" value=""placeholder="Email" class="required email hidevalue" maxlength="100" required/><br />
<input type="text" name="subject" id="contact_subject" size="30" class="hidevalue inputbox required" value="" placeholder="Subject" required/><br />
<label id="contact_textmsg" for="contact_text">Message</label><br />
<textarea cols="50" rows="10" name="message" id="contact_text" class="hidevalue inputbox" required></textarea><br />
						<br />
						<br />
<button class="button validate" type="submit" name="submit">Send Email</button>
</form>
				</div>
				
			</div><!-- end main -->
							
			<div class="sidebar content">


    
	  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3448.0961182763767!2d74.94350399999999!3d30.20580399999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3917329f6886aa4f%3A0x399d2c388a79fac3!2sChintamani+Sweets!5e0!3m2!1sen!2sin!4v1415353390635" width="420" height="300" frameborder="0" style="border:0"></iframe>
   
    <div id="map_canvas"></div>
		
				<div class="separator clear"></div>

				
				<div class="module">
					<h3>It's easy to find our shop!!!!</h3>

					<ol>
						<li>Reach New Bus Stand,Bathinda</li>
						<li>Our Shop is just behind the bus stand</li>
					
					</ol>
				</div>
				
				<div class="separator clear"></div>
				
				<div class="module"><h3>Parking</h3>
					<p>Can Park Anywhere :)</p>
				</div>

				
			</div><!-- end sidebar -->

			<div class="clear left content">
				<div class="separator"></div>

				<div class="small carte-footer">
					<b><p>ChintaMani Bakery<br>
                     Behind New Bus Stand,Bathinda</p></b>
				</div>
			</div>
			
			<div class="right content">
				<div class="separator"></div>
				
				<div class="small carte-footer">
					<form action="#" method="post" id="search-form">
						<div class="search-wrap">
							<input name="searchword" maxlength="50" class="hidevalue search-field inputbox" type="search" size="50" value="Search..." />
							<input type="submit" value="" class="search-button-image" onclick="this.form.searchword.focus();" />
						</div>
					</form>
				</div>
			</div>			
		</div><!-- end #content-block -->
		
		<div id="carte-bottom" class="clear wrap"></div>
	</div><!-- end #carte -->
	
		<footer id="footer" class="dark-zone">
				
			<div id="fmodules" class="wrap">

				<div class="module fmodule col-module col-module-first">
					 <p>Our social networks:</p>
						<ul class="social-links fade clearfix">

							<li class="facebook"><a class="icon32 facebook_32" href="#"></a></li>
							
						</ul>	
				</div>
				
				<div class="module fmodule col-module">

					<div class="module fmodule col-module col-module-last">
					
                    <div class="footer-left left">
						<h3>We accept all cards</h3>
						<p><img src="demo_images/credit-cards.png" class="left" style="margin: 0 15px 15px 0;" />
						No cash? No problem! You won't have to wash dishes.</p>
					</div>
				</div>
				
				<div class="module fmodule col-module">
					<div>
						<h3></h3>
						<nav class="clearfix">

							<ul class="menu">
								<li><a href="#"></a></li>
						
							</ul>
						</nav>

					</div>
				</div>
				
				
						
					</div>
                    	
				</div>
				
				<div class="clear"></div>
			</div> 
						
			<div id="footer-info">
				<div class="wrap relative">
					
					<div class="footer-left left">
						<div class="footer-left left">
							
                        
						
			
					</div>
										
					
				</div>
			</div><!-- end footer-info -->
			
		</footer><!-- end footer -->
	
	
	<script src="js/jquery.colorbox-min.js"></script>
	<script src="js/jquery.validity.pack.js"></script>

	<script src="js/jquery.nivo.slider.pack.js"></script>
	
	<script>
	jQuery(function(){
		captions();
		zebratables();
		hoverTables();
		pullquote();

		jQuery("a[rel*='lightbox']").colorbox({
			'opacity' : .5
		});

		jQuery.validity.setup({ outputMode:"modal" });
		
		var form = jQuery('form.form-validate');
		if( form.length > 0 ){
			// A general validation for forms
			form.validity(function(){
				jQuery('input.required').require();
				jQuery('textarea.required').require();
				jQuery('input[type="email"]').require().match('email');
				jQuery('input.required[type="url"]').require().match('url');
				jQuery('input[type="password"]').equal();
			});
		};
		userLinks();
		fades();
		inputValues();
	});
	
	jQuery(window).load(function(){
	
		jQuery('#slider').nivoSlider({
			effect : 			'fade',
			animSpeed : 		500, 	// Slide transition speed
			pauseTime : 		3000, 	// How long each slide will show
			captionOpacity : 	0.8, 	// Universal caption opacity
			prevText : 			'', 	// Prev directionNav text
			nextText : 			'', 	// Next directionNav text
			controlNav : 		false 	// 1,2,3... navigation
		});
	});
	</script>

</body>
</html>