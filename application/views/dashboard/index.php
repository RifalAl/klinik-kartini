                </div>
                </div>
            </div>
        </header>
<div class="page-wrapper">
       
<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
    <h2 class="page-title">
                  Dashboard
                </h2>
        <div class="row row-deck row-cards mt-5" >
		            
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Jumlah Pasien Tahun <?php echo date('Y');?></h3>
                        <div id="chart-mentions" class="chart-lg"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                <div class="card-body">
				<h3 class="card-title">Pasien Aktif & Nonaktif</h3>
                    <div id="chart-completion-tasks-10"></div>
                  </div>
                </div>
            </div>
            <div class="col-lg-6">
                
    
        </div>
    </div>
</div>


<!-- script chart -->
<script>
 document.addEventListener("DOMContentLoaded", function () {
  var Data_perbulan = <?php echo json_encode($Data_perbulan); ?>;

  // Mengonversi data_perbulan menjadi array bulan dan jumlah untuk grafik
  var bulan = Data_perbulan.map(data => data.bulan);
  var jumlah = Data_perbulan.map(data => data.jumlah);

  window.ApexCharts && new ApexCharts(document.getElementById('chart-mentions'), {
    chart: {
      type: "bar",
      fontFamily: 'inherit',
      height: 240,
      parentHeightOffset: 0,
      toolbar: {
        show: false,
      },
      animations: {
        enabled: false
      },
      stacked: true,
    },
    plotOptions: {
      bar: {
        columnWidth: '50%',
      }
    },
    dataLabels: {
      enabled: false,
    },
    fill: {
      opacity: 1,
    },
    series: [{
      name: "Jumlah Pasien",
      data: jumlah
    }],
    tooltip: {
      theme: 'dark'
    },
    grid: {
      padding: {
        top: -20,
        right: 0,
        left: -4,
        bottom: -4
      },
      strokeDashArray: 4,
      xaxis: {
        lines: {
          show: true
        }
      },
    },
    xaxis: {
      categories: bulan.map(month => getMonthName(month)),
      labels: {
        padding: 0,
      },
      tooltip: {
        enabled: false
      },
      axisBorder: {
        show: false,
      },
    },
    yaxis: {
      labels: {
        padding: 4
      },
	//   forceNiceScale: true, 
	  decimalsInFloat: false,
    },
    colors: ["#79e263"], // Warna batang grafik
    legend: {
      show: false,
    },
  }).render();

  // Fungsi untuk mendapatkan nama bulan dari indeks bulan (1-12)
  function getMonthName(index) {
    const monthNames = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agust", "Sep", "Okt", "Nov", "Des"];
    return monthNames[index - 1];
  }
});
</script>



<script>
  document.addEventListener("DOMContentLoaded", function () {
    var Data_pertahun = <?php echo json_encode($Data_pertahun); ?>;

    // Data untuk sumbu x (tahun)
    var xLabels = Data_pertahun.map(data => data.tahun.toString());

    // Data untuk grafik
    var seriesDataAktif = Data_pertahun.map(data => data.Aktif);
    var seriesDataNonaktif = Data_pertahun.map(data => data.Nonaktif);

    window.ApexCharts && (new ApexCharts(document.getElementById('chart-completion-tasks-10'), {
      chart: {
        type: "area",
        fontFamily: 'inherit',
        height: 240,
        parentHeightOffset: 0,
        toolbar: {
          show: false,
        },
        animations: {
          enabled: false
        },
      },
      dataLabels: {
        enabled: false,
      },
      fill: {
        opacity: .16,
        type: 'solid'
      },
      stroke: {
        width: 2,
        lineCap: "round",
        curve: "smooth",
      },
      series: [{
        name: "Aktif",
        data: seriesDataAktif
      }, {
        name: "Nonaktif",
        data: seriesDataNonaktif
      }],
      tooltip: {
        theme: 'dark'
      },
      grid: {
        padding: {
          top: -20,
          right: 0,
          left: -4,
          bottom: -4
        },
        strokeDashArray: 4,
      },
      xaxis: {
        categories: xLabels,
        labels: {
          padding: 0,
        },
        tooltip: {
          enabled: false
        },
        axisBorder: {
          show: false,
        },
      },
      yaxis: {
        labels: {
          padding: 4
        },
        decimalsInFloat: false,
      },
      colors: ["#79e263", "#f2212f"],
      legend: {
        show: true,
        position: 'bottom',
        horizontalAlign: 'center',
        fontSize: '14px',
        labels: {
          colors: '#000',
          useSeriesColors: false
        },
        markers: {
          width: 12,
          height: 12,
          radius: 0
        },
        itemMargin: {
          horizontal: 10,
          vertical: 5
        }
      },
    })).render();
  });
</script>
