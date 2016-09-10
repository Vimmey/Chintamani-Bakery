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
				
				<div class="dmtmenu dmtmenu-category">
				
					<h1>Cakes </h1>

						
					<div class="category-desc clearfix">
						<p> Cake is a form of bread or bread-like food. In its modern forms, it is typically a sweet baked dessert. Modern cake, especially layer cakes, normally contain a combination of flour, sugar, eggs, and butter or oil, with some varieties also requiring liquid (typically milk or water) and leavening agents (such as yeast or baking powder).</p>
					</div>
<?php 
session_start();
include('connM.php');
$q="select * from products where priority='2'";
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
									<li><a href="menu.php">Sweets</a></li>
									<li><a href="combo.php">Combos</a></li>
									<li><a href="season_special.php">Season Special</a></li>
								</ul>

							</div>
						</div>
						<div class="cols-2 col-last">
							<div>
								<ul class="menu">
									<li><a href="cakes.php">Cakes</a></li>
									<li><a href="gifts.php">Gifts</a></li>
                                    <li><a href="namkeen.php">Namkeen</a></li>
								</ul>

							</div>
						</div>
					</nav>
				</div>
            <div class="separator clear"></div>
				
				<div class="module">
					<h3>Chef's recommendation : Eggless Black Forest Cake</h3>
                    
					<p><a class="thumbnail" href="img/cakes/eggless_blackforest1.jpg" rel="lightbox[0]" title="Eggless Black Forest Cake">

						<img class="caption right" src="img/cakes/eggless_blackforest1.jpg" border="0" title="" width="165" height="109" /></a>
					<h3>Ingredients</h3>
                    • 125 gms Butter<br>
•	1 tsp Baking Powder<br>
•	¼ cup Cherries m<br>
•	½ cup grated Chocolate<br>
•	4 tbsp Cocoa Powder & 1 tsp Cream<br>
•	200 ml aerated Cola Drink<br>
•	225 gms Flour<br>
•	400 gms sweetened condensed Milk<br><br>

<h3>Method</h3>
1.	Take a bowl and mix the butter and sugar well.<br>
2.	Now add all the dry ingredients along with cola drink and mix.<br>
3.	Transfer the mixture in a greased plate and cook in an oven on for 3 minutes at high.<br>
4.	Turn the power off and allow it to stand for 5 minutes on the same oven.<br>
5.	Allow the cake to cool.<br>
6.	Slit the cake horizontally.<br>
7.	Take a bowl and whip the cream.<br>
8.	Sandwich the two layers with the cream.<br>
9.	Apply cherries and grated chocolates at the top.<br>


                    
                    </div>
				
			</div><!-- end sidebar -->
						
						
			<div class="clear left content">
				<div class="separator"></div>

				<div class="small carte-footer">
					<b><p>ChintamMani Sweet Shop<br>
                     Bus Stand Backside,Bhatinda</p></b>
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