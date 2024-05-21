<?php
$in = readline();
$in = str_split($in);
foreach( $in as $char){
  if(!ctype_lower( $char ) && $char != "_"){
    echo("False");
    exit;
  }
}

echo("True");