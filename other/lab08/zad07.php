<?php
$nums = readline();
$nums = explode(" ", $nums);

$nums = array_map("octdec", $nums);
$nums = array_map("dechex", $nums);

function func($num){
  return "0x" . $num;
};

$nums = array_map("func", $nums);

echo(implode(" ", $nums));