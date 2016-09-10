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
	<meta name="keywords" content="restaurant, cafe, template, coffee shop, Chintamani Bakeryi" />
	<meta name="rights" content="Demente Design" />
	<meta name="language" content="en-GB" />
	<meta name="title" content="Welcome to ChintaMani Sweet Shop" />
	<meta name="description" content="Chintamani Bakery." />

	<title>ChintaMani Bakery - Cakes</title>
	
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
	
	<script>	
		jQuery(function(){

			jQuery("#content-block").preloader({
				delay: 100
			});
						
			jQuery('.jquery-menu').enhanceMenu({
				effect: 'slide',
				duration: 200,
				delayIn: 100,
				delayOut: 100			
			});
			
		});
	</script>
	
</head>

<!--[if IE 7 ]>    <body class="ie7 ie"> <![endif]--> 
<!--[if IE 8 ]>    <body class="ie8 ie"> <![endif]--> 
<!--[if !IE]><!--> <body> <!--<![endif]-->

	<div id="headercloth"></div>

	<header id="header" class="clearfix">
		<div class="wrap">
	
			<div id="logo" class="left">
				<a href="index.php">
					ChintaMani bakery
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
								<li><a href="combo.php">Combos</a></li>

								<li><a href="season_special.php">Season Special</a></li>
								<li><a href="cakes.php">Cakes</a></li>
								<li><a href="gifts.php">Gifts</a></li>
                                <li><a href="namkeen.php">Namkeen</a></li>
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
				
				<div class="dmtmenu dmtmenu-category">
<?php 
session_start();
include('connM1.php');
$ptype=$_POST['ptype'];
?>

<form method="get" action="info1.php">
<input type="hidden" name="ptype" value="<?php echo $ptype?>;" />


First Name: &nbsp&nbsp;<input type="text" name="fname"  value=""/><br></br>

Last Name :&nbsp&nbsp; <input type="text" name="lname"  value=""/><br></br>

Pin Code : &nbsp&nbsp&nbsp&nbsp&nbsp;<input type="text" name="pin" value="" /><br></br>

Contact No : &nbsp&nbsp;<input type="text" name="cnum"  value="" /><br></br>

Email : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type="text" name="email" value="" /><br></br>

City : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type="text" name="city" value=""/><br></br>

Delivery Address : <input type="text" name="daddress" value=""/><br></br>
<button type="submit" name="submit">submit</button>
</form>

            </div>



					
          
				<div class="separator"></div>

				<div class="small carte-footer">
					<b><p>ChintaMani Bakery<br>
                     Behind New Bus Stand,Bathinda</p></b>
				</div>
			</div>
            </div>
            </div>
            
	</div><!-- end #carte -->
			
			<div class="right content">
				<div class="separator"></div>
				
				
				</div>
			</div>			
		</div><!-- end #content-block -->
        </div>
        
     
        
		
	
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