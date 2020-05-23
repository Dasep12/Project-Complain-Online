<?php
include 'koneksi.php';
$id = $_GET['id'];

$data = "DELETE FROM tabel_complain WHERE id='$id'" ;
$sql = $conn->query($data);
		if ($sql) {
			echo "<script>
			alert('Complain Dihapus');
			document.location.href='page.php?page=complain_masuk';
			</script>";			
		}else{
			echo "<script>
			alert('Gagal');
			document.location.href='page.php?page=complain_masuk';
			</script>";
		}
?>