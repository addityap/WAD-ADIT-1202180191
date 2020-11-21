<?php
session_start();
error_reporting(0);
if (isset($_SESSION["login"])){
	header("Location: index.php");
	exit;
}

require 'functions.php';

//cek cookie 
if (isset ($_COOKIE['login']) && isset ($_COOKIE['key'])){
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];

	//ambil username berdasarkan id

	$res = mysqli_query($conn,'SELECT * FROM user WHERE id = $id');
	
	$dt = mysqli_fetch_assoc($res);

	if ($key === hash('sha256', $dt['username']) ){
		header("Location : index.php");
	}
}


if( isset($_POST["login"])){

	$email = $_POST["email"];
	$katasandi = $_POST["password"];

	$verify= mysqli_query($conn,"SELECT * FROM user WHERE email = '$email'");

	//cek email
	if (mysqli_num_rows($verify) === 1){

		//cek password
		$dt = mysqli_fetch_assoc($verify);
		if ( password_verify($katasandi, $dt["password"])){

			$_SESSION["login"] = true;
			$_SESSION["nama"] = $dt["nama"];
			$_SESSION["email"] = $dt["email"];
			$_SESSION["nohp"] = $dt["no_hp"];
			//cek remember me 

			if (isset($_POST['check'])){
				//buat cookie
				setcookie('id',$dt['id'], time()+120);
				setcookie('key',hash('sha256',$dt['email']), time()+120);
			}
			header("Location: index.php");
			exit;
		}
	}

	$error = true;
}
$nav = $_COOKIE['nav-color'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>MODUL4 LOGIN AND REGISTRASI</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<nav id="navbar" class="navbar navbar-expand-lg <?=$nav?>">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.php">WAD Beauty</a>
		</div>
		<div class="nav navbar-nav">
			<li class="nav-item"><a class="nav-link" href="login.php">Login</li></a>
			<li class="nav-item"><a class="nav-link" href="registrasi.php">Register</li></a>
		</div>	
	</div>
</nav>
<body>
	<?php if (isset($error)) :?>
		<div class="alert alert-danger" role="alert">
			Username / Password Salah!
		</div>
	<?php endif; ?>
	<div class="container shadow p-3 bg-white rounded mt-5">
		<form class="form-group" action="" method="post">

			<h4 class="text-center mt-3">Login</h4>
			<hr>
			<div class="col-md-10 ml-4">
				<label for="email">E-Mail</label>
				<input type="text" name="email" id="email" class="form-control" placeholder="Masukan Email">
				<label for="password">Kata Sandi</label>
				<input type="password" name="password" placeholder="Kata sandi" id="password" class="form-control">

				<div class="form-group ml-4 mt-3">
					<input type="checkbox" class="form-check-input" id="check1" name="check">
					<label class="form-check-label" for="check1">Remember Me</label>
				</div>
			</div>
			<div class="col-md-10 text-center ml-4">
				<button type="submit" id="login" name="login" class="btn btn-primary">Login</button>
			</div>
			<p class="text-center">Belum Punya akun ? <a href="registrasi.php">Daftar</p>
			</form>
		</div>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	</body>
	</html>