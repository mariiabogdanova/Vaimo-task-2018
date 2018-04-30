<?php

if (isset($_POST)) {
  $minorRev = 99;
  $url = 'http://frontend-candidate.vaimo.com/mariia.bogdanova/public/cart/get';
  echo json_encode(file_get_contents($url));
 }

 ?>