<?php
  $nums = readline();
  $nums = explode(" ", $nums);

  $num = 0;
  fscanf(STDIN, "%d", $num);
  $isInArray = in_array($num, $nums);
  if( $isInArray ){
    print("Liczba znajduje się w liście");
  } else {
    print("Liczba nie znajduje się w liście");
  }
  