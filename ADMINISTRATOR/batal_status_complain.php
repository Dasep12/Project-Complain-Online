<?php
include 'koneksi.php';
$id = $_GET['id'];

$data = "UPDATE tabel_complain set status ='pending' , IT='' ,waktu = '' WHERE id='$id'" ;
$sql = $conn->query($data);
		if ($sql) {
			echo "<script>
			alert('Batal Proses');
			document.location.href='page.php?page=complain_masuk';
			</script>";			
		}else{
			echo "<script>
			alert('Gagal');
			document.location.href='page.php?page=complain_masuk';
			</script>";
		}
?>