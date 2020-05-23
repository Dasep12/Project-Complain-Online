        <!-- Left Panel -->



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
                                    <strong class="card-title">Cari Data Eror </strong>
                                </div>
                                <div class="card-body">
                                <form action="" method="POST">
                                    <div class="input-group 20" style="width: 60%;">
                                    <input type="text" id="input1-group2" style="height: 35px;" name="keyword" placeholder="no ticket , tanggal , pengirim , judul complain" class="form-control 12">
                                        <div class="input-group-btn">
                                            <button type="submit" name="cari" class="btn btn-primary btn-sm" style="height: 35px;">
                                                <i class="fa fa-search"></i> Search
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <small class="form-text text-muted"><i>*Hanya Menampilkan 50 Record Data*</i></small>

                                <!--Tabel Data Error-->
                                <?php include 'data_error.php'; ?>
                                <!--end of data eror-->


                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->
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

        </div><!-- /#right-panel -->

        <!-- Right Panel -->





    </body>

    </html>
        