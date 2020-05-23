<?php
include 'koneksi.php' ;
$id = $_GET['id'];
$default = 'aku cinta kamu' ;
$data = "UPDATE user set pass='$default' WHERE id='$id'" ;
$qry = $conn->query($data);
	if ($qry) { ?>
	<script>
		alert('Password Default 123456')
		document.location.href='http://localhost:8080/admin/page.php?page=manage_user';
	</script>
<?php	}else{ 
	echo "Gagal";
} 

?>
