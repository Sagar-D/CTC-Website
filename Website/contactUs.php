<!DOCTYPE html>
<html>
<head>

	<title>Corporate Gifts</title>
	<link rel="shortcut icon" href="logo.png" type="image/x-icon"/>
	<link rel="stylesheet" href="header.css" >
	
	<meta charset="utf-8" >
    <link rel="stylesheet" href="navBar.css" >
	<link rel="stylesheet" href="carousel.css" >
	
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
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
			
			var modal = document.getElementById(descId);
			
			var btn = document.getElementById(btId);
			
			modal.style.display = "block";
			
			
		}
		
		
		function onSpanClick(descId) {
			
			var modal = document.getElementById(descId);
			modal.style.display = "none";
		}
		
		
	
	function validate() {
		if(document.writeUsForm.name.value == "" || document.writeUsForm.email.value == "" || document.writeUsForm.message.value == ""){
			alert("Please fill all the contents");
			return false;
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


<h3 align="center" style="color: #d11237; padding: 13px; padding-bottom: 0;">REACH US</h3>


<div class="container">
<div class="row" align="center" >
<p style="padding: 10px; font-weight: bold; font-size: 16px; ">
Chinmayan Trading Centre,<br/>
No.175, 12th Cross,<br/>
Mahalakshmi Layout,<br/>
Bengaluru - 560086, Karnataka, India.<br/>
</br>
<i class="material-icons" style="verticle-align: middle; font-size:23px">phone</i><span style="font-size: 28px;"> 080 23199333</span></br>
<i class="material-icons" style="verticle-align: middle; font-size:23px">phone</i><span style="font-size: 28px;"> 080 23499444</span></br>
<i class="material-icons" style="font-size:20px">email</i><span style="font-size: 28px;"> chinmayatradingcentre@gmail.com</span></br>
</p>

</div>
</div>

<div id="writeUs">

<h3 align="center" style="color: #d11237; padding: 13px; padding-bottom: 0;">WRITE US</h3>

<form name="writeUsForm" action="mail.php" method="POST">

<div class="row" align="center" >
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"></div>
<div class="col-xs-12 col-sm-12 col-lg-4 col-md-4 col-xl-4">
<input type="text" name="name" placeholder="NAME" style="margin:10px; min-width:200px; padding:5px;" />
</div>
</div>

<div class="row" align="center" >
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"></div>
<div class="col-xs-12 col-sm-12 col-lg-4 col-md-4 col-xl-4">
<input type="Text" name="email" placeholder="EMAIL ID" style="margin:10px; min-width:200px;  padding:5px;" />
</div>
</div>

<div class="row" align="center" >
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"></div>
<div class="col-xs-12 col-sm-12 col-lg-4 col-md-4 col-xl-4">
<textarea name="message" Placeholder="WRITE HERE..." style="margin:10px; min-width:200px;  padding:5px;  " ></textarea>
</div>
</div>


<div class="row" align="center" >
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"></div>
<div class="col-xs-12 col-sm-12 col-lg-4 col-md-4 col-xl-4">
<input type="submit" value="SUBMIT" name="submit" onclick="return validate()" style="margin:20px; padding:5px; font-size:14px; background-color:#d11237; color:#ffffff; border-color:#d11237; " />
</div>
</div>


</form>

</div >


<div id="map" style="width:100%;height:500px; margin:20px;"></div>

 <script>
      function initMap() {
        var uluru = {lat: 13.007790, lng: 77.547596};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
		var infowindow = new google.maps.InfoWindow({
		content: "Chinmaya Trading Centre"
		});
		infowindow.open(map,marker);
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChSQPEIyUa-lBemYGvpQ4kBZJJNLu-S2s&callback=initMap">
    </script>


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