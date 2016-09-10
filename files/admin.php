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
	<meta name="keywords" content="restaurant, cafe, template, coffee shop, Chintamani Bakery" />
	<meta name="rights" content="Demente Design" />
	<meta name="language" content="en-GB" />
	<meta name="title" content="Welcome to Chintamani Bakery" />
	<meta name="description" content="Chintamani Bakery." />

	<title>Chintamani Bakery</title>
	
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

	
	
</head>

<!--[if IE 7 ]>    <body class="ie7 ie"> <![endif]--> 
<!--[if IE 8 ]>    <body class="ie8 ie"> <![endif]--> 
<!--[if !IE]><!--> <body> <!--<![endif]-->

	<div id="headercloth"></div>

	<header id="header" class="clearfix">

		<div class="wrap">
	
			<div id="logo" class="left">
				<a href="index.php">
					ChintaMani Bakery
					<img src="img/logo30.JPG" alt="ChintaMani Bakery" />
                    <img src="img/tag3.JPG" alt="Love at First Bite"/>
				</a>
               
			</div>
            
            <form method="post" action="delete_prod.php">
            <button type="submit" name="del" style="margin-left:770px; margin-top:-25px;height:30px;width:170px;">Delete Product</button>
           </form>
           <form method="post" action="add_prod.php">
           <button type="submit" name="add" style="margin-left:600px; margin-top:-75px; height:30px;width:150px;">Add Product</button>
           <?php
		   include('connM1.php');
		   session_start();
		   $uid=$_SESSION['uid'];
           $q="select * from login where u_id=$uid";
		   $rs=mysql_query($q);
		   if($row=mysql_fetch_assoc($rs))
{
		   ?>
          
            <p style="margin-left:735px;margin-top:-40px;font-style:italic;font-size:large;color:#CFF;text-shadow:3px 3px #C66">Welcome  <?php echo $row['name'];}?></p> 

 <div class="make-me-btn1">
             <a href="signout.php"> <img src="img/logout1.png" class="sign" width="130" height="30"></a> 
             </div>
             			 <div id="nav">
				<nav class="jquery-menu clearfix">
					<ul class="menu">
						<li><a href="index.php">Home</a></li>
						<li><a href="a_quickbuy1.php">Quick Buy</a></li>	
                        <li><a href="vieworder.php">View Orders</a></li>
					
			
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
				
				<article class="article">

						
					<h1 class="article-title styled-header">Welcome to our website</h1>

					<div class="article-body">
						<p><a class="thumbnail" href="img/bakery_shop.jpg" rel="lightbox[77]" title="Bakery Photo">
						<img class="left shadow" src="img/bakery_shop.jpg" alt="BakeryPhoto" width="350" height="117" /></a>
						ChintaMani Bakery is one of the famous Bakery in Bathinda,Punjab.</p>
						
						<br><h2>About our cuisine</h2>
						<p>We offer an exquisite range of mouth watering delicacies including Sweets, Salt and Spicy Namkeen, Seasonal confectionaries and Cakes for all Occasions. 
						
						<p><a class="make-me-btn" href="menu.php">Take a look at our menu!</a></p>
                        
                     
					</div>

				</article>
				
			</div><!-- end main -->
	
			<div class="sidebar content">
				<div class="module ">
					<h3>Our specialities</h3>

					
					<div id="slider" class="nivoSlider">
						<img src="img/others/kesar_rasmalai.jpg" title="#caption1" alt="" />
						<img src="img/sweets/kalakand.jpg" title="#caption2" alt="" />
						<a href="menu.html"><img src="img/mithai4.jpg" title="#caption3" alt="" /></a>
						<img src="img/pede.jpg" title="#caption4" alt="" />
					</div>
					

					<div id="caption1" class="nivo-html-caption">
						<h4><a href="#">RasMalai</a></h4>

						<p>An ultimate sweet dish meant to be eaten in summers as it provides relief from the heat.
                        </p>
					</div>
					<div id="caption2" class="nivo-html-caption">
						<h4><a href="#">Kalakand</a></h4>
						<p>It is widely prepared during Janamashtami and Rakshabandhan and it is also considered a special sweet-dish during saawan </p>
					</div>
					<div id="caption3" class="nivo-html-caption">

						<h4><a href="#">Combos</a></h4>
						<p>Combos of namkeen and sweets</p>
					</div>
					<div id="caption4" class="nivo-html-caption">
						<h4><a href="#">Pede</a></h4>
						<p>Designer sweets balls</p>
					</div>

				</div>
					
				<div class="separator clear"></div>
				
				<div class="module ">
					<h3><span class="ribbon">Opening hours</span></h3>
					<table>
						<tbody>
							<tr>
								<td>Monday - Friday:</td>

								<td><strong>7:00am - 8:00pm</strong></td>
							</tr>
							<tr>
								<td>Weekends:</td>
								<td><strong>8:00am - 10:00pm</strong></td>
							</tr>
						</tbody>

					</table>
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
					<form action="search.php" method="post" id="search-form">
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