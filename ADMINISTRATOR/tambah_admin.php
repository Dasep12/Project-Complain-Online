<?php

include 'koneksi.php';
	if (isset($_POST['tambah'])) {
		
		date_default_timezone_set('Asia/Jakarta');
		$nama = $_POST['nama'];
		$username = $_POST['username'];
		$nik = $_POST['nik'];
		$password = $_POST['pass'];
		$gender = $_POST['gender'];
		$level = $_POST['level'];
		$sekolah = $_POST['sekolah'];
		$jurusan = $_POST['jurusan'];
		$poto = $_FILES['poto']['name'];
		$size = $_FILES['poto']['size'];
		$tmp = $_FILES['poto']['tmp_name'];
		$alamat = $_POST['alamat'];
		$join = date('Y-m-d');
		$folder = "profile/";

		$gambar_diijinkan = array('jpg','jpeg','png','');
		$ekstensi = explode('.', $poto);
		$explode = $ekstensi[count($ekstensi)-1];

		$max_size = 1200000 ;

		if (!in_array($explode, $gambar_diijinkan)) {
			echo "gambar Tidak Diijinkan";
		}elseif($size > $max_size){
			echo "Gambar Terlalu Besar";
		}elseif($password == '123' || $password=='123456' || $password=='12345' || $password=='1234' || $password=='123456' || $password=='1234567' || $password=='12345678' || $password=='123456789' || $password=='12345678910'){
			echo "<script>
				alert('Password di tolak');
				document.location.href='http://localhost:8080/admin/page.php?page=form_add_user';
				</script>";
		}elseif(strlen($poto) > 0){
			move_uploaded_file($tmp, $folder . $poto);
			$data = "INSERT INTO admin_it (nama , username , nik , pass , gender , level , sekolah , jurusan , poto , folder , alamat , bergabung) VALUES( '$nama' , '$username' , '$nik' , '$password' , '$gender' , '$level' , '$sekolah' , '$jurusan' ,'$poto' ,'$folder' ,'$alamat' , '$join' )" ;
			$qry = $conn->query($data);
			echo "<script>alert('Berhasil Tambah Admin')
				document.location.href='http://localhost:8080/admin/page.php?page=manage_user_admin';
			</script>";
		}elseif(strlen($poto) <= 0){
			$data = "INSERT INTO admin_it (nama , username , nik , pass , gender , level , sekolah , jurusan , alamat , bergabung) VALUES( '$nama' , '$username' , '$nik' , '$password' , '$gender' , '$level' , '$sekolah' , '$jurusan' ,'$alamat' , '$join' )" ;
			$qry = $conn->query($data);
			echo "<script>alert('Berhasil Tambah Admin')
				document.location.href='http://localhost:8080/admin/page.php?page=manage_user_admin';
			</script>";
		}

	}

	?>