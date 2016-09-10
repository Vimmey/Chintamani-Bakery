<?php
include('connM1.php');
$c_code=$_POST['c_code'];
$c_name=$_POST['c_name'];
$price=$_POST['price'];
$catg=$_POST['category'];
$p_img="img/".$_FILES['image']['name'];
			
					
   					  $a="insert into products(product_code,product_name,price,category,product_img_name) values('$c_code','$c_name','$price','$catg','$p_img');";
					  if(mysql_query($a))
					    {
						
					
                        header("location:quickbuy1.php");

                    
					
					}
					?>