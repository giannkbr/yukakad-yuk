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

  <title><?= $title ?></title>
</head>

<?php $this->load->view('user/templates/navbar'); ?>
<?php $this->load->view($page); ?>
<?php $this->load->view('user/templates/footer'); ?>

<!-- Modal Login -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background-color: #f7dad9">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Login</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('user/Auth/login') ?>" method="post">
          <div class="mb-3">
            <input type="email" class="form-control form-contact" name="identity" placeholder="Masukan emailmu" id="exampleInputEmail1" aria-describedby="emailHelp" />
          </div>
          <div class="mb-3">
            <input type="password" class="form-control form-contact" name="password" placeholder="Masukan Passwordmu" id="exampleInputPassword1" />
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1" />
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-modal">Login</button>
          </div>
        </form>
      </div>
      <div class="text-center text-muted pt-1">or continue with</div>
      <div class="text-center h4 py-2">
        <a href="<?= base_url('user/Auth/Google') ?>"><img style="width: 22px" src="<?= base_url('assets/user/')  ?>img/Google__G__Logo.svg.png" alt="" /></a>
      </div>
      <div class="text-center">
        <p class="link-login"><a class="px-2 link-login" href="#">Sign Up</a>|<a class="px-2 link-login" href="#">Forget password!</a></p>
      </div>
    </div>
  </div>
</div>
<!-- ./Modal Login -->

<!-- Modal Regist -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background-color: #f7dad9">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Registrasi</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <input type="user" class="form-control form-contact" placeholder="Masukan Usernamemu" id="exampleInputUser1" />
          </div>
          <div class="mb-3">
            <input type="email" class="form-control form-contact" placeholder="Masukan emailmu" id="exampleInputEmail1" aria-describedby="emailHelp" />
          </div>
          <div class="mb-3">
            <input type="password" class="form-control form-contact" placeholder="Masukan Passwordmu" id="exampleInputPassword1" />
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" />
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-modal">Login</button>
          </div>
        </form>
      </div>
      <div class="text-center text-muted pt-1">or continue with</div>
      <div class="text-center h4 py-2">
        <a href="#"><img style="width: 22px" src="<?= base_url('assets/user/') ?> img/Google__G__Logo.svg.png" alt="" /></a>
      </div>
      <div class="text-center">
        <p class="link-login"><a class="px-2 link-login" href="#">Sign Up</a>|<a class="px-2 link-login" href="#">Forget password!</a></p>
      </div>
    </div>
  </div>
</div>
<!-- ./Modal Regist -->

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