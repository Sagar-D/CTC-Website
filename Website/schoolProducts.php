<!DOCTYPE html>
<html>
<head>

	<title>School Products</title>
	<link rel="shortcut icon" href="logo.png" type="image/x-icon"/>
	<link rel="stylesheet" href="header.css" >
		
	<meta charset="utf-8" >
    <link rel="stylesheet" href="navBar.css" >
	<link rel="stylesheet" href="carousel.css" >
	
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	
	
	<style>
	
	.modal {
		display: none; /* Hidden by default */
		position: fixed; /* Stay in place */
		z-index: 1; /* Sit on top */
		left: 0;
		top: 0;
		width: 100%; /* Full width */
		height: 100%; /* Full height */
		overflow: auto; /* Enable scroll if needed */
		background-color: rgb(0,0,0); /* Fallback color */
		background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
	}
	
	
	.modal-content {
		background-color: #fefefe;
		margin: 15% auto; /* 15% from the top and centered */
		padding: 20px;
		border: 1px solid #888;
		width: 80%; /* Could be more or less, depending on screen size */
	}

	/* The Close Button */
	.close {
		color: #aaa;
		float: right;
		font-size: 28px;
		font-weight: bold;
	}

	.close:hover,
	.close:focus {
		color: black;
		text-decoration: none;
		cursor: pointer;
	}
	
	.card{
		
		transition: 0.1s;
	}
	
	.card:hover {
		box-shadow: 0 8px 16px 0 rgba(209,18,55,0.99);
		cursor:pointer;
	}


	</style>
	
	<script>
	
	

	
		function showDetails(btId,descId) {
			
			 modal = document.getElementById(descId);
			
			var btn = document.getElementById(btId);
			
			modal.style.display = "block";
			
			
		}
		
		
		function onSpanClick(descId) {
			
			var modal = document.getElementById(descId);
			modal.style.display = "none";
		}
		

		window.onclick = function(event) {

		if (event.target == modal) {
			modal.style.display = "none";
		}
		
		
		}
</script>
	
	
	
</head>

<body>


<header >
<div class="container">
	<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 col-xl-2" >
<img src="logo.png"  style="max-width: 50%;" >
</div>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
<h1 style="float: left; padding-bottom: 10px;">CHINMAYA <span style="color: #36c9c6;">TRADING </span> CENTRE</h1>
</div></div>
</div>
</header>

<nav id="nav" class="navbar" >

	<div class="navbar-header">

	<button class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navHeaderCollapse" > 
	

		<span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
	
	</button>
	
	<a class="navbar-brand" href="index.php">MENU</a>
	
	</div>
	<div class="collapse navbar-collapse navHeaderCollapse">
	<div id="nav_wrapper">
		<ul class="navlist nab navbar-nav">
			<li><a href="index.php" style="border-bottom: 1px solid #e11237;" > HOME </a></li><li>
			<a href="aboutUs.php" style="border-bottom: 1px solid #e11237;" > ABOUT US </a></li><li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="border-bottom: 1px solid #e11237;" > CORPORATE GIFTS <span class="caret"></span></a>
			<ul class="dropdown-menu" >
			<li><a href="corporateGiftSets.php">Corporate Gift Sets</a></li>
			<li><a href="exclusiveFolders.php">Exclusive Folders</a></li>
			<li><a href="exclusiveNotebooks.php">Exclusive Notebooks</a></li>
			<li><a href="fileCovers.php">File Covers</a></li>
			<li><a href="bagsAndWallets.php">Bags And Wallets</a></li>
			<li><a href="stationariesAndAccessories.php">Stationaries And Accessories</a></li>
			</ul>
			</li><li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="border-bottom: 1px solid #e11237;" > SCHOOL <span class="caret"></span></a>
			<ul class="dropdown-menu" >
			<li><a href="trophiesMedalsAndMomentos.php">Trophies, Medals And Momentos</a></li>
			<li><a href="noPreview.php">Uniforms</a></li>
			<li><a href="noPreview.php">T-Shirts</a></li>
			<li><a href="noPreview.php">Shoes</a></li>
			<li><a href="noPreview.php">Bags</a></li>
			<li><a href="noPreview.php">Tiffin Boxes</a></li>
			</ul>
			</li><li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="border-bottom: 1px solid #e11237;" > CUSTOMIZED CLOCKS <span class="caret"></span></a>
			<ul class="dropdown-menu" >
			<li><a href="wallClocks.php">Wall Clocks</a></li>
			<li><a href="tableClocks.php">Table Clocks</a></li>
			<li><a href="wallcumTableClocks.php">Wall-cum-Table Clocks</a></li>
			</ul>
			</li><li>
			<a href="solarLights.php" style="border-bottom: 1px solid #e11237;" > SOLAR LIGHTS </a></li><li>
			<a href="contactUs.php" style="border-bottom: 1px solid #e11237;" > CONTACT US </a></li>
		</ul>
	</div>
	</div>
</nav>


<content>

<div id="myCarousel" class="carousel slide" data-ride="carousel" style="max-height: 190px;">
  
  
   <div class="carousel-inner" role="listbox" style="max-height: 190px;">
   
   

   
    <div class="item active" style="max-height: 190px;">
       <img src="CarouselPics/img2.jpg" alt="No Name">
		 <div class="carousel-caption">
        <h2><b>BACK TO SCHOOL</b></h2>
        <p>Make your schooling, a fun!!</p>
      </div>
    </div>
	
	</div>
</div>



<?php

$cat = "ourProducts/schoolProducts";
$subcat= "";

$subcatlist = scandir($cat);

foreach($subcatlist as $subcat){
	
	if($subcat == '.' || $subcat == ".."){
		continue;
	}
	else{
		
		$modelslist = scandir($cat."/".$subcat);
		
		echo('<article  id="'.$subcat.'style="margin-top: 0px;">

	<h3 style="padding: 13px; background-color: #d11237; color: #fff;" align="center">'.$subcat.'</h3>

	<div class="container" style="margin-top: 30px; margin-bottom: 30px;">
	<div class="row">');
	
	
	
	
	
		
		foreach($modelslist as $model){
			
			if($model == "." || $model == ".."){
				continue;
			}
			else{
				
				
				echo('<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-2">
				<div class="card" style="margin:0px; margin-bottom: 50px;  padding: 0px; ">
			
				<div class="card-block" align="center"  onClick="showDetails(\'bt.'.$model.'\',\'desc.'.$model.'\')" >
				<img class="card-img-top" src="'.$cat.'/'.$subcat.'/'.$model.'/'.$model.'.jpg" alt="Card image cap" width="100%"  >
				
				<button id="bt'.$model.'" style="margin:30px; background-color:#d11237; border: 0; color: #fff; padding: 5px 40px 5px 40px;" align="center" onClick="showDetails(\'bt.'.$model.'\',\'desc.'.$model.'\')" >VIEW DETAILS</button>
				</div>
				</div>
				</div>
				
				
				<div id="desc.'.$model.'" class="modal">

				<!-- Modal content -->
				<div class="modal-content">
					<span class="close" onClick="onSpanClick(\'desc.'.$model.'\')" >&times;</span>
					
					<img class="card-img-top" src="'.$cat.'/'.$subcat.'/'.$model.'/'.$model.'.jpg" alt="Card image cap" width="100%">
					
				</div>

				</div>
				
				
				');
				
			}
			
		}
		
		
	echo('</div>
	</div>');
	
	}
}




?>


</content>


<footer style="background-color: #d11237; padding: 15px; padding-right: 0px;">
<div class="container">
	<div class="row">
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-2">
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-2">
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-2">
		<div style="font-size:12px; text-align: right; color: #fff;">Design and developed by Sagar<br/>( sagard.cmagalur@gmail.com ) </div>
	</div>
</footer>

</body>
</html>