
<?php
session_start();

include('connM1.php');

if(!isset($_SESSION['user_logged_in']))
{
	echo "Please Sign in!"; ?> <a href="index.php">Sign in!</a>
    <?php
}
	
else
{
$pid=$_GET['pid'];
$pname=$_GET['pname'];
$uid1=$_SESSION['uid'];
$rnd=$_SESSION['rand'];
$q3="insert into cart_items(u_id,o_id,product_name,product_code,quantity)values('$uid1','$rnd','$pname','$pid',1)";
mysql_query($q3);
header("location:viewcart1.php");
}


?>



