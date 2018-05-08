<!-- TASK 1 -->
<!-- Responsive design implemented using bootstrap framework -->
<!-- The page looks according to the mobile design when the browser viewport is 320px. -->
<!-- The page looks according to the desktop design when the browser viewport is at least 940px. -->

<!-- TASK 2 -->
<!-- The desktop navigation has two levels of drop-downs. It is solved with nojavascript, just html and css  -->
<!-- The mobile version of menu shows all the dwopdowns at once. It is hidden behind the burger icon and uses media queries, JavaScript and CSS in implementation -->

<!-- TASK 3 -->
<!-- Cart dordown is visible on hover on the button in the desktop mode and onclick on the mobile mode. It is implemented using media queries, JavaScript, JQuery and CSS.  -->
<!-- The AJAX calll is made to the server to get the data. After that that data is stored (cached) in LocalStorage for 1 minute. After that it gets removed. It is implemented using JavaScript, Jquery and PHP-->

<!-- TASK 4 -->
<!-- An array is sorted in alphabetic order in the public/products.php file. There is an example array there as well. -->

<!-- TASK 5 -->
<!-- AJAX call is sent to the server via JavaScript file, then it is redirected to proxy2.php (for some reason exactly the same functionality is very buggy in the NewsletterController file so I moved it for the same of worling validation) to check if the email is valid. If it is, the status of the call would be success and the success message would show. If it is not, it will send an error to the AJAX call and the error function would display the subscribtion status. While loading it shows loading status.-->


<!DOCTYPE html>
<html>
<head>
	<title>Vaimo Store</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="subscribtion_st.js"></script>
<script type="text/javascript" src="index.js"></script>


<link rel="stylesheet" type="text/css" href="index.css">
<!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->


<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="index.css">
<body onload="">
	<div id="header" style="min-width: 100%;">
<!-- <div class="container header">
	<div class="col-md-1 col-md-offset-0 col-sm-offset-0">
		<div class="row header"></div></div>
</div> -->
</div>



<div class="container logo">
	<div class="row logo">
		<div class="col-md-3 col-md-offset-0 col-sm-offset-0 col-sm-4 col-xs-10 col-xs-offset-0">
			<h1>Vaimo store</h1>
		</div>
		<div class="col-md-3 col-md-offset-5 col-sm-offset-3 col-sm-5">
			<button id="cart_button"><span class="glyphicon glyphicon-shopping-cart"></span> <div id="cart_total"><span id="totalItems"></span> items in your cart &#8364;<b><span id="totalprice"></span></b></div></button>
					</div>
				<div class="col-md-3 col-md-offset-8 col-sm-offset-7 col-sm-5 col-xs-offset-0">
				<div id="cart" class="topcart ">
					<div id="cart_items">
						<table>

							<td><div class="item_img"><img src="" class="imgSrc"></div></td>
							<td><span class="item_name"></span></td>
							<td><span class="item_qty"></span></td>

						</table>
					</div>
					<input type="button" name="" value="Go to checkout">


				</div>
				</div>
			<div class="col-sm-1 col-sm-offset-11 col-xs-1 col-xs-offset-0" style="display: inline-block;">

  			<a href="javascript:void(0);" style="font-size:30px;" class="icon" onclick="openBurgerMenu()">&#9776;</a>
  			<button id="cart_button_xs" type="button" class="btn btn-default btn-sm">
          <div onclick="openResponciveCart()"><span class="glyphicon glyphicon-shopping-cart"></span> </div>
        </button>
  		</div>

	</div>
</div>





<div id="cart"></div>


<!-- <div class="topnav" > -->



<div class="container menu">
	<div class="row menu topnav">
		<div class="col-md-8 col-md-offset-0 col-sm-14 col-sm-offset-0">
			<!-- <div class="topnav" id="myTopnav"> -->
<div class="topnav" id="myTopnav">
<ul class="main-navigation">

  <li><a href="#">Women</a></li>
  <li><a href="#">Men</a></li>
  <li><a href="#">Junior</a></li>
  <li><a href="#">Accessories</a></li>
  <li class="dropdown"><a href="#">Collections</a>

    <ul class="dropdown-content">

      <li><a href="#">2014 &#9658;</a>
      	<!-- <ul>
      		<li><a href="">Summer</a></li>
      		<li><a href="">Autumn</a></li>
      		<li><a href="">Winter</a></li>
      		<li><a href="">Spring</a></li>

      	</ul> --></li>

      <li><a href="#">2013 &#9658;</a>
      	<!-- <ul>
      		<li><a href="">Summer</a></li>
      		<li><a href="">Autumn</a></li>
      		<li><a href="">Winter</a></li>
      		<li><a href="">Spring</a></li>

      	</ul> -->
      </li>
      <li class="dropdown"><a href="#">2012 &#9658;</a>
      <ul  class="dropdown-content">
      		<li><a href="">Summer</a></li>
      		<li><a href="">Autumn</a></li>
      		<li><a href="">Winter</a></li>
      		<li><a href="">Spring</a></li>

      	</ul>
      </li>
      <li><a href="#">2011 &#9658;</a>
      <!-- <ul>
      		<li><a href="">Summer</a></li>
      		<li><a href="">Autumn</a></li>
      		<li><a href="">Winter</a></li>
      		<li><a href="">Spring</a></li>

      	</ul> -->
      </li>
</ul></li>

  <li><a href="#" style="color: red">Sale</a></li>
  <div class="col-sm-1 col-sm-offset-1">
  <li><a href="#">My account</a></li>
  </div>


  </ul>
</div>

		</div>
		<div class="col-md-offset-0 col-md-11 col-sm-offset-0 col-sm-12">
			<div id="menu_underline"></div>
		</div>

	</div>
</div>



</div>


<!-- </div> -->
<div class="container banner">
	<div class="row banner">
		<div class="col-md-6 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-offset-0">
			<img src="img/fas2.jpg" id="banner_image">
			<div class="text">
				<h2>Get ready for autumn<h2>
				<p>We have prepared everything for you</p>
			</div>
		</div>
		<div class="col-md-5 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-offset-0">
			<div id="banner_text">
				<h1>This is vaimo store</h1>
				<h2>Your one-stop fashion destination</h2>
				<p>Shop from over 850 of the best brands, including VAIMO's own label. Plus, get your daily fix of the freshest style, celebrity and music news. </p>
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
		<div class="col-md-3 col-md-offset-0 col-sm-3 col-sm-offset-0 col-xs-5 col-xs-offset-1">
			<img src="img/products/belt.jpg" class="product_image">
			<div class="heading">
				<div class="head">Belt</div>
				<div>&#8364; 79.00</div>
				<input type="button" value="Add to cart" name="">
			</div>
		</div>
		<div class="col-md-3 col-md-offset-0 col-sm-3 col-sm-offset-0 col-xs-5 col-xs-offset-0">
			<img src="img/products/hat.jpg" class="product_image">
			<div class="heading">
				<div class="head">Hat</div>
				<div style="color: red"><strike style="color: black;">&#8364; 79.00 </strike>&#8364; 59.00</div>
				<input type="button" value="Add to cart" name="">
			</div>
		</div>
		<div class="col-md-3 col-md-offset-0 col-sm-3 col-sm-offset-0 col-xs-5 col-xs-offset-1">
			<img src="img/products/scarf.jpg" class="product_image">
			<div class="heading">
				<div class="head">Scarf</div>
				<div>&#8364; 79.00</div>
				<input type="button" value="Add to cart" name="">
				<!-- <div class="addToCart_button">Add to cart</div> -->
			</div>
		</div>
		<div class="col-md-3 col-md-offset-0 col-sm-3 col-sm-offset-0 col-xs-5 col-xs-offset-0">
			<img src="img/products/bag.jpg" class="product_image">
			<div class="heading">
				<div class="head">Bag</div>
				<div>&#8364; 79.00</div>
				<input type="button" value="Add to cart" name="">
			</div>
		</div>
	</div>
</div>
<div id="bottom" style="width: 100%; margin: 0;
   padding: 0;
   background-color:#000
   bottom: 0;
   right: 0;">
<div class="container bottom">
	<div class="row bottom">
		<div class="col-md-3 col-md-offset-0 col-sm-2 col-sm-offset-0">
			<div class="heading">Top categories</div>
			<div><a href="#">Women</a></div>
			<div><a href="#">Men</a></div>
			<div><a href="#">Junior</a></div>
			<div><a href="#">Accesories</a></div>
		</div>
		<div class="col-md-3 col-md-offset-0 col-sm-2 col-sm-offset-0">
			<div class="heading">Customer service</div>
			<div><a href="#">Returns</a></div>
			<div><a href="#">Shipping</a></div>
			<div><a href="#">About us</a></div>
			<div><a href="#">Contact us</a></div>
		</div>
		<div class="col-md-4 col-md-offset-2  col-sm-7 col-sm-offset-1">
			<div class="heading">Newsletter subscribe</div>
			<form method="post">
			<input type="text" name="email" value="" placeholder="" id="subscribe_input">
			<input type="button" name="Subscribe" value="Subscribe" id="subscribe_button">
			<div id="subscribtion_loading" class="subscribtion_status"><img style="width: 13px;" src="loading.gif"> Subscribtion loading</div>
			<div id="subscribtion_succesfull" class="subscribtion_status">&#10004;Subscribtion Succesfull</div>
			<div id="subscribtion_failed" class="subscribtion_status">&#10006; Subscribtion failed</div>

			</form>
		</div>



	</div>
</div>
</div>
</body>
<script type="text/javascript">
	
  function openBurgerMenu() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";

    }
}

  function openResponciveCart(){
    var z = document.getElementById("cart");
    if (z.className === "topcart") {
          z.className += " appear";

    } else {
        z.className = "topcart";

      }
  }
</script>
</html>