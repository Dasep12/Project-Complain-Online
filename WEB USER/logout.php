<?php
include 'koneksi.php';
session_start();
$name = $_SESSION['username'];
$row = mysqli_query($koneksi,"SELECT * FROM user where username='$name'");
$result = mysqli_fetch_array($row);
$id= $result['id'];
$last  = date('Y-m-d - h:i:s');
$name = mysqli_query($koneksi,"UPDATE  user set status='offline' , last_online='$last' WHERE id='$id' ");

$a = session_destroy(); 
	if ($a) { ?>
      <script>
      alert('Godbye');
      document.location.href='index.php';
      </script>
<?php	}


?>