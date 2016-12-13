<?php 
require("assets/conf/config.php"); 
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
  <style>
    body{
      padding-top: 5px;
      background: url(<?= $hosted ?>/assets/img/bg-content.jpg) center center;
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>
</head>
<body>

  <?php require("assets/moduls/nav.php"); ?>

  <div class="content">

    <form action="<?= $hosted ?>logAuth/login" class="padding-128" method="post">
      <h3 class="text-white">Silahkan Login &nbsp;<i class="fa fa-universal-access"></i></h3>
      <label class="g-form">
        <i class="fa fa-user g-icon black card-4"></i>
        <input type="text" name="uname" placeholder="Masukkan Username" class="g-input card-4" required="required">
      </label>
      <br><br>
      <label class="g-form">
        <i class="fa fa-lock g-icon black card-4"></i>
        <input type="password" name="pass" placeholder="Masukkan Password" class="g-input card-4" required="required">
      </label>
      <br><br>
      <input type="submit" name="login" class="btn round" value="Logged In.">
    </form>

  </div>
  


  <script src="<?= $hosted; ?>assets/js/jquery.js"></script>
</body>
</html>