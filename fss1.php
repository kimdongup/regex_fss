<?php
include 'Snoopy.class.php';
$snoopy=new snoopy;
$snoopy->fetch("http://www.fss.or.kr/fss/kr/promo/schedule_month.jsp");
$txt=$snoopy->results;
$rex="/[0-9]{2}/";
$rex="/[.\s]*?\<a href=\"\/fss\/kr\/.*?title=\"(.*?)\"\>[^0-9]{2}[\D]*?/";
preg_match_all($rex,$txt,$o);
foreach( $o[1] as &$value){
print $value."<br>";
}
?>

