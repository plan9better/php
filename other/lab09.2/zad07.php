<?php
$in = readline();
$in = str_split($in);

$in = array_filter($in, function($ch){
  if ($ch == ' ' || $ch == '\t' || $ch == '\n'){
    return false;
  }
  return true;
});
echo implode('', $in);