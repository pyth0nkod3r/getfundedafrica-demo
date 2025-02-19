 <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
      <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25"><?php echo lang('translation.COPYRIGHT © 2024 CIPME, All rights Reserved') ?></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/extensions/wNumb.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/extensions/nouislider.min.js"></script>
    <!--<script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/extensions/toastr.min.js"></script>-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/core/app-menu.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/js/core/app.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
     
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/pages/app-ecommerce.min.js"></script>
   
    <!-- END: Page JS-->

    <script>
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })
    </script>
  </body>
</html>