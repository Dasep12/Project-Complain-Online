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
            
<?php date_default_timezone_set('Asia/Jakarta');  ?>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            <h5>Kirim Complain Ke IT </h5>
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
<div class="">

</div>
        <script>
            function validasi(){
                var lokasi = document.getElementById('lokasi');
                var judul = document.getElementById('judul');
                var complain = document.getElementById('complain');


                if (harusDiisi(lokasi, "Lokasi Masih Kosong")) {
                    if (harusDiisi(judul, "Judul belum di isi")) {
                        if (harusDiisi(complain, "Complain Belum Di isi")) {
                            return true;
                        };
                    };
                };
                return false;
            }

            function harusDiisi(att, msg){
                if (att.value.length == 0) {
                    alert(msg);
                    att.focus();
                    return false;
                }

                return true;
            }
        </script>


            <form action="" onsubmit="return validasi()" enctype="multipart/form-data" method="POST">
            <input type="hidden" name="no_ticket" value=<?php echo "IAE".date('Ymdhis'); ?>>
            <input type="hidden" name="pengirim" value="<?= $_SESSION['username']; ?>">
            <input type="hidden" name="status" value="pending">
            <input type="hidden" name="waktu" value=<?= date('h:i:s')?>>
              <div class="">
                <label class="label label-default">Tanggal & Jam</label>
                <input  type="text" name="tgl" class="form-control" value="<?= date('Y-m-d / h:i:s')?>" style="width: 40%">
              </div>

              <div class="">
                <label class="label label-default">Lokasi</label>
                <input id="lokasi"  type="text" class="form-control" name="lokasi" placeholder="Ex : Lantai 6 , Pak Sodiman" style="width: 40%">
              </div>


              <div class="">
                <label class="label label-default">Judul</label>
                <input type="text" id="judul" class="form-control" name="judul" placeholder="Ex : Perlu Install Catia" style="width: 40%">
              </div>
              <div class="">
                <label class="label label-default">Kategory</label>
                <select  class="form-control" style="width:40%" name="category">
                  <option>Hardware</option>
                  <option>Software</option>
                  <option>Lainnya</option>
                </select>
              </div>    

              <div class="">
                <label class="label label-default">Complain / Masalah</label>
                <textarea id="complain" rows="8" cols="20" placeholder="isi masalah anda disini" name="isi_complain" class="form-control"></textarea>
              </div>
              <div class="file">
              <div class="upload">
                <input type="file"  name="filename" >
              </div>
                <span class="label"><i>* Isi lampiran jika ada / memang diperlukan</i></span><br>
                <span class="label"><i>* File yang didukung hanya berupa gambar atau screenshoot (JPEG,PNG,JPG)</i></span>
              </div>
              <button type="submit" name="input" class="btn btn-danger btn-sm">Send <i class="fa fa-check-double"></i></button>
              <input type="reset"  class="btn btn-success btn-sm">
              </form>
              <?php include 'form-input.php'; ?>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

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
