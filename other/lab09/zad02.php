<?php
$input = readline();
$input = chunk_split($input,2, ":");
$input = trim($input, ":");
echo($input);