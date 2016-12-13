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
</head>
<body>

  <?php require("assets/moduls/nav.php"); ?>

  <div class="content padding-large border round" style="margin-top: 67px;">

    <form action="">
      <h3><i class="fa fa-file"></i> Create Report</h3>
      <hr>
      <label>Masukkan Tanggal :</label><br>
      <input type="text" name="tglLaporan" placeholder="Hari" style="width: 45px;text-align: center;" required>
      <input type="text" name="blnLaporan" placeholder="Bulan" style="width: 150px;text-align: center;" required>
      <input type="text" name="thnLaporan" placeholder="Tahun" style="width: 70px;text-align: center;" required><br><br>
      <label>No SPPD :</label><br>
      <input type="text" name="noSPPD" placeholder="Masukkan No SPPD" style="padding-left: 5px;" required>
    </form>

  </div>
  


  <script src="<?= $hosted; ?>assets/js/jquery.js"></script>
</body>
</html>