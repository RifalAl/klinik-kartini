<body  class=" d-flex flex-column">
    <script src="<?=base_url('asset/dist/js/demo-theme.min.js?1684106062')?>"></script>
    <div class="page page-center">
      <div class="container container-normal py-4">
        <div class="row align-items-center g-4">
          <div class="col-lg">
            <div class="container-tight">
              <div class="text-center mb-4">
                <a href="." class="navbar-brand navbar-brand-autodark"><img src="<?=base_url('asset/dist/image/logo-klinik.png')?>" height="70" alt=""><h1>KLINIK KARTINI FARMA</h1></a>
              </div>
              <div class="card card-md">
                <div class="card-body">
                  <h2 class="h2 text-center mb-1">LOGIN</h2>
                  <?php
                    // Menampilkan pesan error jika ada
                    if ($this->session->flashdata('pesan_error')) {
                        echo '<p class="text-center mb-4 small text-danger">' . $this->session->flashdata('pesan_error') . '</p>';
                    } 
                    else {
                        echo '<p class="text-center mb-4 small">Masukkan username & password untuk login</p>';
                    }
                    ?>
                  <form action="<?=BASE_URL?>Login/cekLogin" method="post" autocomplete="off" novalidate>
                    <div class="mb-3">
                      <label class="form-label">Username</label>
                      <input type="text" class="form-control" name="username" placeholder="Masukkan username" autocomplete="off">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">
                        Password
                      </label>
                      <div class="input-group input-group-flat">
                        <input type="password" class="form-control" name="password"  placeholder="Masukkan password"  autocomplete="off">
                        <span class="input-group-text">
                          
                        </span>
                      </div>
                    </div>
                    <div class="mb-2">
                    <label class="form-label">Status</label>
                    <select name="status_akses" class="form-select">
                    <option selected disabled>--- Pilih Status ---</option>
                    <option value="Dokter" >Dokter</option>
                    <option value="Petugas Klinik" >Petugas Klinik</option>                    
                    </select>
                    </div>
                    <div class="form-footer">
                      <a href=""><button type="submit" class="btn btn-primary w-100 text-white">Login</button></a>
                    </div>
                  </form>
                </div>
              </div>             
            </div>
          </div>
          <div class="col-lg d-none d-lg-block">
            <img src="<?=base_url('asset/dist/image/bg-login1.png')?>" height="450" class="d-block mx-auto" alt="">
          </div>
        </div>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="<?=BASE_URL?>asset/dist/js/tabler.min.js?1684106062" defer></script>
    <script src="<?=BASE_URL?>asset/dist/js/demo.min.js?1684106062" defer></script>
  </body>