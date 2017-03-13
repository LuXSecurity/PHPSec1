<?php
 class xss_protection{
  private function __construct(){}
  function encode($str){
   $r=str_replace("<","&lt;",$str);
   $r=str_replace(">","&gt;",$str);
   $r=str_replace("\'","&#036;",$str);
   $r=str_replace("\"","&quot;",$str);
   $r=str_replace("&","&amp;",$str);
   return $r;
  }
  function decode($str){
   $r=str_replace("&lt;","<",$str);
   $r=str_replace("&gt;",">",$str);
   $r=str_replace("&#036;","\'",$str);
   $r=str_replace("&quot;","\"",$str);
   $r=str_replace("&amp;","&",$str);
   return $r; 
  }
 }
?>

		
