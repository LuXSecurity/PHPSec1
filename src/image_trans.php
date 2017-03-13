<?php
 class image_trans{
  private $path='';
  private function __construct($fpath){
   $this->$path=$fpath;
  }
  private function validate(){
   $arr=explode(".",$this->path);
   $n=count($arr);
   $ext=$arr[$n];
   
   if($ext !== 'jpg' ||
      $ext !== 'jpeg' ||
      $ext !== 'png' ||
      $ext !== 'bmp' ||
      $ext !== 'gif'){
    die 'Invalid image file!';
   }
  }
  private function setHeader(){
   $arr=explode(".",$this->path);
   $n=count($arr);
   $ext=$arr[$n];
   $s=filesize($this->path);
  
   header('Content-type: image/'.$ext);
   header('Content-length: '.$s);
  }
  private function open(){
   $f=fopen($this->path,'rb');
   $s=filesize($this->path);
   $d=fread($f,$s);
   
   echo $d;
  }
  private function view(){
   $this->validate();
   $this->setHeader();
   $this->open();
  }
 }
?>

		
