<?php
$tanggal = date('d M Y');
$noSuratPerintah = '094/'.date('d/m/y');
 // Define relative path from this script to mPDF
 $nama_dokumen='Laporan Perjalanan DPPRD - '.$tanggal; //Beri nama file PDF hasil.
define('_MPDF_PATH','MPDF57/');
include(_MPDF_PATH . "mpdf.php");
$mpdf=new mPDF('utf-8', array(216,350)); // Create new mPDF Document
 
//Beginning Buffer to save PHP variables and HTML tags
ob_start();
?>
<!--sekarang Tinggal Codeing seperti biasanya. HTML, CSS, PHP tidak masalah.-->
<!--CONTOH Code START-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cetak Laporan</title>
	<link rel="icon" href="img/logo.png" type="image/png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/betta.css">
	<!-- <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css"> -->
	<style>
		div.vertical-line{
		  	border-left: thick solid #000;
		  	height: 500px;
		  	margin-top: -20px;
		  	margin-left: 130px;
		}
		@page {
			margin: 2% 4%;
		}
	</style>
</head>
<body>

<header>
	<table style='margin:auto;'>
		<tr style='text-align:center;'>
			<td style='padding:5px;'>
				<img src='img/logo.png' alt='Logo' style='width:80px;height:100px;'>
			</td>
			<td style='padding:5px;text-align: center;'>
				<span style='font-size:12px;'><b>PEMERINTAH KABUPATEN MAGELANG</b></span> <br>
				<span style='font-size:15px;'><b>DINAS PENDAPATAN PENGOLAHAN KEUANGAN <br> DAN ASET DAERAH</b></span>
				<br>
				<span>Jl. Soekarno-Hatta No. 59 Kota Mungkid, Telp ( 0293 ) 788103</span>
				<br>
				<span>Fax. (0293) 788122 Kode Pos 56511 Website: <i>www.magelangkab.go.id</i></span>
			</td>
		</tr>
	</table>
	<br>
	<div class="gr-1"></div>
	<div class="gr-2"></div>
</header>

<div class="betta-small">

	<table class="betta-small">
	<caption class="betta-center betta-padding">NOTA DINAS</caption>
		<tr>
			<td>Kepada Yth</td>
			<td>: Kepada DPPKAD Kabupaten Magelang</td>
		</tr>
		<tr>
			<td>Lewat</td>
			<td>: Sekretaris DPPKAD</td>
		</tr>
		<tr>
			<td>Dari</td>
			<td>: Tim Penagihan Pajak</td>
		</tr>
		<tr>
			<td>Tanggal</td>
			<td>: <?= $tanggal ?></td>
		</tr>
		<tr>
			<td>Sifat</td>
			<td>: Biasa</td>
		</tr>
		<tr>
			<td>Lampiran</td>
			<td>: -</td>
		</tr>
		<tr>
			<td>Hal</td>
			<td>: Laporan Perjalanan Dinas Penagihan Pajak dan Retribusi Daerah</td>
		</tr>
		<tr>
			<td>Tembusan</td>
			<td>: -</td>
		</tr>
	</table><br>
	<div style="background-color: #000;padding:1px;border-color:#000;height: 1px;"></div><br>
	<div class="betta-left" style="border:2px solid;border-color:#000;padding: 5px 20px;width: 70px;"><b>DISPOSISI</b></div>
	<div class="vertical-line"></div>
	<div class="betta-right" style="width: 80%;margin-top: -505px;">
	<p class="betta-justify">
		Berdasarkan Surat Perintah Tugas Kepala DPPKAD No. 094/2210/31/2016 tanggal <?= $tanggal; ?> dan berdasarkan SPPD sebagai berikut:
	</p>
	<table class="betta-table-all betta-small">
		<thead>
		<tr style="background-color: lightgrey;text-align: center;">
			<th style="padding:10px;width: 5%;">No.</th>
			<th style="padding:10px;width: 35%;">Pegawai Yang Diperintah</th>
			<th style="padding:10px;width: 30%;">Nomor SPPD</th>
			<th style="padding:10px;width: 30%;">Tanggal</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td style="padding:5px;width: 5%;">1.</td>
			<td style="padding:5px;width: 25%;">WB. Parjono</td>
			<td style="padding:5px;width: 35%;">094/8361/31/DD/2016</td>
			<td style="padding:5px;width: 35%;">16 Juli 2016</td>
		</tr>
		<tr>
			<td style="padding:5px;width: 5%;">2.</td>
			<td style="padding:5px;width: 25%;">Priyo Mustiko</td>
			<td style="padding:5px;width: 35%;">094/8364/31/DD/2016</td>
			<td style="padding:5px;width: 35%;">16 Juli 2016</td>
		</tr>
		</tbody>
	</table>
	<p class="betta-justify">dengan hormat kami laporkan hasil tugas di lapangan sebagai berikut :</p>
	<table class="betta-small">
		<tr>
			<td>1. Tanggal Pelaksanaan</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>: 16 Juli 2016</td>
		</tr>
		<tr>
			<td>2. Lokasi yang dituju</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>: Sedayu Muntilan</td>
		</tr>
		<tr>
			<td>3. Laporan Hasil</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		</tr>
	</table>
	<p class="betta-justify">Telah melakukan kegiatan penagihan pajak dan retribusi ke para wajib pajak di Wilayah Kecamatan MUNTILAN dengan rincian penerimaan sebagai berikut :</p>
	<table class="betta-table-all betta-small">
		<caption class="betta-left-align"><b>Pajak Hotel</b></caption>
		<thead>
			<tr style="background-color: lightgrey;">
				<th>No.</th>
				<th>Nama Wajib pajak</th>
				<th>Masa Pajak</th>
				<th>Nominal Pajak</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>Losmen Purnama I</td>
				<td>Mei 2016</td>
				<td style="text-align: right;">100.000</td>
			</tr>
		</tbody>
	</table>
	<table class="betta-table-all betta-small">
		<caption class="betta-left-align"><b>Pajak Parkir</b></caption>
		<tbody>
			<tr>
				<td>1</td>
				<td>Warung SS/A.Khori</td>
				<td>Mei 2016</td>
				<td style="text-align: right;">25.000</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Warung Ayam Munthu</td>
				<td>Mei 2016</td>
				<td style="text-align: right;">25.000</td>
			</tr>
			<tr>
				<td>3</td>
				<td>laris Swalayan</td>
				<td>Mei 2016</td>
				<td style="text-align: right;">21.000</td>
			</tr>
			<tr>
				<td>1</td>
				<td>RSI Aisyah</td>
				<td>Mei 2016</td>
				<td style="text-align: right;">60.000</td>
			</tr>
		</tbody>
	</table>
	<table class="betta-table-all betta-small">
		<caption class="betta-left-align"><b>Pajak Warung Makan</b></caption>
		<tbody>
			<tr>
				<td>1</td>
				<td>PKL Harian Muntilan</td>
				<td>Mei 2016</td>
				<td style="text-align: right;">144.000</td>
			</tr>
		</tbody>
	</table>
	<table class="betta-table-all betta-small">
		<tbody>
			<tr>
				<td colspan="2" style="text-align: center;"><b>Total Hasil Penagihan</b></td>
				<td style="text-align: right;"><b>144.000</b></td>
			</tr>
		</tbody>
	</table>

	<p>Yang melaporkan :</p>
	<table class="betta-table betta-small">
		<tr>
			<td style="width:30%;text-align: left;">1. W B Prajono</td>
			<td style="width:40%;">&nbsp;</td>
			<td style="width:30%;text-align: right;">(. . . . . . . . . . . . . . . . .)</td>
		</tr>
		<tr>
			<td style="width:30%;text-align: left;">2. Priyo Mustiko</td>
			<td style="width:40%;">&nbsp;</td>
			<td style="width:30%;text-align: right;">(. . . . . . . . . . . . . . . . .)</td>
		</tr>
	</table>
	</div>

</div>

</body>
</html>
<?php
$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
ob_end_clean();
//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($nama_dokumen.".pdf" ,'I');
exit;
?>