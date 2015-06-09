<?php
include 'Snoopy.class.php';
$snoopy=new snoopy;
$snoopy->fetch("http://daum.net");
$txt=$snoopy->results;
print_r($txt);
?>

