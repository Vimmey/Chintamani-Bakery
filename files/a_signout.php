<?php
session_start();
if(isset($_SESSION['admin_logged_in'])){



session_unset();
session_destroy();
header('location:index.php');




 } else { 
header('location:index.php');
 } ?>