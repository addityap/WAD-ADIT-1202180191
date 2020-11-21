<?php
session_start();
error_reporting(0);
$nav = $_COOKIE['nav-color'];
if (!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}
require 'functions.php';
if (isset($_POST["update"])) {
	$nav_color = $_POST['nav_color'];
} else {
	if (isset($_COOKIE['nav-color'])) {
		$_POST['nav_color'] = $background_color = $_COOKIE['nav-color'];
	}
}
if (isset($_POST["update"])){
	setcookie('nav-color', $_POST['nav_color'], time()+120, '/');
}

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
				<li class="dropdown-item"><a class="nav-link" href="Profile.php">Profile</li></a>
				<li class="dropdown-item"><a class="nav-link" href="logout.php">Logout</li></a>
			</div>
		</div>	
	</div>
</nav>
<body>
	<div class="container shadow p-3 mb-5 bg-white rounded mt-5">
		<form class="form-group" action="" method="post">
			<h4 class="text-center">PROFILE</h4>
			<hr>
			<div class="col-md-10 ml-4">
				<label for="email">E-mail</label>
				<p><?php echo $_SESSION["email"]?></p>
				<label for="nama">Nama</label>
				<input class="form-control" type="text" name="nama" value="<?php echo $_SESSION["nama"]?>" id="nama" required="1">
				<label for="nohp">No. Handphone</label>
				<input class="form-control" type="text" name="nohp" id="nohp" required="1" value="<?php echo $_SESSION["nohp"]?>">
				<label for="katasandi">Katasandi</label>
				<input class="form-control" type="password" name="katasandi" id="katasandi">
				<label for="sandi">Konfirmasi Kata sandi</label>
				<input class="form-control" type="password" name="sandi" id="nama">
				<br>
				<label for="room">Warna Navbar</label>
				<select name="nav_color">
					<?php 
					$colors = array('bg-primary' => 'Biru', 'bg-light' => 'Light', 'bg-danger' => 'Merah');
					foreach ($colors as $name => $value) {
						$selected = $name == @$_POST['nav_color'] ? 'SELECTED="SELECTED"' : '';
						echo '<option value="'.$name.'"'.$selected.'>'.$value.'</option>';
					}
					?>
				</select>
			</div>
			<div class="col-md-10 text-center ml-4">
				<button type="submit" id="update" name="update" class="btn btn-primary">SUBMIT</button>
				<a href="index.php" class="btn btn-danger" role="button">CANCEL</a>
			</div>
		</form>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	</body>
	</html>