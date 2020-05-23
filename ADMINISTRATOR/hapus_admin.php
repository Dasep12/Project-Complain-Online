<?php
 include 'koneksi.php';

 $id = $_GET['id'];
 $data = "DELETE FROM admin_it WHERE id='$id'";
 $qry = $conn->query($data);
 if ($qry) { ?>
 	<script>
 		alert('Data Dihapus');
 		document.location.href='http://localhost:8080/admin/page.php?page=manage_user_admin';
 	</script>
<?php } ?>