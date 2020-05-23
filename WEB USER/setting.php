<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="refresh" content="">
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
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">


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
                <h5> <span class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-wrench"></i> Setting Profile</span></h5>
                <script type="text/javascript">
                // 1 detik = 1000
                windows.setTimeout("waktu()",10000);
                function waktu(){
                  var tanggal = new Date();
                  setTimeout("waktu()",1000);
                  document.getElementById('output').innerHTML =tanggal.getHours()+":" +tanggal.getMinutes()+":"+tanggal.getSeconds();
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
            <div class="full-card key" >
              <div class="head-card">
               
              </div>
              <?php
                include 'koneksi.php';
                $user = $_SESSION['username'];
                $data = "SELECT * FROM user WHERE username='$user' LIMIT 1";
                $row = $koneksi->query($data);
                $result = mysqli_fetch_array($row);
               ?>
              <form action="" enctype="multipart/form-data" method="POST">
              <div class="profile-set">
              <img src="profile/<?= $result['poto']?>" id="gambar_nodin" width="200" height="200">
              <div>
                <input type="file" id="preview_gambar"  name="poto" >
                <input type="hidden" name="id" value=<?= $result['id'];?>>
                  <script type="text/javascript" src="vendor/jquery/jquery.js"></script>      
                  <script>
                  function bacaGambar(input){
                      if(input.files && input.files[0]) {
                          var reader = new FileReader();
                          reader.onload = function(e){
                              $('#gambar_nodin').attr('src', e.target.result);
                          }
                          reader.readAsDataURL(input.files[0]);
                      }
                  }
                  $('#preview_gambar').change(function(){
                      bacaGambar(this);
                  })
                  </script>
              </div>
              </div>
              <div class="info-profile">
                <div class="desc">
                <label><i class="fab fa-expeditedssl"></i> Change Name</label>
                <input type="text" name="username" value="<?=$result['username'] ?>" class="form-control-1">
                </div>
                <div class="desc">
                <label>  <i class="fas fa-id-card"></i>  Change NIK</label>
                <input type="text" value="<?=$result['nik'] ?>" name="nik" class="form-control-1">
                </div>
                <div class="desc">
                <label> <i class="fa fa-map-pin"></i>  Change Lokasi</label>
                <input type="text" name="lokasi" value="<?=$result['lokasi'] ?>" class="form-control-1">
                </div>
                <div class="desc">
                <label> <i class="fa fa-map-pin"></i>  Change Divisi</label>
                <input type="text" name="divisi" value="<?=$result['divisi'] ?>" class="form-control-1">
                </div>
                <div class="desc">
                <label><i class="fab fa-expeditedssl"></i> Change Password</label>
                <label>:</label>
                <input type="text" placeholder="<?= $result['pass']?>" name="pass" class="form-control-1">
                </div>
                <div class="desc">
                <label><i class="fab fa-expeditedssl"></i>Password Sebelumnya</label>
                <label>:</label>
                <input type="text" placeholder="" name="pass2" class="form-control-1">
                </div>
                 <button name="update" type="submit" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Save Change</span>
                  </button>
                 <button type="reset"  class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-history"></i>
                    </span>
                    <span class="text">Reset</span>
                  </button>
              </div>
              </form>
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
                    window.location.href= 'add-user.php';
                })
            }
            function password() {
                swal({
                    title: "SUKSES",
                    text: "Password Diubah",
                    icon: "success",
                    buttons: [false, "OK"],
                  }).then(function() {
                    window.location.href="setting.php";
                  });
            }
            function profile() {
                swal({
                    title: "SUKSES",
                    text: "Profile Diubah",
                    icon: "success",
                    buttons: [false, "OK"],
                  }).then(function() {
                    window.location.href="setting.php";
                  });
            }
            function password() {
                swal({
                    title: "SUKSES",
                    text: "Password Diubah",
                    icon: "success",
                    buttons: [false, "OK"],
                  }).then(function() {
                    window.location.href="setting.php";
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
                    window.location.href= 'add-user.php';
                })
            }
      </script>
              <?php  include 'set_update.php'; ?>
<label><i>* setiap pengaupdaten profile pastikan anda mengisi kolom password sebelumnya</i></label>
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
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
