<?php
$nums1 = explode(" ", readline());
$nums2 = explode(" ", readline());

foreach ($nums1 as $key => $value) {
  if(!in_array($value, $nums2)) {
    $nums2[] = $value;
  }
}

sort($nums2);
echo(implode(" ", $nums2));