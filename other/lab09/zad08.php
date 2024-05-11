<?php
$input = readline();
$del = (string)readline();

// echo(str_replace($del, "", $input));

$input = str_split($input);
$found = false;
for($i = 0; $i < count($input); $i++){
  if(count($input) - $i > strlen($del)){
    for($j = 0; $j < strlen($del); $j++){
      ($del[$j] == $input[$i]) ? $found = true : $found = false;
    }
  }
  if($found){
    for($j = 0; $j < strlen($del); $j++){
      $input[$i + $j] = 0;
    }
  }
}

for($i = 0; $i < count($input); $i++){
  // if($input[$i] != 0){
    print($input[$i]);
  // }
}

