<?php
$arr = readline();
$arr = explode(" ", $arr);

$idx = 0;
fscanf(STDIN, "%d", $idx);
if($idx < 0 || $idx > count($arr)){
  echo("BŁĄD");
} else{
  array_splice($arr, $idx, 0, "$");
  echo(implode(" ", $arr));
}
