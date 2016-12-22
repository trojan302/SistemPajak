<?php
//memulai menggunakan mpdf
// Tentukan path yang tepat ke mPDF
$nama_dokumen='Laporan-Pajak-'.date('d-m-Y'); //Beri nama file PDF hasil.
define('_MPDF_PATH','assets/libs/mpdf/'); // Tentukan folder dimana anda menyimpan folder mpdf
include(_MPDF_PATH . "mpdf.php"); // Arahkan ke file mpdf.php didalam folder mpdf
$style = '<style>
@page {
    margin-left: 0.7cm;
    margin-right: 0.7cm;
    margin-top: 0.7cm;
    margin-bottom 0.7cm;
}
</style>';
$mpdf=new mPDF('utf-8', array(216,356)); // Membuat file mpdf baru
 
//Memulai proses untuk menyimpan variabel php dan html
ob_start();

?>
<!DOCTYPE html>
<html>
<head>
  <title>Sistem Pajak Kabupaten Magelang</title>
  <link rel="stylesheet" href="<?= $hosted ?>assets/css/betta.css">
</head>
<body>

  <table style="width:100%;margin: auto;">
  	<tr>
  		<td style="width: 25%;text-align: right;">
  			<img src="assets/img/logo.png" alt="" style="width: 15%">
  		</td>
  		<td style="width: 75%;text-align: left;padding-left: 60px;">
  			<h6 style="left:288px;position: absolute;"><b>PEMERINTAH KABUPATEN MAGELANG</b></h6>
  			<h5 style="left:245px;top:45px;position: absolute;"><b>PEMERINTAH KABUPATEN MAGELANG</b></h5>
  		</td>
  	</tr>
  </table>

</body>
</html>

<?php
//penulisan output selesai, sekarang menutup mpdf dan generate kedalam format pdf

$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
ob_end_clean();
//Disini dimulai proses convert UTF-8, kalau ingin ISO-8859-1 cukup dengan mengganti $mpdf->WriteHTML($html);
$mpdf->WriteHTML(utf8_encode($style));
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($nama_dokumen.".pdf" ,'I');
exit;
?>