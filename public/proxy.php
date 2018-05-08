<?php

if (isset($_POST)) {
  $minorRev = 99;
  $url = 'http://frontend-candidate.vaimo.com/mariia.bogdanova/public/cart/get';

  // echo json_encode(file_get_contents($url));
  //didn't use json encode here because it messed up the file format, I converted it to json format in index.js put_data

  echo file_get_contents($url);
 }

 ?>