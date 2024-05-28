<?php
function removeFilesOverLimit($directory, $limit){
  $files = scandir($directory);
  $counter = 0;
  foreach ($files as $v){
    if(filesize($v) > $limit){
      unlink($v);
      $counter += 1;
    } 
  }
  return $counter;
}