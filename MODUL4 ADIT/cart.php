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
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">No</th>
					<th scope="col">Nama Barang</th>
					<th scope="col">Harga</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td><?= $_GET["nama"];?></td>
					<td><?= $_GET["harga"];?></td>
					<td><a href="index.php" onclick="return confirm('Yakin ingin menghapus data?');" class="btn btn-danger" role="button">Hapus</button>
						</td>
				</tr>
			</tbody>
		</table>
	</div>



	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>