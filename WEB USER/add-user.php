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
  <meta http-equiv="refresh" content="60"/>
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
               <h5><span class="m-0 font-weight-bold text-primary"><i class="fa fa-user-plus"></i> Sign in</span></h5>

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
              <form method="post" enctype="multipart/form-data" action="">
              <div class="icon12"><i class="fa fa-user"></i></div>
                <input type="text" placeholder="full name" name="nama" class="form-control">
              <div class="icon12"><i class="fa fa-user-circle"></i></div>
                <input type="text" placeholder="username" name="username" class="form-control">                
              <div class="icon12"><i class="fa fa-address-card"></i></div>
                <input type="text" placeholder="nik" name="nik" class="form-control">
              <div class="icon12"><i class="fa fa-map-marked"></i></div>
                <input type="text" placeholder="lokasi / lantai" name="lokasi" class="form-control">
              <div class="icon12"><i class="fa fa-map-marked"></i></div>
                <input type="text" placeholder="divisi" name="divisi" class="form-control">
                <input type="hidden" name="bergabung" value=<?= date('Y-m-d') ?>>


              <div class="icon12"><i class="fa fa-genderless"></i></div>
                <select class="form-control" name="gender">
                  <option value="">Pilih Gender</option>
                  <option>Perempuan</option>
                  <option>Pria</option>
                </select>

              <div class="icon12"><i class="fa fa-genderless"></i></div>
                <select class="form-control" value="Pilih Level" name="level">
                  <option value="">Pilih Level</option>
                  <option value="CLIENT">Client</option>
                </select>



              <div class="icon12"><i class="fa fa-key"></i></div>
                <input type="password" style="width: 20%;" placeholder="password" name="pass" class="form-control key">

              <div class="icon1"><i class="fa fa-key"></i></div>
                <input type="password" style="width: 20%;margin-left: 38%;" placeholder="re-type password" name="pass1" class="form-control key">
                <div class="images">
                <cemter>
                <img src="img/index.png" id="gambar_nodin" >
                </cemter>
                <input type="file" id="preview_gambar"  name="poto">
                </cemter>
                </div>
                <button type="submit" name="kirim" class="btn btn-primary btn-sm"><i class="fa fa-sign-in-alt"></i> Sign in </button>
                <button type="reset" class="btn btn-danger btn-sm reset" value="">Reset <i class="fa fa-history"></i> </button>
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
            function berhasil() {
                swal({
                    title: "BERHASIL",
                    text: "User Ditambahkan",
                    icon: "success",
                    buttons: [false, "OK"],
                  }).then(function() {
                    window.location.href="add-user.php";
                  });
            }
            function ketemu(){
                swal({
                    title: "PERHATIAN!",
                    text: "username sudah digunakan / sudah ada",
                    icon: "warning",
                    dangerMode: true,
                    buttons: [false, "OK"],
                }).then(function() {
                    window.location.href= 'add-user.php';
                })
            }
      </script>
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
              <?php include 'tambah_user.php'; ?>
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
