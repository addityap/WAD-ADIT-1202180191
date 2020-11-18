<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<title></title>
</head>
<body>
	<nav class="navbar bg-primary justify-content-center">
		<ul class="nav">
			<li class="nav-item">
				<a class="nav-link" href="home.php" style="color: #0d00f2">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="booking.php?tipekamar=" style="color: #0d00f2">Booking</a>
			</li>
		</ul>
	</div>
</nav>

<div class="container" style="padding-top: 70px;">
	<div class="row">
		<div class="col-md-4">
			<form action="mybooking.php" method="POST">
				<div class="form-group">
					<label for="nama">Name</label>
					<input type="nama" class="form-control" id="nama" name="nama" required>
				</div>
				<div class="form-group">
					<label for="date">Check-in</label>
					<input type="date" class="form-control" id="date" name="checkin">
				</div>
				<div class="form-group">
					<label for="durasi">Duration</label>
					<input type="durasi" class="form-control" id="durasi" name="durasi" required>
					<small id="emailHelp" class="form-text text-muted">Day(s)</small>
				</div>
				<?php $tipekamar = $_GET["tipekamar"]; ?>
				<?php
				if($tipekamar == null)
				{
					?>
					<div class="form-group">
						<label for="room">Room Type</label>
						<select class="custom-select" id="room" name="room"> 
							<option value="Standard" data-divid="img/standard.jpg">Standard</option>
							<option value="Superior" data-divid="img/superior.jpg">Superior</option>
							<option value="Luxury" data-divid="img/luxury.jpg">Luxury</option>
						</select>
					</div>
					<?php
				}else{
					?>
					<div class="form-group">
						<label for="kamar">Room Type</label>
						<input readonly type="text" class="form-control" id="room" name="room" value="<?php echo $tipekamar; ?>">
					</div>
					<?php
				}
				?>
				<div class="form-group">
					<label for="svc">Add Service</label>
					<small id="emailHelp" class="form-text text-muted">$20/Service.</small>
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="svc" name="svc1" value="Room Service">
						<label class="custom-control-label" for="svc" >Room Service</label>
					</div>
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="svc1" name="svc2" value="Breakfast">
						<label class="custom-control-label" for="svc1" >Breakfast</label>
					</div>
				</div>
				<div class="form-group">
					<label for="nohp">Phone Number</label>
					<input type="nohp" class="form-control" id="nohp" name="nohp" required>

				</div>
				<div class="form-group">
					<button type="submit" id="submit" name="submit" class="btn btn-primary" style="width: 350px;">Book</button>
				</div>
			</form>
		</div>
		<?php
		if($tipekamar == null)
		{
			?>
			<img class="image-swap" src="img/standard.jpg" style="padding-left: 100px;"width= "550px" height="370px">
			<?php
		}else{
			?>			
			<?php
			if($tipekamar == 'Standard')
			{
				?>
				<img src="img/standard.jpg" style="padding-left: 100px;"width= "550px" height="370px">
				<?php
			}else if($tipekamar == 'Superior'){
				?>
				<img src="img/superior.jpg" style="padding-left: 100px;"width= "550px" height="370px">
				<?php
			}else if($tipekamar == 'Luxury'){
				?>
				<img src="img/luxury.jpg" style="padding-left: 100px;"width= "550px" height="370px">
				<?php
			}
			?>
			<?php
		}
		?>
	</div>
</div>
</body>
<script> 
	$(document).ready(function(){
		$("#room").change(function(){
			var opt = $('option[value='+this.value+']', this);
			var divid = opt.data('divid');
			$('.image-swap').attr("src",divid);
		});
	});
</script>