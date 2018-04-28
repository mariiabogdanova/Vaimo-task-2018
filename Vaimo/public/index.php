<?php

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| First we need to get an application instance. This creates an instance
| of the application / container and bootstraps the application so it
| is ready to receive HTTP / Console requests from the environment.
|
*/

$app = require __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$app->run($app['request']);
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="index.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="index.css">
<body>
<div class="header"></div>
<div class="container logo">
	<div class="row logo">
		<div class="col-sm-3 col-sm-offset-0">
			<h1>Vaimo store</h1>
		</div>
		<div class="col-sm-2 col-sm-offset-6">
			<input type="button" value="your cart" name="">
		</div>
	</div>
</div>
<div class="container menu">
	<div class="row menu">
		<div class="col-sm-8 col-sm-offset-0">
			<div class="menu_section">
				<a href="#">Women</a>
			</div>
			<div class="menu_section">
				<a href="#">Men</a> 
			</div>
			<div class="menu_section">
				<a href="#">Junior</a> 
			</div>
			<div class="menu_section">
				<a href="#">Accesories</a> 
			</div>
			<div class="dropdown">
			<div class="menu_section dropbtn">
				<a href="#">Collections</a> 
			</div>
			
  <div class="dropdown-content">
    <div class="dropdown2"><a href="#" class="bropbtn2">2014</a>
    	<div class="dropdown-content2">
    		<a href="#">Summer</a>
    		<a href="#">Autumn</a>
    		<a href="#">Winter</a>
    		<a href="#">Spring</a>
  		</div>
    <a href="#">2013</a>
    <a href="#">2012</a>
    <a href="#">2011</a>
    </div>
  </div>
    
</div>
			<div class="menu_section sale">
				<a href="#" style="color: red">Sale</a> 
			</div>
		</div>
		<div class="">
			
		</div>
		<div class="col-sm-offset-9">
			<div class="menu_section">
				<a href="#">My account</a>
			</div>
		</div>
		<div class="col-sm-offset-0 col-sm-11">
			<div id="menu_underline"></div>
		</div>
	</div>
</div>
<div class="container banner">
	<div class="row banner">
		<div class="col-sm-6 col-sm-offset-0">
			<img src="img/fas2.jpg" id="banner_image">
			<div class="text">
				<h2>Get ready for autumn<h2>
				<p>We have prepared everything for you</p>
			</div>
		</div>
		<div class="col-sm-5 col-sm-offset-0">
			<div id="banner_text">
				<h1>This is vaimo store</h1>
				<h2>Your one-stop fasion destination</h2>
				<p>Shop from over 850 of the best brands, inluding VAIMO's own label. Plus, get your daily fix of the freshest style, celebrity and music news. </p>
			</div>
		</div>
	</div>
</div>
<div class="container favourites">

	<div class="row favourites">
		<div class="col-sm-1 col-sm-offset-0">
			<hr>
		</div>
		<div class="col-sm-3 col-sm-offset-0">
			<h2>Our favourites</h2>
		</div>
		<div class="col-sm-offset-0">
			<hr>
		</div>
		<div class=" col-sm-offset-0 line">
			<p></p>
		</div>
	</div>
</div>
<div class="container products">
	<div class="row products">
		<div class="col-sm-3 col-sm-offset-0">
			<img src="img/products/belt.jpg" class="product_image">
			<div class="heading">
				<div>Belt</div>
				<div>€ 79.00</div>
				<input type="button" value="Add to cart" name="">
			</div>
		</div>
		<div class="col-sm-3 col-sm-offset-0">
			<img src="img/products/hat.jpg" class="product_image">
			<div class="heading">
				<div>Hat</div>
				<div style="color: red"><strike style="color: black;">€ 79.00 </strike>€ 59.00</div>
				<input type="button" value="Add to cart" name="">
			</div>
		</div>
		<div class="col-sm-3 col-sm-offset-0">
			<img src="img/products/scarf.jpg" class="product_image">
			<div class="heading">
				<div>Scarf</div>
				<div>€ 79.00</div>
				<input type="button" value="Add to cart" name="">
				<!-- <div class="addToCart_button">Add to cart</div> -->
			</div>
		</div>
		<div class="col-sm-3 col-sm-offset-0">
			<img src="img/products/bag.jpg" class="product_image">
			<div class="heading">
				<div>Bag</div>
				<div>€ 79.00</div>
				<input type="button" value="Add to cart" name="">
			</div>
		</div>
	</div>
</div>
<div id="bottom">
<div class="container bottom">
	<div class="row bottom">
		<div class="col-sm-3 col-sm-offset-0">
			<div class="heading">Top categories</div>
			<div>Women</div>
			<div>Men</div>
			<div>Junior</div>
			<div>Accesories</div>
		</div>
		<div class="col-sm-3 col-sm-offset-0">
			<div class="heading">Customer service</div>
			<div>Returns</div>
			<div>Shipping</div>
			<div>About us</div>
			<div>Contact us</div>
		</div>
		<div class="col-sm-4 col-sm-offset-2">
			<div class="heading">Newsletter subscribe</div>
			<input type="text" name="email" placeholder="">
			<!-- <div id="subscribe_button">Subscribe</div> -->
			<input type="button" name="Subscribe" value="Subscribe">
		</div>
	</div>
</div>
</div>
</body>
</html>
