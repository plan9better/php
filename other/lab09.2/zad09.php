<?php
$in = readline();
$n = readline();
$n = intval($n);

$in = strrev($in);
$in = str_split($in);

$vowels = array('a', 'i', 'u', 'e', 'o');
$res = "";

foreach ($in as $k => $v) {
  if(strlen($res) == $n){
    break;
  }
  if (in_array($v, $vowels)) {
    $res .= $v;
  }
}

echo strrev($res);

