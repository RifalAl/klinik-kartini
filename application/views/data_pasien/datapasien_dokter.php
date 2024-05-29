
 <div class="page-body container">
        <div class="container-xl">
        <div class="page-header d-print-none">
                <div class="row align-items-center">
        
        <div class="col-sm-8">
            <h1>
                  Informasi Pasien
            </h1>
                </div>
        <!-- Page title actions -->
        <div class="col-sm-4 d-print-none">
          <div class="btn-list d-flex justify-content-end align-items-end">

            <a href="<?=BASE_URL?>Data/data_pasien" class="btn btn-primary d-none d-sm-inline-block">            
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M5 12l14 0" /><path d="M5 12l6 6" />
                <path d="M5 12l6 -6" />
            </svg>
              Kembali
            </a>
          </div>
        </div>
        </div>
</div>
</div>

        <!--  script untuk menampilkan alert berhasil tambah data -->
        <?php if(isset($pesan) && !empty($pesan)): ?>
            <div class="alert  alert-dismissible card-borderless text-white sticky-top fade show top-0 w-100" role="alert" style="background-color: #009dff; z-index: 1050;">
                <?php echo $pesan; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <?php foreach ($tampil as $t) {?>       
        <div class="container-xl">
            <div class="page-header d-print-none">
                <div class="row align-items-center">
                    <div class="card p-5">
                        <div class="row">
                            <div class="col-sm-9">
                                <a class="nav-link fs-5">
                                    <span class="nav-link-title">
                                        <h1>
                                            <span class="nav-link-icon d-md-none d-lg-inline-block "><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon fs-5" width="80" height="80" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                                </svg>
                                            </span>
                                           <?= $t->nama;?>
                                        </h1>
                                    </span>
                                    <span class="badge <?= $t->status == 'Aktif' ? 'bg-green-lt' : 'bg-red-lt' ?> ms-3 mb-3">
                                        <?= $t->status ?>
                                    </span>
                                </a>

                            </div>

                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="row p-2">
                                        <div class="col-sm-10">
                                            <h2>Jumlah Periksa</h2>
                                        </div>
                                        <div class="col-sm-2 text-primary">
                                            <h2><?= $jumlahData;?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <a class="nav-link">
                                <span class="nav-link-title">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon mt-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M7 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                            <path d="M5 22v-5l-1 -1v-4a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4l-1 1v5" />
                                            <path d="M17 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                            <path d="M15 22v-4h-2l2 -6a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1l2 6h-2v4" />
                                        </svg>
                                    </span>
                                    Jenis Kelamin: <?= $t->jenis_kelamin;?>
                                </span>
                            </a>
                            <a class="nav-link">
                                <span class="nav-link-title">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon mt-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" />
                                            <path d="M16 3v4" />
                                            <path d="M8 3v4" />
                                            <path d="M4 11h16" />
                                            <path d="M11 15h1" />
                                            <path d="M12 15v3" />
                                        </svg>
                                    </span>
                                    Umur: <?= $t->umur;?>
                                </span>
                            </a>
                            <a class="nav-link">

                                <span class="nav-link-title">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon mt-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M6 5a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2v-14z" />
                                            <path d="M11 4h2" />
                                            <path d="M12 17v.01" />
                                        </svg>
                                    </span>
                                    No.Telp/Hp: <?= $t->no_hp;?>
                                </span>
                            </a>
                            <div class="col-sm-8">
                                <a class="nav-link" style="margin-left: -8px;">
                                    <span class="nav-link-title">
                                        <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon mt-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                                <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                                            </svg>
                                        </span>
                                        Alamat: <?= $t->alamat;?>
                                    </span>
                                </a>
                            </div>
                            <div class="col-sm-4 ps-2">
                                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-large">
                                    Input Resep Obat
                                </a>
                                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-simple">
                                    Input Rekam Medis
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <!--  script untuk menampilkan alert berhasil hapus data -->
        <?php if(isset($delete) && !empty($delete)): ?>
            <div class="alert  alert-dismissible card-borderless text-white  sticky-top fade show top-0 w-100"  role="alert" style="background-color: #ff4747; z-index: 1050;">
                <?php echo $delete; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <!--  script untuk menampilkan alert berhasil update data -->
        <?php if(isset($update) && !empty($update)): ?>
            <div class="alert  alert-dismissible card-borderless text-white sticky-top fade show top-0 w-100" role="alert" style="background-color: #009dff; z-index: 1050;">
                <?php echo $update; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <div class="container-xl">
            <div class="row g-2 align-items-center mt-1">
                <div class="card p-5">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="">
                                <div class="card-header">
                                    <ul class="nav nav-tabs card-header-tabs nav-fill" data-bs-toggle="tabs">
                                        <li class="nav-item">
                                            <a href="#tabs-home-5" class="nav-link active" data-bs-toggle="tab">Kartu Pasien</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#tabs-profile-5" class="nav-link" data-bs-toggle="tab">Resep Obat</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#tabs-activity-5" class="nav-link" data-bs-toggle="tab">Rekam Medis</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active show mt-5" id="tabs-home-5">
                                            <div class="row">
                                                <div class="col-sm-10">
                                                     <h2>Kartu Pasien</h2>
                                                </div>
                                                
                                            </div>
                                            
                                            <?php foreach ($tampil as $t) : ?>                                                
                                                    <p>No.Kartu: <?=$t->no_kartu?></p>                                                                                      
                                                <?php endforeach; ?>                                                                                 
                                            <div class="row mt-3">
                                                <div class="">

                                                    <!-- table kartu pasien -->
                                                    <div class="table-responsive">
                                                        <table class="table table-hover card-table table-vcenter text-nowrap" >
                                                            <thead>
                                                                <tr>
                                                                    <!-- <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices"></th> -->
                                                                    <th class="w-1 bg-primary text-white">No.</th>
                                                                    <th class="bg-primary text-white">No. Kartu</th>
                                                                    <th class="bg-primary text-white text-center">Tanggal</th>
                                                                    <th class="bg-primary text-white text-center">Nama</th>
                                                                    <th class="bg-primary text-white">Jenis Kelamin</th>
                                                                    <th class="bg-primary text-white">Umur</th>
                                                                    <th class="bg-primary text-white text-center">Alamat</th>
                                                                    <th class="bg-primary text-white text-center">No.Telp/Hp</th>
                                                                   
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $no=1; foreach ($kartu_pasien as $kartu) :?>
                                                                   
                                                                
                                                                <tr>
                                                                    <td><?=$no;?></td>
                                                                    <td><?=$kartu->no_kartu;?></td>
                                                                    <td class="text-center"><?=$kartu->tanggal;?></td>
                                                                    <td><?=$kartu->nama;?></td>
                                                                    <td><?=$kartu->jenis_kelamin;?></td>
                                                                    <td><?=$kartu->umur;?></td>
                                                                    <td><?=$kartu->alamat;?></td>
                                                                    <td><?=$kartu->no_hp;?></td>
                                                                    
                                                                </tr>
                                                                <?php $no++; endforeach; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div>

                                        <!-- resep obat  -->
                                        <div class="tab-pane mt-5" id="tabs-profile-5">
                                            <h2>Resep Obat</h2>
                                            <div class="row">
                                            <?php foreach ($tampil as $t) : ?>
                                                <div class="col-sm-10">
                                                    <p>No. <?=$t->no_kartu?></p>
                                                </div>
                                                
                                                <?php endforeach; ?>
                                            </div>                                            
                                            <div class="row mt-3">
                                                <div class="">

                                                    <!-- resep obat -->
                                                    <div class="table-responsive">
                                                        <table class="table table-hover card-table table-vcenter text-nowrap">
                                                            <thead>
                                                                <tr>
                                                                    <th class="w-1 bg-primary text-white">No.</th>
                                                                    <th class="bg-primary text-white">Tanggal Periksa</th>
                                                                    <th class="bg-primary text-white">Nama Obat</th>
                                                                    <th class="bg-primary text-white">Jumlah</th>
                                                                    <th class="bg-primary text-white">Aturan/Hari</th>
                                                                    <th class="bg-primary text-white text-center">Aksi</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php $no = 1; ?>
                                                            <?php if (empty($resep)): ?>
                                                                <tr>
                                                                    <td colspan="6" class="text-center">Tidak Ada Data Obat</td>
                                                                </tr>
                                                            <?php else: ?>
                                                            <?php 
                                                                     foreach ($resep as $r) :?>
                                                                <tr>  
                                                                    <td><?= $no;?></td>
                                                                    <td><?= $r->tgl_periksa; ?></td>
                                                                    <td><?= $r->nama_obat; ?></td>
                                                                    <td><?= $r->jumlah; ?></td>
                                                                    <td><?= $r->aturan; ?></td>
                                                                    <!-- <td><?= $r->id_resep; ?></td> -->
                                                                    <td class="text-center">
                                                                    <a href="#" class="btn btn-warning btn-sm btnEditResep" data-bs-toggle="modal" data-bs-target="#modal-full-width"
                                                                    
                                                                    data-id_resep="<?= $r->id_resep;?>"
                                                                    data-nama_obat="<?= $r->nama_obat;?>"
                                                                    data-jumlah="<?= $r->jumlah; ?>"
                                                                    data-aturan="<?= $r->aturan; ?>" 
                                                                    >Edit</a>
                                                                    <form action="<?= BASE_URL ?>Resep_Obat/hapusResep" method="post" style="display:inline;">
                                                                        <input type="hidden" name="id_resep" value="<?= $r->id_resep; ?>">
                                                                        <input type="hidden" name="nomor" value="<?= $r->nomor; ?>">
                                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau hapus data ini?')">Hapus</button>
                                                                    </form>                                                                    
                                                                                                                                 
                                                                </td>
                                                                </tr>
                                                                <?php $no++; ?>
                                                                    <?php endforeach; ?>
                                                                <?php endif; ?>


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                   
                                                </div>
                                            </div>

                                        </div>

                                        <!-- rekam medis -->
                                        <div class="tab-pane mt-5" id="tabs-activity-5">
                                            <div class="row">
                                                <div class="col-sm-10">
                                                <h2>Rekam Medis</h2>
                                                </div>
                                               
                                            </div>
                                                <?php foreach ($tampil as $t) : ?>
                                                    <p>No. <?=$t->no_kartu?></p>
                                                <?php endforeach; ?>
                                                                                      
                                            <div class="row mt-3">
                                                <div class="">
                                                    

                                                    <!-- rekam medis -->
                                                    <div class="table-responsive">
                                                        <table class="table table-hover card-table table-vcenter text-nowrap">
                                                            <thead>
                                                                <tr>
                                                                    <th class="w-1 bg-primary text-white">No.
                                                                    </th>
                                                                    <th class="bg-primary text-white">Tanggal Periksa</th>
                                                                    <th class="bg-primary text-white">Keluhan</th>
                                                                    <th class="bg-primary text-white">Pemeriksaan Fisik</th>
                                                                    <th class="bg-primary text-white">Diagnosa</th>
                                                                    <th class="bg-primary text-white">Terapi</th>
                                                                    <th class="bg-primary text-white text-center">Aksi</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php $no = 1; ?>
                                                            <?php if (empty($rekam_medis)): ?>
                                                                <tr>
                                                                    <td colspan="6" class="text-center">Tidak Ada Data Pemeriksaan</td>
                                                                </tr>
                                                            <?php else: ?>
                                                                <?php foreach ($rekam_medis as $rekam) :?>
                                                                    
                                                               
                                                                <tr>
                                                                    <td><?= $no;?></td>
                                                                    <td><?=$rekam->tgl_periksa;?></td>
                                                                    <td><?=$rekam->anamnesa;?></td>
                                                                    <td><?=$rekam->td; echo ' mmHg'?> <br> <?=$rekam->suhu; echo '°C'?></td>
                                                                    <td><?=$rekam->diagnosa;?></td>
                                                                    <td><?=$rekam->terapi;?></td>

                                                                    <td class="text-center">
                                                                        <a href="#" class="btn btn-sm btn-warning btnEditRekam" data-bs-toggle="modal" data-bs-target="#modal-scrollable"
                                                                        data-id_rm="<?= $rekam->id_rm;?>"
                                                                        data-no_rm="<?= $rekam->no_rm;?>"
                                                                        data-anamnesa="<?= $rekam->anamnesa;?>"
                                                                        data-td="<?= $rekam->td; ?>"
                                                                        data-suhu="<?= $rekam->suhu; ?>"
                                                                        data-diagnosa="<?= $rekam->diagnosa; ?>" 
                                                                        data-terapi="<?= $rekam->terapi; ?>" 
                                                                        >Edit</a>
                                                                        <form action="<?= BASE_URL ?>Rekam_Medis/hapusRekam" method="post" style="display:inline;">
                                                                        <input type="hidden" name="id_rm" value="<?= $rekam->id_rm ?>">
                                                                        <input type="hidden" name="nomor" value="<?= $rekam->nomor; ?>">
                                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau hapus data ini?')">Hapus</button>
                                                                    </form>                                                                     </td>
                                                                </tr>
                                                                <?php $no++; ?>
                                                                    <?php endforeach; ?>
                                                                <?php endif; ?>


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <!-- Semua modal -->
    <!-- rekam medis -->
    <div class="modal modal-blur fade" id="modal-simple" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Rekam Medis</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?=BASE_URL?>Rekam_Medis/tambahRekam_Medis" method="POST">
                    <div class="mb-3 row">
                        <label class="col-3 col-form-label">No.Rekam Medis</label>
                        <div class="col">
                            <input type="text" class="form-control" name="no_rm" placeholder="No.Rekam Medis" autocomplete="off">
                        </div>
                        </div>
                    <div class="mb-3 row">
                        <label class="col-3 col-form-label">Keluhan</label>
                        <div class="col">
                        <!-- jngan hapus -->
                        <input type="text" name="nomor" value="<?php foreach ($tampil as $t ) { ?><?=$t->nomor;?><?php } ?>" hidden >
                        <!-- ///////// -->
                        <textarea type="text" class="form-control" name="anamnesa" placeholder="Keluhan" autocomplete="off"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-3 col-form-label ">Pemeriksaan Fisik</label>
                        <div class="col">
                            <table>
                                <tr>
                                    <td width="5%">
                                    <label class="form-label">TD :</label>
                                    </td>
                                    <td width="20%">
                                    <input type="text" class="form-control" name="td" autocomplete="off">
                                    </td>
                                    <td width="10%">
                                    <label class="form-label" >mmHg</label>
                                    </td>
                                    <td width="5%">
                                    <label class="form-label">Suhu :</label>
                                    </td>
                                    <td width="20%"> <input type="text" class="form-control" name="suhu" autocomplete="off">
                                    </td>
                                    <td width="10%">
                                    <label class="form-label">°C</label>
                                    </td>
                                </tr>
                            </table>
                        <!-- <textarea type="text" class="form-control" name="p_fisik" placeholder="Pemeriksaan Fisik" ></textarea> -->
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-3 col-form-label ">Diagnosa</label>
                        <div class="col">
                            <textarea type="text" class="form-control" name="diagnosa" placeholder="Diagnosa" autocomplete="off"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-3 col-form-label">Terapi</label>
                        <div class="col">
                            <textarea type="text" class="form-control" name="terapi" placeholder="Terapi" autocomplete="off"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-secondary" data-bs-dismiss="modal">
                        Cancel
                        </a>
                        <button type="submit" class="btn btn-primary ms-auto" data-bs-dismiss="modal">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- resep obat -->
    <div class="modal modal-blur fade" id="modal-large" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Resep Obat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?=BASE_URL?>Resep_Obat/tambahResepObat" method="POST">
                  <div class="mb-3 row">
                      <label class="col-3 col-form-label ">Nama Obat</label>
                      <input type="text" value="<?php foreach ($tampil as $k) {?><?= $k->nomor;?><?php }?> " name="nomor" hidden  >
                      <div class="col" id="editorContent1">
                        <!-- untuk nomor -->
                      <textarea type="text" id="editor" class="form-control" name="nama_obat" placeholder="Nama Obat"></textarea>
                    </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-3 col-form-label">Jumlah</label>
                        <div class="col" id="editorContent2">
                            <textarea type="text" name="jumlah" placeholder="Jumlah" class="form-control" id="editor2"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-3 col-form-label">Aturan/Hari</label>
                        <div class="col" id="editorContent3">
                        <textarea type="text" id="editor3" class="form-control" name="aturan" placeholder="Aturan/Hari"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-secondary" data-bs-dismiss="modal">
                        Cancel
                        </a>
                        <button type="submit" class="btn btn-primary ms-auto" data-bs-dismiss="modal">Simpan</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    <!-- modal edit resep -->
    <div class="modal modal-blur fade" id="modal-full-width" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Edit Resep Obat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?=BASE_URL?>Resep_Obat/editResep" method="POST">
                    
                  <div class="mb-3 row">
                      <label class="col-3 col-form-label ">Nama Obat</label>
                      <!-- penting!!! -->
                        <input type="hidden" id="id_resep" name="id_resep" value="">
                        <!-- untuk nomor -->
                        <input type="text" value="<?= $k->nomor;?> " name="nomor" hidden >
                      <div class="col" id="editorConten">
                      <textarea type="text"  id="nama_obat" value="" class="form-control" name="nama_obat" placeholder="Nama Obat"></textarea>
                    </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-3 col-form-label">Jumlah</label>
                        <div class="col" id="editorContent">
                            <textarea type="text" id="jumlah" value=""  class="form-control" name="jumlah" placeholder="Jumlah"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-3 col-form-label">Aturan/Hari</label>
                        <div class="col" id="editorContent">
                        <textarea type="text" id="aturan" value="" class="form-control" name="aturan" placeholder="Aturan/Hari"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-secondary" data-bs-dismiss="modal">
                        Cancel
                        </a>
                        <button type="submit" class="btn btn-primary ms-auto" data-bs-dismiss="modal">Simpan</button>
                    
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    <!-- modal edit rekam medis -->
    <div class="modal modal-blur fade" id="modal-scrollable" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Edit Rekam Medis</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?=BASE_URL?>Rekam_Medis/editRekamMedis" method="POST">
                    <div class="mb-3 row">
                        <!-- penting!!! -->
                        <input type="hidden" id="id_rm" name="id_rm" value="">
                        <label class="col-3 col-form-label ">No.Rekam Medis</label>
                        <div class="col">
                            <input type="text" id="no_rm" class="form-control" name="no_rm" placeholder="No.Rekam Medis" >
                        </div>
                        </div>
                    <div class="mb-3 row">
                        <label class="col-3 col-form-label">Keluhan</label>
                        <div class="col">
                        <!-- jngan hapus -->
                        <input type="text" name="nomor" value="<?php foreach ($tampil as $t ) { ?><?=$t->nomor;?><?php } ?>" hidden >
                        <!-- ///////// -->
                        <textarea type="text" id="anamnesa" class="form-control" name="anamnesa" placeholder="Keluhan"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-3 col-form-label ">Pemeriksaan Fisik</label>
                        <div class="col">
                        <table>
                                <tr>
                                    <td width="5%">
                                    <label class="form-label">TD :</label>
                                    </td>
                                    <td width="20%">
                                    <input type="text" id="td" class="form-control" name="td">
                                    </td>
                                    <td width="10%">
                                    <label class="form-label" >mmHg</label>
                                    </td>
                                    <td width="5%">
                                    <label class="form-label">Suhu :</label>
                                    </td>
                                    <td width="20%"> <input type="text" id="suhu" class="form-control" name="suhu">
                                    </td>
                                    <td width="10%">
                                    <label class="form-label">°C</label>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-3 col-form-label ">Diagnosa</label>
                        <div class="col">
                            <textarea type="text" id="diagnosa" class="form-control" name="diagnosa" placeholder="Diagnosa" ></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-3 col-form-label">Terapi</label>
                        <div class="col">
                            <textarea type="text" id="terapi"  class="form-control" name="terapi" placeholder="Terapi"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-secondary" data-bs-dismiss="modal">
                        Cancel
                        </a>
                        <button type="submit" class="btn btn-primary ms-auto" data-bs-dismiss="modal">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- ///// -->
<!-- edit rekam medis -->
<script>
     $('.btnEditRekam').click(function(){
    $('#modal-scrollable').modal('show');
            // Ambil data dari tombol yang memicu modal
            var id_rm = $(this).data('id_rm');
            var no_rm = $(this).data('no_rm');
            var anamnesa = $(this).data('anamnesa');
            var td = $(this).data('td');
            var suhu = $(this).data('suhu');
            var diagnosa = $(this).data('diagnosa');
            var terapi = $(this).data('terapi');

            $('#id_rm').val(id_rm);
            $('#no_rm').val(no_rm);
            $('#anamnesa').val(anamnesa);
            $('#td').val(td);
            $('#suhu').val(suhu);
            $('#diagnosa').val(diagnosa);
            $('#terapi').val(terapi);
        });
</script>
<!-- script edit resep -->
<script>
            $('.btnEditResep').click(function(){
            $('#modal-full-width').modal('show');
            // Ambil data dari atribut data pada tombol
            var id_resep = $(this).data('id_resep');
            var nama_obat = $(this).data('nama_obat');
            var jumlah = $(this).data('jumlah');
            var aturan = $(this).data('aturan');

            // Set nilai input pada modal
            $('#id_resep').val(id_resep);
            $('#nama_obat').val(nama_obat);
            $('#jumlah').val(jumlah);
            $('#aturan').val(aturan);

        });   
</script>

<!-- editor tambah resep -->
<script>
  function initializeEditor(selector, hiddenFieldId) {
    ClassicEditor
      .create(document.querySelector(selector), {
          toolbar: [
          'undo', 'redo', '|',
        //   'bold', 'italic', 'underline', 'strikethrough', '|',
          'bulletedList', 'numberedList', '|',
        //   'blockQuote'
          ]
      })
      .then(editor => {
          editor.model.document.on('change:data', () => {
          const data = editor.getData();
          document.getElementById(hiddenFieldId).value = data;
          });
      })
      .catch(error => {
          console.error(error);
      });
  }

  document.addEventListener('DOMContentLoaded', () => {
    initializeEditor('#editor', 'editorContent1');
    initializeEditor('#editor2', 'editorContent2');
    initializeEditor('#editor3', 'editorContent3');
  });
</script>


                <!-- editor  edit resep-->
               <script>
    var editorInstances = {};

    // Inisialisasi CKEditor pada textarea dengan ID 'nama_obat'
    ClassicEditor
        .create(document.querySelector('#nama_obat'), {
            toolbar: [
                 'undo', 'redo', '|',
                // 'bold', 'italic', 'underline', 'strikethrough', '|',
                'bulletedList', 'numberedList', '|',
                // 'blockQuote'
            ]
        })
        .then(editor => {
            editorInstances['nama_obat'] = editor;
        })
        .catch(error => {
            console.error(error);
        });

    // Inisialisasi CKEditor pada textarea dengan ID 'jumlah'
    ClassicEditor
        .create(document.querySelector('#jumlah'), {
            toolbar: [
                'undo', 'redo', '|',
                // 'bold', 'italic', 'underline', 'strikethrough', '|',
                'bulletedList', 'numberedList', '|',
                // 'blockQuote'
            ]
        })
        .then(editor => {
            editorInstances['jumlah'] = editor;
        })
        .catch(error => {
            console.error(error);
        });

    // Inisialisasi CKEditor pada textarea dengan ID 'aturan'
    ClassicEditor
        .create(document.querySelector('#aturan'), {
            toolbar: [
                'undo', 'redo', '|',
                // 'bold', 'italic', 'underline', 'strikethrough', '|',
                'bulletedList', 'numberedList', '|',
                // 'blockQuote'
            ]
        })
        .then(editor => {
            editorInstances['aturan'] = editor;
        })
        .catch(error => {
            console.error(error);
        });

    $(document).ready(function() {
        $('.btnEditResep').click(function(){
            // Tampilkan modal
            $('#modal-full-width').modal('show');

            // Ambil data dari atribut data pada tombol
            var id_resep = $(this).data('id_resep');
            var nama_obat = $(this).data('nama_obat');
            var jumlah = $(this).data('jumlah');
            var aturan = $(this).data('aturan');

            // Set nilai input pada modal
            $('#id_resep').val(id_resep);

            // Set nilai CKEditor
            if (editorInstances['nama_obat']) {
                editorInstances['nama_obat'].setData(nama_obat);
            }
            if (editorInstances['jumlah']) {
                editorInstances['jumlah'].setData(jumlah);
            }
            if (editorInstances['aturan']) {
                editorInstances['aturan'].setData(aturan);
            }
        });
    });
</script>


