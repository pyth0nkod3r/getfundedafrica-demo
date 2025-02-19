<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $this->admin_model = model('App\Models\AdminModel');
   ?>

<div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">
          <section class="app-user-view-connections">
  <div class="row">
    <!-- User Sidebar -->
    <div class="col-xl-6 col-lg-7 col-md-7 order-1 order-md-0">
      <!-- User Card -->
      <div class="card">
        <div class="card-body">
          <div class="user-avatar-section">
          <?php	
                //$startupArray = $this->admin_model->getAllStartUpNByEmail($email);
                
               $row = $this->admin_model->getAllStartUpNById($id); 
			    $rowArray = $this->admin_model->getAllStartUpNByEmailExtX($row[0]['Contact_Email']); 	
				//foreach($row as $rowArray){  
                
                ?> 
            <div class="d-flex align-items-center flex-column">
              <img
                class="img-fluid rounded mt-3 mb-2"
                src="<?php echo base_url(); ?>public/assets/images/uploads/default-avatar.jpg"
                height="110"
                width="110"
                alt="User avatar"
              />
              <div class="user-info text-center">
                <h4><?php echo $row[0]['Primary_Contact_Name']; ?></h4>
                <span class="badge bg-light-secondary"><?php echo $row[0]['Startup_Company_Name']; ?></span>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-around my-2 pt-75">
            <div class="d-flex align-items-start me-2">
              <span class="badge bg-light-primary p-75 rounded">
                <i data-feather="briefcase" class="font-medium-2"></i>
              </span>
              <div class="ms-75">
                <h4 class="mb-0"><?php if($row[0]['Next_Funding_Round_Target_Sought']=='0' || $row[0]['Next_Funding_Round_Target_Sought']==''){ echo 0; }else{ echo $row[0]['Next_Funding_Round_Target_Sought'] ;} ?> XOF</h4>
                <small><?php echo lang('translation.Amount to raise') ?></small>
              </div>
            </div>
            <div class="d-flex align-items-start">
              <span class="badge bg-light-primary p-75 rounded">
                <i data-feather="users" class="font-medium-2"></i>
              </span>
              <div class="ms-75">
                <h4 class="mb-0"><?php echo $this->gfa_model->countAllConnByEmail($row[0]['Contact_Email'])[0]['email_count'];  ?></h4>
                <small><?php echo lang('translation.Connection') ?></small>
              </div>
            </div>
          </div>
          <h4 class="fw-bolder border-bottom pb-50 mb-1"><?php echo lang('translation.Details') ?></h4>
          <div class="info-container">
            <ul class="list-unstyled">
            <li class="mb-75">
                <span class="fw-bolder me-25"> <?php echo lang('translation.Email') ?>:</span>
                <span><?php echo $row[0]['Contact_Email']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25"> <?php echo lang('translation.Address') ?>:</span>
                <span><?php echo $row[0]['CountryHQ']; ?></span>
              </li>
               <li class="mb-75">
                <span class="fw-bolder me-25"> <?php echo lang('translation.Company Category') ?>:</span>
                <span><?php echo lang("translation.{$row[0]['PrimaryBusinessIndustry']}"); ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25"><?php echo lang('translation.Status') ?>:</span>
                <span class="badge bg-light-success"><?php echo lang('translation.Active') ?></span>
              </li>
              
               <li class="mb-75">
                <span class="fw-bolder me-25"><?php echo lang('translation.Phone') ?>:</span>
                <span><?php echo $row[0]['Phones']; ?></span>
              </li>
              
              <li class="mb-75">
                <span class="fw-bolder me-25"><?php echo lang('translation.Business Model') ?>:</span>
                <span><?php echo lang("translation.{$rowArray[0]['Startup_Model']}"); ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25"><?php echo lang('translation.Business Solution') ?>:</span>
                <span><?php echo lang("translation.{$rowArray[0]['Solution_Corperate']}"); ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25"><?php echo lang('translation.Core Interest Corporate') ?></span>
                <span><?php echo lang("translation.{$rowArray[0]['Core_Interest_Corporate']}"); ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25"><?php echo lang('translation.Solution Ownership') ?></span>
                <span><?php echo lang("translation.{$rowArray[0]['Solution_Ownership']}"); ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">LinkedIn:</span>
                <span><?php echo $row[0]['LinkedIn']; ?></span>
              </li>
            </ul>
            <div class="demo-inline-spacing justify-content-center">
          
            <button type="button" class="btn btn-primary btn-sm" data-bs-target="#checkProfile" data-bs-toggle="modal" actionMsg="Schedule a call"><?php echo lang("translation.Schedule a call") ?></button>
            <a href="<?php echo base_url(); ?>calendar/index" class="btn btn-secondary btn-sm" actionMsg="Schedule meeting"><?php echo lang('translation.Schedule meeting') ?></a>
            <a href="<?php echo base_url(); ?>chat/index" class="btn btn-success btn-sm" actionMsg="Chat"><?php echo lang('translation.Chat') ?></a>
            
            <button type="button" class="btn btn-dark btn-sm" data-bs-target="#referEarnModal" data-bs-toggle="modal" actionMsg="invest"><?php echo lang("translation.Invest") ?></button>

            </div>
          </div>
        </div>
      </div>
      <!-- /User Card -->
      <!-- Plan Card -->
      <!-- <div class="card border-primary">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-start">
            <span class="badge bg-light-primary">Standard</span>
            <div class="d-flex justify-content-center">
              <sup class="h5 pricing-currency text-primary mt-1 mb-0">$</sup>
              <span class="fw-bolder display-5 mb-0 text-primary">99</span>
              <sub class="pricing-duration font-small-4 ms-25 mt-auto mb-2">/month</sub>
            </div>
          </div>
          <ul class="ps-1 mb-2">
            <li class="mb-50">10 Users</li>
            <li class="mb-50">Up to 10 GB storage</li>
            <li>Basic Support</li>
          </ul>
          <div class="d-flex justify-content-between align-items-center fw-bolder mb-50">
            <span>Days</span>
            <span>4 of 30 Days</span>
          </div>
          <div class="progress mb-50" style="height: 8px">
            <div
              class="progress-bar"
              role="progressbar"
              style="width: 80%"
              aria-valuenow="65"
              aria-valuemax="100"
              aria-valuemin="80"
            ></div>
          </div>
          <span>4 days remaining</span>
          <div class="d-grid w-100 mt-2">
            <button class="btn btn-primary" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">
              Upgrade Plan
            </button>
          </div>
        </div>
      </div> -->
      <!-- /Plan Card -->
    </div>
    <!--/ User Sidebar -->

    <!-- User Content -->
    <div class="col-xl-6 col-lg-5 col-md-5 order-0 order-md-1">
      <!-- User Pills -->
      <ul class="nav nav-pills mb-2">
        <li class="nav-item">
          <a class="nav-link" href="app-user-view-account.html">
            <i data-feather="user" class="font-medium-3 me-50"></i>
            <span class="fw-bold"><?php echo lang("translation.Profile Details") ?></span></a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" href="<?php echo base_url(); ?>gfa/investor_deals/">
            <i data-feather="link" class="font-medium-3 me-50"></i><span class="fw-bold"><?php echo lang("translation.Connections") ?></span>
          </a>
        </li>
      </ul>
      <!--/ User Pills -->

      <!-- connection -->
      <div class="card">
        <div class="card-body">
          <h4 class="card-title mb-75"><?php echo lang('translation.About the Company') ?></h4>
          <p></p>

          <!-- Connections -->
          <div class="d-flex mt-2">
            <div class="flex-shrink-0">
              
            </div>
            <div class="d-flex align-item-center justify-content-between flex-grow-1">
              <div class="me-1">
                <p class="fw-bolder mb-0"><?php echo lang('translation.About the Startup') ?></p>
                <span><?php echo $row[0]['About_Me']; ?></span>
              </div>
              <!-- <div class="mt-50 mt-sm-0">
                <div class="form-check form-switch form-check-primary">
                  <input type="checkbox" class="form-check-input" id="checkboxGoogle" checked />
                  <label class="form-check-label" for="checkboxGoogle">
                    <span class="switch-icon-left"><i data-feather="check"></i></span>
                    <span class="switch-icon-right"><i data-feather="x"></i></span>
                  </label>
                </div>
              </div> -->
            </div>
          </div>
          <div class="d-flex mt-2">
             <div class="flex-shrink-0">
              <!--<img
                src="../../../app-assets/images/icons/social/slack.png"
                alt="slack"
                class="me-1"
                height="38"
                width="38"
              /> -->
            </div>
            <div class="d-flex align-item-center justify-content-between flex-grow-1">
              <div class="me-1">
                <p class="fw-bolder mb-0"><?php echo lang('translation.Revenue') ?></p>
                <span><?php echo $row[0]['Revenue']; ?> XOF</span>
              </div>
              <!-- <div class="mt-50 mt-sm-0">
                <div class="form-check form-switch form-check-primary">
                  <input type="checkbox" class="form-check-input" id="checkboxSlack" />
                  <label class="form-check-label" for="checkboxSlack">
                    <span class="switch-icon-left"><i data-feather="check"></i></span>
                    <span class="switch-icon-right"><i data-feather="x"></i></span>
                  </label>
                </div>
              </div> -->
            </div>
          </div>
          <div class="d-flex mt-2">
            <div class="flex-shrink-0">
              <!-- <img
                src="../../../app-assets/images/icons/social/github.png"
                alt="github"
                class="me-1"
                height="38"
                width="38"
              /> -->
            </div>
            <div class="d-flex align-item-center justify-content-between flex-grow-1">
              <div class="me-1">
                <p class="fw-bolder mb-0"><?php echo lang('translation.Current Investment Stage') ?></p>
                <span><?php echo lang("translation.{$row[0]['CurrentInvestmentStage']}"); ?></span>
              </div>
              
            </div>
          </div>
           <div class="d-flex mt-2">
            <div class="flex-shrink-0">
              <!-- <img
                src="../../../app-assets/images/icons/social/mailchimp.png"
                alt="mailchimp"
                class="me-1"
                height="38"
                width="38"
              /> -->
            </div>
            <div class="d-flex align-item-center justify-content-between flex-grow-1">
              <div class="me-1">
                <p class="fw-bolder mb-0"><?php echo lang('translation.Implementation Stage') ?></p>
                <span><?php echo lang("translation.{$row[0]['Startup_Implementation_Stage']}"); ?></span>
              </div>
              
            </div>
          </div>
          <div class="d-flex mt-2">
             <div class="flex-shrink-0">
              <!--<img
                src="../../../app-assets/images/icons/social/asana.png"
                alt="asana"
                class="me-1"
                height="38"
                width="38"
              />-->
            </div> 
            <div class="d-flex align-item-center justify-content-between flex-grow-1">
              <div class="me-1">
                <p class="fw-bolder mb-0"><?php echo lang('translation.Website') ?></p>
                <span><?php echo $row[0]['Website']; ?></span>
              </div>
              <!-- <div class="mt-50 mt-sm-0">
                <div class="form-check form-switch form-check-primary">
                  <input type="checkbox" class="form-check-input" id="checkboxAsana" />
                  <label class="form-check-label" for="checkboxAsana">
                    <span class="switch-icon-left"><i data-feather="check"></i></span>
                    <span class="switch-icon-right"><i data-feather="x"></i></span>
                  </label>
                </div>
              </div> -->
            </div>
          </div>
          <!-- /Connections -->
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <h4 class="card-title mb-75"><?php echo lang('translation.Deal Room Files') ?></h4>
          <p></p>
          <!-- Social Accounts -->
          <?php 
			        $n = 1;
			     $row = $this->admin_model->getRecentFileUploadedXByEmail($row[0]['Contact_Email']);
                 if(!empty($row)){
				foreach($row as $rowArray){ 
				    $personalDetails =  $this->admin_model->getAllStartUpNByEmail($rowArray['Email']);
					if($rowArray['Title'] !=''){
				
				?>

<?php  $file = explode('.', $rowArray['File']); 
            $fileExt = $file[1];
            ?>
          <div class="d-flex mt-2">
            <div class="flex-shrink-0">
            <?php        
            if($fileExt=='ppt' || $fileExt=='pptx' ){
            ?>
              <img
                src="<?php echo base_url(); ?>assets/images/icons/powerpoint-icon.png" alt="file-icon"
                class="me-1"
                height="38"
                width="38"
              />
              <?php }  ?>
             <?php  if($fileExt=='pdf'){
            ?>
            <img src="<?php echo base_url(); ?>assets/images/icons/pdf.png" alt="file-icon" height="38"
                width="38" />  
            
        <?php }  ?>
        <?php         
            if($fileExt=='txt'){
            ?>
            <img src="<?php echo base_url(); ?>assets/images/icons/txt.png" alt="file-icon" height="38"
                width="38" />  
            
        <?php }  ?>
        
        
        <?php
       
            if($fileExt=='csv' || $fileExt=='xls' ||  $fileExt=='xlsx' ){
            ?>
            <img src="<?php echo base_url(); ?>assets/images/icons/xls.png" alt="file-icon" height="38"
                width="38" />
            
        <?php }  ?>
        
        
        <?php
       
            if($fileExt=='png' || $fileExt=='jpeg' ||  $fileExt=='jpg' ){
            ?>
            <img src="<?php echo base_url(); ?>assets/images/icons/jpg.png" alt="file-icon" height="38"
                width="38" />
            
        <?php }  ?>
        
         <?php
       
            if($fileExt=='doc' ||  $fileExt=='docx' || $fileExt=='DOC' ||  $fileExt=='DOCX' ){
            ?>
            <img src="<?php echo base_url(); ?>assets/images/icons/word-icon.png" alt="file-icon" height="38"
                width="38" />  
            
        <?php }  ?>
        
        <?php
            
            if($fileExt=='mp4' || $fileExt=='mpg' ||  $fileExt=='mov' || $fileExt=='mpe' || $fileExt=='avi' ||  $fileExt=='movie'){
            ?>
            <img src="<?php echo base_url(); ?>assets/images/icons/video-icon.png" alt="file-icon" height="38"
                width="38" />
            
        <?php }  ?>
        
        <?php
       
            if($fileExt=='mp2' ||  $fileExt=='mp3' ){
            ?>
            <img src="<?php echo base_url(); ?>assets/images/icons/sound-icon.png" alt="file-icon" height="38"
                width="38" /> 
            
        <?php }  ?>
            </div>
            <div class="d-flex justify-content-between flex-grow-1">
              <div class="me-1">
                <p class="fw-bolder mb-0"><?php echo $rowArray['Title']; ?></p>
                <span><?php echo $rowArray['File_Desc']; ?></span>
              </div>
              <div class="mt-50 mt-sm-0">
                <a href="#" class="btn btn-icon btn-outline-secondary">
                  <i data-feather="link" class="font-medium-3"></i>
                  <!-- https://getfundedafrica.com/portal/uploads/files/<?php //echo $rowArray['File']; ?> -->
            </a>
              </div>
            </div>
          </div>
         
          <?php }}}else{ echo lang('translation.No files uploaded yet');}  ?>
          
          
          <!-- /Social Accounts -->
        </div>
      </div>
      <div class="demo-inline-spacing justify-content-center">
          
            
            <button type="button" class="btn btn-warning" data-bs-target="#checkDealRoom" data-bs-toggle="modal" actionMsg="Dealroom Request"><?php echo lang('translation.DealRoom Request') ?></button>

            </div>
      <!--/ connection -->
    </div>
    <!--/ User Content -->
    <div class="modal fade" id="checkDealRoom" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-edit-user">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-5 pt-50">
        <div class="text-center mb-2">
         <span><i data-feather="users" class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span><h1 class="mb-1"><?php echo lang('translation.Dealroom Request') ?></h1>
          
         <form action="#" id="#EventForm" class="form EventFormDealRoom" enctype="multipart/form-data">
            <div class="row">
            

              <div class="col-12">
                  <input type="hidden" name="id" class="form-control" value="<?php echo $id ?>" />
                <div class="mb-2">
                  <input type="text" name="subject" class="form-control"  placeholder="<?php echo lang('translation.Subject of the message') ?>" />
                </div>
              </div>
              
              <div class="col-12">
                <textarea class="form-control mb-2" name="more_info" required rows="4" placeholder="<?php echo lang('translation.More information') ?>"></textarea>
              </div>
             
              <div class="col-12">
                <button type="submit" class="btn btn-primary EventBtnDealRoom"><?php echo lang('translation.Submit') ?></button><span class="displayActionDealRoom"></span>
              </div>
            </div>
          </form>
     
      </div>
      
    </div>
  </div>
</div>
  </div>
</section>
          <!-- Edit User Modal -->
        
          <div class="modal fade" id="referEarnModal" tabindex="-1" aria-labelledby="referEarnTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-0">
        <div class="px-sm-4 mx-50">
          <h1 class="text-center mb-1" id="referEarnTitle"><?php echo lang('translation.Please select how you want to invest') ?></h1>
          <!--<p class="text-center mb-5">-->
          <!--  Invite your friend to vuexy, if thay sign up, you and-->
          <!--  <br />-->
          <!--  your friend will get 30 days free trial-->
          <!--</p>-->

          <div class="row mb-6">
            <div class="col-12 col-lg-4">
              <a href="#" class="invest" data-bs-target="#editUserFile" data-bs-toggle="modal" investType="Co-Investment"><div class="d-flex justify-content-center mb-1">
                <div
                  class="
                    modal-refer-earn-step
                    d-flex
                    width-100
                    height-100
                    rounded-circle
                    justify-content-center
                    align-items-center
                    bg-light-primary
                  "
                >
                  <i data-feather="user-plus"></i>
                </div>
              </div>
              <div class="text-center">
                <h6 class="fw-bolder mb-1"><?php echo lang('translation.Co-Investment') ?></h6>
                <span id="myButton1" title="Select this option, if you would like to co-invest on a chosen deal available on CIPME platform with another fund. CIPME is not the lead in this deal. You liaise directly with the selected funds that you want to work with on investment terms."><?php echo lang('translation.More info') ?></span>

              </div></a>
            </div>
            <div class="col-12 col-lg-4">
              <a href="<?php echo base_url(); ?>gfa/syndicate/<?php echo $id ?>" target="_self"><div class="d-flex justify-content-center mb-1">
                <div
                  class="
                    modal-refer-earn-step
                    d-flex
                    width-100
                    height-100
                    rounded-circle
                    justify-content-center
                    align-items-center
                    bg-light-primary
                  "
                >
                  <i data-feather="users"></i>
                </div>
              </div>
              <div class="text-center">
                <h6 class="fw-bolder mb-1"><?php echo lang('translation.CIPME Syndicate') ?></h6>
                <span id="myButton2" title="<?php echo lang("translation.CIPME Syndicates and Rolling Funds - Select this option, if you would like to explore GFA's syndicate deals and different types of rolling funds. CIPME is the lead investor in these selected deals.") ?>
*<?php echo lang("translation.Note: A syndicate is where a group of investors pools their resources together to invest in a single deal.") ?>
*<?php echo lang("translation.Note: Rolling fund is a type of fund that operates on a quarterly subscription model, allowing investors to make ongoing commitments rather than one-time investments.") ?>"><?php echo lang('translation.More info') ?></span>

              </div></a>
            </div>
            <div class="col-12 col-lg-4">
              <a href="#" class="invest" data-bs-target="#editUserFile" data-bs-toggle="modal" investType="Direct Investment"><div class="d-flex justify-content-center mb-1">
                <div
                  class="
                    modal-refer-earn-step
                    d-flex
                    width-100
                    height-100
                    rounded-circle
                    justify-content-center
                    align-items-center
                    bg-light-primary
                  "
                >
                  <i data-feather="grid"></i>
                </div>
              </div>
              <div class="text-center">
                <h6 class="fw-bolder mb-1"><?php echo lang('translation.Direct Investment') ?></h6>
                <span id="myButton" title="<?php echo lang('translation.Select this option if you want to invest in this deal without any lead investor you liaise directly with the startup on investment terms.') ?>"><?php echo lang('translation.More info') ?></span>

                <!--<p>Your friend will get 30 days free trial</p>-->
              </div></a>
              
            
             <!-- <div class="col-12 col-lg-3">
              <a href="#" class="invest" data-bs-target="#editUserFile" data-bs-toggle="modal" investType="Venture Debt"><div class="d-flex justify-content-center mb-1">
                <div
                  class="
                    modal-refer-earn-step
                    d-flex
                    width-100
                    height-100
                    rounded-circle
                    justify-content-center
                    align-items-center
                    bg-light-primary
                  "
                >
                  <i data-feather="book-open"></i>
                </div>
              </div>
              <div class="text-center">
                <h6 class="fw-bolder mb-1">Venture Debt</h6>
                <p>Your friend will get 30 days free trial</p>-->
              </div></a>
            </div> 
          </div>
        </div>

        <hr />

       
      </div>
    </div>
  </div>
</div>
<!--/ Edit User Modal -->
<div class="modal fade" id="editUserFile" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-edit-user modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-5 pt-50">
      <?php   
            $investorFile = $this->admin_model->getInvestorsFileUploadedByEmail($email); ?>
        <div class="text-center mb-2">
         <span><i data-feather="users" class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span><h1 class="mb-1 showInvest">Verification</h1>
         <?php if(empty($investorFile[0]['photo']) || empty($investorFile[0]['ids']) || empty($investorFile[0]['address'])){  ?>
         <h5 class="kycText"><?php echo lang('translation.We need to you more before investing.') ?></h5>
         <?php  }  ?>
         <form action="#" id="#EventFormFile" class="form EventFormFile" enctype="multipart/form-data">
            <div class="row">
        <div class="kyc">
            <?php  
             
            if(empty($investorFile[0]['photo'])){
            ?>
            
              <div class="col-12">
                  <label><?php echo lang('translation.Upload Photo') ?> </label>
                <div class="mb-2">
                  <input type="file" name="file[]" class="form-control" required placeholder="Upload your photo" />
                </div>
              </div>
              
            <?php }else{ echo ''; } ?>
              <input type="hidden" name="id" class="form-control" value="<?php echo $id ?>" />
              
              <?php  if(empty($investorFile[0]['ids'])){  ?>
              <div class="col-12">
                  <label><?php echo lang('translation.Upload ID') ?></label>
                <div class="mb-2">
                  <input type="file" name="file[]" class="form-control" required placeholder="Upload your IDs" />
                </div>
              </div>
              <?php  }else{ echo '';  }  ?>
             <?php  if(empty($investorFile[0]['address'])){  ?> 
              <div class="col-12">
                  <label><?php echo lang('translation.Upload Proof of Address') ?></label>
                <div class="mb-2">
                  <input type="file" name="file[]" class="form-control" required placeholder="Upload Proof of Address" />
                </div>
              </div>
              <?php  }else{ echo '';  }  ?>
              
              </div>
        <div class="col-12">
        <?php if(empty($investorFile[0]['photo']) || empty($investorFile[0]['ids']) || empty($investorFile[0]['address'])){  ?>

                <button class="btn btn-primary float-end mt-3 btnNext"><?php echo lang('translation.Next') ?></button>
                <?php  }  ?>
                <!-- <button  class="btn btn-primary" data-bs-target="#editUser" data-bs-toggle="modal">Discuss further with GFA</button> -->
                <p class="displayActionFile"></p>
              </div>
              <div class="investDisplay" <?php if(empty($investorFile[0]['photo']) || empty($investorFile[0]['ids']) || empty($investorFile[0]['address'])){  ?>
 style="display:none;" <?php }  ?>>
              <div class="col-12">
                  
                <div class="mb-2">
                  <input type="number" name="amount" class="form-control" required placeholder="<?php echo lang('translation.Amount to Invest in') ?> $" />
                </div>
              </div>
              <div class="col-md-12 hideDirectInvest">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"><?php echo lang('translation.Invite other Investors') ?></h4>
        </div>
        <div class="card-body">
         
          <div class="row">
          
            <div class="col-xl-5 col-md-6 col-12">
              <div class="mb-1">
                <label class="form-label" for="helpInputTop"><?php echo lang('translation.Select Investors') ?></label>
                
                <select class="form-select" name="gfa_investor[]" >

                <option></option> 
			      <?php	$rowInvestor = $this->admin_model->getAllInvestorInorder();  foreach($rowInvestor as $rowInvestorArray){  
              
              if($rowInvestorArray["Investor_Name"]==''){ echo '';}else{
              ?>

                  <option value="<?php echo $rowInvestorArray['Contact_Email'] ?>"><?php echo $rowInvestorArray["Contact_Name"] ?>[<?php echo $rowInvestorArray["Investor_Name"] ?>]</option>
                  <?php } }  ?>
              </select>
              </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12">
              <div class="mb-1">
                <label class="form-label" for="basicInput"><?php echo lang('translation.Other Investor via email') ?></label>
            <input type="text" class="form-control fund_to_raise" id="accountAddress" name="other_investor[]" placeholder="" />

              </div>
            </div>
           
            
            
            <div class="col-xl-3 col-md-6 col-12">
              <div class="mb-1">
                <label class="form-label" for="helperText"><?php echo lang("translation.Amount to Invest (USD)") ?></label>
                <input type="number" class="form-control fund_to_raise" id="accountAddress" name="fund[]" placeholder=""  />

                
              </div>
            </div>
            
             <span class="display"></span>
          </div>
        
        </div>
             
      </div>
    </div>
              
              <div class="col-12">
                <textarea class="form-control mb-2 showMore" name="more_info" required rows="4" placeholder="More infomation"></textarea>
              </div>
             <input type="hidden" class="getinvest" name="invest_type" />
             </div>
              <div class="col-12" >
              <button type="submit" class="btn btn-primary EventBtnFile float-end mt-3 me-sm-2 mb-2 investBtn" <?php if(empty($investorFile[0]['photo']) || empty($investorFile[0]['ids']) || empty($investorFile[0]['address'])){  ?>
 style="display:none;" <?php }  ?>><?php echo lang('translation.Submit') ?></button>
              <button class="btn btn-secondary float-end mt-3 me-sm-2 mb-2 mb-sm-0 btnPrev investBtn2" style="display:none"><?php echo lang('translation.Previous') ?></button>
                <!-- <button  class="btn btn-primary" data-bs-target="#editUser" data-bs-toggle="modal">Discuss further with GFA</button> -->
                <p class="displayActionFile"></p>
              </div>
            </div>
          </form>
     
      </div>
      
    </div>
  </div>
</div>

<script>

$(document).ready(function() {
  $("#myButton").tooltip();
  $("#myButton1").tooltip();
  $("#myButton2").tooltip();
});
      $(function(){

        $('.btnNext').click(function(e){
          e.preventDefault();
          $(this).hide();
          $('.kycText').hide();
          $('.kyc').hide();
          $('.investDisplay').show();
          $('.investBtn').show();
          $('.investBtn2').show();
         
        });
        $('.btnPrev').click(function(e){
          e.preventDefault();
          $('.kycText').show();
          $('.kyc').show();
          $('.btnNext').show();
          $('.investDisplay').hide();
          $('.investBtn').hide();
           $('.investBtn2').hide();
        });
          
    $(".invest").click(function(){
            
     var getInvest = $(this).attr('investType'); //hideDirectInvest
     $('.getinvest').val(getInvest);
    $('.showInvest').html(getInvest);
    $('.showMore').attr('placeholder','More information on '+getInvest);

    if(getInvest == "Direct Investment"){
      $('.hideDirectInvest').hide(); 
    }else{
      $('.hideDirectInvest').show();
    }
        
    });      
          
          
           $(".EventFormFile").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
	//$(".saveFile3").html('Finish Uploading');
    var form = $(this)[0];
        var formData = new FormData(form);
      
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/verifyInvestor",
	 error:function() {$(".displayAction").html('Error')},
	 beforeSend:function() {$(".displayActionFile").html('Sending...'); $(".EventBtnFile").prop('disabled', true);},
	 processData: false,
    contentType: false,
      success: function(data) {
        
	 $(".displayActionFile").html(data);  
	   //$(".saveBtn").html(data); 
		 $(".EventBtnFile").prop('disabled', true);

      }
    });
    return false;

  });
         
          
          
      });  
    </script>
        </div>

          <!-- upgrade your plan Modal -->
<div class="modal fade" id="checkProfile" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-edit-user">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-5 pt-50">
        <div class="text-center mb-2">
         <span><i data-feather="users" class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span><h1 class="mb-1"><?php echo lang('translation.Schedule a call') ?></h1>
          
         <form action="#" id="#EventForm" class="form EventForm" enctype="multipart/form-data">
            <div class="row">
            <div class="col-md-12 mb-1">
                <select class="form-select"  name="subject_ext" >

                <option value=""><?php echo lang('translation.Subject') ?></option> 
                <option value="Yearly Revenue"><?php echo lang('translation.Yearly Revenue') ?></option>
                <option value="Request for a Partnership">Sollicitation pour un partenariat</option>
                <option value="Request for Experience Sharing">Sollicitation pour un partage d’expérience</option>
                <option value="Request for Coaching/Mentorship">Sollicitation pour un coaching/Mentorat</option>
                <option value="Pitch Presentation">Présentation de pitch</option>
              </select>
              </div>
              <div class="col-12">
                  <input type="hidden" name="id" class="form-control" value="<?php echo $id ?>" />
                <div class="mb-2">
                  <input type="text" name="subject" class="form-control" placeholder="<?php echo lang('translation.Other subject required') ?>" />
                </div>
              </div>
              
            <div class="col-md-12 mb-1">
          <!--<label class="form-label" for="fp-date-time"></label>-->
          <input
            type="text"
            id="fp-date-time"
            class="form-control flatpickr-date-time"
            name="date_time"
            placeholder="Date/Time [YYYY-MM-DD HH:MM]"
          />
        </div>

        <div class="col-md-12 mb-1">
                <select class="form-select"  name="time_zone" >

                <option value=""><?php echo lang('translation.Time Zone') ?></option> 
                <option value="WAT">WAT</option>
                <option value="EAT">EAT</option>
                <option value="EAT">EAT</option>
                <option value="AST">AST</option>
                <option value="EST">EST</option> 
                <option value="WET">WET</option>
                <option value="ADT">ADT</option>
              </select>
              </div>

        <div class="col-12">
                  
                <div class="mb-2">
                  <input type="text" name="meeting_link" class="form-control" placeholder="<?php echo lang('translation.Meting link if available e.g zoom, teams, meet etc') ?>" />
                </div>
              </div>
        
              <div class="col-12">
                <textarea class="form-control mb-2" name="more_info" required rows="4" placeholder="<?php echo lang('translation.More information') ?>"></textarea>
              </div>
             
              <div class="col-12">
                <button type="submit" class="btn btn-primary EventBtn"><?php echo lang('translation.Submit') ?></button><br><span class="displayAction"></span>
              </div>
            </div>
          </form>
     
      </div>
      
    </div>
  </div>
</div>

<script>
      $(function(){
          
        // DealRoom
        $(".EventFormDealRoom").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
	//$(".saveFile3").html('Finish Uploading');
    var form = $(this)[0];
        var formData = new FormData(form);
      
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/requestdealroom",
	 error:function() {$(".displayActionDealRoom").html('Error')},
	 beforeSend:function() {$(".displayActionDealRoom").html('Requesting...'); $(".EventBtnDealRoom").prop('disabled', true);},
	 processData: false,
    contentType: false,
      success: function(data) {
        
	 $(".displayActionDealRoom").html(data);  
	   //$(".saveBtn").html(data); 
     $(".EventBtnDealRoom").html('Pending Request');
		 $(".EventBtnDealRoom").prop('disabled', true);

      }
    });
    return false;

  });
          
           $(".EventForm").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
	//$(".saveFile3").html('Finish Uploading');
    var form = $(this)[0];
        var formData = new FormData(form);
      
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/callstartup",
	 error:function() {$(".displayAction").html('Error')},
	 beforeSend:function() {$(".displayAction").html('Sending...'); $(".EventBtn").prop('disabled', true);},
	 processData: false,
    contentType: false,
      success: function(data) {
        
	 $(".displayAction").html(data);  
	   //$(".saveBtn").html(data); 
		 $(".EventBtn").prop('disabled', false);

      }
    });
    return false;

  });
         
          
          
      });  
    </script>
        </div>
<!--/ upgrade your plan Modal -->

        </div>
      </div>
    </div>
    <!-- END: Content-->
    
    
    
  </div>


</section>
<!-- Dashboard Analytics end -->

        </div>
      </div>
    </div>
    <!-- END: Content-->


   
  
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

   