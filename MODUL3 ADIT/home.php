<?php
require 'function.php';
$result= mysqli_query($con, "SELECT * FROM event_table");
$cek = mysqli_num_rows($result);
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<title></title>
</head>
<nav class="navbar navbar-expand-lg bg-primary">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand text-white" href="home.php">EAD EVENTS</a>
		</div>
		<div class="nav navbar-nav">
			<li class="nav-item"><a class="nav-link text-white" href="home.php">HOME</li></a>
			<li class="nav-item"><a class="nav-link btn btn-outline-light" href="buatevent.php">BUAT EVENT</li></a>
		</div>	
	</nav>
	<body>
		<div class="container">
			<h3 class="text-primary text-center mt-4">WELCOME to EAD EVENTS</h3>
			<div class="row mt-5 ml-5">
				<?php
				if($cek == 0){
					echo "No Events Found";
				}while($list = mysqli_fetch_array($result)){
					?>
					<div class="col-4 mb-5">
						<div class="card" style="width: 16rem; height: 35rem;">
							<img src="file/<?php echo $list['gambar']?>" class="card-img-top">
							<div class="card-body">
								<h5 class="card-title"><?= $list['name']?></h5>
								<p class="fas fa-calendar-alt" style="color: orange"> <?= $list['tanggal']?></p>
								<br>
								<p class="fas fa-map-marker-alt" style="color: orange"> <?= $list['tempat']?></p>
								<p class="card-text"><i><?= $list['kategori']?></i></p>
								<hr/>
								<a href="detail_event.php?id=<?= $list['id'];?>" class="btn btn-primary float-right">Detail</a>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
		<!-- JAVASCRIPT DARI BOOTSTRAP -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

	</body>
	</html>
	