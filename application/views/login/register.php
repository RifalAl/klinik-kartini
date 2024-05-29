<body  class=" d-flex flex-column">
    <script src="./dist/js/demo-theme.min.js?1684106062"></script>
    <div class="page page-center">
      <div class="container container-tight py-4">
        <div class="text-center mb-4">
          <h2><img src="<?=BASE_URL?>asset/dist/image/logo-klinik.png" height="36" alt=""> Klinik Kartini Farma </h2>
        </div>
        <form class="card card-md" action="<?=BASE_URL?>Login/simpanRegister" method="post" autocomplete="off" novalidate>
          <div class="card-body">
            <h1 class="card-title text-center mb-4">Buat Akun Baru</h1>
            <div class="mb-3">
              <label class="form-label">Nama</label>
              <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Anda">
            </div>
            <div class="mb-3">
              <label class="form-label">Status</label>
              <select name="status_akses" class="form-select">
              <option selected disabled>--- Pilih Status ---</option>
                <option value="Dokter" >Dokter</option>
                <option value="Petugas Klinik" >Petugas Klinik</option>
              
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label">Username</label>
              <input type="text" class="form-control" name="username" placeholder="Masukkan username">
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <div class="input-group input-group-flat">
                <input type="password" class="form-control" name="password"  placeholder="Masukkan Password"  autocomplete="off">
                <span class="input-group-text">
                  <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                  </a>
                </span>
              </div>
            </div>
            <div class="form-footer">
              <button type="submit" class="btn btn-primary w-100">Buat Akun</button>
            </div>
          </div>
        </form>       
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="./dist/js/tabler.min.js?1684106062" defer></script>
    <script src="./dist/js/demo.min.js?1684106062" defer></script>
    
  </body>