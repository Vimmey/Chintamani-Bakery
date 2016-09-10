<?php
$con=mysql_connect('mysql5.000webhost.com','a4666307_bakery1','chinta123');
if($con)
{
$db=mysql_select_db('a4666307_bakery',$con);
if($db)
{}
else
{
echo "db not found";
}
}
else
{
echo "connection not found";
}


#code 
?>