<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS Bootstrap 5 -->
    <link rel="stylesheet" href="<?= base_url('assets/user/') ?>css/bootstrap.min.css" />

    <!-- Icon Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <!-- SwiperJS -->
    <link rel="stylesheet" href="<?= base_url('assets/user/') ?>css/swiper-bundle.min.css" />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;500;700&display=swap" rel="stylesheet" />

    <!-- AOS -->
    <link rel="stylesheet" href="<?= base_url('assets/user/') ?>css/aos.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/user/') ?>css/style.css" />

    <title>Yukakad.com</title>
  </head>

<?php $this->load->view('user/templates/navbar'); ?>
<?php $this->load->view($page); ?>
<?php $this->load->view('user/templates/footer'); ?>


    <!--  -->
  

  <!-- JQuery -->
  <script type="text/javascript" src="<?= base_url('assets/user/') ?>js/jquery.min.js"></script>

  <!-- SwiperJS -->
  <script type="text/javascript" src="<?= base_url('assets/user/') ?>js/swiper-bundle.min.js"></script>

  <!-- JS Bootstrap 5 -->
  <script type="text/javascript" src="<?= base_url('assets/user/') ?>js/bootstrap.min.js"></script>

  <!-- AOS -->
  <script src="<?= base_url('assets/user/') ?>js/aos.js"></script>

  <!-- My JS -->
  <script type="text/javascript" src="<?= base_url('assets/user/') ?>js/script.js"></script>

