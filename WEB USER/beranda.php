<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  <!--SweetAlert-->
  <script type="text/javascript" src="sweetalert-master/sweetalert.min.js"></script> 
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
                <script type="text/javascript">
                // 1 detik = 1000
                windows.setTimeout("waktu()",10000);
                function waktu(){
                  var tanggal = new Date();
                  setTimeout("waktu()",1000);
                  document.getElementById('output').innerHTML =tanggal.getHours()+":" +tanggal.getMinutes()+":"+tanggal.getSeconds();
                }
                </script>
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <div class="card mb-12 py-0 border-bottom-info">
                <div class="card-body">
                  <h5 class="m-0 font-weight-bold text-primary">Selamat  Datang <?= $_SESSION['username'] ?></h5>
                  <div class="date">
                    <div id="output"></div>
                  <?php 
                    include 'waktu.php';
                  ?>
                  </div>
                </div>
              </div>
        </div>
        
          <!-- Content Row -->
          <div class="row">

     </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Documentasi</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <div class="maindiv">
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Beri Masukan</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <!--isi content card body-->
                    <form action="" method="POST">
                      <input type="hidden" name="tanggal" value=<?= date('Y-m-d h:i:s'); ?>>
                      <input type="text" name="pengirim" class="form-control" placeholder="Nama"><br>
                      <textarea class="form-control" name="masukan" placeholder="Masukan kritik & saran"></textarea><br>
                      <button type="submit" name="kirim" class="btn btn-primary btn-sm"><i class="fa fa-send"></i>Kirim</button>
                    </form> 
                     <script >
                            function berhasil() {
                                swal({
                                    title: "Terima Kasih",
                                    text: "Masukan Anda Terkirim",
                                    icon: "success",
                                    buttons: [false, "OK"],
                                  }).then(function() {
                                    window.location.href="beranda.php";
                                  });
                            }
                            function nama(){
                                swal({
                                    title: "Oops Sory!",
                                    text: "nama masih kosong",
                                    icon: "warning",
                                    dangerMode: true,
                                    buttons: [false, "OK"],
                                })
                            }
                            function masukan(){
                                swal({
                                    title: "Oops Sory!",
                                    text: "kolom saran belum di isi",
                                    icon: "warning",
                                    dangerMode: true,
                                    buttons: [false, "OK"],
                                })
                            }
                      </script>
                    <?php include 'proses_masukan.php'; ?>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

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
          <a class="btn btn-primary" href="login.html">Logout</a>
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
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
