<style>
.text
{
	margin-top:30px;
	text-align:left;
	margin-left:519px;
	}
	.print
	{
		margin-top:20px;
		margin-left:450px;
	}
</style>


<?php
session_start();
include('connM1.php');
$oid=$_SESSION['rand'];
$q="select * from order1 o,info f where o.o_id='$oid' and f.o_id='$oid'";
$rs1=mysql_query($q);
?>
<a href="javascript:Clickheretoprint()" ><img src="img/Print.png" width="70" height="40"/></a>
<img src="img/logo30.JPG" width="350" class="print"/>
<?php
echo "Behind New Bus Stand,Bathinda";
echo "Contact No :9417172405";
echo "Email : chintamanibakery@gmail.com";
?>
<img src="img/thank-you-for-your-order.png" width="340" height="100" class="print"/>
<div id="print_content">
<div class="text">
<table border=1 align="left" bordercolor="#603" style="border:dotted #603" >
<tr>
<th width="58" style="border:3px solid #603;">Product Name</th>
<th width="58" style="border:3px solid  #603;">Quantity</th>
<th width="58" style="border:3px solid  #603;">Total</th>
</tr>
<?php
while($r=mysql_fetch_assoc($rs1))
{
$date=$r['date'];
$fname=$r['firstname'];
$lname=$r['lastname'];
$dadd=$r['delivery_address'];
$email=$r['email'];
$mbl=$r['mbl_no'];
$orderid=$r['o_id'];
$pmode=$r['payment_mode'];
?>

<tr>
<td style="border:3px solid  #603;"><?php echo $r['product_name'];?></td>
<td style="border:3px solid  #603;"><?php echo $r['quantity'];?></td>
<td style="border:3px solid  #603;"><?php echo $r['total'];?></td>
</tr>

<?php 
}
?>


<?php
echo "Date: ".$date."<br>";
echo "Name: ".$fname;
echo " ".$lname."<br>";
echo "Delivery Adress: ".$dadd."<br>";
echo "Email: ".$email."<br>";
echo "Contact-No: ".$mbl."<br>";
echo "Order_id: ".$orderid."<br>";
echo "Payment Method: ".$pmode."<br><br>";
echo "Your product will be delivered within 2-4 buisness day"."<br><br>";
?>

</table>
</div></div>
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,widtd=900, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Order Slip</title>'); 
   docprint.document.write('</head><body onLoad="self.print() " style="width: 900px; font-size:16px; font-family:arial;">');
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>