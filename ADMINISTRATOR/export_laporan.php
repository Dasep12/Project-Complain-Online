<?php
include 'koneksi.php';
 header("Content-type:application/vnd-ms-excel");
 header("Content-Disposition:attachment;filename=Laporan_Eror.xls"); 
date_default_timezone_set('Asia/Jakarta');
 $tgl = $_POST['tgl1'];
 $tgl2 = $_POST['tgl2'];

 ?>

<center>
<h2 style="font-family: sans serif ;" >Rekap Error Bulanan
</h2>
</center>

<table>
<tr>
    <td>Nama</td>
    <td>Dasep</td> 
</tr>
<tr>
    <td>Tanggal Rekap</td>
    <td><?= $tgl .' s/d '  . $tgl2 ?></td>
</tr>
<tr>
    <td>Jam</td>
    <td><?= date('H:i:s') ?></td>
</tr>
</table>


<table border="1">
    <thead>
        <tr>
            <th rowspan="2">No</th>
            <th rowspan="2">No Ticket</th>
            <th rowspan="2">Judul</th>
            <th rowspan="2">Category</th>
            <th rowspan="2">Pengirim</th>
            <th rowspan="2">Lokasi</th>
            <th rowspan="2">Kirim</th>
            <th rowspan="2">Selesai</th>
            <th rowspan="2">Durasi</th>
            <th rowspan="2">IT</th>
            <th colspan="2">Pengaduan Masuk</th>
	        <th rowspan="2">Status</th>
        </tr>
        <tr>
            <th>Masalah / Complain</th>
            <th>Solusi / Balasan </th>
        </tr>
    </thead>
    <tbody>
		<?php 
		$no =1;
		$data =  $_POST['query'] ;
		$qry = $conn->query($data) ;
		while ($result = mysqli_fetch_array($qry)) { ?>
			<tr>
				<td><?= $no++ ;?></td>
    			<td><label><?= $result['no_ticket']?></label></td>
    			<td><label><?= $result['judul']?></label></td>
    			<td><label><?= $result['category']?></label></td>
    			<td><label><?= $result['pengirim']?></label></td>
    			<td><label><?= $result['lokasi']?></label></td>
    			<td><label><?= $result['tgl']?></label></td>
    			<td><label><?= $result['tgl_selesai'] . ' / ' .$result['waktu']?></label></td>
                <td><label><?= $result['durasi']?></label></td
    			<td><label><?= $result['it']?></label></td>
    			<td><label><?= $result['isi_complain']?></label></td>
    			<td><label><?= $result['balasan']?></label></td>
    			<td bgcolor="red"><label><?= $result['status']?></label></td>
			</tr>
		<?php } ?>
	</tbody>