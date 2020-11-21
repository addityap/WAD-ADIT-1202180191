<?php
session_start();
error_reporting(0);
if (!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}
require 'functions.php';
$nav = $_COOKIE['nav-color'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>MODUL4 LOGIN AND REGISTRASI</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<nav class="navbar navbar-expand-lg <?=$nav?>">
	
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.php">WAD Beauty</a>
		</div>
		<div class="nav navbar-nav">
			<div>
				<a class="fa fa-cart-plus mr-3" href="cart.php"></a>
			</div>
			<p class="text-primary"> Selamat datang, <?php echo $_SESSION["nama"]?> </p>
			<li class="dropdown-toggle text-primary" data-toggle="dropdown" data-display="static" aria-haspopup="true"> 
			</li>
			<div class="dropdown-menu dropdown-menu-lg-right">
				<li class="dropdown-item"><a class="nav-link" href="profile.php">Profile</li></a>
				<li class="dropdown-item"><a class="nav-link" href="logout.php">Logout</li></a>
			</div>
		</div>	
	</div>
</nav>
<body>
	<div class="container" style="padding-top: 90px;">
		<div class="jumbotron text-center">
			<h2>WAD STORE</h2>
			<h8>Tersedia barang apa aja suka suka antum</h8>
			<div class="row mt-4">
				<div class="col-md-3" style="padding-left: 110px;">
					<div class="card text-center" style="width: 18rem;">
						<img class="card-img-top" src="img/standard.jpg">
						<div class="card-body">
							<h5 class="card-title">Standard</h5>
							<h6 class="card-text" style="color: #3742fa">$90/Day</h6>
							<br>
							<br>
							<p class="card-text">Facilities</p> 
							<hr>
							<p class="card-text">1 Single Bed</p> 
							<hr>
							<p class="card-text">1 Bathroom</p> 
							<hr>
							<?php
							$tipekamar = 'Standart Room';
							$harga = '90$' ?>
							<a href="cart.php?nama=<?= $tipekamar?>&harga=<?=$harga?>" class="btn btn-primary" role="button" name="book">Book Now</a>
						</div>
					</div>
				</div>
				<div class="col-md-3" style="padding-left: 110px;">
					<div class="card text-center" style="width: 18rem;">
						<img class="card-img-top" src="img/superior.jpg">
						<div class="card-body">
							<h5 class="card-title">Superior</h5>
							<h6 class="card-text" style="color: #3742fa">$150/Day</h6>
							<br>
							<br>
							<p class="card-text">Facilities</p> 
							<hr>
							<p class="card-text">1 Double Bed</p> 
							<hr>
							<p class="card-text">1 Television and Wi-Fi</p> 
							<hr>
							<p class="card-text">1 Bathroom with hot water</p> 
							<hr>
							<?php
							$tipekamar = 'Superior Room';
							$harga = '150$' ?>
							<a href="cart.php?nama=<?= $tipekamar?>&harga=<?=$harga?>" class="btn btn-primary" role="button">Book Now</a>
						</div>
					</div>
				</div>
				<div class="col-md-3" style="padding-left: 110px;">
					<div class="card text-center" style="width: 18rem;">
						<img class="card-img-top" src="img/luxury.jpg">
						<div class="card-body">
							<h5 class="card-title">Luxury</h5>
							<h6 class="card-text" style="color: #3742fa">$200/Day</h6>
							<br>
							<br>
							<p class="card-text">Facilities</p> 
							<hr>
							<p class="card-text">2 Double Bed</p> 
							<hr>
							<p class="card-text">2 Bathroom with hot water</p> 
							<hr>
							<p class="card-text">1 Kitchen</p> 
							<hr>
							<p class="card-text">1 Television and Wi-Fi</p> 
							<hr>
							<p class="card-text">1 Workroom</p> 
							<hr>
							<?php
							$tipekamar = 'Luxury Room';
							$harga = '200$' ?>
							<a href="cart.php?nama=<?= $tipekamar?>&harga=<?=$harga?>" class="btn btn-primary" role="button">Book Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>