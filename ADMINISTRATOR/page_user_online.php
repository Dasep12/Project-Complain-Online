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
                                <strong class="card-title">User Online</strong>
                            </div>
                            <div class="card-body">
                                <table  align="center" id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Status</th>
                                            <th>Login</th>   
                                        </tr>
                                    </thead>
                                    <tbody >
                                    <?php
                                    include 'koneksi.php';
                                    $no =1;
                                    $qry = "SELECT * FROM user WHERE status='online' ";
                                    $data = $conn->query($qry);
                                     foreach ($data as $result) :?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $result['username'] ?></td>
                                            <td><span class="badge badge-success"><?=  $result['status']?></span></td>
                                            <td>2019-12-15 / 15:00</td>
                                        </tr>
                                    <?php endforeach ; ?>
                                    </tbody>
                                </table>
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
