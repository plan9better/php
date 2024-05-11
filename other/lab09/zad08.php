<?php
$input = readline();
$del = (string)readline();

$input = str_ireplace(" " . $del, "", $input);
echo $input;
// 0.8 / 1 pkt
