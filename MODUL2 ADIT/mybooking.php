<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
	<div class="container" style="padding-top: 70px">
		<table class="table">
			<thead>
				<tr>
					<th>Booking Number</th>
					<th>Name</th>
					<th>Check-in</th>
					<th>Check-out</th>
					<th>Room Type</th>
					<th>Phone Number</th>
					<th>Service</th>
					<th>Total Price</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<?php
					$lamahari = $_POST['durasi'];
					$checkin = $_POST['checkin'];
					$checkout = date('Y-m-d', strtotime($checkin. " + {$lamahari} days"));

					?>

					<td><?= $rand = rand(10000, 20000); ?></td>
					<td><?= $_POST['nama'];?></td>
					<td><?= $_POST['checkin'];?></td>
					<td><?php echo $checkout;?></td>
					<td><?= $_POST['room'];?></td>
					<td><?= $_POST['nohp'];?></td>
					<td>
						<li><?= !empty($_POST['svc1']) ? $_POST['svc1'] : 'No Room Service';?></li> 
						<br> 
						<li><?= !empty($_POST['svc2']) ? $_POST['svc2'] : 'No BreakFast';?></li> 

					</td>
					<td>
						<?php
						$rooms = $_POST['room'];
						$dur = $_POST['durasi'];
						$hargaserv1 = 0;
						$hargaserv2 = 0;
						$hargatotal = 0;
						if (!empty($_POST['svc1'])) { $hargaserv1 = 20; } else { $hargaserv1 = 0; }
						if (!empty($_POST['svc2'])) { $hargaserv2 = 20; } else { $hargaserv2 = 0; }
						$totalhargaserv = ((int)$hargaserv1 + (int)$hargaserv2);
						if ($rooms == "Standard") {
							$hargatotal = 90 * $dur + $totalhargaserv;
							echo ('$'. $hargatotal);
						} 
						else if ($rooms == "Superior") {
							$hargatotal = 150 * $dur + $totalhargaserv;
							echo ('$'. $hargatotal);
						} 
						else if ($rooms == "Luxury") {
							$hargatotal = 200 * $dur + $totalhargaserv;
							echo ('$'. $hargatotal);
						}
						?>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>