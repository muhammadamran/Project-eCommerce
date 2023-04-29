<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $page ?> - <?= $web_title ?> | <?= $web_companyname ?></title>
  <link rel="shortcut icon" href="<?= base_url('assets/apps/icon/' . $web_icon); ?>">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/website/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/website/css/plugins.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/website/style.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/website/css/main.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/website/css/custom.css'); ?>">
  <!-- <script src="<?= base_url('assets/website/js/vendor/websiternizr-3.5.0.min.js'); ?>"></script> -->
  <!-- Font Poppins -->
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
  <!-- FONTAWESON 5 -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/solid.css" integrity="sha384-DhmF1FmzR9+RBLmbsAts3Sp+i6cZMWQwNTRsew7pO/e4gvzqmzcpAzhDIwllPonQ" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/fontawesome.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous" />
  <!-- PRELOADER -->
  <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
  <!-- HITUNG -->
</head>
<?php
function buatRupiah($angka)
{
  $hasil = "Rp. " . number_format($angka);
  return $hasil;
}
?>
<div class="preloader">
  <div class="loading">
    <img src="<?= base_url('assets/apps/loader/' . $web_loader); ?>" width="100">
    <br>
    <p>
      <b>
        <font style="font-family: 'Poppins', sans-serif; color:#1e3135;margin-left: 10px;"><?= $web_text_loader ?></font>
      </b>
    </p>
  </div>
</div>

<body id="WAButton">
  <div class="wrapper" id="wrapper">