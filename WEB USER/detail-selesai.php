
<?php
    include "koneksi.php";
    if($_POST['idx']) {
        $id = $_POST['idx'];      
        $sql = mysqli_query($koneksi,"SELECT * FROM complain_selesai WHERE id = $id");
        while ($result = mysqli_fetch_array($sql)){
        ?>
        <form action="hapus-complain.php" method="post">
             <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
            <div class="form-group-1" >
                <label class="label">Judul</label>
                <input type="text" readonly="" class="form-control-1" value="<?= $result['judul']?>">

                <label class="label">Tanggal & Jam</label>
                <input type="text" readonly="" class="form-control-1" value="<?= $result['tgl']?>">
            </div>

            <div class="form-group-2" >
                <label class="label">Pengirim</label>
                <input type="text" readonly="" class="form-control-1" value="<?= $result['pengirim']?>">

                <label class="label">Lokasi</label>
                <input type="text" readonly="" class="form-control-1" value="<?= $result['lokasi']?>">
            </div>
            <div class="form-group-4" >
                <label class="label">IT</label>
                <input type="text" readonly="" class="form-control-1" value="<?= $result['it']?>">
            </div>
            
            <div class="form-group-5" >
                <label class="label">Waktu Pengerjaan</label>
                <input type="text" readonly="" class="form-control-1" value="<?= $result['durasi']?>">
            </div>

            <script type="text/javascript">
                function buka(){
                    window.open('lampiran/<?php echo  $result['filename'];?>','','width=640','height=480','menubar=yes','location=yes','scrollbar=yes','status=yes','resizeable=yes','toolbar=no','copyhistory=yes');
                }
            </script>
            <div class="form-group-7">
            <?php
                if (empty($result['filename'])) {
                    echo "<br>";
                }else{ ?>
                    <label class="label label-danger">Lampiran</label>
                    <a href="javascript:buka()" title="buka lampiran"> <i class="fa fa-image"></i></a><br>
            <?php    }

            ?>
            <label class="label">Masalah / Pengaduan</label>
            <input type="text" readonly="" placeholder="Complain" class="form-control" value="<?= $result['isi_complain']; ?>">
            </div>
            <div class="form-group-8">
            <label class="label">Solusi / Balasan</label>
            <input type="text" readonly="" placeholder="Complain" class="form-control" value="<?= $result['balasan']; ?>">
            </div>

            <div class="notice1">
            <span class="btn btn-success btn-sm">Complain Diselesaikan oleh <?= $result['it'] ?></span>
            </div>
        </form>     
        <?php } }
?>
