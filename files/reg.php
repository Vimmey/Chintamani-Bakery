<?php
include('connM1.php');
$un=$_POST['uname'];
$pw=$_POST['pw'];
$nm=$_POST['nm'];
$mob=$_POST['mob'];
$em=$_POST['em']; 


$q="insert into login(u_name,u_pwd,name,mobile,email)values('$un','$pw','$nm','$mob','$em')";
if(mysql_query($q))
{
	echo "added";
//header("location:index.php");
}

?>