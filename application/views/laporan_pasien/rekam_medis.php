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
    .logo{
        z-index: 5;
        margin-left: 100px;
    }
   </style>

</head>

<body>
<div class="row">
    <div class="col-sm-1 ">
    <img class="logo" src="<?=BASE_URL?>asset/dist/image/logo-klinik.png" alt="logo" width="80%">
    </div>          
    <div class="col-sm-11 text-center">
        <h2 class="kop">Kartu Rekam Medis</h2>
        <p class="kop">Praktek dr.H.Suyuti Arifin, Sp.,S.(Spesialis Saraf)</p>
        <p class="kop">Jl.Kartini No.36 Kota Palopo</p>
        <hr width="80%">
    </div>
</div>
<div class="row">
    <div class="col-sm-8">
        <?php foreach ($rekam_medis as $k) { ?>
           
      
<p>
    Nama : <?=$k->nama;?>
    <br>
    Umur : <?=$k->umur;?>
    <br>
    Alamat : <?=$k->alamat;?>
</p>
<?php  }?>
    </div>
    <div class="col-sm-4">
         
<p>
Tanggal: <?= date('d F Y'); ?>

</p> 
 
    </div>
</div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="w-1 text-center ">No.</th>
                <th class=" text-center">Tanggal Periksa</th>
                <th class=" ">Keluhan</th>
                <th class=" text-center">Pemeriksaan Fisik</th>
                <th class=" ">Diagnosa</th>
                <th>Terapi</th>
            </tr>
            <tbody>
                <?php $no=1; foreach ($print_rekam_medis as $r ) {
                     $nomor = $r->nomor;
                    ?>
                <tr>
                    <td class="text-center "><?=$no;?></td>
                    <td class="text-center "><?=$r->tgl_periksa;?></td>
                    <td><?=$r->anamnesa;?></td>
                    <td class="text-center "><?=$r->td; echo ' mmHg'?> <br> <?=$r->suhu; echo '°C'?></td> 
                    <td><?=$r->diagnosa;?></td>
                    <td><?=$r->terapi;?></td>
                </tr>
                <?php $no++;  }?>
            </tbody>
        </thead>
    </table>
    <div class="row">
    <div class="col-sm-8"></div>
    <div class="col-sm-4">
        <p>Palopo, <?= date('d-m-Y'); ?>
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