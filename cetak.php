<?php
session_start();

require("assets/conf/config.php");
if (!isset($_SESSION['username'])) {
   header("Location: ".$hosted."login/Auth");
}

if (isset($_POST['submit'])) { 

	$tanggalNota 			= $_POST['tanggalNota'];
	$noSuratPerintah 		= $_POST['noSuratPerintah'];

	$namaPegawai 			= $_POST['namaPegawai'];
	$nomorSPPD 				= $_POST['noSPPD'];
	$tanggalLaksana			= $_POST['tanggalLakasana'];

	$tanggalPelakasanaan	= $_POST['tanggalPelakasanaan'];

	$lokasiTujuan			= $_POST['lokasiTujuan'];

	$noPegawai=1;
	$noPajakHotel=1;
	$warungMakan=1;
	$pajakRestoran=1;
	$pajakReklame=1;
	$pajakHiburan=1;
	$pajakTanah=1;

 $nama_dokumen='Laporan Perjalanan DPPRD - '.$tanggal; 
define('_MPDF_PATH','MPDF57/');
include(_MPDF_PATH . "mpdf.php");
$mpdf=new mPDF('utf-8', array(216,350));
 
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cetak Laporan</title>
	<link rel="icon" href="<?= $hosted ?>assets/img/logo.png" type="image/png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?= $hosted ?>assets/css/style.css">
	<link rel="stylesheet" href="<?= $hosted ?>assets/css/betta.css">
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
<?php




?>
<header>
	<table style='margin:auto;'>
		<tr style='text-align:center;'>
			<td style='padding:5px;'>
				<img src='<?= $hosted ?>assets/img/logo.png' alt='Logo' style='width:100px;height:100px;'>
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

<div class="small">

	<table class="small">
	<caption class="center padding">NOTA DINAS</caption>
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
	<div class="left" style="border:2px solid;border-color:#000;padding: 5px 20px;width: 70px;"><b>DISPOSISI</b></div>
	<div class="vertical-line"></div>
	<div class="right" style="width: 80%;margin-top: -505px;">
	<p class="justify">
		Berdasarkan Surat Perintah Tugas Kepala DPPKAD No. <?= $noSuratPerintah; ?> tanggal <?= $tanggalNota; ?> dan berdasarkan SPPD sebagai berikut:
	</p>
	<div>
	<?php


		$a = count($namaPegawai);
		$b = ceil(($a - 2) + 2);

		$no = 1;
		$tabel = '';
		$i = 0;

		do{
			$tabel .='<tr><td>'.$no++.'</td><td>'.$namaPegawai[$i].'</td>';
			$j=$a;
				do{
					if($j>0)
				$tabel.= '<td>'.$nomorSPPD[$i].'</td><td>'.$tanggalLaksana[$i].'</tr>';
				$j++;
				}
			while($j<$a++);
			$i++;
			}
		while($i<$b);
		echo'<table class="table-all small">
		<tr style="background-color:lightgrey;">
		<th>No</th>
		<th>Nama Pegawai</th>
		<th>Nomor SPPD</th>
		<th>Tanggal</th>
		</tr>'
		.$tabel.
		'</table>';


	?>
	</div>
	<p class="justify">dengan hormat kami laporkan hasil tugas di lapangan sebagai berikut :</p>
	<table class="small">
		<tr>
			<td>1. Tanggal Pelaksanaan</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>: <?= $tanggalPelakasanaan; ?></td>
		</tr>
		<tr>
			<td>2. Lokasi yang dituju</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>: <?= $lokasiTujuan; ?></td>
		</tr>
		<tr>
			<td>3. Laporan Hasil</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		</tr>
	</table>
	<p class="justify">Telah melakukan kegiatan penagihan pajak dan retribusi ke para wajib pajak di Wilayah Kecamatan MUNTILAN dengan rincian penerimaan sebagai berikut :</p>
	<?php 

	// Pajak Hotel
	if (isset($_POST['pajakHotel']) != '' || isset($_POST['masaPajak']) != '' || isset($_POST['nominalPajak']) != '') {
		

		$Pajak = array(

			'NamaHotel' => $_POST['pajakHotel'],
			'MasaPajak' => $_POST['masaPajak'],
			'NomPajak'  => $_POST['nominalPajak']

		);

		echo '<table class="table-all small">
		<caption class="left-align"><b>Pajak Hotel</b></caption>
		<thead>
			<tr style="background-color: lightgrey;">
				<th>Nama Wajib pajak</th>
				<th>Masa Pajak</th>
				<th>Nominal Pajak</th>
			</tr>
		</thead>
		<tbody>
		<tr><td>';
		foreach ($Pajak["NamaHotel"] as $data) {
			
			echo $data ."<br><br>";

		}
		echo "</td><td>";
		foreach ($Pajak["MasaPajak"] as $data1) {
			
			echo $data1 ."<br><br>";

		}
		echo "</td><td style='text-align:right;'>";
		foreach ($Pajak["NomPajak"] as $data2) {
			
			echo "Rp. ".number_format($data2) ."<br><br>";

		}
		echo "</td></tr></tbody></table>";

	}

	// Pajak Parkir
	if (isset($_POST['pajakParkir']) != '' || isset($_POST['masaParkir']) != '' || isset($_POST['nominalParkir']) != '') {
		

		$Parkir = array(

			'Nama' => $_POST['pajakParkir'],
			'Masa' => $_POST['masaParkir'],
			'Nominal'  => $_POST['nominalParkir']

		);

		echo '<table class="table-all small">
		<caption class="left-align"><b>Pajak Parkir</b></caption>
		<thead>
			<tr style="background-color: lightgrey;">
				<th>Nama Wajib pajak</th>
				<th>Masa Pajak</th>
				<th>Nominal Pajak</th>
			</tr>
		</thead>
		<tbody>
		<tr><td>';
		foreach ($Parkir["Nama"] as $datap) {
			
			echo $datap ."<br><br>";

		}
		echo "</td><td>";
		foreach ($Parkir["Masa"] as $datap1) {
			
			echo $datap1 ."<br><br>";

		}
		echo "</td><td style='text-align:right;'>";
		foreach ($Parkir["Nominal"] as $datap2) {
			
			echo "Rp. ".number_format($datap2) ."<br><br>";

		}
		echo "</td></tr></tbody></table>";

	}

	// Pajak Warung Makan
	if (isset($_POST['warungMakan']) != '' || isset($_POST['masaWM']) != '' || isset($_POST['nominalWM']) != '') {
		

		$Warung = array(

			'Nama' => $_POST['warungMakan'],
			'Masa' => $_POST['masaWM'],
			'Nominal'  => $_POST['nominalWM']

		);

		echo '<table class="table-all small">
		<caption class="left-align"><b>Pajak Warung Makan</b></caption>
		<thead>
			<tr style="background-color: lightgrey;">
				<th>Nama Wajib pajak</th>
				<th>Masa Pajak</th>
				<th>Nominal Pajak</th>
			</tr>
		</thead>
		<tbody>
		<tr><td>';
		foreach ($Warung["Nama"] as $dataw) {
			
			echo $dataw ."<br><br>";

		}
		echo "</td><td>";
		foreach ($Warung["Masa"] as $dataw1) {
			
			echo $dataw1 ."<br><br>";

		}
		echo "</td><td style='text-align:right;'>";
		foreach ($Warung["Nominal"] as $data2) {
			
			echo "Rp. ".number_format($data2) ."<br><br>";

		}
		echo "</td></tr></tbody></table>";

	}

	// Pajak Restoran
	if (isset($_POST['pajakRestoran']) != '' || isset($_POST['masaRestoran']) != '' || isset($_POST['nominalRestoran']) != '') {
		

		$Restoran = array(

			'Nama' => $_POST['pajakRestoran'],
			'Masa' => $_POST['masaRestoran'],
			'Nominal'  => $_POST['nominalRestoran']

		);

		echo '<table class="table-all small">
		<caption class="left-align"><b>Pajak Restoran</b></caption>
		<thead>
			<tr style="background-color: lightgrey;">
				<th>Nama Wajib pajak</th>
				<th>Masa Pajak</th>
				<th>Nominal Pajak</th>
			</tr>
		</thead>
		<tbody>
		<tr><td>';
		foreach ($Restoran["Nama"] as $datar) {
			
			echo $datar ."<br><br>";

		}
		echo "</td><td>";
		foreach ($Restoran["Masa"] as $datar1) {
			
			echo $datar1 ."<br><br>";

		}
		echo "</td><td style='text-align:right;'>";
		foreach ($Restoran["Nominal"] as $datar2) {
			
			echo "Rp. ".number_format($datar2) ."<br><br>";

		}
		echo "</td></tr></tbody></table>";

	}

	// Pajak Reklame
	if (isset($_POST['pajakReklame']) != '' || isset($_POST['masaReklame']) != '' || isset($_POST['nominalReklame']) != '') {
		

		$Reklame = array(

			'Nama' => $_POST['pajakReklame'],
			'Masa' => $_POST['masaReklame'],
			'Nominal'  => $_POST['nominalReklame']

		);

		echo '<table class="table-all small">
		<caption class="left-align"><b>Pajak Reklame</b></caption>
		<thead>
			<tr style="background-color: lightgrey;">
				<th>Nama Wajib pajak</th>
				<th>Masa Pajak</th>
				<th>Nominal Pajak</th>
			</tr>
		</thead>
		<tbody>
		<tr><td>';
		foreach ($Reklame["Nama"] as $datark) {
			
			echo $datark ."<br><br>";

		}
		echo "</td><td>";
		foreach ($Reklame["Masa"] as $datark1) {
			
			echo $datark1 ."<br><br>";

		}
		echo "</td><td style='text-align:right;'>";
		foreach ($Reklame["Nominal"] as $datark2) {
			
			echo "Rp. ".number_format($datark2) ."<br><br>";

		}
		echo "</td></tr></tbody></table>";

	}

	// Pajak Hiburan
	if (isset($_POST['pajakHiburan']) != '' || isset($_POST['masaHiburan']) != '' || isset($_POST['nominalHiburan']) != '') {
		

		$Hiburan = array(

			'Nama' => $_POST['pajakHiburan'],
			'Masa' => $_POST['masaHiburan'],
			'Nominal'  => $_POST['nominalHiburan']

		);

		echo '<table class="table-all small">
		<caption class="left-align"><b>Pajak Hiburan</b></caption>
		<thead>
			<tr style="background-color: lightgrey;">
				<th>Nama Wajib pajak</th>
				<th>Masa Pajak</th>
				<th>Nominal Pajak</th>
			</tr>
		</thead>
		<tbody>
		<tr><td>';
		foreach ($Hiburan["Nama"] as $datah) {
			
			echo $datah ."<br><br>";

		}
		echo "</td><td>";
		foreach ($Hiburan["Masa"] as $datah1) {
			
			echo $datah1 ."<br><br>";

		}
		echo "</td><td style='text-align:right;'>";
		foreach ($Hiburan["Nominal"] as $datah2) {
			
			echo "Rp. ".number_format($datah2) ."<br><br>";

		}
		echo "</td></tr></tbody></table>";

	}

	// Pajak Tanah
	if (isset($_POST['pajakTanah']) != '' || isset($_POST['masaTanah']) != '' || isset($_POST['nominalTanah']) != '') {
		

		$Tanah = array(

			'Nama' => $_POST['pajakTanah'],
			'Masa' => $_POST['masaTanah'],
			'Nominal'  => $_POST['nominalTanah']

		);

		echo '<table class="table-all small">
		<caption class="left-align"><b>Pajak Tanah</b></caption>
		<thead>
			<tr style="background-color: lightgrey;">
				<th>Nama Wajib pajak</th>
				<th>Masa Pajak</th>
				<th>Nominal Pajak</th>
			</tr>
		</thead>
		<tbody>
		<tr><td>';
		foreach ($Tanah["Nama"] as $datat) {
			
			echo $datat ."<br><br>";

		}
		echo "</td><td>";
		foreach ($Tanah["Masa"] as $datat1) {
			
			echo $datat1 ."<br><br>";

		}
		echo "</td><td style='text-align:right;'>";
		foreach ($Tanah["Nominal"] as $datat2) {
			
			echo "Rp. ".number_format($datat2) ."<br><br>";

		}
		echo "</td></tr></tbody></table>";

	}

	?>

	<p>Yang melaporkan :</p>
	<?php


		$a = count($namaPegawai);
		$b = ceil(($a - 2) + 2);

		$no = 1;
		$tabel = '';
		$i = 0;

		do{
			$tabel .='<tr><td style="width:30%;text-align: left;">'.$no++.'  '.$namaPegawai[$i].'</td>';
			$j=$a;
				do{
					if($j>0)
				$tabel.= '<td style="width:40%;">&nbsp;</td><td style="width:30%;text-align: right;">(. . . . . . . . . . . . . . . . .)</td></tr>';
				$j++;
				}
			while($j<$a++);
			$i++;
			}
		while($i<$b);
		echo'<table class="table small">'.$tabel.'</table>';


	?>
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

}
?>