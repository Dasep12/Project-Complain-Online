<?php

include 'koneksi.php';

//data grafik pengunjung ;
$min_satu =  mktime(0,0,0 ,date("m") , date("d")-1 , date("Y"));
$bulan_min_satu = mktime(0,0,0, date('m')-1 , date("d") , date("Y"));

$today = date('Y-m-d');
$yesterday = date('Y-m-d',$min_satu);
$amonth  =date('m',$bulan_min_satu) ;

//pengunjung hari ini / sekarang
$qry_hari_ini =mysqli_query($koneksi, "SELECT * FROM pengunjung WHERE waktu = '$today'");
$count_hari_ini = mysqli_num_rows($qry_hari_ini);


//pengunjung hari kemarin
$qry_kemarin =mysqli_query($koneksi, "SELECT * FROM pengunjung WHERE waktu = '$yesterday'");
$count_hari_kemaren = mysqli_num_rows($qry_kemarin);


//pengunjung bulan lalu 
$qry_bulan_lalu = mysqli_query($koneksi,"SELECT * FROM pengunjung WHERE bulan='$amonth'");
$count_bulan_kemarin = mysqli_num_rows($qry_bulan_lalu);

//error hardware
$error_hardware = "SELECT * FROM tabel_complain WHERE category='Hardware'";
$row = $koneksi->query($error_hardware);
$count_hardware = mysqli_num_rows($row);


//error hardware
$error_software = "SELECT * FROM tabel_complain WHERE category='Software'";
$row2 = $koneksi->query($error_software);
$count_software = mysqli_num_rows($row2);



//error hardware
$error_lainnya = "SELECT * FROM tabel_complain WHERE category='Lainnya'";
$row3 = $koneksi->query($error_lainnya);
$count_lainnya = mysqli_num_rows($row3);