<?php
for ($i = 1; $i <= 5; $i++){
  $s = "";
  for($j = 1; $j <= 5;$j++){
    $s = ($s .= "●");
  }
  echo $s;
  echo "<br />";
}