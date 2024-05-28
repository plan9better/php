<?php

$filename = readline();

$fd = fopen("/tmp/".$filename, "w");

$data = readline();
fwrite($fd, $data);
fclose($fd);