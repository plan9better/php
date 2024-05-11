<?php
$a = explode(" ", readline());
$b = explode(" ", readline());

$isSubset = true;
foreach($b as $k => $v) {
  if(!in_array($v, $a)){
    $isSubset = false;
    break;
  }
}

echo(($isSubset) ? "TAK" : "NIE");