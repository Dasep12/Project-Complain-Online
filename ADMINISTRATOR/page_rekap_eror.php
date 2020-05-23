
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
                                <strong class="card-title">Rekap Error Bulanan</strong>
                            </div>
                            <div class="card-body">
<script>
            function validasi(){
                var category = document.getElementById('category');
                var tgl1 = document.getElementById('datepicker');
                var tgl2 = document.getElementById('datepicker1');


                if (harusDiisi(tgl1, "Tanggal Harus Di isi")) {
                    if (harusDiisi(tgl2, "Tanggal harus di isi")) {
                        if (harusDiisi(category, "Group Eror harus di isi")) {
                            return true;
                        };
                    };
                };
                return false;
            }

            function harusDiisi(att, msg){
                if (att.value.length == 0) {
                    alert(msg);
                    att.focus();
                    return false;
                }

                return true;
            }
        </script>
                            <form action="" onsubmit="return validasi()" method="POST">
                            <div class="row">
                                <div class="col col-sm-2" style="margin-left: 20px;">
                                <input type="text" id="datepicker1" id="tgl1" name="tgl1" placeholder=<?= date('Y-m-d')?> class="input-sm form-control-sm form-control form-position">
                                </div>
                                <label class="judul" style="margin-left:5px;margin-right: -25px;"><b>sampai</b></label>
                                <div class="col col-sm-2">
                                <input type="text" id="datepicker" name="tgl2"  placeholder="<?= date('Y-m-d') ?>" class="input-sm form-control-sm form-control form-position">
                                 <script>
                                    $("#datepicker").datepicker({
                                        dateFormat : 'yy-mm-dd'
                                     });
                                    $("#datepicker1").datepicker({
                                        dateFormat : 'yy-mm-dd'
                                    });
                                </script>                               
                                </div>
                                <label class="judul" style="margin-left: 2px;"><b>Group Eror</b></label>
                                <div class="col col-sm-2">
                                <select name="category" id="category" class="form-control-sm form-control">
                                    <option value="">Pilih</option>
                                    <option value="Software">Software</option>
                                    <option value="Hardware">Hardware</option>
                                    <option value="All">All</option>
                                </select>
                                </div>
                                <button type="submit" name="cari" class="btn btn-info btn-sm btn-option"><b>Lihat</b></button>
                            </div>
                            </form>
                            <br>
                            <?php include 'tabel_rekap_error.php'; ?>

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
    