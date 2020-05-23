    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">
  
        <!-- Header-->

<!-- /header -->
        <!-- Header-->

<?php include'header.php'; ?>
<?php
if (isset($_POST['cari'])) {
   $key = $_POST['cari'];
   if (empty($key)) {
       echo "<script>
       alert('Keyword Kosong');
       document.location.href='http://localhost:8080/admin/page.php?page=manage_user_client';
       </script>";
   }
  $data = "SELECT * FROM user WHERE username='$key' AND level='CLIENT' " ; 
}else{
    $data = "SELECT * FROM user WHERE level='CLIENT' ";
}
?>

<div class="card">
    <div class="card-header">
        <strong class="card-title">Manage user (Client) <i class="fa fa-users"></i></strong>
        <div class="info-btn">
            <label>Reset Password</label> <i class="fa fa-refresh btn btn-info btn-sm" style="cursor: default;"></i> 
            <label>Edit Data Diri</label> <i class="ti-settings btn btn-primary btn-sm" style="cursor: default;"></i> 
            <label>Hapus Data</label> <i class="fa fa-trash btn btn-danger btn-sm" style="cursor: default;"></i>
        </div>
    </div>
    <div class="search-user">
        <form action="" method="POST">
            <input type="text" name="cari" class="form-control-1" placeholder="Cari user . . .">
            <button class="btn btn-success btn-sm btn-cari"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <div class="card-body">
<?php
    error_reporting(0);
    if (strlen($key) > 0) {
    echo '<a href=""><button type="button" class="btn btn-outline-primary btn-sm btn-excel" style="margin-bottom:10px;"><i class="fa fa-refresh"></i>&nbsp; Reset Pencarian</button></a>';
    }else{
        echo "";
    }


?>

    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#largeModal" style="margin-bottom: 10px;">
    Tambah User <i class="fa fa-user-plus"></i>
    </button> <br>

        <table id="bootstrap-data-table-export" class="table table-striped table-bordered" width="100%">
            <thead>
                <tr>
                    <th><label><i class="fa fa-user"></i></label></th>
                    <th><label>Username</label></th>
                    <th><label>Lokasi</label></th>
                    <th><label>Divisi</label></th>
                    <th><label>Aksi</label></th>
                </tr>
            </thead>
            <tbody>
            <?php include 'koneksi.php ';
                $qry = $conn->query($data);
                foreach ($qry as $result) :  ?>
                <tr>
                    <td>
                        <center>
                        <?php 
                        $var = strlen($result['poto']);
                        if ($var > 0  ) { ?>
                          <img height="40" width="60"  class="user-avatar rounded-circle" src="../Complain2/profile/<?= $result['poto'] ?>" alt="User Avatar">
                        <?php }elseif($result['gender']=='Pria' && $var <= 0 ){ ?>
                        <img height="40" width="60"  class="user-avatar rounded-circle" src="images/pria.png" alt="User Avatar">
                        <?php }elseif($result['gender']=='Perempuan' && $var <=0){ ?>
                        <img height="40" width="60"  class="user-avatar rounded-circle" src="images/cewe.png" alt="User Avatar">
                        <?php }
                        ?>
                            
                        </center>
                    </td>
                    <td><label><?= $result['username'] ; ?></label></td>
                    <td><label><?= $result['lokasi'] ; ?></label></td>
                    <td><label><?= $result['divisi'] ; ?></label></td>
                    <td>
                        <center>
                        <a class="btn btn-primary btn-sm btn-icn" href="#edit_modal" data-toggle='modal' data-id='<?= $result['id']?>'><span class="ti-settings"></span> </a> / 
                        <a onclick="return confirm('Yakin Hapus User')" class="btn btn-danger btn-sm btn-icn" href="hapus_user.php?id=<?= $result['id']; ?>"><i class="fa fa-trash"></i> </a>  / 
                        <a onclick="return confirm('Yakin Reset Password')" class="btn btn-info btn-sm btn-icn" href="reset_password.php?id=<?= $result['id']?>"><i class="fa fa-refresh"></i></a>
                    </center>

                    </td>
                </tr>
            <?php endforeach ; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
<!--Modal Complain-->                                
    <div class="modal fade" id="edit_modal" role="dialog">
        <div class="modal-dialog "  role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5><label>Edit Profile</label></h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                </div>
                <div class="modal-body">
                    <div class='hasil-data'>
                        
                    </div>
                </div>
            </div>
        </div>
<!--End of modal Complain-->


<!--Ajax untuk ambil data dan input ke modal-->
<script src="vendors/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $('#edit_modal').on('show.bs.modal', function (e) {
            var idx = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'detail_user.php',
                data :  'idx='+ idx,
                success : function(data){
                $('.hasil-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>
      <!-- End of ajax -->

                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
        <div class="modal-dialog " role="document"> 
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="largeModalLabel">Tambah User <i class="fa fa-plus"></i></h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <div class="modal-body">
    <form action="" onsubmit="return validasi()"  enctype="multipart/form-data" method="post">
<!--input-->
        <div class="content-wrapper">
            <center>
                <img class="img-user rounded-circle" width="200" id="gambar_nodin"height="150" src="images/user1.png ?>"><br>
                    <label for="file-input" class="form-control-label">Profile</label>
                        <input type="file" id="preview_gambar" name="poto" class="form-control-file">
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
    </center>
<div class="has-success form-group" >
    <label for="inputIsValid" class="form-control-label">Fullname</label>
        <input type="text" name="nama" id="nama"  class="is-valid form-control-success form-control">
            </div>
        <div class="has-success form-group" >
    <label for="inputIsValid" class="form-control-label">Username</label>
 <input type="text" name="username" id="username" class="is-valid form-control-success form-control">
</div>
    <div class="has-success form-group" >
        <label for="inputIsValid" class="form-control-label">NIK</label>
    <input type="text" name="nik" id="nik" class="is-valid form-control-success form-control">
</div>
    <div class="has-success form-group" >
        <label for="inputIsValid" class="form-control-label">Password</label>
    <input type="text" name="pass" id="pass" class="is-valid form-control-success form-control">
</div>
    <div class="has-success form-group" >
<label for="inputIsValid" class="form-control-label">Level</label>
<select name="level" class="is-valid form-control-success form-control">
    <option value="CLIENT">Client</option>
</select>
        </div>
    <div class="has-success form-group" >
<label for="inputIsValid" class="form-control-label">Gender</label>
<select name="gender"  class="is-valid form-control-success form-control">
    <option value="Perempuan">Perempuan</option>
    <option value="Pria">Laki-Laki</option>
</select>
        </div>        
            <div class="has-success form-group" >
                <label for="inputIsValid" class="form-control-label">Divisi</label>
            <input type="text" name="divisi" id="divisi" class="is-valid form-control-success form-control">
        </div>
    <div class="has-success form-group" >
<label for="inputIsValid" class="form-control-label">Lokasi</label>
    <input type="text" name="lokasi" id="lokasi" class="is-valid form-control-success form-control">
</div>
    </div>
        <div class="card-footer">
            <button type="submit" name="tambah" class="btn btn-primary btn-sm">
                <i class="fa fa-user-plus"></i> Tambah User
                    </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-refresh"></i> Reset
                                </button>
                            </div>
                    </form>
                </div>
        </div>
    </div>
</div>
<script>
    function validasi(){
        var nama        = document.getElementById('nama');
        var username    = document.getElementById('username');
        var lokasi      = document.getElementById('lokasi');
        var pass        = document.getElementById('pass');
        var divisi      = document.getElementById('divisi');
        var nik         = document.getElementById('nik');

        if (diisi(nama,'data masih kosog')) {
            if(diisi(username,'username masih kosong')){
                if (diisi(nik,'nik masih kosong')) {
                    if (diisi(pass,'password masih kosong')) {
                        if (diisi(divisi,'divisi masih kosong')) {
                            if (diisi(lokasi,'lokasi masih kosong')) {
                            return true;
                            };
                        };
                    };
                };
            };
        };

        return false;
    }

    function diisi(att,msg)
    {
        if(att.value.length==0){
            alert(msg);
            att.focus();
            return false;
        }
        return true;
    }
</script>
<?php include 'tambah_client.php'; ?>
</body>

</html>
