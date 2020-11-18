<!DOCTYPE html>
<html>
<head>
	<title>Booking WAD</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
	<nav class="navbar bg-primary justify-content-center">
		<ul class="nav">
			<li class="nav-item">
				<a class="nav-link" href="home.php" style="color: #0d00f2">Home</a>
			</li>
			<li class="nav-item">
				<?php $tipekamar = null; ?>
				<a class="nav-link" href="booking.php?tipekamar=<?php echo $tipekamar; ?>" style="color: #0d00f2">Booking</a>
			</li>
		</ul>
	</div>
</nav>
<h4 style="color: #1e90ff" class="text-center">EAD HOTEL</h4>
<h4 style="color: #1e90ff" class="text-center">Welcome To 5 Star Hotel</h4>
<div class="container" style="padding-top: 80px;">
	<div class="row">
		<div class="col-md-3" style="padding-left: 70px;">
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
					<?php $tipekamar = 'Standard'; ?>
					<a href="booking.php?tipekamar=<?php echo $tipekamar; ?>" class="btn btn-primary" role="button">Book Now</a>
				</div>
			</div>
		</div>
		<div class="col-md-3" style="padding-left: 140px;">
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
					<?php $tipekamar = 'Superior'; ?>
					<a href="booking.php?tipekamar=<?php echo $tipekamar; ?>" class="btn btn-primary" role="button">Book Now</a>
				</div>
			</div>
		</div>
		<div class="col-md-3" style="padding-left: 210px;">
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
					<?php $tipekamar = 'Luxury'; ?>
					<a href="booking.php?tipekamar=<?php echo $tipekamar; ?>" class="btn btn-primary" role="button">Book Now</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>