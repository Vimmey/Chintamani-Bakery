<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("bakery") or die(mysql_error());
if(isset($_POST['submit']))
{
$query = $_POST['query'];
?>
<html>
<head>
<title><?php echo $query;?></title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
$min_length = 1;
if(strlen($query) >= $min_length)
{
$query = htmlspecialchars($query);
$query = mysql_real_escape_string($query);
echo "<table border='0' width='300' align='center' cellpadding='1' cellspacing='1'>";
echo "<tr align='center' bgcolor='#002C40' style='color:#FFF'>
<td height='35px' width='150px'>Title</td> <td>Author</td>

</tr>";
$raw_results =

mysql_query("SELECT * FROM gallery WHERE (`g_name` LIKE '%".$query."%')");
if(mysql_num_rows($raw_results) > 0)
{
while($results = mysql_fetch_array($raw_results))
{
echo "<tr align='center' bgcolor='#0f7ea3'>

<td height='25px'>".$results['title']."</td> <td>".$results['text']."</td>

</tr>" ;
}

}
else{
echo "<tr align='center' bgcolor='#6C0000'>

<td colspan='2' height='25px'>No results</td><tr>";
echo "</table>";
}
}
else{
echo "Minimum length is ".$min_length;
}}

?>
</body>
</html> 