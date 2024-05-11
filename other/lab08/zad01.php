<?php
  $arr = range(200, 250, 4);
  echo($arr[0]);
  for($i = 1; $i < count($arr); $i++){
    echo("," . $arr[$i]);
  }
?>