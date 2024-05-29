<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?=BASE_URL?>asset/dist/image/logo-klinik.png">
    <title>Data Pasien</title>

    <!-- CSS files -->
    <link href="<?=BASE_URL?>asset/dist/css/tabler.min.css?1684106062" rel="stylesheet"/>
    <link href="<?=BASE_URL?>asset/dist/css/tabler-flags.min.css?1684106062" rel="stylesheet"/>
    <link href="<?=BASE_URL?>asset/dist/css/tabler-payments.min.css?1684106062" rel="stylesheet"/>
    <link href="<?=BASE_URL?>asset/dist/css/tabler-vendors.min.css?1684106062" rel="stylesheet"/>
    <link href="<?=BASE_URL?>asset/dist/css/demo.min.css?1684106062" rel="stylesheet"/>

    
   <style>
    @page{
        size: auto;
        margin: 0mm;
    }
    body{
        padding:50px;
    }

    .kop{
        line-height:5px;
    }

    hr{
        margin-top:-5px;
    }
    .nt{
        margin-top:-35px;
    }
    .hr{
        margin-top: -10px;
    }
   </style>

</head>

<body>
<div class="row ">
    <div class="col-sm-7 border p-3">
        <div class="row">
            <div class="col-sm-2">
                <img class="" src="<?=BASE_URL?>asset/dist/image/logo-klinik.png" alt="logo" width="90%">
            </div>          
            <div class="col-sm-10 text-center">
                    <h2 class="kop">Klinik Kartini Farma</h2>
                    <p class="kop">dr.Suyuti Arifin, Sp., S. (Spesialis Saraf)</p>
                    <p class="kop">SIP: 96/SIPD/08.04/DPMPTS/VII/2018</p>
                    <p class="kop">jl.Kartini No.36 Kota Palopo</p>
            </div>
            <hr>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <h1>R/</h1>
            </div>
            <div class="col-sm-10">
                <table>
                    <thead>
                        <tr>
                            <td>Nama Obat</td>
                            <td>Jumlah</td>
                            <td>Aturan/Hari</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($print_resep as $k) { ?>
                        <tr>
                            <td><?=$k->nama_obat;?></td>
                            <td><?=$k->jumlah;?></td>
                            <td><?=$k->aturan;?></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>

        </div>

<div class="row mt-3">
        <?php foreach ($print_resep as $k) { $nomor = $k->nomor;?>   
<p>
    Nama : <?=$k->nama;?>
    <br>
    Umur : <?=$k->umur;?>
    <br>
    Alamat : <?=$k->alamat;?>
</p>
<?php  }?>
</div>
<div class="row">
    <div class="col-sm-6"></div>
    <div class="col-sm-6">
        <p>Palopo, <?= date('d F Y'); ?>
        <?php foreach ($ttd as $t) {?>
            <img src="<?= base_url('upload/'.$t->ttd) ?>" alt="ttd" width="50%" >
            <hr class="hr" width="65%">
            <p class="nt"><?= $t->nama?></p>

        <?php  }?>
        </div>
    </div>

    <script type="text/javascript">
        var nomor = "<?=$nomor;?>";
        window.print();
        onafterprint = function () {
            window.location.href = "<?=BASE_URL?>Data_Pasien/index/" + nomor;
        }
    </script>

    <script src="<?=base_url('asset/dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1684106062')?>" defer></script>
    <script src="<?=base_url('asset/dist/libs/jsvectormap/dist/maps/world.js?1684106062')?>" defer></script>
    <script src="<?=base_url('asset/dist/libs/jsvectormap/dist/maps/world-merc.js?1684106062')?>" defer></script>
    <!-- Tabler Core -->
    <script src="<?=base_url('asset/dist/js/tabler.min.js?1684106062')?>" defer></script>
    <script src="<?=base_url('asset/dist/js/demo.min.js?1684106062')?>" defer></script>
</body>
</html>