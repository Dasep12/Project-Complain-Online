<?php
include 'koneksi.php';
$id = $_GET['id'];
date_default_timezone_set('Asia/Jakarta');
$date = date('h:i:s');
$data = "UPDATE tabel_complain set status ='proses' , it='dasep' ,waktu='$date' WHERE id='$id'" ;
$sql = $conn->query($data);
		if ($sql) {
			echo "<script>
			alert('Proses');
			document.location.href='page.php?page=complain_masuk';
			</script>";			
		}else{
			echo "<script>
			alert('Gagal');
			document.location.href='page.php?page=complain_masuk';
			</script>";
		}
?>