<?php
$in = readline();

$inregex = preg_split('/\D/', $in);
echo trim(implode(' ', $inregex));
// 0.8 / 1