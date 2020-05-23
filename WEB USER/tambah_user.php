
<?php
include 'koneksi.php';
	if (isset($_POST['kirim'])) {
		$nama = $_POST['nama'];
		$username = $_POST['username'];
		$nik = $_POST['nik'];
		$pass= $_POST['pass'];
		$pass1 = $_POST['pass1'];
		$lokasi = $_POST['lokasi'];
		$poto = $_FILES['poto']['name'];
		$tmp = $_FILES['poto']['tmp_name'];
		$folder = 'profile/';

        $join = $_POST['bergabung'];
        $gender = $_POST['gender'];
        $level = $_POST['level'];
        $divisi = $_POST['divisi'];

    //ekstensi gambar yang diijinkan
	$ekstensi_diijinkan = array('jpg','png','jpeg');
	$explode = explode('.', $poto);
	$diijinkan = $explode[count($explode)-1]; 


    //mengecek kebenaran username
    $data1 = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username'");
    $count = mysqli_num_rows($data1);

			if ($pass != $pass1) { ?>
			<div class="px-6 py-2 bg-gradient-primary text-white">
				Password Tidak Boleh Berbeda
			</div>
     <?php  }elseif($count > 0){
                    echo "<script>ketemu()</script>";
            }elseif(empty($pass) || empty($username) || empty($nik)){
                        echo  '<div class="px-6 py-2 bg-gradient-success text-white">
                            
                           Silahkan isi data diri ! ! !
                            </div>'; 
        }elseif(strlen($pass) < 6 AND strlen($pass1) < 6){ ?>
			<div class="px-6 py-2 bg-gradient-success text-white">
				Password  Anda Kurang Dari 6 Huruf
			</div>
    <?php 	}elseif(empty($poto)){
    			$data = "INSERT INTO user (nama,nik,username,pass,lokasi,divisi,gender,level,bergabung)VALUES('$nama','$nik','$username','$pass','$lokasi','$divisi','$gender','$level','$join')";
    			$sql = $koneksi->query($data); ?>
				<script> berhasil() </script>";
    <?php	}elseif(!in_array($diijinkan, $ekstensi_diijinkan)){
    					echo '<div class="px-6 py-2 bg-gradient-success text-white">
							Gambar Profile Tidak Diijinkan
							</div>';    			
    		}elseif(move_uploaded_file($tmp, $folder.$poto)){
    			$data = "INSERT INTO user (nama,nik,username,pass,lokasi,poto,folder,divisi,gender,level,bergabung)VALUES('$nama','$nik','$username','$pass','$lokasi','$poto','$folder','$divisi','$gender','$level','$join')";
    			$sql = $koneksi->query($data); ?>
    			<script> berhasil() </script>
    <?php 	}
	}

?>