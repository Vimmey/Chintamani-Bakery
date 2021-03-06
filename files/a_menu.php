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
	<meta name="keywords" content="restaurant, cafe, template, coffee shop, te contei" />
	<meta name="rights" content="Demente Design" />
	<meta name="language" content="en-GB" />
	<meta name="title" content="Welcome to ChintaMani Bakery" />
	<meta name="description" content="ChintaMani Bakery"." />

	<title>ChintaMani Bakery - Menu</title>
	
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
						<li class="parent"><a href="a_menu.php">Menu</a>
							<ul>
								<li><a href="a_menu.php">Sweets</a></li>
                                <li><a href="a_cakes.php">Cakes</a></li>
                                <li><a href="a_namkeen.php">Namkeen</a></li>
								<li><a href="a_season_special.php">Season Special</a></li>
								
								<li><a href="a_gifts.php">Gifts</a></li>
                                
							</ul>
						</li>
						<li><a href="a_quickbuy1.php">Quick Buy</a></li>	
						
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
				
					<h1>Sweets</h1>

						
					<div class="category-desc clearfix">
						<p>In India's diverse languages, sweets are called by numerous names, one common name being Mithai. They include sugar, and a vast array of ingredients such as different flours, milk, milk solids, fermented foods, root vegetables, raw and roasted seeds, seasonal fruits, fruit pastes and dry fruits</p>
					</div>
<?php 
session_start();
include('connM.php');
$q="select * from products where priority='1'";
$rs1=mysql_query($q);
while($r=mysql_fetch_assoc($rs1))
{
?>
					<table class="fulltable">
                    <tr class="dmtmenu-item">
							<td>

								<h5><span>
								<a rel="lightbox[1]" href="<?php echo $r['product_img_name'];?>" title="<?php echo $r['product_name'];?>">
									<img src="images/eye.png"class="icon"/><?php echo $r['product_name'];?></a></span></h5>
								<details class="small">

									<p><?php echo $r['detail'];?></p>
								</details>
							</td>
							<td class="dmtmenu-price"><?php echo "Rs. " .$r['price']." per kg";?></td>
						</tr>
					
						
                        
					</table>
					<?php
}

?>
				</div>
				
			</div><!-- end main -->
	
			<div class="sidebar content">

				<div class="module">
					<h3>Choose a Menu</h3>
					<nav class="clearfix">

						<div class="cols-2 col-first">
							<div>
								<ul class="menu">
									<li><a href="#">Sweets</a></li>
									
									<li><a href="a_season_special.php">Season Special</a></li>
								</ul>

							</div>
						</div>
						<div class="cols-2 col-last">
							<div>
								<ul class="menu">
									<li><a href="a_cakes.php">Cakes</a></li>
									<li><a href="a_gifts.php">Gifts</a></li>
                                    <li><a href="a_namkeen.php">Namkeen</a></li>
								</ul>

							</div>
						</div>
					</nav>
				</div>
				
				<div class="separator clear"></div>
				
				<div class="module">
					<h3>Chef's recommendation : Chocolate Burfi</h3>
                    
					<p><a class="thumbnail" href="img/chocolate_burfi.jpg" rel="lightbox[0]" title="Maecenas a purus risus">

						<img class="caption right" src="img/Sweets/chocolate_burfi.jpg" border="0" title="" width="165" height="109" /></a>
					<h3>Ingredients</h3>
•	3 tsp Cocoa Powder<br>
•	3/4 cup All Purpose Flour<br>
•	6 tsp Ghee and 3/4 cup Water<br>
•	3-1/2 cups Condensed Milk<br>
•	3/4 cup Chopped Cashew nuts<br>
•	4-1/2 cups Sugar<br></p>
<h3>Method</h3>
1.	Heat a heavy bottomed skillet and add ghee in it.<br>
2.	Now fry maida in ghee.<br>
3.	Dissolve sugar in water taken in a pot to make a sugar syrup.<br>
4.	Dissolve the cocoa powder in condensed milk heated on low flame in a pan and keep it aside.<br>
5.	Mix all ingredients together except cashew nuts and cocoa powder and stir continuously.<br>
6.	When the mixture becomes thick, add cashew nuts and mix properly.<br>
7.	Pour 3/4 portion of it into a greased plate when froth appears in the mixture.<br>
8.	Now mix the dissolved cocoa powder with the rest of mixture .<br>
9.	Spread this as a top layer on the mixture spread on the greased plate.<br>
10.	Allow it to cool and cut into squares.<br>
11.	Chocolate Burfi is ready to be sered.<br>
</p>
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
							<li class="twitter"><a class="icon32 twitter_32" href="#"></a></li>
							<li class="youtube"><a class="icon32 youtube_32" href="#"></a></li>
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
			</div><!-- end fmodules -->
						
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