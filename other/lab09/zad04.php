<?php
$input = readline();
$toReplace = readline();
$replaceWith = readline();

echo str_replace($toReplace, $replaceWith, $input);