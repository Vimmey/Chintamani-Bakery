<?php
include('connM1.php');

$qty=$_POST['qnty'];
$cid=$_POST['cid'];
$q="update cart_items set quantity='$qty' where cart_id='$cid'";
if(mysql_query($q));
header("location:viewcart1.php");
?>