<?php
 function read_url($url){
  $ch=curl_init();
  curl_setopt($ch,CURLOPT_URL,$url);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
  curl_setopt($ch,CURLOPT_USERAGENT,"Lux Security Agent/1.1");
  $output=curl_exec($ch);

  curl_close($ch);
  return $output;
 }
?>
