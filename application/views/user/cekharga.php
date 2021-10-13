<!-- Tamplate & Fitur -->
<section class="py-5" id="tamfit">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-3">
        <div class="card img-pembayaran">
          <img src="<?= base_url('assets/user/img/template/'.$undangan['image']) ?>" class="card-img-top p-3 rounded-pembayaran" alt="..." />
          <div class="card-body">
            <h5 class="card-title fw-500"><?= $undangan['nama_undangan'] ?></h5>
            <p class="card-text fw-300">(100)</p>
          </div>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="card card-body img-pembayaran p-5 margin-pembayaran">
          <div class="row">
            <h4 class="card-title fw-500">Fitur</h4>
          </div>
          <div class="row pt-2">
            <div class="col">
              <table class="w-100">
                <tbody>
                  <tr>
                    <td class="fw-300 pt-3 pe-1">Paket</td>
                    <td class="text-end pt-3 fw-500"><?= $undangan['paket'] ?></td>
                  </tr>
                  <tr>
                    <td class="fw-300 pt-3 pe-1">Buku Tamu</td>
                    <td class="text-end pt-3 fw-500"><?= $undangan['buku_tamu'] ?></td>
                  </tr>
                  <tr>
                    <td class="fw-300 pt-3 pe-1">Subdomain</td>
                    <td class="text-end pt-3 fw-500"><?= $undangan['subdomain'] ?></td>
                  </tr>
                  <tr class="border-bottom">
                    <td class="fw-300 pt-3 pe-1">Lorem ipsum dolor sit amet.</td>
                    <td class="text-end pt-3 fw-500">Tersedia</td>
                  </tr>
                  <tr>
                    <td class="fw-500 pt-3 pe-1">Harga</td>
                    <td class="text-end pt-3 fw-500">Rp. <?= $undangan['harga'] ?></td>
                  </tr>
                </tbody>
              </table>
              <div class="btn-group pt-4" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-light">Kembali</button>
                <button type="button" class="btn btn-light mx-3">Ubah Tamplate</button>
                <a href="<?= base_url('form-'. $undangan['paket'].'/'.$undangan['slug']) ?>" class="btn btn-primary">Pesan</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ./Tamplate & Fitur -->