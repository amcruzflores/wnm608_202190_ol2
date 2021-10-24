<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Product List - PHP</title>

<?php include "parts/meta.php"; ?>

	
</head>


<body>
	
<?php include "parts/navbar.php"; ?>
		

<div class="container">
	<div class=" card soft">
		<h2>Product List</h2>



<div class="form-control">
			<form class="card lightgrey">
				<input type="search" class="hotdog lightdark" placeholder="Search" >
			</form>
		</div>



		

<!-- PRODUCT GRID , CSS STYLE FOUND IN STORETHEME.CSS -->

	<div class="grid gap">

		<!--   .col-xs-12.col-md-4*3>   -->

		<div class="col-xs-12 col-md-4">
			<figure class="figure product-overlay">
		<img src="https://via.placeholder.com/400x400?text=product" alt="">
			<figcaption>
			<div class="caption-body">
					<div>Product Name</div>
					<div>6.99</div>
			</div>
			</figcaption>
		</figure>
		</div>
		


		<div class="col-xs-12 col-md-4">
			<figure class="figure product-overlay">
		<img src="https://via.placeholder.com/400x400?text=product" alt="">
			<figcaption>
			<div class="caption-body">
					<div>Product Name</div>
					<div>6.99</div>
			</div>
			</figcaption>
		</figure>
		</div>
		


		<div class="col-xs-12 col-md-4">
			<figure class="figure product-overlay">
		<img src="https://via.placeholder.com/400x400?text=product" alt="">
			<figcaption>
			<div class="caption-body">
					<div>Product Name</div>
					<div>6.99</div>
			</div>
			</figcaption>
		</figure>
		</div>

		<div class="col-xs-12 col-md-4">
			<figure class="figure product-overlay">
		<img src="https://via.placeholder.com/400x400?text=product" alt="">
			<figcaption>
			<div class="caption-body">
					<div>Product Name</div>
					<div>6.99</div>
			</div>
			</figcaption>
		</figure>
		</div>

		<div class="col-xs-12 col-md-4">
			<figure class="figure product-overlay">
		<img src="https://via.placeholder.com/400x400?text=product" alt="">
			<figcaption>
			<div class="caption-body">
					<div>Product Name</div>
					<div>6.99</div>
			</div>
			</figcaption>
		</figure>
		</div>

		<div class="col-xs-12 col-md-4">
			<figure class="figure product-overlay">
		<img src="https://via.placeholder.com/400x400?text=product" alt="">
			<figcaption>
			<div class="caption-body">
					<div>Product Name</div>
					<div>6.99</div>
			</div>
			</figcaption>
		</figure>
		</div>

	</div>






		<!-- ul>li*4>a[href="product_item.php"]>{Product $} -->
		<ul>
			<li><a href="product_item.php?id=apple">Product 1: Apple</a></li>
			<li><a href="product_item.php?id=pear">Product 2: Pear</a></li>
			<li><a href="product_item.php?id=banana">Product 3: Banana</a></li>
			<li><a href="product_item.php?id=carrot">Product 4: Carrot</a></li>
			<li><a href="product_item.php?id=ginger">Product 5: Ginger</a></li>
			<li><a href="product_item.php?id=avocado">Product 6: Avocado</a></li>
		</ul>
	</div>
	

</div>








</body>
</html>