<?php
$str1 = readline();
$str2 = readline();

$str1 = str_split($str1);
$str2 = str_split($str2);

for ($i = 0; $i < count($str1); $i++){
  if ($str1[$i] != $str2[$i]){
    echo($i);
    exit;
  }
}

echo "The strings are equal";