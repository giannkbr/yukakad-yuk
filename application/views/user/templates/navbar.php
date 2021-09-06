<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar">
      <div class="container">
        <a class="navbar-brand" href="#"><img class="logo" src="<?= base_url('assets/user/') ?>img/yukakad-logo.png" alt="logo-yukakad.com" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="bt"><i class="h1 bi bi-justify-left"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="my-auto py-2 nav-item">
              <a class="bt mx-3" href="#">Home</a>
            </li>
            <li class="my-auto py-2 nav-item">
              <a class="bt mx-3" href="#">Features</a>
            </li>
            <li class="my-auto py-2 nav-item">
              <a class="bt mx-3 pe-2" href="#">Pricing</a>
            </li>
            <?php if (!$this->session->userdata('email')) {
            ?>
            <li class="nav-item dropdown pt-1">
              <a class="nav-link dropdown-toggle text-dark text-center px-5 rounded-pill bg-button-nav" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Login? </a>
              <ul class="dropdown-menu bg-button-nav" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="<?= base_url('user/Auth') ?>">Login</a></li>
                <li><a class="dropdown-item mt-3" href="#">Register</a></li>
              </ul>
            </li>
            <?php }
            else{ ?>
              <li class="nav-item dropdown pt-1">
              <a class="nav-link dropdown-toggle text-dark text-center px-5 rounded-pill bg-button-nav" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Hi <?= $user['username']  ?> </a>
              <ul class="dropdown-menu bg-button-nav" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Akun</a></li>
                <li><a class="dropdown-item mt-3" href="#">Pembelian</a></li>
                <li><a class="dropdown-item mt-3" href="<?= base_url('user/Auth/logout') ?>">logout</a></li>
              </ul>
            </li>
            <?php } ?>
            
          </ul>
        </div>
      </div>
    </nav>
    <!-- ./Navbar -->