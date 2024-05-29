<div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Form Data Pasien</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="<?=BASE_URL?>Data/tambahData" method="POST">
                  <div class="mb-3 row">
                      <label class="col-3 col-form-label">No.Kartu</label>
                      <div class="col">
                      <input type="text" class="form-control" name="no_kartu" placeholder="No.Kartu" autocomplete="off" >
                    </div>
                    </div>
                  <div class="mb-3 row">
                  <label class="col-3 col-form-label">Nama Pasien</label>
                  <div class="col">
                    <input type="text" class="form-control" name="nama" placeholder="Nama Pasien" autocomplete="off">
                  </div>
                </div>
                    <div class="mb-3 row">
                      <div class="col-3 col-form-label">Jenis Kelamin</div>

                      <div class="col">
                        <label class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki">
                          <span class="form-check-label">Laki-laki</span>
                        </label>
                        <label class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
                          <span class="form-check-label">Perempuan</span>
                        </label>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-3 col-form-label">Umur</label>
                      <div class="col">
                      <input type="text" class="form-control" name="umur" placeholder="Umur" autocomplete="off">
                    </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-3 col-form-label">Alamat</label>
                      <div class="col">
                      <input type="text" class="form-control" name="alamat" placeholder="Alamat" autocomplete="off">
                    </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-3 col-form-label">No.Handphone</label>
                      <div class="col">
                      <input type="text" class="form-control" name="no_hp" placeholder="No.Handphone" autocomplete="off">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <a href="#" class="btn btn-secondary" data-bs-dismiss="modal">
                      Cancel
                    </a>
                    <button type="submit" class="btn btn-primary ms-auto" data-bs-dismiss="modal">  Input Data Pasien </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>


            <!-- edit data -->
            <div class="modal modal-blur fade" id="modal-danger" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Form Edit Data Pasien</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="<?=BASE_URL?>Data/editData" method="POST">
                    <?php foreach ($kartu_pasien as $k) : ?>
                      
                   
                  <div class="mb-3 row">
                      <label class="col-3 col-form-label">No.Kartu</label>
                      <div class="col">
                        <!-- jngan hapus penting  -->
                      <input type="text"  name="nomor"  value="<?=$k->nomor;?>" hidden>
                      <!-- /// -->
                      <input type="text" class="form-control" name="no_kartu" placeholder="No.Kartu" value="<?=$k->no_kartu;?>">
                    </div>
                    </div>
                    
                  <div class="mb-3 row">
                  <label class="col-3 col-form-label">Nama Pasien</label>
                  <div class="col">
                    <input type="text" class="form-control" name="nama" placeholder="Nama Pasien" value="<?=$k->nama;?>">
                  </div>
                </div>
                    <div class="mb-3 row">
                      <div class="col-3 col-form-label">Jenis Kelamin</div>

                      <div class="col">
                        <label class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki">
                          <span class="form-check-label">Laki-laki</span>
                        </label>
                        <label class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
                          <span class="form-check-label">Perempuan</span>
                        </label>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-3 col-form-label">Umur</label>
                      <div class="col">
                      <input type="text" class="form-control" name="umur" placeholder="Umur" value="<?=$k->umur;?>">
                    </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-3 col-form-label">Alamat</label>
                      <div class="col">
                      <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?=$k->alamat;?>">
                    </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-3 col-form-label">No.Handphone</label>
                      <div class="col">
                      <input type="text" class="form-control" name="no_hp" placeholder="No.Handphone" value="<?=$k->no_hp;?>">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <a href="#" class="btn btn-secondary" data-bs-dismiss="modal">
                      Cancel
                    </a>
                    <button type="submit" class="btn btn-primary ms-auto" data-bs-dismiss="modal">  Edit Data Pasien </button>
                    <?php endforeach;?>
                  </form>
                  </div>
                </div>
              </div>
            </div>