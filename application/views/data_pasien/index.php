
                    </div>
                </div>
            </div>
        </header>
 <div class="page-body container">
        <div class="container-xl">
            <h1>Informasi Pasien</h1>
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
                                                <div class="col-sm-2">
                                                <a href="<?=BASE_URL?>Cetak/cetakKartu/<?=$t->nomor?>" class="btn btn-teal ">Cetak Kartu</a>
                                                </div>
                                            </div>
                                            
                                            <?php foreach ($tampil as $t) : ?>                                                
                                                    <p>No.Kartu: <?=$t->no_kartu?></p>                                                                                      
                                                <?php endforeach; ?>                                                                                 
                                            <div class="row mt-3">
                                            

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
                                                                    <th class="bg-primary text-white text-center">Aksi</th>
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
                                                                    <td class="text-center">
                                                                        <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#modal-small">Edit</a>
                                                                        <a href="<?= BASE_URL ?>Data/hapusKartu/<?= $kartu->nomor ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin mau hapus data ini?')">Hapus</a>
                                                                    </td>
                                                                </tr>
                                                                <?php $no++; endforeach; ?>
                                                            </tbody>
                                                        </table>
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
                                              <!-- resep obat -->
                                                    <div class="table-responsive">
                                                        <table  class="table table-hover card-table table-vcenter text-nowrap">
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
                                                                    <td class="text-center">
                                                                    <a href="<?=BASE_URL?>Cetak/cetakResep/<?=$r->id_resep?>" class="btn btn-teal btn-sm">Cetak</a>                                                                
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

                                        <!-- rekam medis -->
                                        <div class="tab-pane mt-5" id="tabs-activity-5">
                                            <div class="row">
                                                <div class="col-sm-10">
                                                <h2>Rekam Medis</h2>
                                                </div>
                                                <div class="col-sm-2">
                                                    <a href="<?=BASE_URL?>Cetak/cetakRekamMedis/<?=$t->nomor?>" class="btn btn-teal ">Cetak Rekam Medis</a>
                                                </div>
                                            </div>
                                                <?php foreach ($tampil as $t) : ?>
                                                    <p>No. <?=$t->no_kartu?></p>
                                                <?php endforeach; ?>
                                                                                      
                                            <div class="row mt-3">
                                                    <!-- rekam medis -->
                                                    <div class="table-responsive">
                                                        <table class="table table-hover card-table table-vcenter text-nowrap">
                                                            <thead>
                                                                <tr>
                                                                    <th class="w-1 bg-primary text-white">No. </th>
                                                                    <th class="bg-primary text-white">Tanggal Periksa</th>
                                                                    <th class="bg-primary text-white">Keluhan</th>
                                                                    <th class="bg-primary text-white">Pemeriksaan Fisik</th>
                                                                    <th class="bg-primary text-white">Diagnosa</th>
                                                                    <th class="bg-primary text-white">Terapi</th>
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

    <!-- edit data pasien -->
    <div class="modal modal-blur fade" id="modal-small" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
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
                            
                            <input type="text"  name="nomor"  value="<?=$k->nomor;?>" hidden autocomplete="off">
                        
                            <input type="text" class="form-control" name="no_kartu" placeholder="No.Kartu" value="<?=$k->no_kartu;?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-3 col-form-label ">Nama Pasien</label>
                        <div class="col">
                            <input type="text" class="form-control" name="nama" placeholder="Nama Pasien"  value="<?=$k->nama;?>" autocomplete="off">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-3 col-form-label ">Jenis Kelamin</div>
                        <div class="col">
                        <label class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin"  value="Laki-laki" <?php if ($k->jenis_kelamin == 'Laki-laki') echo 'checked'; ?>>
                        <span class="form-check-label">Laki-laki</span>
                        </label>
                        <label class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin"  value="Perempuan" <?php if ($k->jenis_kelamin == 'Perempuan') echo 'checked'; ?>>
                        <span class="form-check-label">Perempuan</span>
                        </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-3 col-form-label ">Umur</label>
                        <div class="col">
                        <input type="text" class="form-control" name="umur" placeholder="Umur"  value="<?=$k->umur;?>" autocomplete="off">
                    </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-3 col-form-label ">Alamat</label>
                        <div class="col">
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat"   value="<?=$k->alamat;?>" autocomplete="off">
                        </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-3 col-form-label">No.Handphone</label>
                      <div class="col">
                        <input type="text" class="form-control" name="no_hp" placeholder="No.Handphone" value="<?=$k->no_hp;?>" autocomplete="off">
                        </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-3 col-form-label">Status</label>
                      <div class="col">
                        <select name="status" class="form-select">
                            <option disabled>---Pilih Status---</option>
                            <option value="Aktif">Aktif</option>
                            <option value="Nonaktif">Nonaktif</option>
                        </select>
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
    </div>
   
 