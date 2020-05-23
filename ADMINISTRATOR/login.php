<?php
include 'koneksi.php';
date_default_timezone_set('Asia/Jakarta');
    if(isset($_POST['masuk'])) {
        $nik        = $_POST['nik'];
        $pass       = $_POST['pass'];
        $level ;
        $data       = "SELECT * FROM admin_it WHERE nik='$nik' AND pass='$pass'" ;
        $qry        = $conn->query($data);
        $result     = mysqli_fetch_array($qry);
        $count      = mysqli_num_rows($qry);

        if ($count > 0 AND $result['level']=='IT'  ) {
           session_start();
           $user  = $_SESSION['nama']        = $result['nama'];
           $nik   = $_SESSION['nik']         = $result['nik'];
           $id    = $_SESSION['id']          = $result['id'];
           $date  = date('Y-m-d h:i:s');
           $data  = "UPDATE admin_it set status='online' , last_online='$date' WHERE id='$id'" ;
           $qry   = $conn->query($data);
            echo "<script>alert('Selamat Datang $user');
            document.location.href='index.php';
            </script>";



        }elseif($count <= 0){
            echo "<script>alert('Anda Tidak Terdaftar');
            document.location.href='page-login.php';
            </script>";
        }
    }
?>