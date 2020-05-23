<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

<!-- Header-->

<!-- /header -->
<!-- Header-->

<?php include'header.php'; ?>

<div class="content mt-3">
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
        $id = $_GET['id'];
        $data   =  "SELECT * FROM admin_it WHERE id='$id'"; 
        $qry    = $conn->query($data);
    foreach ($qry as $result) : ?> 
                        <form action="update_my_profile.php" method="post" enctype="multipart/form-data" >
                    <img src="profile/<?= $result['poto'] ?>" id="gambar_preview" class="user-avatar rounded-circle" height="200" width="250" >
                <input type="file" id="preview_gambar" name="poto" class="form-control form-control-sm form-file">
        <script>
            function bacaGambar(input){
                if(input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#gambar_preview').attr('src', e.target.result);
                }
                    reader.readAsDataURL(input.files[0]);
                }
            }
                    $('#preview_gambar').change(function(){
                        bacaGambar(this);
                    })
        </script>
</div>
<div class="form-profile">
    <table class="table">
    <tr>
        <th><label>Nama Lengkap</label></th>
        <td><label>:</label></td>
        <td><input type="text" class="form-control form-edit" name="nama" value="<?= $result['nama'] ?>"></td>
        </tr>

    <tr>
        <th><label>Username</label></th>
        <td><label>:</label></td>
        <td><input type="text" class="form-control form-edit" name="username" value="<?= $result['username'] ?>"></td>
    </tr>

    <tr>
        <th><label>Gender</label></th>
        <td><label>:</label></td>
    <td>
        <select name="gender" class="form-control form-edit" value="<?= $result['gender'] ?>">
            <option value="Pria">Pria</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </td>
    </tr>

    <tr>
        <th><label>NIK</label></th>
        <td><label>:</label></td>
        <td><input type="text" class="form-control form-edit" name="nik" value="<?= $result['nik'] ?>"></td>
    </tr> 

    <tr>
        <th><label>Sekolah</label></th>
        <td><label>:</label></td>
        <td><input type="text" class="form-control form-edit" name="sekolah" value="<?= $result['sekolah'] ?>"></td>
    </tr>

    <tr>
        <th><label>Jurusan</label></th>
        <td><label>:</label></td>
        <td><input type="text" class="form-control form-edit" name="jurusan" value="<?= $result['jurusan'] ?>"></td>
    </tr>

    <tr>
        <th><label>Level</label></th>
        <td><label>:</label></td>
        <td><input type="text" class="form-control form-edit" name="level" value="<?= $result['level'] ?>"></td>
    </tr>

    <tr>
        <th><label>Alamat</label></th>
        <td><label>:</label></td>
        <td><input type="text" class="form-control form-edit" name="alamat" value="<?= $result['alamat'] ?>"></td>
    </tr>
        <div class="btn-edit">
            <input type="hidden" name="id" value="<?= $result['id']?>">
            <button type="submit" name="update" class="btn btn-success btn-sm">Update Data Diri <i class="fa fa-edit"></i></button>
        </div>
    <?php endforeach ;?>
        </table>
        </div>
</form>
        </div>
            </div>
                </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    </div><!-- /#right-panel -->

<!-- Right Panel -->
