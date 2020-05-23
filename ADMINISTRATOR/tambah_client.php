<?php
	include 'koneksi.php';
	date_default_timezone_set('Asia/Jakarta');
	if (isset($_POST['tambah'])) {
		$nama 		= $_POST['nama'];
		$username	= $_POST['username'];
		$nik		= $_POST['nik'];
		$pass		= $_POST['pass'];
		$divisi		= $_POST['divisi'];
		$lokasi		= $_POST['lokasi'];
		$level		= $_POST['level'];
		$gender		= $_POST['gender'];
		$join		= date('Y-m-d');
		$poto		= $_FILES['poto']['name'];
		$size 		= $_FILES['poto']['size'];
		$folder		= '../Complain2/profile/';
		$tmp 		= $_FILES['poto']['tmp_name'];
		$ekstensi	= array('png','jpeg','jpg','');
		$explode	= explode('.', $poto);
		$seleksi	= $explode[count($explode)-1];
		$max_size	= 10024 * 240;
		$var 		= strlen($poto);
		if (!in_array($seleksi, $ekstensi)) {
			echo "<script>
				alert('Ekstensi Tidak Diijinkan');
			</script>";
		}elseif($size > $max_size){
			echo "<script>
				alert('Gambar Terlalu Besar');
				document.location.href='http://localhost:8080/admin/page.php?page=manage_user_client';
			</script>";
		}elseif($pass=='123' || $pass=='1234' || $pass=='12345' || $pass=='123456'){
			echo "<script>
				alert('Password Di Tolak');
				document.location.href='http://localhost:8080/admin/page.php?page=manage_user_client';
			</script>";
		}elseif($var > 0){
			move_uploaded_file($tmp, $folder . $poto);

			$data = "INSERT INTO user (nama , username , nik , pass , divisi , level , gender ,lokasi , bergabung , poto , folder)VALUES ('$nama' , '$username' ,'$nik' ,'$pass' ,'$divisi' ,'$level' ,'$gender' , '$lokasi' ,'$join' ,'$poto' ,'$folder')";
			$qry = $conn->query($data);
			echo "<script>
			alert('User Di tambah plus gambar');
			document.location.href='http://localhost:8080/admin/page.php?page=manage_user_client';
			</script>";
		}elseif($var <=0){
			$data = "INSERT INTO user (nama , username , nik , pass , divisi , level , gender ,lokasi , bergabung )VALUES ('$nama' , '$username' ,'$nik' ,'$pass' ,'$divisi' ,'$level' ,'$gender' , '$lokasi' ,'$join')";
			$qry = $conn->query($data);
			echo "<script>
			alert('User Di tambah');
			document.location.href='http://localhost:8080/admin/page.php?page=manage_user_client';
			</script>";
		}

	}

?>