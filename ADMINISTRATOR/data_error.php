<?php
include 'koneksi.php';
	if(isset($_POST['cari'])){
		$no = 1;
		$key = $_POST['keyword'];
		$data = "SELECT * FROM complain_selesai WHERE pengirim like '%$key' or tgl_selesai like '%$key' or judul like '%$key' or category like '%$key' or no_ticket like '%$key'";
		$qry = $conn->query($data);
		$count = mysqli_num_rows($qry);

		if (strlen($key)<=0) {
			echo "
				<script>
					alert('Kata Kunci Kosong');
					document.location.href='http://localhost:8080/admin/page.php?page=cari_data_error';
				</script>";
		}elseif ($count>0) { ?>
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered" width="100%">
                                    <thead>
                                        <tr>
                                            <th><label>No</label></th>
                                            <th><label>No Ticket</label></th>
                                            <th><label>Judul</label></th>
                                            <th><label>Pengirim</label></th>
                                            <th><label>Lokasi</label></th>
                                            <th><label>Waktu Kirim</label></th>
                                            <th><label>IT</label></th>
                                            <th><label>Status</label></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no =1;
                                    include 'koneksi.php';
                                    $data = "SELECT * FROM complain_selesai";
                                    $qry = $conn->query($data);
                                    while ($result = mysqli_fetch_array($qry)) { ?>
                                      <tr>
                                          <td><label><?= $no++ ?></label></td>
                                          <td>
                                          <?php echo "<label><a href='#edit_modal' data-toggle='modal' data-id=".$result['id'].">  ".$result['no_ticket'] ."  </a></label></td>"; ?>    
                                          </td>
                                          <td><label><?= $result['judul']?></label></td>
                                          <td><label><?= $result['pengirim']?></label></td>
                                          <td><label><?= $result['lokasi']?></label></td>
                                          <td><label><?= $result['tgl']?></label></td>
                                          <td><label><?= $result['it']?></label></td>
                                          <td class="text-white text-center bg-success"><label><?= $result['status']?></label></td>
                                      </tr>
                                 <?php   }
                                     ?>
                                    </tbody>
                                </table>

			<?php
			}elseif($count<=0){
			echo '                                    
			<div class="alert alert-primary" role="alert">
               <center><h4>Oops ,sory</h4>data yang anda cari tidak ditemukan<br><a href=""><i class="fa fa-refresh"></i>Reset Pencarian</a></center>
            </div>';
		}
		}
	?>

    