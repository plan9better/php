<?php
$in = readline();
$in = str_split($in);

$vowels = array("a", "i", "u", "e", "o", "A", "I", "U", "E", "O");

$res = 0;
foreach ($in as $letter) {
  if (in_array($letter, $vowels)) {
    $res++;
  }
}

echo $res;