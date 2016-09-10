<?php

$a[]="Balushahi";
$a[]="Rasgulla";
$a[]="Gulab Jamun";
$a[]="Phirni";
$a[]="chocolate_burfi";
$a[]="jalebi";
$a[]="kaju katli";
$a[]="kalakand";
$a[]="khoya barfi";
$a[]="Motichoor laddu";
$a[]="Rasmalai";


$q=$_REQUEST["q"]; $hint="";

if ($q !== "") {
  $q=strtolower($q); $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name,0,$len))) {
      if ($hint==="") {
        $hint=$name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

echo $hint==="" ? "no suggestion" : $hint;
?>