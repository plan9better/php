<?php
  $nums = readline();
  $nums = explode(" ", $nums);
  // convert string numbers to ints
  $nums = array_map("intval", $nums);
  printf("%d", array_sum($nums));
  