<?php
$input = readline();
$words = explode(" ", readline());
$toInsert = readline();

$pos = strpos($input, $words[0]);
$in1 = substr($input,0, $pos + strlen($words[0]));
$in2 = substr($input, $pos + strlen($words[0]));

echo($in1 . " " . $toInsert . $in2);

// $input = explode($words[0], $input);
// echo($input[0] . $toInsert . $input[1]);