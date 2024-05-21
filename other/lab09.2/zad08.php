<?php
$in = readline();

$in = str_split($in);

$inside = false;
$res = "";
foreach ($in as $char) {
  if($inside){
    if(in_array($char, array('}', ']', ')'))){
      break;
    } else{
      $res .= $char;
    }
  }
  if(in_array($char, array('{', '(', '['))){
    $inside = true;
  }
}

echo $res;