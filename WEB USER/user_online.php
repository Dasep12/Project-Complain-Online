<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Tables</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/fontawesome-free/css/fontawesome.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/sb-admin-2.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">


  <!-- Custom styles for this page -->



<script defer src="vendor/fontawesome-free/svg-with-js/js/fontawesome-all.min.js"></script>
</head>

<body id="page-top" onload="waktu()">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
<?php include 'sidebar.php'; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include 'header.php'; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->            

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">User Online Divisi PT.DI</h5>
                <script type="text/javascript">
                // 1 detik = 1000
                windows.setTimeout("waktu()",10000);
                function waktu(){
                  var tanggal = new Date();
                  setTimeout("waktu()",1000);
                  document.getElementById('output').innerHTML =tanggal.getHours()+":" +tanggal.getMinutes()+":"+tanggal.getSeconds()+' ';
                }
                </script>
              <div class="date" style="top: 20px;">
                <div id="output"></div>
                <?php
                include 'waktu.php';
                ?>   
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <div class="find">
              
                <form method="POST" action="">
                  <input type="text" name="key" placeholder="Search user" class="form-control">
                  <button name="cari" class="btn btn-primary"><i class="fa fa-search"></i></button>
                  <span><i class="text-gray-500 bg-gray-200">* hanya menampilkan 50 user yang sedang online * </i></span>
                </form>
              </div>
  <script type="text/javascript" src="sweetalert-master/sweetalert.min.js"></script> 
     <script >
            function kosong(){
                swal({
                    title: "PERHATIAN!",
                    text: "Kata Kunci Tidak Boleh Kosong",
                    icon: "warning",
                    dangerMode: true,
                    buttons: [false, "OK"],
                }).then(function() {
                    window.location.href="user_online.php";
                  });
            }
            function kosong1(){
                swal({
                    title: "PERHATIAN!",
                    text: "User Tidak Ditemukan",
                    icon: "warning",
                    dangerMode: true,
                    buttons: [false, "OK"],
                })
            }
      </script>
                <div class="grid-container">
                <?php
                error_reporting(0);
                include 'koneksi.php';
                  if (isset($_POST['cari'])) {
                    $key = $_POST['key'];
                    $row = "SELECT * FROM user where username='$key' AND level='client' AND status='online' ";
                    $data = $koneksi->query($row);
                    $count = mysqli_num_rows($data);
                      if ($count>0) {
                        echo "";
                      }elseif(empty($key)){ ?>
                      <script>kosong()</script>
                   <?php}elseif($count<=0){ ?>
                      <script>kosong()</script>
                      <!-- 404 Error Text -->
                      <div class="text-center">
                        <div class="error mx-auto" data-text="404">404</div>
                        <p class="lead text-gray-800 mb-5">Data Not Found</p>
                        <p class="text-gray-500 mb-0">Upss Sory , name not found...</p>
                        <a href="user_online.php">&larr; Reset Searching</a>
                      </div>
               <?php   }else{ ?>
                      <script>kosong1()</script>
                      <!-- 404 Error Text -->
                      <div class="text-center">
                        <div class="error mx-auto" data-text="404">404</div>
                        <p class="lead text-gray-800 mb-5">Data Not Found</p>
                        <p class="text-gray-500 mb-0">Upss Sory , name not found...</p>
                        <a href="user_online.php">&larr; Reset Searching</a>
                      </div>
            <?php   }

                  }else{
                    $row = "SELECT * FROM user WHERE status='online' AND level='CLIENT' LIMIT 50";
                    $data = $koneksi->query($row);
                    $count1 = mysqli_num_rows($data);
                  }
                    $perempuan = 'Perempuan';
                    $pria = 'Pria';
                $result = mysqli_num_rows($data);
                if ($result>0) {

                while ($r = mysqli_fetch_array($data)) { ?>
                  <div class="grid-item">
                  <?php
                    if ($r['poto']=$r['poto']) { ?>
                        <img src="profile/<?=$r['poto'] ?>" height="150" width="150">
                  <?php  }elseif(empty($r['poto']) && $r['gender'] == $perempuan){ ?>
                        <img src="img/26.png" height="150" width="150">
                 <?php }elseif (empty($r['poto']) && $r['gender']== $pria) {
                      echo '<img src="img/index.png" height="150" width="150">';
                 }
                   ?>
                  <center>
                      <img src="img/23.jpeg" width="20" height="20"><br>
                      <label><?=$r['username'] ?></label>
                  </center>
                  </div>
                <?php     }   
                }elseif($count<=0){
                  echo '
                      <div class="text-center">
                        <div class="error mx-auto" data-text="404">404</div>
                        <p class="lead text-gray-800 mb-5"></p>
                        <p class="text-gray-500 mb-0">Upss Sory , no user online...</p>
                      </div> ' ;
                }
                ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Indonesian Aerospace 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->

  <!-- Page level custom scripts -->

</body>

</html>
