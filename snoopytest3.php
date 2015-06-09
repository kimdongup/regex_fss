<?php
include 'Snoopy.class.php'; 
$snoopy=new snoopy; 
$snoopy->fetch("http://www.daum.net");
$t=explode("<!--   // ctsWrap -->",$snoopy->results); 
$r=explode("<!-- // schWrap -->",$t[0]);
echo $r[1]; 
?>
