<?php
$in = readline();
// $in = escapeshellarg($in);
// $in = escapeshellcmd($in);
$in = htmlspecialchars($in, ENT_QUOTES);
echo $in;