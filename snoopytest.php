<?php
include 'Snoopy.class.php';
$snoopy=new snoopy;
$snoopy->fetch("http://kimdongup.net/php/phone.txt");
$txt=$snoopy->results;
$rex="/[0-9]{3}-[0-9]{4}-[0-9]{4}/";
preg_match_all($rex,$txt,$o);
print_r($o);
?>
