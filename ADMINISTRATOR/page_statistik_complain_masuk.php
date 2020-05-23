
    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">
  
        <!-- Header-->

<!-- /header -->
        <!-- Header-->

<?php include'header.php'; ?>
<script>
        function validasi(){
            var category = document.getElementById('category');
            var tgl1 = document.getElementById('tgl1');
            var tgl2 = document.getElementById('tgl2');


            if (harusDiisi(tgl1, "Tanggal Harus Di isi")) {
                if (harusDiisi(tgl2, "Tanggal harus di isi")) {
                    if (harusDiisi(category, "Tanggal harus di isi")) {
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
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Statistik Complain </strong>
                            </div>
                            <div class="card-body">
                            <form action="" onsubmit="return validasi()" method="POST">
                            <div class="row">
                                <div class="col col-sm-2">
                                <input type="text" id="tgl1" name="tgl1" placeholder=<?= date('Y-m-d')?> class="input-sm form-control-sm form-control form-position">
                                </div>
                                <label class="judul2">to</label>
                                <div class="col col-sm-2">
                                <input type="text" id="tgl2" name="tgl2" placeholder="<?= date('Y-m-d')?> "  class="input-sm form-control-sm form-control">
                                </div>
                                <button type="submit" name="view" class="btn btn-primary btn-sm btn-submit">View <i class="fa fa-search"></i></button>
                                <i class="btn btn-info btn-sm btn-position">Software</i><i class="btn btn-danger btn-sm">Hardware</i><i class="btn btn-success btn-sm">Lainnya</i>
                            </div>
                            </form>
                            </div>
                                <br>
                            <?php include 'grafik_error.php'; ?>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


<script>
$("#tgl1").datepicker({
    dateFormat : 'yy-mm-dd'
 });
$("#tgl2").datepicker({
    dateFormat : 'yy-mm-dd'
});
</script>
</body>

</html>
    