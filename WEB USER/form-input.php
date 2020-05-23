<!DOCTYPE html>
 <html>
 <head>
 
 </head>
 <body>
 
  <script type="text/javascript" src="sweetalert-master/sweetalert.min.js"></script> 
     <script >
            function kosong(){
                swal({
                    title: "PERHATIAN!",
                    text: "File Tidak Di ijinkan",
                    icon: "warning",
                    dangerMode: true,
                    buttons: [false, "OK"],
                }).then(function() {
                    window.location.href= 'input-complain.php';
                })
            }
            function berhasil() {
                swal({
                    title: "BERHASIL",
                    text: "Pesan Terikirim",
                    icon: "success",
                    buttons: [false, "OK"],
                  }).then(function() {
                    window.location.href="input-complain.php";
                  });
            }
            function ketemu(){
                swal({
                    title: "PERHATIAN!",
                    text: "Data sudah ada",
                    icon: "warning",
                    dangerMode: true,
                    buttons: [false, "OK"],
                }).then(function() {
                    window.location.href= 'input-complain.php';
                })
            }
      </script>


<?php
include 'koneksi.php';
if (isset($_POST['input'])) {
	$ticket =$_POST['no_ticket'];
	$pengirim = $_POST['pengirim'];
	$nama ;
	$tgl = $_POST['tgl'];
	$status = $_POST['status'];
	$lokasi = $_POST['lokasi'];
	$kategori = $_POST['category'];
	$judul = $_POST['judul'];
	$isi = $_POST['isi_complain'];
	$waktu = $_POST['waktu'];

	$folder = 'lampiran/';
	$filename = $_FILES['filename']['name'];
	$tmp = $_FILES['filename']['tmp_name'];

	//ekstensi
	$ekstensi = array('jpg','png','jpeg','');

	$explode = explode('.', $filename);
	$seleksi = $explode[count($explode)-1];

	if (!in_array($seleksi, $ekstensi)) { ?>
		<script type="text/javascript">
			kosong();
		</script>
<?php	}elseif(empty($filename)){ 
			$qry = "INSERT INTO tabel_complain (tgl,lokasi,category,judul,isi_complain,pengirim,no_ticket,status,waktu)VALUES ('$tgl','$lokasi','$kategori' , '$judul' ,'$isi','$pengirim','$ticket','$status' , '$waktu')";
			$row = $koneksi->query($qry);
			if ($row) { ?>
				<script type="text/javascript">
					berhasil();
				</script>			
<?php	}
		}elseif(move_uploaded_file($tmp, $folder.$filename )) {
			$qry = "INSERT INTO tabel_complain (filename,folder,tgl,lokasi,category,judul,isi_complain,pengirim,no_ticket,status , waktu)VALUES('$filename','$folder','$tgl','$lokasi','$kategori' , '$judul' ,'$isi','$pengirim','$ticket','$status' ,'$waktu')";
			$row = $koneksi->query($qry);
				if ($row) { 
			echo "<script>
				berhasil();
			</script>	";
			}
		}

		}
?>
</body>
</html>
