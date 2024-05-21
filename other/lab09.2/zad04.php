<?php
$in = readline();
$in = explode(".", $in);
foreach($in as $k => $v){
  $in[$k] = ltrim($in[$k], "0");
}
echo(implode(".", $in));