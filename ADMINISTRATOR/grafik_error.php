<?php 
include 'koneksi.php';

if (isset($_POST['view'])) {
    $tgl1 = $_POST['tgl1'];
    $tgl2 = $_POST['tgl2'];


    //data software ;
    $software = mysqli_query($conn,"SELECT COUNT(tgl_selesai) AS jumlah_software   FROM complain_selesai WHERE category ='Software' AND tgl_selesai BETWEEN '$tgl1' AND '$tgl2' ");
    $result = mysqli_fetch_array($software);

    //data hardware ;
    $hardware = mysqli_query($conn,"SELECT COUNT(tgl_selesai) AS jumlah_hardware FROM complain_selesai WHERE category='Hardware' AND tgl_selesai BETWEEN '$tgl1' AND '$tgl2'");
    $view = mysqli_fetch_array($hardware);


    //data lainnya
    $lainnya = mysqli_query($conn,"SELECT COUNT(tgl_selesai) AS jumlah_lainnya FROM complain_selesai WHERE category='Lainnya' AND tgl_selesai BETWEEN '$tgl1' AND '$tgl2'");
    $view1 = mysqli_fetch_array($lainnya);
?>

                            <div>
                                <div class="mb-2">
                                    <div class="progress-bar bg-success progress-bar progress-bar" role="progressbar" style="width:<?= $view1['jumlah_lainnya'] ?>%;font-style: italic;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?= $view1['jumlah_lainnya'] .' eror'; ?></div>
                                </div>
                                <div class="mb-2">
                                    <div class="progress-bar bg-info progress-bar progress-bar " role="progressbar" style="width: <?= $result['jumlah_software'] ?>% ;font-style: italic;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" ><?= $result['jumlah_software'] .' eror' ?></div>
                                </div>
                                <div class="">
                                    <div class="progress-bar bg-danger progress-bar progress-bar" role="progressbar" style="width: <?= $view['jumlah_hardware'] ?>%;font-style: italic;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"><?= $view['jumlah_hardware'] .' eror'; ?></div>
                                </div>
                                <br>
                            </div>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>

<?php }  ?>


