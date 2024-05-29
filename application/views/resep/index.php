
                    </div>
                </div>
            </div>
        </header>

<div class="page-wrapper">

  <!-- Page body -->
    <div class="container-xl mt-5">
    <h2 class="page-title mb-4">
                  Resep Obat Pasien
            </h2>
      <div class="row row-deck row-cards mt-5">
      
        
        <div class="col-sm-12">
          <div class="card">
            <div class="card-body table-responsive">
              <table id="myTable" class="table table-vcenter table-hover card-table table-striped">
                <thead>
                  <tr >
                    <th class="bg-primary text-white">No</th>
                    <th class="bg-primary text-white">Nama Pasien</th>
                    <th class="bg-primary text-white">Umur</th>
                    <th class="bg-primary text-white">Alamat</th>
                    <th class="bg-primary text-white">Nama Obat</th>
                    <th class="bg-primary text-white">Jumlah</th>
                    <th class="bg-primary text-white">Aturan/Hari</th>
                  </tr>
                </thead>
                <tbody>
                <?php if (empty($resep_obat)): ?>
                   <tr>
                      <td colspan="7" class="text-center">Tidak Ada Data Resep Obat Pasien</td>              
                      
                      </tr><?php else: ?>
                      <?php $no=1; foreach ($resep_obat as $resep) :?>
                  <tr>
                    <td><?= $no;?></td>
                    <td><?= $resep->nama?></td>
                    <td><?= $resep->umur?></td>
                    <td><?= $resep->alamat?></td>
                    <td><?= $resep->nama_obat?></td>
                    <td><?= $resep->jumlah?></td>
                    <td><?= $resep->aturan?></td>
                    <?php $no++;?>
                  </tr>
                  <?php  endforeach;?>
                  <?php endif;?>
                </tbody>
                  
              </table>

              <!-- <h3 class="card-title">Resep Obat</h3>
              <p class="text-muted">Nama Pasien : <?= $resep->nama?></p>
              <p class="text-muted">Umur : <?= $resep->umur?></p>
              <p class="text-muted">Alamat : <?= $resep->alamat?></p>
              <p class="text-muted">Nama Obat : <?= $resep->nama_obat?></p>
              <p class="text-muted">Jumlah Obat : <?= $resep->jumlah?></p> -->
            </div>
          </div>
        </div>
        
        <div class="card-body d-flex justify-content-center mb-1">
        <?php if (isset($links)) : ?>
                        <!-- Tampilkan link pagination jika variabel $links sudah ada -->
                        <div class="pagination-links">
                            <?php echo $links; ?>
                        </div>
                    <?php endif; ?>
        </div>
      </div>
    </div>

    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>