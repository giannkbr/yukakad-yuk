<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS RESET -->
  <link href="<?= base_url('assets/demo/bunga/') ?>css/reset.css" rel="stylesheet" />

  <!-- Bootstrap CSS -->
  <link href="<?= base_url('assets/demo/bunga/') ?>css/bootstrap.min.css" rel="stylesheet" />

  <!-- AOS -->
  <link rel="stylesheet" href="<?= base_url('assets/demo/bunga/') ?>css/aos.css">

  <!-- Swiper -->
  <link rel="stylesheet" href="<?= base_url('assets/demo/bunga/') ?>css/swiper-bundle.min.css" />
  <link rel="stylesheet" href="<?= base_url('assets/demo/bunga/') ?>css/swiper.css" />

  <!-- CSS PRIBADI -->
  <link href="<?= base_url('assets/demo/bunga/') ?>css/app.css" rel="stylesheet" />

  <link rel="icon" href="<?= base_url('assets/demo/bunga/') ?>img/yukakad-logo.png" type="image/png" />
  <title>Template Undangan Premium 1</title>
</head>

<body>
  <audio loop id="music">
    <source src="<?= base_url('assets/demo/bunga/') ?>audio/Its_You.mp3" type="audio/mpeg">
  </audio>
  <div class="background" style="background-image: linear-gradient(rgba(46,27,23,0.7),rgba(46,27,23,0.7)), url(<?= base_url('assets/demo/bunga/') ?>image/bg3.jpg);"></div>
  <div class="content" id="pembungkus- konten">
    <!-- Music -->
    <div class="music">
      <img src="<?= base_url('assets/demo/bunga/') ?>audio/mute.svg" id="icon-music">
    </div>
    <!-- Hero -->
    <section class="" id="hero"
      style="background-image: linear-gradient(rgba(46,27,23,0.7),rgba(46,27,23,0.7)), url(<?= base_url('assets/demo/bunga/') ?>image/hero.jpg); background-repeat: no-repeat;background-size: cover;">
      <div class="hero text-center" data-aos="fade-right" data-aos-duration="1200">
        <div class="judul">
          <h1>Undangan Pernikahan</h1>
        </div>
        <img src="<?= base_url('assets/demo/bunga/') ?>element/Line diamond.svg" alt="">
        <div class="nama-mempelai mt-2">
          <h2>Mempelai Wanita</h2>
          <h2>&</h2>
          <h2>Mempelai pria</h2>
        </div>
        <div class="tanggal">
          <p class="mt-4 mb-0 fs-5">pada hari <br> Senin, 12 December 2021</p>
        </div>
        <img src="<?= base_url('assets/demo/bunga/') ?>element/Line diamond.svg" alt="">
        <a href="#jadwal" id="tojadwal" class="btn btn-primary tombol">Lihat jadwal</a>
        <div class="tamu-undangan">
          <p class="p-0 m-0">Kepada yang kami hormati</p>
          <p class="fs-3 fw-bold nama-tamu mt-1" style="color: var(--color-judul);">Tamu Undangan</p>
          <p class="p-0 m-0">di tempat</p>
        </div>
      </div>
    </section>
    <!-- End Hero -->

    <!-- Profile Mempelai -->
    <section class="" id="profile-mempelai" style="background-image: url(<?= base_url('assets/demo/bunga/') ?>image/bg2.jpg); background-size: cover;">
      <div class="profile-mempelai text-center" data-aos="fade-left" data-aos-duration="1200">
        <img class="bunga-atas" src="<?= base_url('assets/demo/bunga/') ?>element/bunga.png" width="400" height="142">
        <div class="card-profile">
          <div class="salam">
            <h1 class="fw-normal">Assalamu’alaikum <br>Warahmatullahi Wabarakatuuh</h1>
          </div>
          <div class="row position-relative justify-content-center ">
            <div class="wanita col-46-mod p-0 ">
              <img class="lingkaran-bunga-wanita1" src="<?= base_url('assets/demo/bunga/') ?>element/lingkaran_foto.png" alt="Lingkaran Bunga">
              <img class="lingkaran-bunga-wanita2" src="<?= base_url('assets/demo/bunga/') ?>element/lingkaran_foto.png" alt="Lingkaran Bunga">
              <img src="<?= base_url('assets/demo/bunga/') ?>/image/Foto Wanita.svg" alt="Foto Wanita" width="100" height="100" class="foto-wanita">
              <h5 class="">Nama Mempelai Wanita</h5>
              <p class="mb-2 fw-bold" style="font-size: 14;">Putri Dari</p>
              <p style="font-style: italic;">Nama Orang Tua</p>
              <hr class="ms-2">
            </div>
            <img class="cincin position-absolute" src="<?= base_url('assets/demo/bunga/') ?>/icon/rings.svg" alt="Cincin" width="54" height="40">
            <div class="pria col-46-mod p-0 ">
              <img class="lingkaran-bunga-pria1" src="<?= base_url('assets/demo/bunga/') ?>/element/lingkaran_foto.png" alt="Lingkaran Bunga">
              <img class="lingkaran-bunga-pria2" src="<?= base_url('assets/demo/bunga/') ?>/element/lingkaran_foto.png" alt="Lingkaran Bunga">
              <img src="<?= base_url('assets/demo/bunga/') ?>/image/Foto Pria.svg" alt="Foto pria" width="100" height="100" class="foto-pria">
              <h5 class="">Nama Mempelai Pria</h5>
              <p class="mb-2" style="font-size: 14;font-weight: bold;">Putra Dari</p>
              <p style="font-style: italic;">Nama Orang tua</p>
              <hr class="me-2">
            </div>
          </div>
          <div class="row judul d-flex align-items-center justify-content-center">
            <div class="col-11">
              <p>Dengan memohon rahmat & ridho Allah SWT, kami bermaksud mengundang
                Bapak/Ibu/Saudara/I dalam acara pernikahan dan resepsi putra-putri kami</p>
            </div>
          </div>
        </div>
        <img class="bunga-bawah" src="<?= base_url('assets/demo/bunga/') ?>/element/bunga.png" width="400" height="142">
      </div>
    </section>
    <!-- End Profile Mempelai -->

    <!-- Jadwal -->
    <section class="align-items-start" id="jadwal" style="background: #F2F2F2;">
      <div class="jadwal text-center d-flex flex-column align-items-center justify-content-start my-4" data-aos="fade-right" data-aos-duration="1200">
        <div class="judul text-center">
          <h1 class="fs-3">Acara</h1>
          <p>Pernikahan Kami</p>
        </div>
        <!-- Akad -->
        <div class="akad card-jadwal">
          <div class="judul">
            <h1 class="fw-normal">Akad</h1>
            <img class="" src="<?= base_url('assets/demo/bunga/') ?>/element/hiasan-judul.png" alt="hiasan" width="80" height="28.16">
          </div>
          <div class="row justify-content-end mx-3 mb-3">
            <div class="col tanggal me-3 p-0">
              <img class="mb-3" src="<?= base_url('assets/demo/bunga/') ?>icon/calendar.svg" alt="calender" width="50" height="50">
              <p>Senin, 12 December 2021</p>
            </div>
            <div class="col jam p-0">
              <img class="mt-2 mb-2" src="<?= base_url('assets/demo/bunga/') ?>icon/clock.svg" alt="calender" width="50" height="50">
              <p>10:00 WIB <br> s/d Selesai</p>
            </div>
          </div>
        </div>

        <!-- Resepsi -->
        <div class="resepsi card-jadwal">
          <div class="judul">
            <h1 class="fw-normal">Resepsi</h1>
            <img class="" src="<?= base_url('assets/demo/bunga/') ?>/element/hiasan-judul.png" alt="hiasan" width="80" height="28.16">
          </div>
          <div class="row justify-content-end mx-3 mb-3">
            <div class="col tanggal me-3 p-0">
              <img class="mb-3" src="<?= base_url('assets/demo/bunga/') ?>icon/calendar.svg" alt="calender" width="50" height="50">
              <p>Senin, 12 December 2021</p>
            </div>
            <div class="col jam p-0">
              <img class="mt-2 mb-2" src="<?= base_url('assets/demo/bunga/') ?>icon/clock.svg" alt="calender" width="50" height="50">
              <p>16:00 WIB <br> s/d Selesai</p>
            </div>
          </div>
        </div>

        <div class="akad card-jadwal">
          <div class="judul">
            <div class="judul d-flex align-items-center justify-content-center">
              <img class="me-2" src="<?= base_url('assets/demo/bunga/') ?>/icon/countdownsvg.svg" alt="countdown" width="25" height="25">
              <h1 class="fw-normal">Hitungan Mundur</h1>
            </div>
          </div>
          <div class="row my-2">
            <div class="col waktu-mundur">
              <p>120<span> Hari</span> 23<span> Jam</span> 45<span> Menit</span> 30<span> Detik</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Jadwal -->

    <!-- Lokasi Acara -->
    <section class="align-items-start" id="lokasi-acara" style="background-image: url(<?= base_url('assets/demo/bunga/') ?>/image/bg2.jpg); background-size: cover;">
      <div class="lokasi-acara d-flex flex-column align-items-center justify-content-start mt-4" data-aos="fade-left" data-aos-duration="1200">
        <div class="judul text-center">
          <h1 class="mb-2 fs-3">Lokasi Acara</h1>
          <img class="mb-2" src="<?= base_url('assets/demo/bunga/') ?>/icon/location.svg" alt="lokasi-icon" width="40" height="40">
        </div>
        <div class="alamat">
          <h4 class="text-dark">Jalan Jawa Blok F3 No 19 Tegal Alur Kalideres Jakarta Barat DKI JAKARTA
          </h4>
        </div>
        <div class="gmaps">
          <div class="mapouter">
            <div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                src="https://maps.google.com/maps?width=300&amp;height=240&amp;hl=en&amp;q=Jalan jawa Tegal Alur&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            </div>
          </div>
        </div>
        <div class="konfirmasi-kehadiran my-3 p-3">
          <div class="judul text-center mb-2">
            <h1>Konfirmasi Kehadiran</h1>
          </div>
          <form action="#">
            <label for="nama-lengkap" class="text-dark fs-7">Nama Lengkap</label>
            <div class="input-group input-group-sm mb-0">
              <input type="text" class="form-control py-0" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="nama-lengkap" id="nama-lengkap" placeholder="Nama lengkap">
            </div>
            <label for="hubungan" class="text-dark fs-7">Hubungan dengan mempelai</label>
            <div class="input-group input-group-sm mb-0">
              <input type="text" class="form-control py-0" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="hubungan" id="hubungan"
                placeholder="teman, tamu, sahabat, saudara">
            </div>
            <div class="pilihan d-flex flex-wrap justify-content-between">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="kehadiran" id="hadir" value="hadir">
                <label class="form-check-label text-dark fs-7" for="hadir">
                  ya, saya hadir
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="kehadiran" id="tidak_tentu" value="tidak tentu">
                <label class="form-check-label text-dark fs-7" for="tidak_tentu">
                  Bisa hadir, bisa tidak
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="kehadiran" id="tidak_hadir" value="tidak hadir">
                <label class="form-check-label text-dark fs-7" for="tidak_hadir">
                  Saya tidak bisa hadir
                </label>
              </div>
            </div>
            <div class="text-center mt-2">
              <button type="submit" class="btn btn-sm btn-primary" style="border-radius: 5px;">Konfirmasi</button>
            </div>
          </form>
        </div>
      </div>
    </section>
    <!-- End Lokasi Acara -->

    <!-- Galery -->
    <section class="align-items-start" id="gallery" style="background: #F2F2F2;">
      <div class="gallery d-flex flex-column align-items-start my-4">
        <div class="video text-center">
          <div class="judul">
            <h1 class="mb-2 fs-3">Video</h1>
            <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam,
              purus
              sit amet luctus venenatis</p>
          </div>
          <iframe width="340" height="199" src="https://www.youtube.com/embed/S1IABwQURrg?">
            <!-- autoplay=1&mute=1 -->
          </iframe>
        </div>
        <div class="foto d-flex flex-column align-items-center mt-3">
          <div class="judul text-center">
            <h1 class="mb-2 fs-3">Gallery Foto</h1>
            <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam,
              purus sit amet luctus venenatis</p>
          </div>
          <div class="bungkus-foto mb-3 bg-light">
            <!-- Swiper -->
            <div style="--swiper-navigation-color: #000; --swiper-pagination-color: #fff" class="swiper mySwiper2">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="<?= base_url('assets/demo/bunga/') ?>/image/foto1.jpg" />
                </div>
                <div class="swiper-slide">
                  <img src="<?= base_url('assets/demo/bunga/') ?>/image/foto2.jpg" />
                </div>
                <div class="swiper-slide">
                  <img src="<?= base_url('assets/demo/bunga/') ?>/image/foto3.jpg" />
                </div>
                <div class="swiper-slide">
                  <img src="<?= base_url('assets/demo/bunga/') ?>/image/foto4.jpg" />
                </div>
                <div class="swiper-slide">
                  <img src="<?= base_url('assets/demo/bunga/') ?>/image/foto5.jpg" />
                </div>
              </div>
            </div>
            <div thumbsSlider="" class="swiper mySwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="<?= base_url('assets/demo/bunga/') ?>/image/foto1.jpg" />
                </div>
                <div class="swiper-slide">
                  <img src="<?= base_url('assets/demo/bunga/') ?>/image/foto2.jpg" />
                </div>
                <div class="swiper-slide">
                  <img src="<?= base_url('assets/demo/bunga/') ?>/image/foto3.jpg" />
                </div>
                <div class="swiper-slide">
                  <img src="<?= base_url('assets/demo/bunga/') ?>/image/foto4.jpg" />
                </div>
                <div class="swiper-slide">
                  <img src="<?= base_url('assets/demo/bunga/') ?>/image/foto5.jpg" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Cerita Cinta -->
    <section class="align-items-start position-relative" id="cerita-cinta" style="background-image: url(<?= base_url('assets/demo/bunga/') ?>/image/bg2.jpg); background-size: cover;">
      <div class="line"></div>
      <div class="cerita-cinta position-relative">
        <div class="judul mt-4">
          <h1 class="fs-3">Cerita Cinta</h1>
        </div>
        <div class="kumpulan-cerita">
          <div class="cerita">
            <a href=""><img src="<?= base_url('assets/demo/bunga/') ?>/image/Foto Pria.svg" alt="foto pria" width="40" height="40"></a>
            <div class="wrapper">
              <div class="card-cerita mb-4">
                <div class="content text-dark p-2">
                  <div class="row align-items-center justify-content-between mb-1">
                    <div class="col-6 judul pe-0">
                      <h5 class="p-0 m-0">Judul Cerita</h5>
                    </div>
                    <div class="col text-end pe-3 p-0 tanggal">
                      <p class="m-0 p-0">12 Agustus 2020</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col isi">
                      <p class="mb-1">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam,
                        purus sit amet luctus venenatis, lectus magna fringilla urna,
                        porttitor
                        rhoncus
                        dolor purus non enim praesent elementum facilisis leo
                      </p>
                      <a href="" class="baca">Baca</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="cerita">
            <a href=""><img src="<?= base_url('assets/demo/bunga/') ?>/image/Foto Wanita.svg" alt="foto pria" width="40" height="40"></a>
            <div class="wrapper mb-4">
              <div class="card-cerita">
                <div class="content text-dark p-2">
                  <div class="row align-items-center justify-content-between mb-1">
                    <div class="col-6 judul pe-0">
                      <h5 class="p-0 m-0">Judul Cerita</h5>
                    </div>
                    <div class="col text-end pe-3 p-0 tanggal">
                      <p class="m-0 p-0">12 Agustus 2020</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col isi">
                      <p class="mb-1">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam,
                        purus sit amet luctus venenatis, lectus magna fringilla urna,
                        porttitor
                        rhoncus
                        dolor purus non enim praesent elementum facilisis leo
                      </p>
                      <a href="" class="baca">Baca</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="cerita">
            <a href=""><img src="<?= base_url('assets/demo/bunga/') ?>/image/Foto Pria.svg" alt="foto pria" width="40" height="40"></a>
            <div class="wrapper mb-4">
              <div class="card-cerita">
                <div class="content text-dark p-2">
                  <div class="row align-items-center justify-content-between mb-1">
                    <div class="col-6 judul pe-0">
                      <h5 class="p-0 m-0">Judul Cerita</h5>
                    </div>
                    <div class="col text-end pe-3 p-0 tanggal">
                      <p class="m-0 p-0">12 Agustus 2020</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col isi">
                      <p class="mb-1">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam,
                        purus sit amet luctus venenatis, lectus magna fringilla urna,
                        porttitor
                        rhoncus
                        dolor purus non enim praesent elementum facilisis leo
                      </p>
                      <a href="" class="baca">Baca</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="cerita">
            <a href=""><img src="<?= base_url('assets/demo/bunga/') ?>/image/Foto Wanita.svg" alt="foto pria" width="40" height="40"></a>
            <div class="wrapper mb-4">
              <div class="card-cerita">
                <div class="content text-dark p-2">
                  <div class="row align-items-center justify-content-between mb-1">
                    <div class="col-6 judul pe-0">
                      <h5 class="p-0 m-0">Judul Cerita</h5>
                    </div>
                    <div class="col text-end pe-3 p-0 tanggal">
                      <p class="m-0 p-0">12 Agustus 2020</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col isi">
                      <p class="mb-1">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam,
                        purus sit amet luctus venenatis, lectus magna fringilla urna,
                        porttitor
                        rhoncus
                        dolor purus non enim praesent elementum facilisis leo
                      </p>
                      <a href="" class="baca">Baca</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Kirim Kado -->
    <section class="align-items-start" id="kirim-kado" style="background: #F2F2F2;">
      <div class="kirim-kado text-center mt-4">
        <div class="judul mb-2">
          <h1 class="fs-3">Kirim Kado</h1>
        </div>
        <p class="text-dark m-0">Terima Kasih Telah Membaca website undangan kami jika ingin mengirim kado
          cash silahkan isi form di bawah ini </p>
        <div class="text-start px-4">
          <!-- <label for="nominal-kado" class="text-dark fs-6">Nominal Kado</label> -->
          <div class="input-group input-group-sm mt-3">
            <span class="input-group-text" id="basic-addon3">Rp.</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="nominal-kado" id="nominal-kado" placeholder=" Masukan Nominal Kado">
          </div>
          <div class="text-center my-2">
            <a href="payment.html " class="btn btn-primary">Transfer</a>
          </div>
        </div>
        <div class="barang mt-3">
          <p class="text-dark">Kado Berupa Barang Bisa di kririm ke</p>
          <div class="alamat d-flex flex-column align-items-center">
            <h1 class="m-0">Alamat Rumah</h1>
            <p class="text-dark mb-3 mt-2 mx-2">
              Jalan Jawa Blok F3 No 19 <br>Tegal Alur Kalideres Jakarta Barat DKI JAKARTA
            </p>
            <div class="gmaps mb-3">
              <div class="mapouter">
                <div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                    src="https://maps.google.com/maps?width=300&amp;height=240&amp;hl=en&amp;q=Jalan jawa Tegal Alur&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Do'a dan Ucapan -->
    <section class="align-items-start" id="doa-ucapan" style="background-image: url(<?= base_url('assets/demo/bunga/') ?>/image/bg2.jpg); background-size: cover;">
      <div class="doa-ucapan">
        <div class="judul text-center my-4">
          <h1 class="fs-3">Do'a & Ucapan</h1>
          <img src="<?= base_url('assets/demo/bunga/') ?>/icon/pesan.svg" alt="icon pesan" width="30" height="30">
        </div>
        <div class="kirim-pesan p-3">
          <form action="">
            <label for="Nama" class="text-dark fs-6">Nama</label>
            <div class="input-group input-group-sm mb-0">
              <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Nama" id="Nama" placeholder="Masukan Nama Anda">
            </div>
            <label for="pesan" class="text-dark fs-6">pesan</label>
            <div class="input-group input-group-sm mb-0">
              <textarea class="form-control" aria-label="With textarea" name="pesan" id="pesan" cols="30" rows="3" placeholder="Masukan pesan Anda"></textarea>
            </div>
            <button type="submit" class="btn btn-sm btn-primary mt-2 px-4">
              Kirim
            </button>
          </form>
        </div>
        <div class="card-pesan text-dark my-2 p-2">
          <div class="pengirim">
            <img class="rounded-circle" src="<?= base_url('assets/demo/bunga/') ?>/image/avatar1.svg" alt="Avatar" width="25" height="25">
            <h4 class="ms-2">Nama Pengirim</h4>
          </div>
          <div class="waktu-dikirim">
            <p class="position-relative bottom-0"></p>1 menit yang lalu</p>
          </div>
          <div class="pesan">
            <hr class="m-0">
            <p>Lorem ipsum.</p>
          </div>
          <div class="respown">

          </div>
        </div>
        <div class="pesan-slider">
          <div class="swiper slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="card-pesan text-dark p-2">
                  <div class="pengirim">
                    <img class="rounded-circle" src="<?= base_url('assets/demo/bunga/') ?>/image/avatar1.svg" alt="Avatar" width="25" height="25">
                    <h4 class="ms-2">Nama Pengirim</h4>
                  </div>
                  <div class="waktu-dikirim">
                    <p class="position-relative bottom-0"></p>1 menit yang lalu</p>
                  </div>
                  <div class="pesan">
                    <hr class="m-0">
                    <p>Lorem ipsum.</p>
                  </div>
                  <div class="respown">

                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card-pesan text-dark p-2">
                  <div class="pengirim">
                    <img class="rounded-circle" src="<?= base_url('assets/demo/bunga/') ?>/image/avatar1.svg" alt="Avatar" width="25" height="25">
                    <h4 class="ms-2">Nama Pengirim</h4>
                  </div>
                  <div class="waktu-dikirim">
                    <p class="position-relative bottom-0"></p>1 menit yang lalu</p>
                  </div>
                  <div class="pesan">
                    <hr class="m-0">
                    <p>Lorem ipsum. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Molestiae facere ut nobis vitae aliquam, consequuntur amet eius
                      reprehenderit incidunt omnis maxime aut sequi in deleniti? lorem50</p>
                  </div>
                  <div class="respown">

                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card-pesan text-dark p-2">
                  <div class="pengirim">
                    <img class="rounded-circle" src="<?= base_url('assets/demo/bunga/') ?>/image/avatar1.svg" alt="Avatar" width="25" height="25">
                    <h4 class="ms-2">Nama Pengirim</h4>
                  </div>
                  <div class="waktu-dikirim">
                    <p class="position-relative bottom-0"></p>1 menit yang lalu</p>
                  </div>
                  <div class="pesan">
                    <hr class="m-0">
                    <p>Lorem ipsum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut,
                      eligendi?</p>
                  </div>
                  <div class="respown">

                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Bootsrap 5 -->
  <script src="<?= base_url('assets/demo/bunga/') ?>js/bootstrap.bundle.js"></script>

  <!-- Jequery -->
  <script src="<?= base_url('assets/demo/bunga/') ?>js/jquery.min.js"></script>

  <!-- AOS -->
  <script src="<?= base_url('assets/demo/bunga/') ?>js/aos.js"></script>

  <!-- Swiper JS -->
  <script src="<?= base_url('assets/demo/bunga/') ?>js/swiper-bundle.min.js"></script>

  <!-- Script Pribadi -->
  <script src="<?= base_url('assets/demo/bunga/') ?>js/app.js"></script>
  <script>
  // Play & pause Music
  const music = document.getElementById('music');
  const iconMusic = document.getElementById('icon-music');
  iconMusic.onclick = function() {
    if (!music.paused) {
      music.pause();
      iconMusic.src = "<?= base_url('assets/demo/bunga/') ?>audio/mute.svg"
    } else {
      music.play();
      iconMusic.src = "<?= base_url('assets/demo/bunga/') ?>audio/volume.svg"
    }
  }
  </script>
</body>

</html>