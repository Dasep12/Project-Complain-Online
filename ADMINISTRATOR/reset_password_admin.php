<?php
include 'koneksi.php';
	$id 	= $_GET['id'];
	$data 	= "UPDATE admin_it set pass='123456' WHERE id='$id'";
	$qry	= $conn->query($data);
	if ($qry) { ?>
		<script>
			alert("Password default 123456");
			document.location.href='http://localhost:8080/admin/page.php?page=manage_user_admin';
		</script>
<?php	} ?>