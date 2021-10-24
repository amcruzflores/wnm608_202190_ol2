<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Annamarie Website</title>


	<meta name="viewport" content="width=device-width">

	<!-- When ever loading in files, you always want to upload library files first, local files second-- this allows for css local files to override library files-->
	<link rel="stylesheet" href="lib/css/styleguide.css">
	<link rel="stylesheet" href="lib/css/gridsystem.css">
	<link rel="stylesheet" href="css/storetheme.css">

<style type="text/css">
    @import url("https://fast.fonts.net/lt/1.css?apiType=css&c=ae5bc32c-9e9e-4325-a69a-c4e20ea439e3&fontids=5560490,5664085");
    @font-face{
        font-family:"Meta Serif W05 Medium";
        src:url("Fonts/5560490/8d862484-f160-480f-867d-5dab58b989b6.woff2") format("woff2"),url("Fonts/5560490/eefee063-791d-4c92-a3f2-94236fb9ce9a.woff") format("woff");
    }
 
</style> 
  
</style>  		

</head>


 

<body>
	<?php include "parts/navbar.php"; ?>
	<!--EMMET string:  header>h1+p -->
	
<div class="view-window" style="background-image:url('img/prospectBanner.jpg')"> 
	</div>

	<!-- EMMET string:  .containter>article#article$.article*4>h2{Article $}+div.article-body>p*3>lorem40  -->
	<div class="container">

<div class="form-control">
			<form class="hotdog">
				<!--<span>&equiv;</span>  | ICON INPUT INSIDE HOTDOG-->
				<input type="search" placeholder="Search" >
			</form>
</div>




<h2> Products, News & Latest Produce</h2>

<hr color="var(--color-offwhite)" size="1" width="100%">

<div class="grid gap xs-small md-medium">
				<!--  .col-xs-6.col-md-3*4>.card>{Card}  -->
				<div class="col-xs-6 col-md-3">
					<div class="card soft">
						<img src='img/heroFamilyBanner.jpg' alt="" class="media-image"></div>
				</div>

				<div class="col-xs-6 col-md-3">
					<div class="card soft">
						<img src='img/handblueberries.jpg' alt="" class="media-image"></div>
				</div>

				<div class="col-xs-6 col-md-3">
					<div class="card soft">
						<img src='img/farmerhandshake.jpg' alt="" class="media-image"></div>
				</div>

				<div class="col-xs-6 col-md-3">
					<div class="card soft">
						<img src='img/tomatohands.jpg' alt="" class="media-image"></div>
				</div>

			</div>




<hr color="var(--color-offwhite)" size="1" width="100%">


<h2>Delivered to your Door Step</h2>
		<article id="article1" class="article card soft">
			<div class="display-flex flex-align-center">
				<div class="flex-stretch">
				</div>
				<div class="flex-none">
		
				</div>
			</div>

			<div class="article-body">
				<h3>Your Shopping List</h3>
				<img class="produce_image" src="img/prospectOldCouple.jpg" alt="Image"> 
				<p class="articleImg">We offer a wide selection of fresh produce hand picked from our communities local farmers. Our purpose is to provide and deliver sustainable, organic, non- pesticide whole foods to our community and those in need. Our marker is online so all of our items are listed in our catalog page where you have the freedom of choice to select what produce is available.</p>
				<p class="articleImg">We also offer delivery services for those who need assistance with picking , carrying and transporting food. We will deliver what ever is on your shopping list..</p>
				<p class="articleImg">Serving our clients and community is a priority. We would love to have you as a member of our company so please register for an account or subscribe to our newletters to be updated with discounts, sales, new items and to keep in touch!</p>
			</div>
		</article>


		
			</div>

<div class="view-window" style="background-image:url('img/greenproduce.jpg')"> 
	</div>	

	

</body>
</html>