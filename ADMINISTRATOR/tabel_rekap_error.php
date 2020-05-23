<?php
include'koneksi.php';
	if (isset($_POST['cari'])) {
		$tgl = $_POST['tgl1'];
		$tgl2 = $_POST['tgl2'];
		$no =1;
		$category = $_POST['category'];

		if ($category=='All') {
			$data = "SELECT * FROM complain_selesai WHERE  tgl_selesai BETWEEN '$tgl' AND  '$tgl2' " ;
		}elseif($category=='Software'){
			$data ="SELECT * FROM complain_selesai WHERE category='Software' AND tgl_selesai BETWEEN '$tgl' AND '$tgl2'";
		}elseif($category=='Hardware'){
			$data = "SELECT * FROM complain_selesai WHERE category='Hardware' AND tgl_selesai BETWEEN '$tgl' AND '$tgl2'";
		}



		$sql = $conn->query($data);
		$count = mysqli_num_rows($sql);
		$no = 1;

		if ($count > 0) { ?>
		<form action="export_laporan.php" method="POST">
			<input type="hidden" name="tgl1" value="<?= $tgl ;?>">
			<input type="hidden" name="tgl2" value="<?= $tgl2 ;?>"> 
			<input type="hidden" name="query" value="<?= $data ;?>">
			<button type="submit" class="btn btn-outline-primary btn-sm btn-excel"><i class="fa fa-file"></i>&nbsp; Export To CSV </button>
			<a href="http://localhost:8080/admin/page.php?page=rekap_eror"><button type="button" class="btn btn-outline-primary btn-sm btn-excel"><i class="fa fa-refresh"></i>&nbsp; Reset Pencarian</button></a>
		</form>
			<table id="bootstrap-data-table-export" class="table table-striped table-bordered" width="100%">
			    <thead>
			        <tr>
			            <th><label>No</label></th>
			            <th><label>No Ticket</label></th>
			            <th><label>Judul</label></th>
			            <th><label>Category</label></th>
			            <th><label>Pengirim</label></th>
			            <th><label>Lokasi</label></th>
			            <th><label>Kirim</label></th>
			            <th><label>Selesai</label></th>
			            <th><label>IT</label></th>
			            <th><label>Status</label></th>
			        </tr>
			    </thead>
			    <tbody>
			    	<?php  while ($result = mysqli_fetch_array($sql)) { ?>
			    		<tr>
			    			<td><?= $no++; ?></td>
		                     <td>
		                      <?php echo "<label><a href='#edit_modal' data-toggle='modal' data-id=".$result['id'].">  ".$result['no_ticket'] ."  </a></label></td>"; ?>    
		                     </td>
			    			<td><label><?= $result['judul']?></label></td>
			    			<td><label><?= $result['category']?></label></td>
			    			<td><label><?= $result['pengirim']?></label></td>
			    			<td><label><?= $result['lokasi']?></label></td>
			    			<td><label><?= $result['tgl']?></label></td>
			    			<td><label><?= $result['tgl_selesai'] . ' / ' .$result['waktu']?></label></td>
			    			<td><label><?= $result['it']?></label></td>
			    			<td><label><?= $result['status']?></label></td>
			    		</tr>
			    <?php	} ?>
			    </tbody>
			    </table>

		<?php }else{ ?>
            <div class="sufee-alert alert with-close alert-secondary alert-dismissible fade show">
                <span class="badge badge-pill badge-warning">Oops...</span>
                Data yang anda cari tidak bisa kami temukan.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
<?php		}


	}
?>