<?php
$in = readline();

$in = strtolower($in);

$in = explode(" ", $in);

foreach($in as $word){
  $word = trim($word);
  $wordarr = str_split($word);
  if(in_array("g", $wordarr) && $wordarr[0] != 'g' && $wordarr[count($wordarr)-1] != 'g'){
    echo("True");
    exit;
  }
  
}

echo("False");
// 0.6 / 1