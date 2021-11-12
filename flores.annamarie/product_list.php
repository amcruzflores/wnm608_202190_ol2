<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Product List</title>

<?php include "parts/meta.php"; ?>

	
</head>


<body>
	
<?php include "parts/navbar.php"; ?>
		

<div class="container">
		<h2>Product List</h2>



<div class="form-control">
			<form class="card lightgrey">
				<input type="search" class="hotdog lightdark" placeholder="Search" >
			</form>
		</div>



	

<!-- PRODUCT GRID , CSS STYLE FOUND IN STORETHEME.CSS -->

	<!--<div class="grid gap">



		<div class="col-xs-12 col-md-4">
			<figure class="figure product-overlay">
		<img src="img/mango_1.jpg" alt="">
			<figcaption>
			<div class="caption-body">
					<div>Mango</div>
					<div>7.00</div>
			</div>
			</figcaption>
		</figure>
		</div>
		

		<div class="col-xs-12 col-md-4">
			<figure class="figure product-overlay">
		<img src="img/ginger_1.jpg" alt="">
			<figcaption>
			<div class="caption-body">
					<div>Ginger</div>
					<div>4.99</div>
			</div>
			</figcaption>
		</figure>
		</div>
		


		<div class="col-xs-12 col-md-4">
			<figure class="figure product-overlay">
		<img src="img/banana_1.jpg" alt="">
			<figcaption>
			<div class="caption-body">
					<div>Banana</div>
					<div>1.99</div>
			</div>
			</figcaption>
		</figure>
		</div>

		<div class="col-xs-12 col-md-4">
			<figure class="figure product-overlay">
		<img src="img/carrot_1.jpg" alt="">
			<figcaption>
			<div class="caption-body">
					<div>Carrot</div>
					<div>5.99</div>
			</div>
			</figcaption>
		</figure>
		</div>

		<div class="col-xs-12 col-md-4">
			<figure class="figure product-overlay">
		<img src="img/blueberries_1.jpg" alt="">
			<figcaption>
			<div class="caption-body">
					<div>Blueberries</div>
					<div>2.99</div>
			</div>
			</figcaption>
		</figure>
		</div>

		<div class="col-xs-12 col-md-4">
			<figure class="figure product-overlay">
		<img src="img/strawberries_1.jpg" alt="">
			<figcaption>
			<div class="caption-body">
					<div>Strawberries</div>
					<div>2.99</div>
			</div>
			</figcaption>
		</figure>
		</div>

		<div class="col-xs-12 col-md-4">
			<figure class="figure product-overlay">
		<img src="img/cucumber_1.jpg" alt="">
			<figcaption>
			<div class="caption-body">
					<div>Cucumber</div>
					<div>4.99</div>
			</div>
			</figcaption>
		</figure>
		</div>
		


		<div class="col-xs-12 col-md-4">
			<figure class="figure product-overlay">
		<img src="img/celery_1.jpg" alt="">
			<figcaption>
			<div class="caption-body">
					<div>Celery</div>
					<div>4.99</div>
			</div>
			</figcaption>
		</figure>
		</div>
		


		<div class="col-xs-12 col-md-4">
			<figure class="figure product-overlay">
		<img src="img/lemon_1.jpg" alt="">
			<figcaption>
			<div class="caption-body">
					<div>Lemon</div>
					<div>2.99</div>
			</div>
			</figcaption>
		</figure>
		</div>

		<div class="col-xs-12 col-md-4">
			<figure class="figure product-overlay">
		<img src="img/lime_1.jpg" alt="">
			<figcaption>
			<div class="caption-body">
					<div>Lime</div>
					<div>2.99</div>
			</div>
			</figcaption>
		</figure>
		</div>

		<div class="col-xs-12 col-md-4">
			<figure class="figure product-overlay">
		<img src="img/apple_1.jpg" alt="">
			<figcaption>
			<div class="caption-body">
					<div>Fuji Apple</div>
					<div>4.99</div>
			</div>
			</figcaption>
		</figure>
		</div>

		<div class="col-xs-12 col-md-4">
			<figure class="figure product-overlay">
		<img src="img/pineapple_1.jpg" alt="">
			<figcaption>
			<div class="caption-body">
					<div>Pineapple</div>
					<div>$6.00</div>
			</div>
			</figcaption>
		</figure>
		</div>


	</div>
-->






		<!-- ul>li*4>a[href="product_item.php"]>{Product $}
		<ul>
			<li><a href="product_item.php?id=apple">Product 1: Apple</a></li>
			<li><a href="product_item.php?id=pear">Product 2: Pear</a></li>
			<li><a href="product_item.php?id=banana">Product 3: Banana</a></li>
			<li><a href="product_item.php?id=carrot">Product 4: Carrot</a></li>
			<li><a href="product_item.php?id=ginger">Product 5: Ginger</a></li>
			<li><a href="product_item.php?id=avocado">Product 6: Avocado</a></li>
		</ul>
		 -->


<?php

include_once "lib/php/functions.php";
include_once "parts/template.php";

$result= makeQuery(
	makeConn(),
	"
	SELECT * 
	FROM `products`
	ORDER BY `date_create` DESC
	LIMIT 12
	"
	);

	//print_p($result);
	echo "<div class='grid gap'>",array_reduce($result,'productListTemplate'),"</div>";

	?>


</div>








</body>
</html>