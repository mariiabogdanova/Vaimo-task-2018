<?php

// $products = array(
// "Bag",
// "Belt",
// "Snickers",
// "Shoes",
// "Sundress",
// "Sweater",
// "Sweatpants",
// "Jeans",
// "Coat",
// "Shirt",
// "Dress",
// "Hat");

sort($products);

foreach ($products as $key => $val) {
echo "products[" . $key . "] = " . $val . "\n";
}

?>