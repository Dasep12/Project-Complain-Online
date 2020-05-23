<?php
include 'koneksi.php';
if (isset($_POST['kirim'])) {

	$tgl = $_POST['tanggal'];
	$pengirim = $_POST['pengirim'];
	$masukan = $_POST['masukan'];
	$status = 0 ;

	if (empty($pengirim)) {
		echo '
			<script>
			nama();
			</script>';
	}elseif (empty($masukan)) {
		echo '
			<script>
			masukan();
			</script>';
	}else{
		$data = "INSERT INTO masukan (tanggal , pengirim , masukan ,status)VALUES('$tgl', '$pengirim' , '$masukan' , '$status')";
		$row = $koneksi->query($data);
		echo '
			<script>
			berhasil();
			</script>';
	}
	}			

?>