<?php
 include 'koneksi.php';

 $id = $_GET['id'];
 $data = "DELETE FROM user WHERE id='$id'";
 $qry = $conn->query($data);
 if ($qry) { ?>
 	<script>
 		alert('Data Dihapus');
 		document.location.href='http://localhost:8080/admin/page.php?page=manage_user_client';
 	</script>
<?php } ?>