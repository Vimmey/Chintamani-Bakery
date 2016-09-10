<style>
#resultTable th 
{
background: #CAE8EA;
border-bottom: 1px solid #C1DAD7;
border-right: 1px solid #C1DAD7;
border-top: 1px solid #C1DAD7;												
}
											
#resultTable td {
background:#C1DAD7;
border-bottom: 1px solid #c1dad7;
border-right: 1px solid #C1DAD7;
padding: 3px 3px 3px 6px;
font: normal 11px "Trebuchet MS",Verdana,Arial,Helvetica,sans-serif;
}
</style>											
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Orders</title>	
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
 <!-- <script src="lib/jquery.js" type="text/javascript"></script>-->
   <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
  
</head>
										
<?php
include('connM1.php');
$q="select * from order1 o,info f where o.o_id=f.o_id";
$rt=mysql_query($q);
	?>
	<table border=1 cellpadding="1" cellspacing="1" id="resultTable">
				
					<tr>
						<th  style="border-left: 1px solid #C1DAD7"> Order Number </th>
						<th> Name </th>
						<th> Contact </th>
						<th> Email </th>
						<th> Delivery Address </th>
                        <th> Product Name </th>
                        <th> Total </th>
						<th> Status </th>
						<th> Payment Method</th>
                        <th>Action</th>
					</tr>
				
				
             
               <?php
               while($row=mysql_fetch_assoc($rt))
                {
					?>
                      <tr>
<td style="border:1px solid #999999;"><?php echo $row['o_id'];?></td>
<td style="border:1px solid #999999;"><?php echo $row['firstname']." ";echo $row['lastname'];?></td>
<td style="border:1px solid #999999;"><?php echo $row['mbl_no'];?></td>
<td style="border:1px solid #999999;"><?php echo $row['email'];?></td>
<td style="border:1px solid #999999;"><?php echo $row['delivery_address'];?></td>
<td style="border:1px solid #999999;"><?php echo $row['product_name'];?></td>
<td style="border:1px solid #999999;"><?php echo $row['total'];?></td>
<td style="border:1px solid #999999;"><?php echo $row['status'];?></td>
<td style="border:1px solid #999999;"><?php echo $row['payment_mode'];?></td>
<td style="border:1px solid #999999;"><a rel="facebox" href="editstatus.php?id=<?php echo $row['info_id']?>;">edit</a></td>
</tr>

<?php
}
?>
</table>