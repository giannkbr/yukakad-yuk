<form>
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
  <a href="<?= base_url('user/Auth/Google') ?>"><img style="width: 22px" src="<?= base_url('assets/user/')  ?>img/Google__G__Logo.svg.png" alt="" /></a>
</div>