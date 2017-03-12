<!DOCTYPE html>
<html>

<head>

	<link rel="shortcut icon" href="logo.png" type="image/x-icon"/>
	<link rel="stylesheet" href="header.css" >
	<title>Home</title>

	<meta charset="utf-8" >
    <link rel="stylesheet" href="indexStyleSheet.css" >
	
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	
	
	<style>
	
	.card{
		
		transition: 0.1s;
	}
	
	.card:hover {
		box-shadow: 0 8px 16px 0 rgba(209,18,55,0.99);
		cursor:pointer;
	}


	</style>
	
</head>

<body>


<header >
<div class="container">
	<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2" >
<img src="logo.png" class="img-responsive"  style="max-width: 50%;" >
</div>
	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
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

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  
  
   <div class="carousel-inner" role="listbox">
   
   <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
   </ol>

   
    <div class="item active">
      <img src="CarouselPics/img1.jpg" alt="Corporate Gifts" height="100%">
	   <div class="carousel-caption">
        <h2><b>CORPORATE GIFTS</b></h2>
        <p>Have a look at our wide range of Unique Corporate Gifts</p>
      </div>
    </div>

    <div class="item">
      <img src="CarouselPics/img2.jpg" alt="No Name">
		 <div class="carousel-caption">
        <h2><b>BACK TO SCHOOL</b></h2>
        <p>Make your schooling, a fun!!</p>
      </div>
	</div>

    <div class="item">
      <img src="CarouselPics/img3.jpg" alt="Customized Clocks">
		 <div class="carousel-caption">
        <h2><b>CUSTOMIZED CLOCKS</b></h2>
        <p>Time can change everything and so can our customized clocks</p>
      </div>
	</div>

    <div class="item">
      <img src="CarouselPics/img4.jpg" alt="Solar Lights">
		 <div class="carousel-caption">
        <h2><b>SOLAR LIGHTS</b></h2>
        <p>The Sun is simply one big battery for us ;D</p>
      </div>
	</div>
	
	
	<!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	<span class="icon-prev" ></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="icon-next" ></span>
  </a>
  
	
  </div>

   
  
</div>



<article  style="margin-top: 20px; margin-bottom: 20px;">

	<h3 style="padding: 13px; background-color: #d11237; color: #fff;" align="center">ABOUT US</h3>

	<p style="padding:20px; text-align: justify;">&emsp;&emsp;&emsp;Based at Bengaluru, Karnataka, India, we, “CHINMAYA TRADING CENTRE,”
	are one of the leading names engaged in manufacturing and supplying a superior quality range of Promotional Items like WALL CLOCKS, 
	T-Shirts etc. In addition, we also provide printing and designing services for the offered products. Our product range comprises 
	Promotional clocks, Leather Promotional Key Chains, Awards, Trophies, Promotional Leather Wallets, Mementos, Promotional T-Shirts,
	Customised Gifts, Promotional Wooden Products, Corporate Gifts, Leather Gifts T-Shirts, Promotional Caps, Imported Gifts, Business
	Promotional Pen stand and High Quality solar lights. In addition, we also offer Promotional Steel Products, Bagpack & Travel Bags,
	Promo Certificate Holder, Promotional Gifts Catalog.<br/>&emsp;&emsp;&emsp;Working towards “Elegance, Quality and Innovation” 
	is our motto and we strive hard to attain complete client satisfaction by following this path. We ensure that all the customized 
	requirements of clients are fulfilled in a timely manner. Also, our efforts are directed towards retaining older clients as well 
	as attracting new names. Moreover, our products are specifically suitable for occasions like Diwali, New Year and Christmas. 
	Also, these can be effectively used in corporate events like product launch and meetings.</p>
	
	<div class="container">
	<div class="row">
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-2">
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-2 text-center">
	<a href="aboutUs.php" style="text-decoration:none; color:#fff;"> <button style="background-color: #d11237; padding: 10px; margin: 10px; color: #fff; border: 0px;" align="center" >Read More</button></a>
	</div>
</article>



<article  style="margin-top: 0px;">

	<h3 style="padding: 13px; background-color: #d11237; color: #fff;" align="center">OUR PRODUCTS</h3>

	<div class="container" style="margin-top: 30px; margin-bottom: 30px;">
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-2">
		
		<a href="corporateGifts.php" style="text-decoration: none; color: #fff; margin:5px;">
			<div class="card">
			
				<div class="card-block" align="center">
				<img class="card-img-top" src="categoryPics/CorporateGifts.jpg" alt="Card image cap" width="100%">
				<button style="margin:30px; background-color:#d11237; border: 0;  padding: 5px 30px 5px 30px;" align="center" > CORPORATE GIFTS </button>
				</div>
			</div>
			
		</a>
		</div>
		
		
		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-2">
		<a href="schoolProducts.php" style="text-decoration: none; color: #fff; margin:5px;">
			<div class="card">
			
				<div class="card-block" align="center">
				<img class="card-img-top" src="categoryPics/School.jpg" alt="Card image cap" width="100%">
				<button style="margin:30px; background-color:#d11237; border: 0;  padding: 5px 30px 5px 30px;" align="center" > BACK TO SCHOOL</button>
				</div>
			</div>
		 </a>
		</div>
		
		<div class="col-sm-6">
		</div>
		
		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-2">
		<a href="customizedClocks.php" style="text-decoration: none; color: #fff; margin:5px;">
			<div class="card">
			
				<div class="card-block" align="center">
				<img class="card-img-top" src="categoryPics/CustomizedClocks.jpg" alt="Card image cap" width="100%">
				<button style="margin:30px; background-color:#d11237; border: 0;  padding: 5px 15px 5px 15px;" align="center" > CUSTOMIZED CLOCKS </button>
				</div>
			</div>
		</a>
		</div>
		
		
		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-2">
		<a href="solarLights.php" style="text-decoration: none; color: #fff; margin:5px;">
			<div class="card">
			
				<div class="card-block" align="center">
				<img class="card-img-top" src="categoryPics/SolarLight.jpg" alt="Card image cap" width="100%">
				<button style="margin:30px; background-color:#d11237; border: 0;  padding: 5px 30px 5px 30px;" align="center" > SOLAR LIGHTS </button>
				</div>
			</div>
		</a>
		</div>
		
		
	</div>
	</div>
	
</article>




<content>



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