
<?php
    include "koneksi.php";
    if($_POST['idx']) {
        $id = $_POST['idx'];      
        $sql = mysqli_query($conn,"SELECT * FROM tabel_complain WHERE id = $id");
        while ($result = mysqli_fetch_array($sql)){
        ?>
        <form action="reply_complain.php" method="post">
        <!--input-->
             <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
             <input type="hidden" name="no_ticket" value="<?php echo $result['no_ticket']; ?>">
             <input type="hidden" name="filename" value="<?php echo $result['filename']; ?>">
             <input type="hidden" name="folder" value="<?php echo $result['folder']; ?>">
             <input type="hidden" name="waktu" value="<?php echo $result['waktu']; ?>">
         <!--end -->
<div class="header-modal">
	<label class="form-label">no ticket - <?= $result['no_ticket'] ?></label>
</div>
<div class="sub-modal-1">
	<div class="form-group">
		<label class="form-label-sm" >Judul</label><br>
		<input readonly="" type="text" name="judul" class="form-control-1" value="<?= $result['judul']?>">
	</div>

	<div class="form-group">
		<label class="form-label-sm">Pengirim</label><br>
		<input readonly="" name="pengirim" type="text" class="form-control-1" value="<?= $result['pengirim']?>">
	</div>
</div>

<div class="sub-modal-2">
	<div class="form-group">
		<label class="form-label-sm" >Lokasi</label><br>
		<input readonly=""  type="text" name="lokasi" class="form-control-1" value="<?= $result['lokasi']?>">
	</div>

	<div class="form-group">
		<label  class="form-label-sm"  >Tanggal & Jam</label><br>
		<input readonly="" type="text" name="tgl" class="form-control-1" value="<?= $result['tgl']?>">
	</div>
</div>

<div class="sub-modal-3">
	<div class="form-group">
		<label class="form-label-sm" >Category</label><br>
		<input readonly="" type="text" name="category" class="form-control-1" value="<?= $result['category']?>">
	</div>

	<div class="form-group">
		<label  class="form-label-sm"  >Di Proses Oleh</label><br>
		<?php
			if ($result['status']=='proses') { ?>
		<input readonly="" type="text" name="it" class="form-control-1" value="<?= $result['IT']?>">
			<?php }elseif ($result['status']=='pending') { ?>
						<input readonly="" type="text" class="form-control-1">
		<?php	}

		?>

	</div>
</div>

<div class="sub-modal-4">
	<div class="form-group">
<script>
	function buka(){
		window.open('../Complain2/lampiran/<?= $result['filename'];?>' ,'', 'width=640' ,'height=480','menubar=yes' ,'resizeable=yes')
	}
</script>
		<label class="form-label-sm" >Lampiran</label>
		<?php
			if ($result['filename']==$result['filename']) { ?>
		<a href="javascript:buka()"><i class="fa fa-folder-open"></i></a>		<?php	}elseif ($result['filename']=='') { ?>
			 	<?php	} 
		?>

	</div>
</div>
<div class="sub-modal-5">

<?php
if($result['status']=='proses'){ ?>

	<div class="form-group">
		<label class="form-label-sm">Masalah/Complain</label><br>
		<label>
		<textarea readonly="" rows="8" name="isi_complain" cols="85" class="form-control-1"><?= $result['isi_complain']?></textarea></label>
	</div>

	<div class="form-group">
		<label  class="form-label-sm">Kirim Balasan</label><br>
		<textarea  rows="8" cols="85" name="balasan" class="form-control-1" placeholder="Kirim Balasan Complain Disini"></textarea>
	</div>

<?php }elseif($result['status']=='pending'){ ?>
	<div class="form-group">
		<label class="form-label-sm" >Masalah/Complain</label><br>
		<label>
		<textarea readonly="" rows="8" cols="300" style=""  class="form-control-1"><?= $result['isi_complain']?></textarea></label>
	</div>
<?php } ?>
</div>
<div class="btn-reply">
		<?php
			if ($result['status']=='proses') { ?>
			<button type="submit" name="reply" class="btn btn-primary" ><i class="fa fa-sign-in"></i> Kirim Balasan</button>
			<?php }elseif ($result['status']=='pending') { ?>
					
		<?php	}

		?>
</div>
        </form>     
        <?php } }
?>
