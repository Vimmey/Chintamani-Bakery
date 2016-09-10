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

function checkVal()
{ 
	var code = document.forms["form2"]["c_code"].value;
	var pname = document.forms["form2"]["c_name"].value;
	var price = document.forms["form2"]["price"].value;
 
if (isNaN(code)) 
{
alert("Enter Valid Code");
return false;
}
 
if (!isNaN(pname)) 
{
alert("Enter Valid Product Name");
return false;
 }
 if (isNaN(price)) 
{
alert("Enter Valid Price");
return false;
}
}


</script>
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
				<a href="index.html">
					Chintamani Bakery
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
						</li>
			
						<li class="current active"><a href="contact.php">Contact</a></li>
					</ul>
				</nav>
			</div>
			
		</div>
	</header>

	<div class="clear"></div>
	<div id="carte">
		<div id="carte-top" class="wrap"></div>
		<div id="content-block" class="wrap">

			
			
			<div id="main" class="content">

		
				<div id="contact-form-wrap" class="contact down-block">
                <?php
				include('connM1.php');
				  ?>
						<form action="add_prod1.php" method="post" enctype="multipart/form-data" name="form2" onSubmit="return checkVal()"></br></br>
                        <?php
$q1="select * from quickbuy1";
$r1=mysql_query($q1);
?>
   Choose Category : <select name="category" >
 <?php
while($row1=mysql_fetch_assoc($r1))
     {
?>
        
        <option value="<?php echo $row1['p_category']; ?>"><?php echo $row1['p_category']; ?></option>
  <?php
         
	 }
	 ?>
         </select>
         <br/><br/>
                
				

Product Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="c_code" size="30" value="" placeholder="Code" required/><br />
						
Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="c_name" size="30" value="" placeholder="Name" required/><br />

Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="price" size="30" value="" placeholder="Price" required /><br />

Image:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="image" value="" required>

						
						
						
						<br />
						<br />
						
						<button class="button validate" type="submit" name="submit">Add</button>

					</form>
                    
					

                      
				</div>
				
			</div><!-- end main -->
							
			

</body>
</html>