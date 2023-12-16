<?php
function Answer($bottom, $height, $width, $border_top, $border_bottom){
  $triangular = ($bottom * $height)/2;
  return $triangular;

  $square = ($width * $height);
  return $square;

  $trapezoid = ($border-top + $border-bottom)* $height / 2;
  return $trapezoid;

}
  $total = Answer(10,3,4,6,2);
  echo $total;
  echo "<br />";
