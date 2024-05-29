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
        padding:30px;
    }
    .kop{
        line-height:1px;
        /* margin:auto; */
    }
    /* .no-border {
    border: none !important; 
} */
.border-right{
    border-right: none !important;
}
.border-left{
    border-left: none !important;
}
.border-bottom{
    border-bottom: none !important;
}
.border-top{
    border-top: none !important;
    border-bottom: none !important;

}
.border-bawa{
    border-top: none !important;

}
    

   </style>

</head>

<body>

<div class="col-sm-7">
    <table class="table table-bordered border-black">
        <tbody>
            <tr>
                <td class="border-right">
                    <div class="d-flex justify-content-center align-items-center">
                    <img class="" src="<?=BASE_URL?>asset/dist/image/logo-klinik.png" alt="logo" width="60%">
                    </div>
                </td>
                <td class="border-left" colspan="3" class="text-center ">
                    <center>
                    <h2 class="kop">Klinik Kartini Farma</h2>
                    <p class="kop">dr.Suyuti Arifin, Sp., S. (Spesialis Saraf)</p>
                    <p class="kop">SIP: 96/SIPD/08.04/DPMPTS/VII/2018</p>
                    <p class="kop">jl.Kartini No.36 Kota Palopo</p>
</center>

                </td>
                
            </tr>
            <tr class="border-top" >
                <td colspan="3"style="height: 1px;"class="text-center border-bottom">
                    <h2>Kartu Pasien</h2>
                </td>
            </tr>
            <tr class="border-top">
                
                <td colspan="1" width="30%" class="border-top border-right">
                    <p>No. Kartu</p>
                    <p>Nama</p>
                    <p>umur</p>
                    <p>Jenis Kelamin</p>
                    <p>Alamat</p>
                </td>
                <?php foreach ($print_kartu as $r ) {?>
                <td colspan="" class="border-top border-left">
                    <p>: <?=$r->no_kartu;?></p>
                    <p>: <?=$r->nama;?></p>
                    <p>: <?=$r->umur;?></p>
                    <p>: <?=$r->jenis_kelamin;?></p>
                    <p>: <?=$r->alamat;?></p>
                </td>
                <?php  }?> 
            </tr>
            <tr >
                <td colspan="3" class="text-center">
                    <p>Kartu harap Dibawah Ketika Berobat</p>
                </td>
            </tr>

            </div>
    <script type="text/javascript">
        window.print();
        onafterprint = function () {
            window.location.href = "<?=BASE_URL?>Data_Pasien/index/<?php foreach ($print_kartu as $r) {?><?=$r->nomor?><?php }?>";
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