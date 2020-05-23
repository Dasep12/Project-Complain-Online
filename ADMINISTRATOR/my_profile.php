    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">
  
        <!-- Header-->

<!-- /header -->
        <!-- Header-->

<?php include'header.php'; ?>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">My Profile</strong>
                            </div>
                            <div class="card-body">
                            <div class="form-group">
                                
                           
                            <?php 
                                include 'koneksi.php';
                                $id     = $_SESSION['id'];
                                $data   =  "SELECT * FROM admin_it WHERE id='$id'"; 
                                $qry    = $conn->query($data);
                                foreach ($qry as $result) : ?>
                            <img src="profile/<?= $result['poto'] ?>" class="user-avatar rounded-circle" height="200" width="250" >
                            </div>
                            <div class="form-profile">
                            <table class="table">
                                <tr>
                                    <th><label>Nama Lengkap</label></th>
                                    <td><label>:</label></td>
                                    <td><label><?= $result['nama'] ?></label></td>
                                </tr>

                                <tr>
                                    <th><label>Username</label></th>
                                    <td><label>:</label></td>
                                    <td><label><?= $result['username'] ?></label></td>
                                </tr>
                                <tr>
                                    <th><label>Gender</label></th>
                                    <td><label>:</label></td>
                                    <td><label><?= $result['gender'] ?></label></td>
                                </tr>
                                <tr>
                                    <th><label>NIK</label></th>
                                    <td><label>:</label></td>
                                    <td><label><?= $result['nik'] ?></label></td>
                                </tr>                                
                                <tr>
                                    <th><label>Sekolah</label></th>
                                    <td><label>:</label></td>
                                    <td><label><?= $result['sekolah'] ?></label></td>
                                </tr>
                                <tr>
                                    <th><label>Jurusan</label></th>
                                    <td><label>:</label></td>
                                    <td><label><?= $result['jurusan'] ?></label></td>
                                </tr>
                                <tr>
                                    <th><label>Level</label></th>
                                    <td><label>:</label></td>
                                    <td><label><?= $result['level'] ?></label></td>
                                </tr>
                                <tr>
                                    <th><label>Alamat</label></th>
                                    <td><label>:</label></td>
                                    <td><label><?= $result['alamat'] ?></label></td>
                                </tr>
                                <tr>
                                    <th><label>Bergabung</label></th>
                                    <td><label>:</label></td>
                                    <td><label><?= $result['bergabung'] ?></label></td>
                                </tr>
                                <tr>
                                    <th><label>Status</label></th>
                                    <td><label>:</label></td>
                                    <td><label class="badge badge-success"><?= $result['status'] ?></label></td>
                                </tr>
                                <tr>
                                    <th><label>Last Online</label></th>
                                    <td><label>:</label></td>
                                    <td><label><?= $result['last_online'] ?></label></td>
                                </tr>
                            <div class="btn-edit">
                            <a href="http://localhost:8080/admin/page.php?page=edit_profile&id=<?= $result['id'] ?>" class="btn btn-primary btn-sm">Edit Data Diri <i class="fa fa-edit"></i></a>
                            </div>
                            <?php endforeach ;?>
                            </table>

                            </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->
