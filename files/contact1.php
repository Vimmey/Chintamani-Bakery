<?php
include('connM1.php');
$name=$_POST['name'];
$email=$_POST['email'];
$sub=$_POST['subject'];
$msg=$_POST['message'];
			 
 $a="insert into contact(cu_name,cu_email,cu_subj,cu_msg) values('$name','$email','$sub','$msg')";
 if(mysql_query($a))
 {
							
?>
                        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                        <a href="#" style="color:#FFF;"><h1>Submitted Your Message..............</h1></a>
                        <br/><br/>
                      <?php
					  header("location:contact.php");
					
					}
					?>