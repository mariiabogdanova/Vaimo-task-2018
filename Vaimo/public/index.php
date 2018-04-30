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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="index.js"></script>

<link rel="stylesheet" type="text/css" href="index.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="bootstrap/js/bootstrap.min.js"></script>

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->


<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="index.css">
<body>
<div class="container header">
	<div class="col-md-offset-0 col-sm-offset-0">
		<div class="row header"></div>
	</div>
</div>

<div class="container logo">
	<div class="row logo">
		<div class="col-md-3 col-md-offset-0">
			<h1>Vaimo store</h1>
		</div>
		<div class="col-md-3 col-md-offset-6">
			
			<button id="cart_button"><div id="cart_total"><span id="totalItems"></span> items in your cart €<b><span id="totalprice"></span></b></div></button>
				<div id="cart">
					<div id="cart_items">
						
						<table>
							<td><div class="item_img"></div></td>
							<td><span class="item_name"></span></td>
							<td><span class="item_qty"></span></td>
						
						
						</table>
					</div>


				</div>

			<div class="col-sm-4 col-sm-offset-9" style="display: inline-block;">

  			<a href="javascript:void(0);" style="font-size:30px;" class="icon" onclick="myFunction()">&#9776;</a>
  			<button id="cart_button_xs" type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-shopping-cart"></span> 
        </button>
  		</div>
		</div>
	</div>
</div>






<div id="cart"></div>


<div class="topnav" id="myTopnav">



<div class="container menu">
	<div class="row menu topnav">
		<div class="col-md-8 col-md-offset-0 col-sm-3 col-sm-offset-0">
			<!-- <div class="topnav" id="myTopnav"> -->

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
		
				<div class="menu_section" id="menu_myaccount">
					<a href="#">My account</a>
				</div>

		</div>
		<div class="col-md-offset-0 col-md-11">
			<div id="menu_underline"></div>
		</div>

		
	</div>
</div>



</div>


<!-- </div> -->
<div class="container banner">
	<div class="row banner">
		<div class="col-md-6 col-md-offset-0 col-sm-offset-0">
			<img src="img/fas2.jpg" id="banner_image">
			<div class="text">
				<h2>Get ready for autumn<h2>
				<p>We have prepared everything for you</p>
			</div>
		</div>
		<div class="col-md-5 col-md-offset-0 col-sm-10 col-sm-offset-0">
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
		<div class="col-md-1 col-md-offset-0 col-sm-4 col-sm-offset-0">
			<hr>
		</div>
		<div class="col-md-3 col-md-offset-0 col-sm-5 col-sm-offset-0">
			<h2>Our favourites</h2>
		</div>
		<div class="col-md-offset-0 col-sm-offset-0">
			<hr>
		</div>
	</div>
</div>
<div class="container products">
	<div class="row products">
		<div class="col-md-3 col-md-offset-0 col-sm-6 col-sm-offset-0">
			<img src="img/products/belt.jpg" class="product_image">
			<div class="heading">
				<div>Belt</div>
				<div>€ 79.00</div>
				<input type="button" value="Add to cart" name="">
			</div>
		</div>
		<div class="col-md-3 col-md-offset-0 col-sm-6 col-sm-offset-0">
			<img src="img/products/hat.jpg" class="product_image">
			<div class="heading">
				<div>Hat</div>
				<div style="color: red"><strike style="color: black;">€ 79.00 </strike>€ 59.00</div>
				<input type="button" value="Add to cart" name="">
			</div>
		</div>
		<div class="col-md-3 col-md-offset-0 col-sm-6 col-sm-offset-0">
			<img src="img/products/scarf.jpg" class="product_image">
			<div class="heading">
				<div>Scarf</div>
				<div>€ 79.00</div>
				<input type="button" value="Add to cart" name="">
				<!-- <div class="addToCart_button">Add to cart</div> -->
			</div>
		</div>
		<div class="col-md-3 col-md-offset-0 col-sm-6 col-sm-offset-0">
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
		<div class="col-md-3 col-md-offset-0 col-sm-offset-1">
			<div class="heading">Top categories</div>
			<div><a href="#">Women</a></div>
			<div><a href="#">Men</a></div>
			<div><a href="#">Junior</a></div>
			<div><a href="#">Accesories</a></div>
		</div>
		<div class="col-md-3 col-md-offset-0 col-sm-offset-1  ">
			<div class="heading">Customer service</div>
			<div><a href="#">Returns</a></div>
			<div><a href="#">Shipping</a></div>
			<div><a href="#">About us</a></div>
			<div><a href="#">Contact us</a></div>
		</div>
		<div class="col-md-4 col-md-offset-2  col-sm-offset-1">
			<div class="heading">Newsletter subscribe</div>
			<form method="post">
			<input type="text" name="email" value="" placeholder="" id="subscribe_input">
			<input type="button" name="Subscribe" value="Subscribe" id="subscribe_button">
			<!-- <span class="error"></span> -->

			<div id="subscribtion_loading" class="subscribtion_status">Subscribtion loading</div>
			<div id="subscribtion_succesfull" class="subscribtion_status">Subscribtion Succesfull</div>
			<div id="subscribtion_failed" class="subscribtion_status">Subscribtion failed</div>
			</form>


		</div>
	</div>
</div>
</div>
</body>
<script type="text/javascript">
	function myFunction() {
    var x = document.getElementById("myTopnav");
    var y = document.getElementById("menu_myaccount");
    if (x.className === "topnav") {
        x.className += " responsive";
        y.style = "display: block";
    } else {
        x.className = "topnav";
        y.style = "display: none";

    }
}
</script>
</html>
