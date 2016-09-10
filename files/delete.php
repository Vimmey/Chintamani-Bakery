<?php
session_start();
include('connM1.php');
$pid=$_SESSION['pid'];
$q="delete from products where product_code=$pid";
if(mysql_query($q))
   header('location:delete_prod.php');
else
         echo "error";
?>
    