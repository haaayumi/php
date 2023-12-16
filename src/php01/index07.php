<?php
$people = [
  ["Taro","25歳","men"],
  ["Jiro","20歳","men"],
  ["hanako","16歳","women"]
];

foreach ($people as $value) {
  echo $value[0]."(".$value[1],$value[2].")";
  echo "<br />";
}