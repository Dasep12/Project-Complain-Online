<!--Mengatur Waktu Session 
<script>
  setTimeout('location.href="logout.php"',900000);
</script>
-->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
<!-- Isi dengan Gambar -->
  <div class="address">
        <span>PT Dirgantara Indonesia(Persero)</span><br>
        <label>JL Padjajaran no 45, Bandung Jawa Barat</label><br>
        <label><i class="fab fa-whatsapp"></i> +6283 821 619 460</label>
        <span style="margin-left: 12px;position: relative;"><i class="fab fa-google-plus-g"></i> DepiyawanDasep13@gmail.com</span>
  </div> 
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                <?php
                include 'koneksi.php';

                $name = $_SESSION['username'];
                $row = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$name'");
                $result = mysqli_fetch_array($row);
                  if (empty($_SESSION['username'])) { 
                 echo "<script>
                      alert('Anda Belum Login');
                      document.location.href='index.php';
                    </script>";
                }else{
                    echo  $_SESSION['username'];
                  }
                ?>
                </span>
                <img class="img-profile rounded-circle" src="img/user3.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="profile.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="setting.php">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>

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
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>
