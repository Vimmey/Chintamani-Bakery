<html>
<head>
<script>
function showHint(str) {
  if (str.length==0) { 
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","search.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>
<?php

include('connM.php');
session_start();


        if(!isset($_POST['l']))
          {
          ?>

<p><b>Search</b></p>
<form> 
Search <input type="text" onkeyup="showHint(this.value)">
</form>
<p>Suggestions: <span id="txtHint"></span></p>
<?php
		  }
		  ?>
</body>
</html>