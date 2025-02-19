<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php if(!empty($page_title)){ echo $page_title; } ?></title>
    <link rel="apple-touch-icon" href="<?php echo base_url('public/assets/app-assets/images/ico/apple-icon-120.html'); ?>">
    <link rel="icon" href="https://getfundedafrica.com/images/fav.png" sizes="16x16" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">


    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/app-assets/vendors/css/vendors.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/app-assets/vendors/css/forms/wizard/bs-stepper.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/vendors/css/forms/select/select2.min.css"); ?>">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/css/bootstrap-extended.min.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/css/colors.min.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/css/components.min.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/css/themes/dark-layout.min.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/css/themes/bordered-layout.min.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/app-assets/css/themes/semi-dark-layout.min.css'); ?>">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/css/core/menu/menu-types/vertical-menu.min.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/css/plugins/forms/form-validation.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/css/pages/authentication.css"); ?>">
    <!-- END: Page CSS-->
    
     <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/css/plugins/forms/pickers/form-flat-pickr.min.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/css/pages/app-calendar.min.css"); ?>">

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/css/pages/style.css"); ?>">
	 <script src="<?php echo base_url("public/assets/app-assets/vendors/js/vendors.min.js"); ?>"></script>
    <!-- END: Custom CSS-->
    
    
    
	<style>
table, th, td {
  border: 1px solid #ececec;
}
</style>
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
  <body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
      <div id="google_translate"></div> 
    <!-- BEGIN: Content-->
     <!--
     <div class="col-lg-1">
     <a class="brand-logo" href="<?php echo base_url(); ?>">
     
      <img src="<?php echo base_url('public/assets/images/gfa-logo.png'); ?>">
    </a>
    </div>-->
    <br><!--
    <div class="col-lg-1">
         <?php //if($this->encrypt->decode($this->session->userdata('email') )!= '' ){   ?>
     <a class="btn btn-primary w-100" href="<?php echo base_url('gfa/signoutAction'); ?>" tabindex="4">logout</a>
    <?php  //}    ?>
     </div>-->
   