<?php
session_start();
include('connM1.php');
$fname=$_GET['fname'];
$lname=$_GET['lname'];
$pin=$_GET['pin'];
$email=$_GET['email'];
$cnum=$_GET['cnum'];
$daddress=$_GET['daddress'];
$city=$_GET['city'];
$pmethod=$_GET['ptype'];
$uid=$_SESSION['uid'];
$total=$_SESSION['total'];
$order=$_SESSION['rand'];
$status='Pending';
$dd=Date('d:m:y');
$q="insert into info(u_id,firstname,lastname,city,pincode,delivery_address,email,mbl_no,total,status,o_id,date,payment_mode)values('$uid','$fname','$lname','$city','$pin','$daddress','$email','$cnum','$total','$status','$order','$dd','$pmethod')";
if(mysql_query($q))
{
$q1="select * from cart_items where o_id='$order'";
$rs=mysql_query($q1);
while($row=mysql_fetch_assoc($rs))
{
$p_code=$row['product_code'];
$qnty=$row['quantity'];
$pname1=$row['product_name'];
$q3="insert into order1(u_id,o_id,product_name,product_code,quantity,total)values('$uid','$order','$pname1','$p_code','$qnty','$total')";
if(mysql_query($q3))
{
	 $q4 ="truncate cart_items";
 mysql_query($q4);
}
else
{
	echo mysql_errno($con);
	}
}
header("location:print.php");
}
else
{ echo mysql_errno();
}
?>