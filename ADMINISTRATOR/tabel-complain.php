    <!-- Right Panel -->
<div id="right-panel" class="right-panel">
  
        <!-- Header-->

<!-- /header -->
        <!-- Header-->

<?php include'header.php'; ?>

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Complain Masuk <i class="ti-comments"></i></strong>
        </div>
        <div class="card-body">
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered" width="100%">
                <thead>
                    <tr>
                        <th><label>No</label></th>
                        <th><label>No Ticket</label></th>
                        <th><label>Judul</label></th>
                        <th><label>Pengirim</label></th>
                        <th><label>Lokasi</label></th> 
                        <th><label>Tanggal & Jam</label></th>   
                        <th><label>Progress</label></th>
                        <th width="20%"><label>Aksi</label></th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                    include 'koneksi.php';
                    $no =1;
                    $data = " SELECT * FROM tabel_complain  " ;
                    $qry = $conn->query($data);
                    while ($result = mysqli_fetch_array($qry)) { ?>
                       <tr>
                       <td><label><?= $no++?></label></td>
                       <td>
                       <label>
                        <a href='#edit_modal' data-toggle='modal' data-id=<?=$result['id'] ?>>  <?= $result['no_ticket']?>
                        </a>
                        </label>
                        </td>
                       <td><label><?= $result['judul']?></label></td>
                       <td><label><?= $result['pengirim']?></label></td>
                       <td><label><?= $result['lokasi']?></label></td>
                       <td><label><?= $result['tgl']?></label></td>
                       <td>
                            <?php 
                                if ($result['status']=='pending') {
                                    echo "<center><label>-</label></center>";
                                }elseif($result['status']=='proses'){
                                    echo '<span class="badge badge-primary" style="border-radius:1px;font-weight:normal;">sedang dikerjakan Dasep</span>';
                                }
                            ?>
                        </td>
                        <td>
                            <?php
                                if ($result['status']=='pending') { ?>
                                <center>
                                <label>
                                <a href="proses_status_complain.php?id=<?=$result['id'];?>" style="border-radius: 6px;padding: 4px 4px;" class="btn btn-primary btn-sm"><i class="fa fa-gears"></i>
                                <label>Proses</label>
                                </a>
                                <a onclick="return  confirm('Yakin Hapus Complain')" href="hapus_status_complain.php?id=<?=$result['id'];?>" style="border-radius: 6px;padding: 4px 4px;" class="btn btn-success btn-sm"><label><i class="fa fa-remove"></i>Hapus</label></a>
                                </center>
                             <?php   }else{ ?>
                                    <center><label><a href="batal_status_complain.php?id=<?=$result['id']; ?>" style='width: 100%;border-radius: 6px;padding: 4px 4px;' class='btn btn-danger btn-sm'><i class='fa fa-refresh'></i> Batalkan Proses</label></a></center>
                             <?php   }
                            ?>
                        </td>
                       </tr>
                  <?php  }
                   ?>
                </tbody>
            </table>

        <!-- /.modal complain -->
    <div class="modal fade" id="edit_modal" role="dialog" style="">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                </div>
                <div class="modal-body">
                    <div class='hasil-data'>
                        
                    </div>
                </div>
            </div>
        </div>
    <!-- Modal Complain -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $('#edit_modal').on('show.bs.modal', function (e) {
            var idx = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type :'post',
                url : "detail-complain.php",
                data :  'idx='+ idx,
                success : function(data){
                $('.hasil-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>   
    </div>         
            <span class="inf"><i>*klik no ticket untuk melihat complain*</i></span>



                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->


</body>

</html>
