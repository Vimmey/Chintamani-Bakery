<!DOCTYPE html>

<html lang="en-gb">

<head>
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
	<script>!window.jQuery && document.write('<script src="js/jquery.1.5.2.js"><\/script>')</script>

	

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	

	<title>Chintamani Bakery</title>
	
	

	<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/template.css" media="screen" />
	<link rel="stylesheet" href="css/colorbox.css" />
	<link rel="stylesheet" href="css/options.css" /> 
	
	

	<script src="js/scripts.js"></script>
	
	<script>	
		jQuery(function(){
			
			hideLoginForm();
			
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
                   <div class="make-me-btn1">
<a href="register.php"><img src="img/Register.png" width="130" height="30"></a>
            </div>
 
			 <div id="nav">

				<nav class="jquery-menu clearfix">
					<ul class="menu">
						<li><a href="index.php">Home</a></li>
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
				
				<article class="article">

						
					<h1 class="article-title styled-header">Welcome to our website</h1>

					<div class="article-body">
						<p><a class="thumbnail" href="img/bakery_shop.jpg" rel="lightbox[77]" title="Bakery Photo">
						<img class="left shadow" src="img/bakery_shop.jpg" alt="BakeryPhoto" width="350" height="117" /></a>
						ChintaMani Bakery is one of the famous Bakery in Bathinda,Punjab.</p>
						
						<br><h2>About our cuisine</h2>
						<p>We offer an exquisite range of mouth watering delicacies including Sweets, Salt and Spicy Namkeen, Seasonal confectionaries and Cakes for all Occasions. 
						
						<p><a class="make-me-btn" href="menu.php">Take a look at our menu!</a></p>
                        
                       <?php

include('connM1.php');
session_start();


        if(!isset($_POST['l']))
          {
			
          ?>
         
             <h1>Login</h1>
                <form action="" method="post">
                <input type="text" name="user" class="username" placeholder="Username" size="30px" required></br>
                <input type="password" name="password" class="password" placeholder="Password" size="30px" required></br>
              <button type="submit"  name="l">Login</button>
                </form>
              
		  <?php

}
if(isset($_POST['l']))
{
$unm=$_POST['user'];
$pw=$_POST['password'];
$q4="select * from login where u_name='$unm'";
$rs1=mysql_query($q4);
if($row=mysql_fetch_assoc($rs1))
{
    $u_type=$row['user_type'];
	if($u_type=="Admin")
	{
	$_SESSION['admin_logged_in']='true';
	$_SESSION['uid']=$row['u_id'];
	header('location:admin.php');
    }
    else if($u_type!="Admin")
	{
	$_SESSION['rand']=rand(10000,100000);
	$_SESSION['user_logged_in']='true';
	$_SESSION['uid']=$row['u_id'];
	header('location:user.php');
	}
    }
	else
	{
	echo "invalid user name or password";
	}
    } 
	?>
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

							<li class="facebook"><a class="icon32 facebook_32" href="www.facebook.com/chintamani.bakery"></a></li>
							
						</ul>	
				</div>
				
				<div class="module fmodule col-module">

					<div class="module fmodule col-module col-module-last">
					
                    <div class="footer-left left">
						
						No cash? No problem! You won't have to wash dishes.</p>
						<h3>We accept all cards</h3>
						
					</div>
				</div>
				
				<div class="module fmodule col-module">
					<div>
						<h3></h3>
						

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