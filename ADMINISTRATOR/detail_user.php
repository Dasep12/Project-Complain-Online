
<?php
    include "koneksi.php";
    if($_POST['idx']) {
        $id = $_POST['idx'];      
        $sql = mysqli_query($conn,"SELECT * FROM user WHERE id = $id");
        while ($result = mysqli_fetch_array($sql)){
        ?>
   <form action="edit_profile.php" enctype="multipart/form-data" method="post">
        <!--input-->
    <input type="hidden" value="<?= $result['id'];?>" name="id">
     <div class="content-wrapper">

     <center>
     	<img class="img-user rounded-circle" width="200" id="gambar_nodin"height="150" src="../Complain2/profile/<?= $result['poto'] ?>"><br>
		<label for="file-input" class="form-control-label">Ganti Poto</label>
		<input type="file" value="<?= $result['poto']?>" id="preview_gambar" name="poto" class="form-control-file">
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
 			<input type="text" name="nama" value="<?= $result['nama'] ?>" class="is-valid form-control-success form-control">
 	</div>
 	<div class="has-success form-group" >
 		<label for="inputIsValid" class="form-control-label">Username</label>
 			<input type="text" name="username" value="<?= $result['username'] ?>" class="is-valid form-control-success form-control">
 	</div>

 	<div class="has-success form-group" >
 		<label for="inputIsValid" class="form-control-label">NIK</label>
 			<input type="text" name="nik"  value="<?= $result['nik'] ?>" class="is-valid form-control-success form-control">
 	</div>

  <div class="has-success form-group" >
    <label for="inputIsValid" class="form-control-label">Level</label>
      <input type="text" name="divisi" value="<?= $result['level'] ?>" class="is-valid form-control-success form-control">
  </div>

 	<div class="has-success form-group" >
 		<label for="inputIsValid" class="form-control-label">Divisi</label>
 			<input type="text" name="divisi" value="<?= $result['divisi'] ?>" class="is-valid form-control-success form-control">
 	</div>
 	<div class="has-success form-group" >
 		<label for="inputIsValid" class="form-control-label">Lokasi</label>
 			<input type="text" name="lokasi"  value="<?= $result['lokasi'] ?>" class="is-valid form-control-success form-control">
 	</div>


	</div>
    <div class="card-footer">
        <button type="submit" name="edit" class="btn btn-primary btn-sm">
            <i class="fa fa-user"></i> Simpan Data
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
    </div>

        </form>   
        <?php } }
?>
