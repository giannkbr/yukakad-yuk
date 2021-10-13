<body>
 

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar">
      <div class="container">
        <a class="navbar-brand" href="<?= base_url('dashboard') ?>"><img class="logo" src="<?= base_url('assets/user/') ?>img/yukakad-logo.png" alt="logo-yukakad.com" /></a>
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
              <a class="bt mx-3 pe-2" href="./pembayaran.html">Pembayaran</a>
            </li>

            <?php if ($this->session->userdata('user_data')) {
            $user_data = $this->session->userdata('user_data');?>
            <li class="nav-item dropdown pt-1">
              <a class="nav-link dropdown-toggle text-dark text-center px-5 rounded-pill bg-button-nav" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Hi <?= $user_data['name']  ?> </a>
              <ul class="dropdown-menu bg-button-nav" aria-labelledby="navbarDropdownMenuLink">
                <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal">Akun</button></li>
                <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal1">Pembelian</button></li>
                <li><a class="dropdown-item" href="<?= base_url('logout') ?>">logout</a></li>
              </ul>
            </li>
            <?php }

            elseif ($this->session->userdata('email')) { ?>
              <li class="nav-item dropdown pt-1">
              <a class="nav-link dropdown-toggle text-dark text-center px-5 rounded-pill bg-button-nav" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Hi <?= $user['first_name']  ?> </a>
              <ul class="dropdown-menu bg-button-nav" aria-labelledby="navbarDropdownMenuLink">
                <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal">Akun</button></li>
                <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal1">Pembelian</button></li>
                <li><a class="dropdown-item" href="<?= base_url('logout') ?>">logout</a></li>
              </ul>
            </li>
            <?php }
            
            else { ?>
              <li class="nav-item dropdown pt-1">
              <a class="nav-link dropdown-toggle text-dark text-center px-5 rounded-pill bg-button-nav" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Login? </a>
              <ul class="dropdown-menu bg-button-nav" aria-labelledby="navbarDropdownMenuLink">
                <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</button></li>
                <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal1">Register</button></li>
              </ul>
            </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>
    <!-- ./Navbar -->