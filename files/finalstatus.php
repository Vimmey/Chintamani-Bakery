<?php
	include('connM1.php');
	$roomid = $_POST['roomid'];
	$status=$_POST['status'];
	mysql_query("UPDATE info SET status='$status' WHERE info_id='$roomid'");
	header("location: vieworder.php");
?>