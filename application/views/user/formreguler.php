<!-- Form Gratis -->
<section class="py-5" id="form-pre">
  <div class="py-5 container">
    <div class="row">
      <div class="card col p-0 btn-form-pre" style="background-color: #faf1e6">
        <ul class="nav nav-tabs form-isi" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"></button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link py-2 mt-4 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Reguler</button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active bg-white" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="conteiner p-5">
              <div class="row">
                <div class="col">
                  <form action="<?= base_url('user/Undangan/form_reguler') ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <input type="text" style="background-color: #faf1e6; font-size: 13px" placeholder="Nama Mempelai Pria" name="mempelaipria" class="form-control p-3 form-isi" id="mempelaipria"
                        aria-describedby="emailHelp" required title="Harap Isi Nama Mempelai Pria" value="<?php echo set_value('mempelaipria') ?>">
                      <?= form_error('mempelaipria', '<small class="text-danger ml-3 mt-1">', '</small>'); ?>
                      <div id="emailHelp" class="form-text text-secondary" style="font-size: 10px">*Contoh : Gian Akbar</div>
                    </div>

                    <div class="mb-3">
                      <input type="text" style="background-color: #faf1e6; font-size: 13px" placeholder="Nama Mempelai Wanita" name="mempelaiwanita" class="form-control p-3 form-isi"
                        id="mempelaiwanita" aria-describedby="emailHelp" required title="Harap Isi Nama Mempelai Wanita" value="<?php echo set_value('mempelaiwanita') ?>" />
                      <?= form_error('mempelaiwanita', '<small class="text-danger ml-3 mt-1">', '</small>'); ?>
                      <div id="emailHelp" class="form-text text-secondary" style="font-size: 10px">
                        *Contoh : Zanna Kirania
                      </div>
                    </div>
                    <div class="mb-3">
                      <input type="text" style="background-color: #faf1e6; font-size: 13px" placeholder="Nama Bapak Dari Mempelai Pria" name="bapak_mempelaipria" class="form-control p-3 form-isi"
                        id="bapakmempelaipria" aria-describedby="emailHelp" required title="Harap Isi Nama Bapak Mempelai Pria" value="<?php echo set_value('bapak_mempelaipria') ?>" />
                      <?= form_error('bapak_mempelaipria', '<small class="text-danger ml-3 mt-1">', '</small>'); ?>
                      <div id="emailHelp" class="form-text text-secondary" style="font-size: 10px">
                        *Contoh : Budi Santoso
                      </div>
                    </div>
                    <div class="mb-3">
                      <input type="text" style="background-color: #faf1e6; font-size: 13px" placeholder="Nama Ibu Dari Mempelai Pria" name="ibu_mempelaipria" class="form-control p-3 form-isi"
                        id="ibumempelaipria" aria-describedby="emailHelp" required title="Harap Isi Nama Ibu Mempelai Pria" value="<?php echo set_value('ibu_mempelaipria') ?>" />
                      <?= form_error('ibu_mempelaipria', '<small class="text-danger ml-3 mt-1">', '</small>'); ?>
                      <div id="emailHelp" class="form-text text-secondary" style="font-size: 10px">
                        *Contoh : Irawati
                      </div>
                    </div>
                    <div class="mb-3">
                      <input type="text" style="background-color: #faf1e6; font-size: 13px" placeholder="Nama Bapak Dari Mempelai Wanita" name="bapak_mempelaiwanita" class="form-control p-3 form-isi"
                        id="ibumempelaipria" aria-describedby="emailHelp" required title="Harap Isi Nama Bapak Mempelai Wanita" value="<?php echo set_value('bapak_mempelaiwanita') ?>" />
                      <?= form_error('bapak_mempelaiwanita', '<small class="text-danger ml-3 mt-1">', '</small>'); ?>
                      <div id="emailHelp" class="form-text text-secondary" style="font-size: 10px">
                        *Contoh : Budi Santoso
                      </div>
                    </div>
                    <div class="mb-3">
                      <input type="text" style="background-color: #faf1e6; font-size: 13px" placeholder="Nama Ibu Dari Mempelai Wanita" name="ibu_mempelaiwanita" class="form-control p-3 form-isi"
                        id="ibumempelaipria" aria-describedby="emailHelp" required title="Harap Isi Nama Iby Mempelai Wanita" value="<?php echo set_value('ibu_mempelaiwanita') ?>" />
                      <?= form_error('ibu_mempelaiwanita', '<small class="text-danger ml-3 mt-1">', '</small>'); ?>
                      <div id="emailHelp" class="form-text text-secondary" style="font-size: 10px">
                        *Contoh : Irawati
                      </div>
                    </div>

                    <div class="mb-3">
                      <input type="file" multiple style="background-color: #faf1e6; font-size: 13px" placeholder="Masukan Foto Prewedding" name="foto_preweeding[]" class="form-control p-3 form-isi"
                        id="ibumempelaipria" aria-describedby="emailHelp" required title="Harap Isi Foto Preweeding" value="<?php echo set_value('foto_preweeding') ?>" />
                      <?= form_error('foto_preweeding', '<small class="text-danger ml-3 mt-1">', '</small>'); ?>
                      <div id="emailHelp" class="form-text text-secondary" style="font-size: 10px">
                        *Foto Preweeding
                      </div>
                    </div>

                    <div class="mb-3">
                      <input type="datetime-local" style="background-color: #faf1e6; font-size: 13px" placeholder="Tanggal Akad" name="tanggal_akad" class="form-control p-3 form-isi" id="tanggal_akad"
                        aria-describedby="emailHelp" required title="Harap Isi Tanggal Akad" value="<?php echo set_value('tanggal_akad') ?>" />
                      <?= form_error('tanggal_akad', '<small class="text-danger ml-3 mt-1">', '</small>'); ?>
                      <div id="emailHelp" class="form-text text-secondary" style="font-size: 10px">
                        *Tanggal Akad
                      </div>
                    </div>
                    <div class="mb-3">
                      <input type="datetime-local" style="background-color: #faf1e6; font-size: 13px" placeholder="Tanggal Resepsi" name="tanggal_resepsi" class="form-control p-3 form-isi"
                        id="tanggal_resepsi" aria-describedby="emailHelp" required title="Harap Isi Tanggal Resepsi" value="<?php echo set_value('tanggal_resepsi') ?>" />
                      <?= form_error('tanggal_resepsi', '<small class="text-danger ml-3 mt-1">', '</small>'); ?>
                      <div id="emailHelp" class="form-text text-secondary" style="font-size: 10px">
                        *Tanggal Resepsi
                      </div>
                    </div>
                    <div class="mb-3">
                      <input type="text" style="background-color: #faf1e6; font-size: 13px" placeholder="Alamat Lokasi Acara" name="alamat_acara" class="form-control p-3 form-isi" id="ibumempelaipria"
                        aria-describedby="emailHelp" required title="Harap Isi Alamat Lokasi Acara" value="<?php echo set_value('alamat_acara') ?>" />
                      <?= form_error('alamat_acara', '<small class="text-danger ml-3 mt-1">', '</small>'); ?>
                      <div id="emailHelp" class="form-text text-secondary" style="font-size: 10px">
                        *Contoh : Jalan Kalimantan 2 kecamatan serpong, Kota Tangerang Selatan
                      </div>
                    </div>
                    <div class="mb-3">
                      <input type="url" style="background-color: #faf1e6; font-size: 13px" placeholder="Link Maps Alamat Lokasi Acara" name="link_alamatacara" class="form-control p-3 form-isi"
                        id="link_alamatacara" aria-describedby="emailHelp" required title="Harap Isi Link Lokasi Acara" value="<?php echo set_value('link_alamatacara') ?>" />
                      <?= form_error('link_alamatacara', '<small class="text-danger ml-3 mt-1">', '</small>'); ?>
                      <div id="emailHelp" class="form-text text-secondary" style="font-size: 10px">
                        *Contoh : https://goo.gl/maps/xdGRD4XhbkrweDfc7
                      </div>
                    </div>
                    <div class="mb-3">
                      <input type="text" style="background-color: #faf1e6; font-size: 13px" placeholder="Alamat Lokasi Rumah" name="alamat_rumah" class="form-control p-3 form-isi" id="ibumempelaipria"
                        aria-describedby="emailHelp" required title="Harap Isi Alamat Rumah" value="<?php echo set_value('alamat_rumah') ?>" />
                      <?= form_error('alamat_rumah', '<small class="text-danger ml-3 mt-1">', '</small>'); ?>
                      <div id="emailHelp" class="form-text text-secondary" style="font-size: 10px">
                        *Contoh : Jalan Kalimantan 2 kecamatan serpong, Kota Tangerang Selatan
                      </div>
                    </div>
                    <div class="mb-3">
                      <input type="url" style="background-color: #faf1e6; font-size: 13px" placeholder="Link Maps Alamat Lokasi Rumah" name="link_alamatrumah" class="form-control p-3 form-isi"
                        id="ibumempelaipria" aria-describedby="emailHelp" required title="Harap Isi Link Lokasi Rumah" value="<?php echo set_value('link_alamatrumah') ?>" />
                      <?= form_error('link_alamatrumah', '<small class="text-danger ml-3 mt-1">', '</small>'); ?>
                      <div id="emailHelp" class="form-text text-secondary" style="font-size: 10px">
                        *Contoh : https://goo.gl/maps/xdGRD4XhbkrweDfc7
                      </div>
                    </div>

                    <div class="mb-3">
                      <input type="text" style="background-color: #faf1e6; font-size: 13px" placeholder="Subdomain" name="subdomain" class="form-control p-3 form-isi" id="ibumempelaipria"
                        aria-describedby="emailHelp" required title="Harap Isi Subdomain" value="<?php echo set_value('subdomain') ?>" />
                      <?= form_error('subdomain', '<small class="text-danger ml-3 mt-1">', '</small>'); ?>
                      <div id="emailHelp" class="form-text text-secondary" style="font-size: 10px">
                        *Contoh : wildanLOVEwildaniyah &nbsp; (nanti akan menjadi yukakad.com/wildanLOVEwildaniyah)
                      </div>
                    </div>
                    <input type="text" name="undangan" value="<?= $this->uri->segment('2') ?>" hidden>

                    <?php if ($this->session->userdata('email') == TRUE) {
                     ?>
                    <input type="text" name="email" value="<?= $this->session->userdata('email') ?>" hidden>
                    <?php } else { $user_data = $this->session->userdata('user_data') ?>
                    <input type="text" name="email" value="<?= $user_data['email'] ?>" hidden>
                    <?php } ?>
                    <div class="row justify-content-center">
                      <div class="col-12 text-end"><button type="submit" class="btn bg-button-hero px-5">Submit</button></div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ./Form Gratis -->