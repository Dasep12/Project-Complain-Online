<?php
include 'koneksi.php';
if (isset($_POST['edit'])) {
	$nama			= $_POST['nama'];
	$username		= $_POST['username'];
	$nik			= $_POST['nik'];
	$level			= $_POST['level'];
	$poto			= $_FILES['poto']['name'];
	$size			= $_FILES['poto']['size'];
	$tmp			= $_FILES['poto']['tmp_name'];
	$sekolah		= $_POST['sekolah'];
	$jurusan		= $_POST['jurusan'];
	$alamat			= $_POST['alamat'];
	$id				= $_POST['id'];
	$var			= strlen($poto);
	$file_diijinkan	= array('jpg','png','','jpeg');
	$batas_file		= 1200000;
	$folder			='profile/';
	//seleksi file agar yang di upload hanya gambar
	$ekstensi		= explode('.', $poto);
	$explode 		= $ekstensi[count($ekstensi)-1];

	if (!in_array($explode, $file_diijinkan)) {
		echo "File Tidak Di ijinkan";
	}elseif($batas_file < $size){
		echo "File terlalu besar";
	}elseif($var > 0 ){
		move_uploaded_file($tmp, $folder . $poto );
		$data 	= "UPDATE admin_it set nama='$nama' , username='$username' , nik='$nik' , level='$level' , sekolah='$sekolah' ,jurusan='$jurusan' , alamat='$alamat' , poto='$poto'  WHERE id='$id'";
		$qry = $conn->query($data);
		echo "<script>
			alert('Update Berhasil');
			document.location.href='http://localhost:8080/admin/page.php?page=manage_user_admin';
		</script>";
	}elseif($var <= 0){
		$data 	= "UPDATE admin_it set nama='$nama' , username='$username' , nik='$nik' , level='$level' , sekolah='$sekolah' ,jurusan='$jurusan' , alamat='$alamat' WHERE id='$id'";
		$qry = $conn->query($data);
		echo "<script>
			alert('Update Berhasil');
			document.location.href='http://localhost:8080/admin/page.php?page=manage_user_admin';
		</script>";
	}
}
?>