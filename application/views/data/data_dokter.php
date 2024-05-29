
<div class="page-wrapper">

  <!-- Page Header -->
  <div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        
        <div class="col-sm-8">
            <h2 class="page-title">
                  Data Pasien
            </h2>
                </div>
        <!-- Page title actions -->
        <div class="col-sm-4 d-print-none">
                            <form id="form-cari" action="<?= base_url('Data/data_pasien') ?>" method="get" >
                                <div class="input-icon">
                                    <span class="input-icon-addon">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                            <path d="M21 21l-6 -6" />
                                        </svg>
                                    </span>
                                    <input type="text" value="" name="keyword" class="form-control mt-3" placeholder="Search…" aria-label="Search in website">
                                </div>
                            </form>
        </div> 
        <!--  script untuk menampilkan alert berhasil hapus data -->
        <?php if(isset($delete) && !empty($delete)): ?>
            <div class="alert  alert-dismissible card-borderless text-white" role="alert" style="background-color: #ff4747;">
                <?php echo $delete; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
      </div>
    </div>
</div>

  <!-- Page body -->
  <div class="page-body">
    <div class="container-xl">
      <div id="data-container" class="row row-deck row-cards">
        <div class="col-12">  
          <div class="row row-cards mt-1">
          <?php if (empty($resep_obat)): ?>
            <p class="text-center mt-5">Tidak Ada Data Pasien</p>
            <?php else: ?>
            <?php foreach ($resep_obat as $data) :  ?>        
            <div class="col-sm-4">    
              <div class="card card-sm border-top-0 border-bottom-0 border-end-0 border-5   <?= $data->status == 'Aktif' ? 'border-success' : 'border-secondary' ?>">               
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col">
                      <a href="<?=BASE_URL?>Data_pasien/Informasi_pasien/<?=$data->nomor?>">
                          <h2>Nama: <?= $data->nama ?></h2> </a>
                        </div>
                        <div class="text-muted">
                        Umur: <?= $data->umur ?>
                          <br>
                        Alamat: <?= $data->alamat ?>
                        </div>
                      </div>
                    </div>
                  </div> 
              </div>
              <?php endforeach;?>
              </div>      
          </div>         
        </div>
       <!-- Pagination -->
                    <nav aria-label="Page navigation example">
                        <ul id="pagination-container" class="pagination justify-content-center mt-3"></ul>
                    </nav>      
                  </div>
        <?php endif;?>
      </div>
    </div>
  </div>


  <script>
    $(document).ready(function() {
        var items = <?php echo json_encode($resep_obat); ?>; // Assuming $resep_obat is an array of objects
        var itemsPerPage = 9;

        function displayData(data) {
            var html = '';
            $.each(data, function(index, item) {
                html += '<div class="col-sm-4">' +
                    '<div class="card card-sm border-top-0 border-bottom-0 border-end-0 border-5 ' + (item.status === 'Aktif' ? 'border-success' : 'border-secondary') + '">' +
                    '<div class="card-body">' +
                    '<div class="row align-items-center">' +
                    '<div class="col">' +
                    '<a href="<?=BASE_URL?>Data_pasien/Informasi_pasien/' + item.nomor + '">' +
                    '<h2>Nama: ' + item.nama + '</h2></a>' +
                    '</div>' +
                    '<div class="text-muted">Umur: ' + item.umur + '<br>Alamat: ' + item.alamat + '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>';
            });
            $('#data-container').html(html);
        }

        $('#pagination-container').pagination({
            dataSource: items,
            pageSize: itemsPerPage,
            callback: function(data, pagination) {
                displayData(data);
            },
            ulClassName: 'pagination',
            activeClassName: 'page-item active',
            className: 'page-item',
            pageLinkClassName: 'page-link',
            prevClassName: 'page-item',
            nextClassName: 'page-item',
            prevLinkClassName: 'page-link',
            nextLinkClassName: 'page-link',
            prevText: '&laquo;',
            nextText: '&raquo;'
        });
    });
</script>