<!DOCTYPE html>
 <html>
 <head>
 <script type="text/javascript" src="sweetalert-master/sweetalert.min.js"></script>  
 </head>
 <body>
 
 
     <script >
            function kosong(){
                swal({
                    title: "Terhapus!",
                    text: "Complain Terhapus",
                    icon: "warning",
                    dangerMode: true,
                    buttons: [false, "OK"],
                }).then(function() {
                    window.location.href= 'tables.php';
                })
            }
            function berhasil() {
                swal({
                    title: "BERHASIL",
                    text: "Pesan Terikirim",
                    icon: "success",
                    buttons: [false, "OK"],
                  }).then(function() {
                    window.location.href="tables.php";
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
                    window.location.href= 'tables.php';
                })
            }
      </script>

<?php
include 'koneksi.php';
$id = $_POST['id'];
$row = "DELETE FROM tabel_complain WHERE id='$id'";
$qry = $koneksi->query($row);

if ($qry) { ?>
	<script>
	kosong();
	</script>
<?php }