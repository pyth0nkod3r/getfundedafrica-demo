
<!DOCTYPE html>

<html class="loading bordered-layout" lang="en" data-layout="bordered-layout" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php if(!empty($page_title)){ echo $page_title; } ?></title>
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/app-assets/images/ico/apple--icon-120.html">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
<!-- BEGIN: Vendor CSS-->
        <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/forms/select/select2.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/themes/bordered-layout.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/themes/semi-dark-layout.min.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/plugins/forms/pickers/form-flat-pickr.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/pages/app-invoice.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/css/style.css">
    <!-- END: Custom CSS-->
     <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/vendors.min.js"></script>
      <!-- BEGIN: Page CSS-->
   
    <!-- END: Page CSS-->
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en', // Set the default language to English
                includedLanguages: 'fr', // Specify the target language as French
                autoDisplay: false
            }, 'google_translate');
            
            // Automatically select French as the target language
            var selectElement = document.querySelector(".goog-te-combo");
            if (selectElement) {
                selectElement.value = "fr";
                selectElement.dispatchEvent(new Event("change"));
            }
        }

        // Automatically trigger the translation on page load
        window.addEventListener('load', function() {
            googleTranslateElementInit();
        });
    </script>
<style>
body > .skiptranslate {
    //display: none;
}

.goog-te-banner-frame.skiptranslate {
    display: none !important;
    } 
body {
    top: 0px !important; 
    }

@media print {
  #google_translate {display: none;}
}
</style>
    

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->