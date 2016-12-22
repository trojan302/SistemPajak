<?php
session_start();

require("assets/conf/config.php");
if (!isset($_SESSION['username'])) {
   header("Location: ".$hosted."login/Auth");
} 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Pajak Kabupaten Magelang</title>
  <link rel="icon" href="<?= $hosted; ?>assets/img/logo.png" type="image/png">
  <link rel="stylesheet" href="<?= $hosted ?>assets/css/betta.css">
  <link rel="stylesheet" href="<?= $hosted ?>assets/css/customs.css">
  <link rel="stylesheet" href="<?= $hosted ?>assets/css/font/css/font-awesome.css">
  <!--[if lt IE 7 ]>
    <script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
</head>
<body>

  <?php require("assets/moduls/nav.php"); ?>

  <?php require("assets/moduls/main-content.php"); ?>
  

  <script src="<?= $hosted; ?>assets/js/jquery.js"></script>
  <script type="text/javascript">
    $("#submit").click(function(event){
      event.preventDefault();
        $(".display").append(' <tr style="text-align: left;"><th>Nama Pegawai</th><th>Nomor SPPD</th><th>Tanggal</th></tr><tr><td><input type="text" id="namaPegawai" name="namaPegawai[]" class="td-input" placeholder="Masukkan Nama Pegawai"required></td><td><input type="text" id="noSPPD" name="noSPPD[]" class="td-input" placeholder="Masukkan Nomor SPPD"required></td><td><input type="text" id="tanggalLakasana" name="tanggalLakasana[]" class="td-input" placeholder="Masukkan Tanggal"required></td></tr> ');
    });

    $("#submit2").click(function(event){
      event.preventDefault();
        $(".display2").append(' <tr style="text-align: left;"><th>Nama Pajak</th><th>Masa Pajak</th><th>Nominal Pajak</th></tr><tr><td><input type="text" name="pajakHotel[]" placeholder="Nama Hotel" required></td><td><input type="text" name="masaPajak[]" placeholder="Masa Pajak"></td><td><input type="text" name="nominalPajak[]" placeholder="Nominal Pajak" required></td>');
    });

    $("#submit3").click(function(event){
      event.preventDefault();
        $(".display3").append(' <tr style="text-align: left;"><th>Nama Pajak</th><th>Masa Pajak</th><th>Nominal Pajak</th></tr><tr><td><input type="text" id="pajakParkir" name="pajakParkir[]" class="td-input" placeholder="Masukkan Nama Parkir"required></td><td><input type="text" id="masaParkir" name="masaParkir[]" class="td-input" placeholder="Masukkan Masa Pajak"required></td><td><input type="text" id="nominalParkir" name="nominalParkir[]" class="td-input" placeholder="Masukkan Nominal Pajak"required></td></tr> ');
    });

    $("#submit4").click(function(event){
      event.preventDefault();
        $(".display4").append(' <tr style="text-align: left;"><th>Nama Pajak</th><th>Masa Pajak</th><th>Nominal Pajak</th></tr><tr><td><input type="text" id="warungMakan" name="warungMakan[]" class="td-input" placeholder="Masukkan Nama Warug Makan"required></td><td><input type="text" id="masaWM" name="masaWM[]" class="td-input" placeholder="Masukkan Masa Pajak"required></td><td><input type="text" id="nominalWM" name="nominalWM[]" class="td-input" placeholder="Masukkan Nominal Pajak"required></td></tr> ');
    });

    $("#submit5").click(function(event){
      event.preventDefault();
        $(".display5").append(' <tr style="text-align: left;"><th>Nama Pajak</th><th>Masa Pajak</th><th>Nominal Pajak</th></tr><tr><td><input type="text" id="pajakRestoran" name="pajakRestoran[]" class="td-input" placeholder="Masukkan Nama Warug Makan"required></td><td><input type="text" id="masaRestoran" name="masaRestoran[]" class="td-input" placeholder="Masukkan Masa Pajak"required></td><td><input type="text" id="nominalRestoran" name="nominalRestoran[]" class="td-input" placeholder="Masukkan Nominal Pajak"required></td></tr> ');
    });

    $("#submit6").click(function(event){
      event.preventDefault();
        $(".display6").append(' <tr style="text-align: left;"><th>Nama Pajak</th><th>Masa Pajak</th><th>Nominal Pajak</th></tr><tr><td><input type="text" id="pajakReklame" name="pajakReklame[]" class="td-input" placeholder="Masukkan Nama Warug Makan"required></td><td><input type="text" id="masaReklame" name="masaReklame[]" class="td-input" placeholder="Masukkan Masa Pajak"required></td><td><input type="text" id="nominalReklame" name="nominalReklame[]" class="td-input" placeholder="Masukkan Nominal Pajak"required></td></tr> ');
    });

    $("#submit7").click(function(event){
      event.preventDefault();
        $(".display7").append(' <tr style="text-align: left;"><th>Nama Pajak</th><th>Masa Pajak</th><th>Nominal Pajak</th></tr><tr><td><input type="text" id="pajakHiburan" name="pajakHiburan[]" class="td-input" placeholder="Masukkan Nama Warug Makan"required></td><td><input type="text" id="masaHiburan" name="masaHiburan[]" class="td-input" placeholder="Masukkan Masa Pajak"required></td><td><input type="text" id="nominalHiburan" name="nominalHiburan[]" class="td-input" placeholder="Masukkan Nominal Pajak"required></td></tr> ');
    });

    $("#submit8").click(function(event){
      event.preventDefault();
        $(".display8").append(' <tr style="text-align: left;"><th>Nama Pajak</th><th>Masa Pajak</th><th>Nominal Pajak</th></tr><tr><td><input type="text" id="pajakTanah" name="pajakTanah[]" class="td-input" placeholder="Masukkan Nama Warug Makan"required></td><td><input type="text" id="masaTanah" name="masaTanah[]" class="td-input" placeholder="Masukkan Masa Pajak"required></td><td><input type="text" id="nominalTanah" name="nominalTanah[]" class="td-input" placeholder="Masukkan Nominal Pajak"required></td></tr> ');
    });
  </script>
</body>
</html>