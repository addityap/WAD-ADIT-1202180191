<?php
require 'function.php';

if( isset($_GET['id']) ){
	$id = $_GET['id'];
	$qqq=mysqli_query($con, "SELECT *FROM event_table WHERE id=$id");
	$dt=mysqli_fetch_array($qqq);
	
	
	if ( is_file("file/".$dt['gambar'])){
		unlink("file/".$dt['gambar']);
		$sql = "DELETE FROM event_table WHERE id=$id";
		$query = mysqli_query($con, $sql);
		echo "
		<script>
		alert('data berhasil dihapus');
		document.location.href = 'home.php';
		</script>
		";
	}else{
		echo "
		<script>
		alert('data gagal dihapus');
		document.location.href = 'home.php';
		</script>
		";
	}
}else {
	echo "
		<script>
		alert('data gagal dihapus');
		document.location.href = 'home.php';
		</script>
		";
}
?>