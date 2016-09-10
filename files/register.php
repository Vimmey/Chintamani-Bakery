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

	<script language="javascript">

function checkEmail()
{ 
	var email = document.forms["form1"]["em"].value;
	var mob1 = document.forms["form1"]["mob"].value;
	var nm1 = document.forms["form1"]["nm"].value;
   var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!re.test(email))
	{
	alert("invalaid Email");
	return false;
	}
	 if(email.length<16)
	 {
		 alert("Inavalid Email");
		 return false;
	 }
	 if (isNaN(mob1)) {
 alert("Enter Valid No:");
 
  
  return false;
 }
 if (mob1.length<10)
           {
                alert("Enter Valid Mobile No:");
                return false;
           }
		   if (!isNaN(nm1)) {
 alert("Enter Valid Name");
 
  
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
<?php
session_start();
include('connM1.php');

?>
<form method="post" action="reg.php" name= "form1" onSubmit="return checkEmail()">
User Name:&nbsp&nbsp&nbsp&nbsp&nbsp;<input type="text" name="uname" value=""><br></br>
Password:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type="password" name="pw" value=""><br><br>
    Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type="text" name="nm" value=""><br></br>
  Mobile:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type="text" name="mob" id="mob1" value=""><br></br>
   Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type="text" name="em" id="em1" value="" ><br></br>
   
<button class="button validate" type="submit" name="submit">Submit</button>
</form>

</div>
				
			</div><!-- end main -->
							
			

</body>
</html>