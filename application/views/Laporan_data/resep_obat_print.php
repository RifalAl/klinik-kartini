<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?=BASE_URL?>asset/dist/image/logo-klinik.png">
    <title>Data Resep Obat Pasien</title>

    <!-- CSS files -->
    <link href="<?=BASE_URL?>asset/dist/css/tabler.min.css?1684106062" rel="stylesheet"/>
    <link href="<?=BASE_URL?>asset/dist/css/tabler-flags.min.css?1684106062" rel="stylesheet"/>
    <link href="<?=BASE_URL?>asset/dist/css/tabler-payments.min.css?1684106062" rel="stylesheet"/>
    <link href="<?=BASE_URL?>asset/dist/css/tabler-vendors.min.css?1684106062" rel="stylesheet"/>
    <link href="<?=BASE_URL?>asset/dist/css/demo.min.css?1684106062" rel="stylesheet"/>
  
</head>
<body>
    <center>
        <!-- kop -->
    
        <!-- /kop -->

        <!-- <h3>Data Pengaduan dari <?= date('d F Y', strtotime($tgl_mulai)) ?> hingga <?= date('d F Y', strtotime($tgl_akhir)) ?></h3> -->

        <table border="1" style="border-collapse:collapse;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tanggal Periksa</th>
                    <th>Nama Obat</th>
                    <th>Jumlah</th>
                    <th>Aturan/Hari</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $no = 0;
                    foreach ($tbl_resep as $r): 
                    $no++;
                ?>
                    <tr>
                        <td><?= $no; ?>.</td>
                        <td><?= $r->nama ?></td>
                        <td><?= $r->tgl_periksa ?></td>
                        <td><?= $r->nama_obat ?></td>
                        <td><?= $r->jumlah ?></td>
                        <td><?= $r->aturan ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </center>

    <script type="text/javascript">
        window.onload = function() {
            window.print();
        };

        window.onafterprint = function () {
            window.location.href = "<?=BASE_URL?>Laporan_Data";
        };
    </script>

    <script src="<?=base_url('asset/dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1684106062')?>" defer></script>
    <script src="<?=base_url('asset/dist/libs/jsvectormap/dist/maps/world.js?1684106062')?>" defer></script>
    <script src="<?=base_url('asset/dist/libs/jsvectormap/dist/maps/world-merc.js?1684106062')?>" defer></script>
    <!-- Tabler Core -->
    <script src="<?=base_url('asset/dist/js/tabler.min.js?1684106062')?>" defer></script>
    <script src="<?=base_url('asset/dist/js/demo.min.js?1684106062')?>" defer></script>
</body>
</html>
