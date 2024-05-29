
<footer class="footer footer-transparent d-print-none">
          <div class="container">
           
                <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item">
                    Copyright &copy; 2024
                    <a href="." class="link-secondary">Klinik Kartini Farma</a>.
                    All rights reserved.
                  </li>
                </ul>
              
          </div>
        </footer>
      </div>
    </div>

    
    
      
            
    <!-- Libs JS -->
    <script src="<?=base_url('asset/dist/libs/tinymce/tinymce.min.js?1684106062')?>" defer></script>
    <script src="<?=base_url('asset/dist/libs/apexcharts/dist/apexcharts.min.js?1684106062')?>" defer></script>
    <script src="<?=base_url('asset/dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1684106062')?>" defer></script>
    <script src="<?=base_url('asset/dist/libs/jsvectormap/dist/maps/world.js?1684106062')?>" defer></script>
    <script src="<?=base_url('asset/dist/libs/jsvectormap/dist/maps/world-merc.js?1684106062')?>" defer></script>
    <!-- Tabler Core -->
    <script src="<?=base_url('asset/dist/js/tabler.min.js?1684106062')?>" defer></script>
    <script src="<?=base_url('asset/dist/js/demo.min.js?1684106062')?>" defer></script>

    <!--  -->
    <script src="<?=base_url('asset/dist/libs/nouislider/dist/nouislider.min.js?1684106062')?>" defer></script>
    <script src="<?=base_url('asset/dist/libs/litepicker/dist/litepicker.js?1684106062')?>" defer></script>
    <script src="<?=base_url('asset/dist/libs/tom-select/dist/js/tom-select.base.min.js?1684106062')?>" defer></script>
   <!-- cdn sweetalert -->
   <script src="<?=base_url('asset/dist/js/pagination.min.js')?>" defer></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->

  <!-- <script src="<?= BASE_URL?>asset/dist/libs/datatable/datatables.min.css"></script> -->
  <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>

  <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
        let options = {
          selector: '#tinymce-mytextarea',
          height: 300,
          menubar: false,
          statusbar: false,
          plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount'
          ],
          toolbar: 'undo redo | formatselect | ' +
            'bold italic backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat',
          content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif; font-size: 14px; -webkit-font-smoothing: antialiased; }'
        }
        if (localStorage.getItem("tablerTheme") === 'dark') {
          options.skin = 'oxide-dark';
          options.content_css = 'dark';
        }
        tinyMCE.init(options);
      })
      // @formatter:on
    </script>
  </body>
</html>