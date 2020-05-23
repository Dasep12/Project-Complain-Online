<?php 
include 'koneksi.php';
if (isset($_POST['update'])) {
	$username = $_POST['username'];
	$nik = $_POST['nik'];
	$lokasi = $_POST['lokasi'];
	$pass = $_POST['pass'];
	$pass2 = $_POST['pass2'];
	$id = $_POST['id'];
	$poto = $_FILES['poto']['name'];
	$tmp = $_FILES['poto']['tmp_name'];
	$divisi = $_POST['divisi'];
	//folder poto akan disimpan
	$folder = 'profile/';
	$size_poto = $_FILES['poto']['size'];

	//Ekstensi Diijinkan
	$exe_diijinkan = array('png','jpg','jpeg','');
	//seleksi ekstensi yang masuk
	$ekstensi = explode('.', $poto);
	$explode = $ekstensi[count($ekstensi)-1];
	


	//ukuran yang di bolehkan
	$ukuran = 1200000 ;

	//seleksi kebenaran password
	$row = "SELECT * FROM user WHERE id='$id'";
	$query_pass = $koneksi->query($row);
	$result_pass = mysqli_fetch_array($query_pass);
	$seleksi_pass = $result_pass['pass'];


	if($size_poto>$ukuran){
		echo "Gambar Terlalu Besar";
	}elseif(!in_array($explode,$exe_diijinkan)) {
		echo "Exe tidak di ijinkan";
	}elseif(empty($pass2)){ 
    echo '
    		<div class="alert">
                  <a class="btn btn-warning btn-block text-white"><i class="fab fa-info-f fa-fw"></i>Password Di Tolak</a>
             </div>';
	}elseif($pass2!=$seleksi_pass){
    echo '
    		<div class="alert">
                  <a class="btn btn-warning btn-block text-white"><i class="fab fa-info-f fa-fw"></i>Password Salah</a>
             </div>';
	}elseif($pass2==$seleksi_pass && empty($pass) && empty($poto)){
			mysqli_query($koneksi,"UPDATE user set  username='$username' , nik='$nik' , lokasi = '$lokasi', divisi='$divisi' WHERE id='$id'");
			echo "<script>profile()</script>";
	}elseif($pass2==$seleksi_pass && move_uploaded_file($tmp, $folder . $poto)){
			mysqli_query($koneksi,"UPDATE user set poto='$poto' , username='$username' , nik='$nik' , lokasi = '$lokasi' , divisi='$divisi' WHERE id='$id'");
			echo "<script>profile()</script>";
	}elseif($pass2==$seleksi_pass && strlen($pass) < 6){
    echo '
    		<div class="alert">
                  <a class="btn btn-warning btn-block text-white"><i class="fab fa-info-f fa-fw"></i>Password Kurang Dari 6 Char</a>
             </div>';
	}elseif($pass2==$seleksi_pass && !empty($pass)){
			mysqli_query($koneksi,"UPDATE user set pass='$pass' , username='$username' , nik='$nik', lokasi = '$lokasi' , divisi='$divisi'  WHERE id='$id'");
			echo "<script>password()</script>";
	}


}