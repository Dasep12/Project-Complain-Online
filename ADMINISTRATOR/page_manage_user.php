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
   $data = "SELECT * FROM user WHERE username='$key'" ;
}else{
    $data = "SELECT * FROM user ";
}
?>

<div class="card">
    <div class="card-header">
        <strong class="card-title">Manage user <i class="fa fa-users"></i></strong>
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
    echo '<a href=""><button type="button" class="btn btn-outline-primary btn-sm btn-excel"><i class="fa fa-refresh"></i>&nbsp; Reset Pencarian</button></a>';
    }else{
        echo "";
    }


?>

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
                    <td><center><img height="40" width="60"  class="user-avatar rounded-circle" src="../Complain2/profile/<?= $result['poto'] ?>" alt="User Avatar"></center></td>
                    <td><label><?= $result['username'] ; ?></label></td>
                    <td><label><?= $result['lokasi'] ; ?></label></td>
                    <td><label><?= $result['divisi'] ; ?></label></td>
                    <td><center><a class="btn btn-primary btn-sm btn-icn" href="#edit_modal" data-toggle='modal' data-id='<?= $result['id']?>'><span class="ti-settings"></span> </a> / <a class="btn btn-danger btn-sm btn-icn" href=""><i class="fa fa-trash"></i> </a></center></td>
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



</body>

</html>
