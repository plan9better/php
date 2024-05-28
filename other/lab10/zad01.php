<?php

$filename = readline();

$fd = fopen("/tmp/".$filename, "w");

if($fd){
  echo("True");
} else {
  echo("False");
}
