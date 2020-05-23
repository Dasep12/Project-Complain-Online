<center><h1>Nyoba selisih waktu</h1></center>
<?php date_default_timezone_set('Asia/Jakarta');
/*
//mneghitung selisih hari
$awal = strtotime('2000-05-01');
$akhir = strtotime('2000-08-01');
$diff= $akhir-$awal ;
echo 'umur anda adalah ' . floor($diff/(60*60*24*365)) .' tahun<br>';
echo "umur anda adalah ". floor($diff/(60*60*24))." hari";

//end of waktu




//menghitung selisih jam
$jam1 = strtotime('10:00:00') ;
$jam2 = strtotime('10:00:02');

$selisih = $jam2-$jam1 ; 
$jam = floor($selisih/(60*60));
$menit = $selisih-$jam*(60*60);
echo "<br><br>";
echo "<br>Waktu Anda Tersisa Tinggal :" ;
echo $jam .' Jam ';
echo floor($menit/60) .' menit';






*/
?>


<table border="1" width="50%" align="center">
    <tr>
        <thead>
            <th>No</th>
            <th>Jam 1</th>
            <th>Jam2</th>
            <th>Selilsih</th>
        </thead>
    </tr>
    <tbody align="center">
        <tr>
            <td>1</td>
            <td>20:20:00</td>
            <td>21:00:00</td>
            <td> 
            <?php 
                $time1= strtotime('20:20:00');
                $time2 = strtotime('21:00:00');
                $beda = $time2-$time1 ;
                $jam = floor($beda/(60*60));
                $menit = floor($beda-$jam*(60*60));
                echo $jam . ' Jam ' . floor($menit/60) . ' menit';
            ?>
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>20:00:12</td>
            <td>20:00:00</td>
            <td> 
            <?php

            ?>
            </td>
        </tr>        
    </tbody>
</table>

<br>

<center>
    <h1>Nyoba Selisih Tanggal dan Hari</h1>
<?php

$tawal = '2019-01-03';
$takhir = date('Y-m-d');

$tgl1 = strtotime($tawal);
$tgl2 = strtotime($takhir);

$diff = $tgl2-$tgl1 ; 
$hari = floor($diff/(60*60*24));
$tahun = floor($diff/(60*60*24*365));
$bulan = floor($diff/(60*60*24*30));
?>
<table width="60%" border="1px">
    <th>No</th>
    <th>Tanggal Awal</th>
    <th>Tanggal Akhir</th>
    <th>Selisih Hari</th>
    <tbody>
        <tr>
            <td>1</td>
            <td><?php echo $tawal; ?></td>
            <td><?php echo $takhir; ?></td>
            <td><?php echo $hari .' hari'; ?></td>
        </tr>
                <tr>
            <td>1</td>
            <td><?php echo $tawal; ?></td>
            <td><?php echo $takhir; ?></td>
            <td><?php echo $tahun .' Tahun'; ?></td>
        </tr>
        <tr>
            <td>1</td>
            <td><?php echo $tawal; ?></td>
            <td><?php echo $takhir; ?></td>
            <td><?php echo $bulan .' Bulan'; ?></td>
        </tr>
    </tbody>
</table>
</center>
