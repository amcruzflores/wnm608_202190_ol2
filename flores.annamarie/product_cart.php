<?php

include_once "lib/php/functions.php";
include_once "parts/template.php";

//$cart = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN (4,7,10)");

$cart_items= getCartItems();

$cart = getCart();

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Product Cart</title>

	<?php include "parts/meta.php"; ?>
	
</head>


<body>
	
<?php include "parts/navbar.php"; ?>
		

<div class="container">
	<h2>Your Cart</h2>

	<?php
	if(count($cart)) {
		?>
	<div class="grid-gap">
		<div class="col-xs-12 col-md-7">
			<div class="card soft">
			<?= array_reduce(getCartItems(),'cartListTemplate') ?>
			</div>			
		</div>
		<div class="col-xs-12 col-md-5">
			<div class="card soft flat">
				<?= cartTotals() ?>
		<div class="card-section">
		<a href="product_checkout.php" class="form-button">Checkout</a>
		</div>
		</div>
		</div>
	</div>
	<?php
	} else {
		?>
		<div class="card soft">
			<p>No Items In Cart</p>
		</div>
			<h3>Other Recommendations</h3>
			<?php recommendedAnything(6); ?>
		<?php
	}
	?>
	

</div>

</body>
</html>