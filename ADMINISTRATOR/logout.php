<?php
date_default_timezone_set('Asia/Jakarta');
include 'koneksi.php' ;
session_start();
$user 		 = $_SESSION['nama'] ;
$sesi 		 = session_destroy();
$id 		 = $_SESSION['id'];
$status 	 = 'offline' ;
$last_online = date('Y-m-d / h:i:s') ;
	if ($sesi) {

		$data = "UPDATE admin_it set status='$status' , last_online= '$last_online' WHERE id='$id' " ;
		$qry  = $conn->query($data);
		echo "<script>
		alert('Godbye $user')
		document.location.href='page-login.php';
		</script>";	
	}


?>