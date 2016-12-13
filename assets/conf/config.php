<?php

$hosted = "http://anonymous/SistemPajak/";
$error	= "http://anonymous/SistemPajak/error.html";

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'app_pajak');

$db = mysqli_connect(HOST, USER, PASS, DB);
if (!$db) {
	
	header("Location: ".$hosted."error/Not-Found");

}

$hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
$bulan = array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");

$tanggalID = $hari[date("w")].", ".date("j")." ".$bulan[date("n")]." ".date("Y");