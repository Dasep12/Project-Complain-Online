
    <!-- Left Panel -->



    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">
  
        <!-- Header-->

<!-- /header -->
        <!-- Header-->

<?php include'header.php'; ?>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Complain Terjawab</strong>
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
<!--Modal Complain-->                                
    <div class="modal fade" id="edit_modal" role="dialog">
        <div class="modal-dialog modal-lg"  role="document">
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
                url : 'detail_done.php',
                data :  'idx='+ idx,
                success : function(data){
                $('.hasil-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>
      <!-- End of ajax -->
                               <span><i>*Klik No Ticket untuk melihat data lengkap*</i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


</body>

</html>
