<?php 
include 'koneksi.php';

if (isset($_POST['kirim'])) {
	# code...
	date_default_timezone_set('Asia/Jakarta');
$nama = $_POST['username'];
$pass = $_POST['pass'];

$data = "SELECT * FROM user WHERE username='$nama' AND pass='$pass'";
$login = $koneksi->query($data);
$result = mysqli_fetch_array($login);
$id = $result['id'];
$count = $login->num_rows;
$bulan = date('m');
$tgl = date('Y-m-d - h:i:s');

	//identitas buku tamu / pengunjung

	$nama = $result['username'];
	$nik = $result['nik'];
	$waktu = date('Y-m-d');
if ($count>0) {
	session_start();
	$_SESSION['username'] = $nama;
	$user = $_SESSION['username'];
	
	//update status user menjadi online ketika login
	mysqli_query($koneksi,"UPDATE user set last_online='$tgl' , status='online' WHERE id='$id' ");

	//memasukan data ke tabel catatan pengunjung buku / tamu
	mysqli_query($koneksi,"INSERT INTO pengunjung (nama , waktu , nik , bulan)VALUES('$nama' , '$waktu' , '$nik' , '$bulan')");
	header("location:beranda.php");
}elseif(empty($pass) && empty($nama)){
	$info = '<div class="my-2"></div>
		<a href="#" style="width:100%;"  class="btn btn-warning btn-icon-split">
		<i style="margin-top:10px;margin-left:12px;" class="fas fa-exclamation-triangle"></i><span class="text text-center">Data Tidak Ada</span>
		</a>';
}elseif(empty($nama)){
	$info_user = '<label>user masih kosong</label>';
}elseif(empty($pass)){
	$info_pass = '<label>password masih kosong</label>';
}

}
?>