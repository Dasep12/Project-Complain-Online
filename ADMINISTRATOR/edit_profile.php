<?php
include 'koneksi.php';
	if (isset($_POST['edit'])) {
		$nama = $_POST['nama'];
		$username = $_POST['username'];
		$nik = $_POST['nik'];
		$divisi = $_POST['divisi'];
		$lokasi = $_POST['lokasi'];
		$id = $_POST['id'];

		$poto = $_FILES['poto']['name'];
		$size = $_FILES['poto']['size'];
		$folder = '../Complain2/profile/';
		$ekstensi_diijinkan = array('jpg','png','jpeg','');
		$max_size = 1204 * 1000 ;
		$tmp = $_FILES['poto']['tmp_name']; 


		//seleksi ekstensi gambar
		$ekstensi = explode('.', $poto);
		$explode = $ekstensi[count($ekstensi)-1];


		if ($size > $max_size) {
			echo "
			<script>
				alert('Gambar Terlalu Besar');
			</script>";
		}elseif(!in_array($explode, $ekstensi_diijinkan)){
			echo "
			<script>
				alert('File Di Tolak');
			</script>";
		}elseif(strlen($poto) <=0) {
			$data = "UPDATE user set nama='$nama' , username='$username' , nik='$nik' , divisi='$divisi' ,lokasi='$lokasi' WHERE id='$id' " ;
			$qry = $conn->query($data);
					echo "
					<script>
						alert('Berhasil Update Data');
						document.location.href='http://localhost:8080/admin/page.php?page=manage_user_client';
					</script>";
		}elseif(strlen($poto) > 0 ){
			move_uploaded_file($tmp, $folder . $poto);
			$data = "UPDATE user set nama='$nama' , username='$username' , nik='$nik' , divisi='$divisi' ,lokasi='$lokasi' , poto='$poto'  WHERE id='$id' ";
			$qry = $conn->query($data);
					echo "
					<script>
						alert('Gambar Di ubah');
						document.location.href='http://localhost:8080/admin/page.php?page=manage_user_client';
					</script>";

		}


	}