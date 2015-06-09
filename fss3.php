<?php
include 'Snoopy.class.php';
$snoopy=new snoopy;

$snoopy->fetch("http://law.fss.or.kr/fss/lmx/law_new/law_new_list.jsp?keyword=%BA%B8%C7%E8&x=0&y=0");
$t=explode("<!-- paging -->",$snoopy->results);
$b=explode("brdComList",$t[0]);
preg_match_all("<a href=\"(.*?)\">",$b[1],$o);

foreach( $o[1] as &$value){
  $snoopy->fetch("http://law.fss.or.kr/fss/lmx/law_new/".$value);
  $t=explode("btnR lineh",$snoopy->results);
  $r=explode("<!-- contents -->",$t[0]);
  print preg_replace("/[.]{2}/","http://law.fss.or.kr/fss/lmx",$r[1]);
}
?>

