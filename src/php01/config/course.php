<?php
  $company = htmlspecialchars($_POST['company'], ENT_QUOTES);
print "会社名は、" . $company . '<br />';
  $product = htmlspecialchars($_POST['product'], ENT_QUOTES);
print "ご希望の商品は、" . $product . '<br />';
  $number = htmlspecialchars($_POST['number'], ENT_QUOTES);
print "注文数は、" . $number;
