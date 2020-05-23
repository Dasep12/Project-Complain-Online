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
    <?php include 'sidebar.php';  ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
          <?php  include 'header.php'; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
            

          <!-- DataTales Example -->
<?php 
include 'koneksi.php';
$sql= mysqli_query($koneksi,"SELECT * FROM tabel_complain WHERE status='pending'");

$sql1= mysqli_query($koneksi,"SELECT * FROM tabel_complain WHERE status='proses'");

$sql2= mysqli_query($koneksi,"SELECT * FROM complain_selesai WHERE status='done'");

$count = mysqli_num_rows($sql);
$count1 = mysqli_num_rows($sql1);
$count2 = mysqli_num_rows($sql2);


?>            

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <li>
                <a href="tables.php">
                <?php
                  if ($count>0) {
                    echo "Complain Masuk ($count)";
                  }else{
                    echo "Complain Masuk";
                  }
                ?>
                </a>
              </li>
              <li >
                <a href="complain-proses.php">
                <?php
                  if ($count1>0) {
                    echo "Complain Diproses $count1";
                  }else{
                    echo "Complain Diproses";
                  }
                ?>
                 </a>
              </li>
              <li  class="active">
                <a href="complain-selesai.php">
                <?php
                  if ($count2>0) {
                    echo "Complain Selesai ($count2)";
                  }else{
                    echo "Complain Selesai";
                  }
                ?>
                </a>
              </li>  
                <script type="text/javascript">
                // 1 detik = 1000
                windows.setTimeout("waktu()",10000);
                function waktu(){
                  var tanggal = new Date();
                  setTimeout("waktu()",1000);
                  document.getElementById('output').innerHTML =tanggal.getHours()+":" +tanggal.getMinutes()+":"+tanggal.getSeconds();
                }
                </script>
              <div class="date">
                <div id="output"></div>
                <?php
                include 'waktu.php';
                ?>                           
              </div>         
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>No Ticket</th>
                      <th>Judul Complain</th>
                      <th>Pengirim</th>
                      <th>IT</th>
                      <th>Lokasi</th>
                      <th>Tanggal &Jam</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    include 'koneksi.php';
                    $no = 1;
                    $row = "SELECT * FROM complain_selesai  ORDER BY waktu DESC ";
                    $sql = $koneksi->query($row);
                    $count = mysqli_num_rows($sql);
                    while ($r= mysqli_fetch_array($sql)) { ?>
                     <tr>
                        <td><?= $no++?></td>
                       <td><a href='#edit_modal' data-toggle='modal' data-id=<?=$r['id'] ?>> <?= $r['no_ticket']?> </a></td>
                       <td><?=$r['judul']?></td>
                       <td><?=$r['pengirim']?></td>
                       <td><?=$r['it']?></td>
                       <td><?=$r['lokasi']?></td>
                       <td><?=$r['tgl']?></td>
                       <td class="bg-info text-white" style="font-weight: bold;"><?=$r['status']?></td>
                     </tr>
                 <?php   }
                  ?>

                  </tbody>
                </table>

                <span><i>*klik no ticket untuk melihat detail dari isi  complain*</i></span>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
    <div class="modal fade" id="edit_modal" role="dialog" style="overflow: hidden;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                </div>
                <div class="modal-body">
                    <div class="hasil-data">
                      
                    </div>
                </div>
            </div>
        </div>
    </div>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $('#edit_modal').on('show.bs.modal', function (e) {
            var idx = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'detail-selesai.php',
                data :  'idx='+ idx,
                success : function(data){
                $('.hasil-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>
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
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
