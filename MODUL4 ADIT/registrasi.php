<?php

require 'functions.php';
error_reporting(0);
if(isset($_POST["register"])){

	if(registrasi($_POST)> 0){
		echo "<script>
		alert('data berhasil ditambahkan!');
		</script>
		";
	}else{
		echo mysqli_error($conn);
	}
}
$nav = $_COOKIE['nav-color']
?>

<!DOCTYPE html>
<html>
<head>
	<title>MODUL4 LOGIN AND REGISTRASI</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
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
			<li class="nav-item"><a class="nav-link" href="login.php">Login</li></a>
			<li class="nav-item"><a class="nav-link" href="registrasi.php">Register</li></a>
		</div>	
	</div>
</nav>
<body>
	<div class="container shadow p-3 mb-5 bg-white rounded mt-5">
		
		<form class="form-group" action="" method="post">
			<h4 class="text-center">REGISTRASI</h4>
			<hr>
			<div class="col-md-10 ml-4">
				<label for="nama">Nama</label>
				<input class="form-control" type="text" name="nama" placeholder="Masukin Nama" id="nama" required="1">
				<label for="email">E-mail</label>
				<input class="form-control" type="text" name="email" placeholder="local@host" id="email" required="1">
				<label for="nohp">No. Handphone</label>
				<input class="form-control" type="text" name="nohp" id="nohp" required="1">
				<label for="katasandi">Katasandi</label>
				<input class="form-control" type="password" name="katasandi" id="katasandi" required="1">
				<label for="sandi">Konfirmasi Kata sandi</label>
				<input class="form-control" type="password" name="sandi" id="nama" required="1">
				<br>
			</div>
			<div class="col-md-10 text-center ml-4">
				<button type="submit" id="register" name="register" class="btn btn-primary">Registrasi</button>
			</div>
		</form>
		<p class="text-center">Sudah Punya akun ? <a href="login.php">Login</p>
		</div>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	</body>
	</html>