<?php
date_default_timezone_set('Asia/Jakarta');
include 'koneksi.php';
if (isset($_POST['reply'])) {
	$id = $_POST['id'];
	$judul = $_POST['judul'];
	$category = $_POST['category'];
	$isi_complain =$_POST['isi_complain'];
	$filename = $_POST['filename'];
	$folder = $_POST['folder'];
	$pengirim = $_POST['pengirim'];
	$tgl = $_POST['tgl'];
	$lokasi = $_POST['lokasi'];
	$no_ticket = $_POST['no_ticket'];
	$status = 'done';
	$it = $_POST['it'];
	$balasan = $_POST['balasan'];
	$waktu = $_POST['waktu'];
	$tgl_selesai = date('Y-m-d');


	//mengambil jam durasi selisih pengerjaan
	$time = strtotime($waktu);
	$waktu1 = date('h:i:s');
	$time1 = strtotime($waktu1);
	$beda = $time1-$time;
	$jam = floor($beda/(60*60));
	$menit = $beda-$jam*(60*60);
	$detik = $beda-$jam*(60*60*60);
	$durasi = $jam . ' jam ' . floor($menit/60) . ' menit ' . floor($detik/60) .' detik'; // hasil durasi 
	//end of script

	$data = "INSERT INTO complain_selesai (judul , category , isi_complain ,filename ,folder , pengirim , tgl ,lokasi ,no_ticket , status ,it , balasan , waktu,durasi ,tgl_selesai)VALUES('$judul' , '$category' , '$isi_complain' ,'$filename' ,'$folder','$pengirim' , '$tgl' ,'$lokasi' ,'$no_ticket' , '$status' ,'$it' ,'$balasan' ,'$waktu','$durasi','$tgl_selesai')";
	$data2 =$conn->query("DELETE FROM tabel_complain WHERE id='$id'");
	$qry = $conn->query($data);

	if ($qry && $data2) {
		echo "<script>
		alert('Berhasil');
		document.location.href='page.php?page=complain_masuk';
		</script>";
	}
}
?>
