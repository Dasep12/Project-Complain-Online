<?php
include 'koneksi.php';
	if (isset($_POST['update'])) {
		$id		 	= $_POST['id'];
		$nama	 	= $_POST['nama'];
		$username	= $_POST['username'];
		$alamat		= $_POST['alamat'];
		$nik		= $_POST['nik'];
		$sekolah	= $_POST['sekolah'];
		$jurusan	= $_POST['jurusan'];
		$level		= $_POST['level'];
		$folder		= 'profile/';
		$poto		= $_FILES['poto']['name'];
		$size		= $_FILES['poto']['size'];
		$max_size	= 120000;
		$exe		= array('png','jpg','jpeg','');
		$var2		= strlen($poto);
		$ekstensi	= explode('.', $poto);
		$explode	= $ekstensi[count($ekstensi)-1];
		$tmp		= $_FILES['poto']['tmp_name'];

		if (!in_array($explode, $exe)) {
		 	echo "<script>
		 		alert('File Ditolak');
		 		document.location.href='http://localhost:8080/admin/page.php?page=edit_profile';
		 	</script>";
		 }elseif(empty($poto)){
		 	$data = "UPDATE admin_it set  nama='$nama' ,username='$username' , alamat='$alamat' , nik='$nik' , sekolah='$sekolah' , jurusan='$jurusan' , level='$level' WHERE id='$id'";
		 	$qry = $conn->query($data);
		 	echo "<script>
		 		alert('Berhasil update data');
		 		document.location.href='http://localhost:8080/admin/page.php?page=edit_profile';
		 	</script>";		 }elseif($var2>0){
		 	move_uploaded_file($tmp, $folder . $poto);
		 	$data = "UPDATE admin_it set  nama='$nama' ,username='$username' , alamat='$alamat' , nik='$nik' , sekolah='$sekolah' , jurusan='$jurusan' , level='$level' ,  poto='$poto' WHERE id='$id'";
		 	$qry = $conn->query($data);
		 	echo "<script>
		 		alert('Berhasil update gambar');
		 		document.location.href='http://localhost:8080/admin/page.php?page=edit_profile&id=16';
		 	</script>";
		 }

	}

?>