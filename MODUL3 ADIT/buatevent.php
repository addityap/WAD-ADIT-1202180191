<?php
require 'function.php';

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$deskripsi = $_POST['deskripsi'];
	$gambar = $_POST['gambar'];
	$kategori = $_POST['kategori'];
	$tanggal = $_POST['tanggal'];
	$jmulai = $_POST['jmulai'];
	$jakhir = $_POST['jakhir'];
	$tempat = $_POST['tempat'];
	$harga = $_POST['harga'];
	$benefit = $_POST['benefit'];
//UPLOD GAMBAR
	$rand = rand();
	$tipefile =  array('png','jpg','jpeg','gif');
	$filename = $_FILES['gambar']['name'];
	$ukuran = $_FILES['gambar']['size'];
	$tmp_file = $_FILES['gambar']['tmp_name'];
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

//PROSES SIMPAN 
	if(!in_array($ext,$tipefile) ) {
		header("location:home.php?alert=gagal");
	}else{
		if($ukuran < 1543231){
			$ran = $rand.'_'.$filename;
			move_uploaded_file($tmp_file, 'file/'.$rand.'_'.$filename); 
			$benefits = explode(",", $list['benefit']);
			mysqli_query($con, "INSERT INTO event_table (name, deskripsi, gambar, kategori, tanggal, mulai, berakhir, tempat, harga, benefit) value ('$name', '$deskripsi', '$ran', '$kategori', '$tanggal', '$jmulai', '$jakhir', '$tempat', '$harga', '$benefits')");
			header('location: home.php?status=success');
		}else{
			header('location: home.php?status=failed');
		}
	}
}
?> 
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<title></title>
</head>
<nav class="navbar navbar-expand-lg bg-primary">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand text-white" href="home.php">EAD EVENTS</a>
		</div>
		<div class="nav navbar-nav">
			<li class="nav-item"><a class="nav-link text-white" href="home.php">Home</li></a>
			<li class="nav-item"><a class="nav-link btn btn-outline-light" href="buatevent.php">BUAT EVENT</li></a>
		</div>	
	</nav>
	<body>
		<form action="" method="POST" enctype="multipart/form-data">
			<h4 class="text-primary mt-5 ml-3">Buat Event</h4>
			<div class="row">
				<div class="col-md-6 ml-3">
					<div class="card">
						<div class="card-header bg-danger"></div>
						<div class="card-text">
							<div class="form-group">
								<label for ="nama" class="col mt-2">Name</label>
								<div class="col-12">
									<input type="text" name="name" class="form-control" placeholder="Name Event">
								</div>
								<label for ="nama" class="col mt-2">Deskripsi</label>
								<div class="col-12">
									<textarea name="deskripsi" class="form-control" rows="4" placeholder="Deskripsi Event"> </textarea>
								</div>
								<label for="upload" class="col mt-2">Upload Gambar</label>
								<div class="custom-file">
									<input type="file" class="custom-file-input" name="gambar" id="customfile">
									<label class="custom-file-label ml-3 mr-3" for="customfile">Pilih Gambar</label>
								</div>
								<label for="Kategori" class="col mt-4 ">Kategori</label>
								<div class="form-check form-check-inline ml-3 mb-3">
									<input class="form-check-input" type="radio" name="kategori" value="Online" id="online">
									<label class="form-check-label" for="online">Online</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="kategori" value="Offline" id="offline">
									<label class="form-check-label" for="offline">Offline</label>
								</div>
							</div>
							<br> 
							<br>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="card">
						<div class="card-header bg-primary"></div>
						<div class="card-text">
							<div class="form-group">
								<label for ="tanggal" class="col mt-2">Tanggal</label>
								<div class="col-12">
									<input type="date" name="tanggal" class="form-control">
								</div>
								<div class="form-inline">
									<label for ="jmulai" class="ml-3 mt-2">Jam Mulai</label>
									<label for ="jakhir" class="col mt-2 ml-2">Jam Berakhir</label>
								</div>
								<div class="form-inline">
									<input type="time" name="jmulai" class="form-control col ml-3 mt-2">
									<input type="time" name="jakhir" class="form-control col ml-2 mt-2 mr-3">
								</div>
								<label for ="tempat" class="col mt-2">Tempat</label>
								<div class="col-12">
									<input type="text" name="tempat" class="form-control" placeholder="Tempat">
								</div>
								<label for ="harga" class="col mt-2">Harga</label>
								<div class="col-12">
									<input type="text" name="harga" class="form-control">
								</div>
								<label for="benefit" class="col mt-2">Benefit</label>
								<div class="form-check form-check-inline ml-3 mb-3">
									<input class="form-check-input" type="checkbox" name="benefit" value="Snacks" id="snacks">
									<label class="form-check-label" for="snacks">Snacks</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="checkbox" name="benefit" value="Sertifikat" id="sertifikat">
									<label class="form-check-label" for="sertifikat">Sertifikat</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="checkbox" name="benefit" value="Souvenir" id="souvenir">
									<label class="form-check-label" for="souvenir">Souvenir</label>
								</div>
								<div class="float-right mb-3 mr-2">
									<button type="submit" name="submit" id="submit" class="btn btn-primary mr-2">Submit</button>
									<button type="reset" name="reset" class="btn btn-danger">Cancel</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
		<script>
			$(".custom-file-input").on("change", function() {
				var fileName = $(this).val().split("\\").pop();
				$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
			});

			function home() {
				window.location = "index.php";
			}
		</script>
	</body>
	</html>