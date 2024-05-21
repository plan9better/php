<?php

$in = readline();
$split = strstr($in,".");
if($split == false){
  $ret = strlen(strstr($in,","));
  if ($ret == 0){
    echo 0;
  }else{
    echo $ret-1;
  }
} else {
  $ret = strlen($split);
  if ($ret == 0){
    echo 0;
  }else{
    echo $ret-1;
  }
}