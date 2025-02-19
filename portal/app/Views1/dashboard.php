    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
            <?php 
		         
		        $loginkey = $this->gfa_model->getWpCred($email);
		   ?>
        <div class="content-body"><!-- Dashboard Analytics Start -->
<section id="dashboard-analytics">
  <div class="row match-height">
    <!-- Greetings Card starts -->
    <div class="col-lg-6 col-md-12 col-sm-12">
      <div class="card card-congratulations">
        <div class="card-body text-center">
          <img
            src="../../../app-assets/images/elements/decore-left.png"
            class="congratulations-img-left"
            alt="card-img-left"
          />
          <img
            src="../../../app-assets/images/elements/decore-right.png"
            class="congratulations-img-right"
            alt="card-img-right"
          />
          <div class="avatar avatar-xl bg-primary shadow">
            <div class="avatar-content">
              <i data-feather="award" class="font-large-1"></i>
            </div>
          </div>
          <div class="text-center">
            <h1 class="mb-1 text-white">Congratulations</h1>
            <p class="card-text m-auto w-15">
              You have done <strong><?php echo $point ?>%</strong> onboarding. <br><a href="<?php echo base_url(); ?>gfa/profile" style="color:#fff;" target="_blank">Please update your profile for better experience, click here.</a>
            </p>
            
       
      <?php 
    
    $startupPaid = $this->gfa_model->getPaidSubscriber($email); 
    
    ?>
      <b>
          <?php if(!empty($this->gfa_model->getCurrentSub($email,'Basic Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Business Funding','active')) ){ ?>
          You have an active subscription from <?php //foreach($startupPaid as $startupPaidArray){  ?>
          <?php  echo date('d M, y',strtotime($startupPaid[0]['time_start']));  ?> to <?php  echo date('d M, y',strtotime($startupPaid[0]['time_end']));  ?>
            <?php //}
            
            }else{ ?>
            <a href="<?php echo base_url(); ?>gfa/subscribe" title="Subscription" ? style="color:#fff;">No active subscription found, click here to activate.</a>
            <?php }  ?>
            </b>
           
        
        
            
          </div>
        </div>
      </div>
    </div>
    <!-- Greetings Card ends -->

    <!-- Subscribers Chart Card starts -->
	
 <div class="col-lg-3 col-sm-6 col-12">
      <div class="card">
          
          
    <?php 
    
    $startupPaid = $this->gfa_model->getPaidSubscriber($email); 
    
    //if($startupPaid[0]['payment_status']=='paid' && $startupPaid[0]['status']=='active' && $point >=80 ) {
    // if(!empty($this->gfa_model->getCurrentSub($email,'Basic Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Business Funding','active'))){ 
    ?>
     
       
       
           
   
    
    
    
   <?php  if($point < 50){ ?>
    
    
    <a href="#" data-bs-target="#checkProfile" data-bs-toggle="modal"> 
    
    
    <?php }else{ ?>
    
      <a href="<?php echo base_url(); ?>gfa/startup_investor"> 
    
  <?php   }
    ?>
    
    <?php //} else { ?>
     <!--<a href="<?php echo base_url(); ?>gfa/startup_investor"> -->
    
   
 <?php //}   ?>
   
    <div class="card-header flex-column align-items-start pb-0">
          <div class="avatar bg-light-primary p-50 m-0">
            <div class="avatar-content">
              <i data-feather="users" class="font-medium-5"></i>
            </div>
          </div>
          <h2 class="fw-bolder mt-1"><p class="card-text">&nbsp;<br>
          <?php
          
            
            $account_type= $this->encrypt->decode($this->session->userdata('account_type'));
          if($account_type=='startup' || $account_type=='' || $account_type=='individual' ){
          $rowArray = $this->admin_model->getAllStartUpNByEmail($email);
        $rowArrayExt = $this->admin_model->getAllStartUpNByEmailExtX($email);
          echo $this->admin_model->countMatchInvestorDefaultApp($rowArray[0]['PrimaryBusinessIndustry'],$rowArray[0]['CurrentInvestmentStage'],$rowArray[0]['Startup_Implementation_Stage'],$rowArray[0]['Next_Funding_Round_Target_Sought'],$rowArray[0]['OperatingRegions']); ?>
          <br>Investors Match</p> </h2>
         <?php }elseif($account_type=='investor') { 
         $rowArrayInv = $this->admin_model->getAllInvestorNByEmail($email);
         echo $this->admin_model->countMatchStartupDefault($rowArrayInv[0]['Industry_Focus'],$rowArrayInv[0]['Investment_Stage_Focus'],$rowArrayInv[0]['Implementation_Stage_Focus'],$this->admin_model->getCountryByRegion($rowArrayInv[0]['Regional_focus'])[0]['country'],$rowArrayInv[0]['Min_Cheque']);
         ?>
             
            <p class="card-text">Startups Match</p> 
       <?php   }else{ echo 0;   ?> 
        
         <p class="card-text">No Match<br><br><span class="badge badge-light-warning me-1">[Update Your Profile]</span></p> 
       <?php   }  ?>
       
       
        </div>
        <div id="gained-chart"></div>
		</a>
      </div>
    </div>
	
    <!-- Subscribers Chart Card ends -->

    <!-- Orders Chart Card starts -->
    <div class="col-lg-3 col-sm-6 col-12">
      <div class="card">
         <a href="#" data-bs-target="#editUser" data-bs-toggle="modal">
        <div class="card-header flex-column align-items-start pb-0">
          <div class="avatar bg-light-warning p-50 m-0">
            <div class="avatar-content">
              <i data-feather="package" class="font-medium-5"></i>
            </div>
          </div>
          <?php if($this->admin_model->getCreditRedeemByEmail($email)[0]['More_Info'] !='' && $this->admin_model->getCreditRedeemSumByEmail($email)==60){ ?>
          <h2 class="fw-bolder mt-1"><?php detectCurrency(); ?><?php echo 0 ; ?></h2>
            <?php }elseif($this->admin_model->getCreditRedeemByEmail($email)[0]['More_Info'] !='' && $this->admin_model->getCreditRedeemSumByEmail($email)==15){ 
            
            if(!empty($this->gfa_model->getCurrentSub($email,'Basic Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Business Funding','active'))){
            ?>
            
           <h2 class="fw-bolder mt-1"><?php detectCurrency(); ?><?php echo  detectCurrencyAmount($balanceCredit); ?></h2> 
           <?php  }else{  ?>
           <h2 class="fw-bolder mt-1"><?php detectCurrency(); ?><?php echo detectCurrencyAmount($balanceCreditFree); ?></h2>
          <?php } ?>
           
          <p class="card-text">Free e-store credit redeemed!</p>
         <?php }else{  ?>
          <h2 class="fw-bolder mt-1"><?php detectCurrency(); ?><?php echo detectCurrencyAmount($viewcredit); ?></h2>
          <p class="card-text">Free e-store credit</p>
          <?php } ?>
        </div>
        <div id="order-chart"></div>
        </a>
      </div>
    </div>
    <!-- Orders Chart Card ends -->
  </div>

  
  
  
  
  
   <div class="row match-height">
    <div class="col-lg-12 col-12">
      <div class="row match-height">
          
        <!-- Bar Chart - Orders -->
        <div class="col-lg-3 col-md-3 col-6">
            <?php     // if($startupPaid[0]['payment_status']=='paid' && $startupPaid[0]['status']=='active'  ) {  ?>
            <?php if(!empty($this->gfa_model->getCurrentSub($email,'Basic Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Business Funding','active')) ){  ?>
    
    
    <?php if($point >=50 && $rowArray[0]['CountryHQ'] !='' && $rowArray[0]['PrimaryBusinessIndustry'] !='')  {  ?>
<a href="<?php echo base_url(); ?>gfa/hire">     
  <?php   }else{  ?>
     <a href="#" data-bs-target="#checkHireProfile" data-bs-toggle="modal"> 
   <?php  }  ?>
    
    
  <?php   }else{  ?>
  
 
 <a href="#" data-bs-target="#checkHireSub" data-bs-toggle="modal">       
  
         
          
 <?php    }
     
     ?>
     
            
          <div class="card">
            <div class="card-body pb-50">
                 <h3 class="fw-bolder mb-1">Hiring</h3>
              <h6><?php echo  $this->admin_model->countMatchCandidateApp($rowArray[0]['CountryHQ'],$rowArray[0]['PrimaryBusinessIndustry']) ?></h6>
             
              <div class="avatar-content avatar  p-50 m-0 bg-light-primary" style="float:right;">
              <i data-feather="user-check" class="font-large-2"  style="color:#7A6FF1;"></i>
         
            </div>
            </div>
          </div></a>
        </div>
        <!--/ Bar Chart - Orders -->

         <!-- Bar Chart - Orders -->
        <div class="col-lg-3 col-md-3 col-6">
            <a href="<?php echo base_url(); ?>gfa/comingsoon" tartget="GFA Max">
          <div class="card">
            <div class="card-body pb-50">
                 <h3 class="fw-bolder mb-1">Entertainment</h3>
              <h6>20</h6>
            
             
              <div class="avatar-content avatar p-50 m-0 bg-light-primary" style="float:right;">
              <i data-feather="film" class="font-large-2"  style="color:#7A6FF1;"></i>
         
            </div>
            </div>
          </div></a>
        </div>
        <!--/ Bar Chart - Orders -->
<div class="col-lg-3 col-md-3 col-6">
             <?php  //if(!empty($this->gfa_model->getCurrentSub($email,'Basic Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Business Funding','active')) ){ 
    if($point < 50) {  ?>
       <a href="#" data-bs-target="#checkProfile" data-bs-toggle="modal">
 <?php    }else{ ?>
    <a href="<?php echo base_url(); ?>gfa/startup_investor"> 
    <?php  }  ?>
    
    
   
    
    
      <?php //echo $urly; ?>     
           
                <!--<a href="">-->
          <div class="card">
            <div class="card-body pb-50">
                 <h3 class="fw-bolder mb-1">Investors</h3>
              <h6><?php 
              
        echo $this->admin_model->countMatchInvestorDefaultApp($rowArray[0]['PrimaryBusinessIndustry'],$rowArray[0]['CurrentInvestmentStage'],$rowArray[0]['Startup_Implementation_Stage'],$rowArray[0]['Next_Funding_Round_Target_Sought'],$rowArray[0]['OperatingRegions']); ?>

              
           
              
              </h6>
             
              <div class="avatar-content avatar  p-50 m-0 bg-light-primary" style="float:right;">
              <i data-feather="briefcase" class="font-large-2"  style="color:#7A6FF1;"></i>
         
            </div>
            </div>
          </div></a>
        </div>
           <!-- Bar Chart - Orders -->
           <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <span><?php echo $this->admin_model->countAllJobs(); 
                                                //$this->admin_model->countMatchCandidateApp($rowArray[0]['CountryHQ'],$rowArray[0]['PrimaryBusinessIndustry'])
                                                ?> Jobs</span>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-end mt-1 pt-25">
                                                <div class="role-heading">

                                                    <h4 class="fw-bolder">Hiring</h4>

                                                    <?php //if(!empty($this->gfa_model->getCurrentSub($email,'Basic Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Business Funding','active')) ){  ?>



                                                    <small class="fw-bolder"><?php if($point >=50 )  { 
                                                        // && $rowArray[0]['CountryHQ'] !='' && $rowArray[0]['PrimaryBusinessIndustry'] !=''
                                                        ?><a href="<?php echo base_url(); ?>gfa/post_job"> Post Job </a> <?php  }else{   ?>
                                                        <a href="#" data-bs-target="#checkHireProfile"
                                                            data-bs-toggle="modal">Post Job
                                                            <?php } ?>
                                                            |<a href="<?php echo base_url(); ?>gfa/add_cv"> Submit CV
                                                            </a> | <a href="<?php echo base_url(); ?>gfa/jobs">Apply for
                                                                a Job </a>
                                                            <?php if(!empty($this->gfa_model->getAllJobsByEmail($email))){  ?>
                                                            | <a href="<?php echo base_url(); ?>gfa/manage_jobs">View
                                                                Posted Jobs </a> <?php }else{ echo ''; }  ?> </small>




                                                    <?php   //}else{  ?>


                                                    <!--<small class="fw-bolder"><a href="#" data-bs-target="#checkHireSub" data-bs-toggle="modal"> Post Job   | Submit CV | Apply for a Job </a>  </small>     -->



                                                    <?php   // }
     
                                                    ?>
                                                    <!--<a href="<?php echo base_url(); ?>gfa/add_job"> </a>  -->
                                                    <!--<small class="fw-bolder"> Post Job   | Submit CV | Apply for a Job</small>-->

                                                </div>
                                                <div class="avatar-content avatar  p-50 m-0 bg-light-primary"
                                                    style="float:right;">
                                                    <a href="javascript:void(0);" class="text-body"><i
                                                            data-feather="user-check" class="font-large-1"
                                                            style="color:#7A6FF1;"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        <div class="col-lg-3 col-md-3 col-6">
     <?php     // if($startupPaid[0]['payment_status']=='paid' && $startupPaid[0]['status']=='active'  ) {  ?>
     <?php //if(!empty($this->gfa_model->getCurrentSub($email,'Basic Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Business Funding','active')) ){ 
    //if($rowArray[0]['Mentorship'] =='')  { 
     //$url = base_url()."gfa/profile";
     if($point < 50){
     
    ?>
       
        <a href="#" data-bs-target="#checkMentorProfile" data-bs-toggle="modal"> 
 <?php    }else{ 
 //$url = base_url()."gfa/startup_mentor"; 
 
 ?>
    <a href="<?php echo base_url(); ?>gfa/startup_mentor">   
 <?php    }  
    
    
     //}else{
         
        //$url = base_url()."gfa/startup_mentor"; 
     //}
    
    ?>
           
           
                
          <div class="card">
            <div class="card-body pb-50">
                 <h3 class="fw-bolder mb-1">Mentors</h3>
              <h6>  <?php 
          echo $this->admin_model->countMatchMentorDefaultApp($rowArray[0]['PrimaryBusinessIndustry'],$rowArray[0]['Mentorship'],$rowArray[0]['Startup_Implementation_Stage']); ?></h6>
             
              <div class="avatar-content avatar  p-50 m-0 bg-light-primary" style="float:right;">
              <i data-feather="users" class="font-large-2"  style="color:#7A6FF1;"></i>
         
            </div>
            </div>
          </div></a>
        </div>
        
        
        
        <!--/ Bar Chart - Orders -->
        
  <!-- Bar Chart - Orders -->
        <div class="col-lg-3 col-md-3 col-6">
             <?php  if(!empty($this->gfa_model->getCurrentSub($email,'Basic Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Business Funding','active')) ){ 
    if($point < 50) {
       $urly = base_url()."gfa/profile"; //
     }else{
     $urly = base_url()."gfa/startup_cooperate";   
     }
    
    
     }else{
         
        $urly = base_url()."gfa/subscribe"; 
      }
    
    ?>
           
           
                <a href="<?php echo $urly; ?>">
          <div class="card">
            <div class="card-body pb-50">
                 <h3 class="fw-bolder mb-1">Corporate</h3>
              <h6><?php 
              
             echo $this->admin_model->countMatchCooperateDefaultApp($rowArrayExt[0]['Solution_Corperate'],$rowArrayExt[0]['Core_Interest_Corporate']);
              
            //   $rowArray[0]['PrimaryBusinessIndustry'],$rowArray[0]['Startup_Implementation_Stage'],
              
              ?></h6>
             
              <div class="avatar-content avatar  p-50 m-0 bg-light-primary" style="float:right;">
              <i data-feather="briefcase" class="font-large-2"  style="color:#7A6FF1;"></i>
         
            </div>
            </div>
          </div></a>
        </div>
        <!--/ Bar Chart - Orders -->
          
          <!-- Bar Chart - Orders -->
        <div class="col-lg-3 col-md-3 col-6">
            <a href="<?php echo base_url(); ?>gfa/comingsoon">
          <div class="card">
            <div class="card-body pb-50">
                 <h3 class="fw-bolder mb-1">Find an Expert</h3>
              <h6>45</h6>
             
              <div class="avatar-content avatar  p-50 m-0 bg-light-primary" style="float:right;">
              <i data-feather="award" class="font-large-2"  style="color:#7A6FF1;"></i>
         
            </div>
            </div>
          </div></a>
        </div>
        <!--/ Bar Chart - Orders -->
          <!-- Bar Chart - Orders -->
        <div class="col-lg-3 col-md-3 col-6">
            <a href="<?php echo base_url(); ?>gfa/comingsoon">
          <div class="card">
            <div class="card-body pb-50">
                 <h3 class="fw-bolder mb-1">Workspace</h3>
              <h6>400</h6>
             
              <div class="avatar-content avatar  p-50 m-0 bg-light-primary" style="float:right;">
              <i data-feather="layers" class="font-large-2"  style="color:#7A6FF1;"></i>
         
            </div>
            </div>
          </div></a>
        </div>
        <!--/ Bar Chart - Orders -->
        
          <!-- Bar Chart - Orders -->
        <div class="col-lg-3 col-md-3 col-6">
            <a href="<?php echo base_url(); ?>gfa/comingsoon">
          <div class="card">
            <div class="card-body pb-50">
                 <h3 class="fw-bolder mb-1">Data & Insight</h3>
              <h6>15</h6>
             
              <div class="avatar-content avatar  p-50 m-0 bg-light-primary" style="float:right;">
              <i data-feather="activity" class="font-large-2"  style="color:#7A6FF1;"></i>
         
            </div>
            </div>
          </div></a>
        </div>
        <!--/ Bar Chart - Orders -->
        
        
          <!-- Bar Chart - Orders -->
        <div class="col-lg-3 col-md-3 col-6">
             <?php     // if($startupPaid[0]['payment_status']=='paid' && $startupPaid[0]['status']=='active'  ) {  ?>
     <?php if(!empty($this->gfa_model->getCurrentSub($email,'Basic Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Business Funding','active')) ){  ?>
    
    <!--<a href="https://remsana.getfundedafrica.com/courses/fundraising-program-course-for-gfa-account/lessons/are-you-ready-copy-3/" target="_blank">-->
        <a href="https://remsana.getfundedafrica.com/sso.php?key=<?php echo $loginkey[0][LoginKey]; ?>" target="_blank">
    
  <?php   }else{  ?>
  
 <?php if($point >=50)  {  ?>
 <a href="#" data-bs-target="#checkLearningSub" data-bs-toggle="modal">       
  <?php   }else{  ?>
     <a href="#" data-bs-target="#checkLearningProfile" data-bs-toggle="modal"> 
   <?php  }  ?>
         
          
 <?php    }
     
     ?>
           
          <div class="card">
            <div class="card-body pb-50">
                 <h3 class="fw-bolder mb-1">Learning</h3>
              <h6>230</h6>
             
              <div class="avatar-content avatar  p-50 m-0 bg-light-primary" style="float:right;">
              <i data-feather="book-open" class="font-large-2"  style="color:#7A6FF1;"></i>
         
            </div>
            </div>
          </div>
          </a>
        </div>
        <!--/ Bar Chart - Orders -->
        

      </div>
    </div>
  
<!-- Timeline Card -->
    <div class="col-lg-4 col-12">
      <div class="card card-user-timeline">
        <div class="card-header">
          <div class="d-flex align-items-center">
            <i data-feather="list" class="user-timeline-title-icon"></i>
            <h4 class="card-title"><a href="<?php echo base_url(); ?>gfa/add_story">Tell your Story</a></h4>
          </div>
        </div>
        <div class="card-body">
          <ul class="timeline ms-50">
              
              
          
            <li class="timeline-item">
              <span class="timeline-point timeline-point-indicator"></span>
              <div class="timeline-event">
                <a href="https://getfundedafrica.com/portal/gfa/comingsoon">
				<h6>Microsoft funding </h6>
                <p>10,000 African startups to benefit</p>
                <div class="d-flex align-items-center">
                  <img class="me-1" src="../../../app-assets/images/icons/json.png" alt="data.json" height="23" />
                
                </div>
				</a>
              </div>
            </li>

            <li class="timeline-item">
              <span class="timeline-point timeline-point-info timeline-point-indicator"></span>
              <div class="timeline-event">
                <a href="https://getfundedafrica.com/portal/gfa/comingsoon"><h6>Featured Story </h6>
                <p>Some of the great founders stories we have told the world</p>
                <div class="avatar-group">
                
                  <div
                    data-bs-toggle="tooltip"
                    data-popup="tooltip-custom"
                    data-bs-placement="bottom"
                    title="Amy Carson"
                    class="avatar pull-up"
                  >
                    <img
                      src="../../../app-assets/images/portrait/small/avatar-s-6.jpg"
                      alt="Avatar"
                      width="33"
                      height="33"
                    />
                  </div>
                  <div
                    data-bs-toggle="tooltip"
                    data-popup="tooltip-custom"
                    data-bs-placement="bottom"
                    title="Brandon Miles"
                    class="avatar pull-up"
                  >
                    <img
                      src="../../../app-assets/images/portrait/small/avatar-s-8.jpg"
                      alt="Avatar"
                      width="33"
                      height="33"
                    />
                  </div>
                  
                </div>
              </a>
			  </div>
            </li>
       
          </ul>
          
        </div>
        <!--<div class="col-lg-4 col-md-6 col-12">-->
         <a href="<?php echo base_url(); ?>gfa/add_story" class="btn btn-primary col-md-6" style="float:auto;">+ Add Story</a> 
         <!--</div>-->
      </div>
    </div>
    <!--/ Timeline Card -->

  

  <!-- Profile Card -->
  <div class="col-lg-4 col-md-6 col-12">
    <div class="card card-profile">
      <img
        src="https://getfundedafrica.com/images/cohort.jpg"
        class="img-fluid card-img-top"
        alt="Profile Cover Photo"
      />
            <div class="card-body">
        <div class="profile-image-wrapper">
          <div class="profile-image">
            <div class="avatar">
               
              <img src="../../../app-assets/images/gfacohort-.jpg" alt="Cohort Pic"/>
            </div>
          </div>
        </div>
         
        <h6 class="text-muted">NEXT COHORT STARTING</h6>
                 <br>
       	
        <h3>Investor Readiness Cohort</h3>
        <br>
        <span class="badge badge-light-primary profile-badge"> 9th Jan 2023</span><br><br>
        
        
         <button onclick="document.location='https://getfundedafrica.com/cohort'" type="button" class="btn btn-primary" style="float:auto;">Learn more</button> 
      <!--        	<br>
       		<br>
                
        <h3> Cohort</h3>
       
        <span class="badge badge-light-primary profile-badge"> </span><br><br>
        
        
         <button onclick="document.location=''" type="button" class="btn btn-primary" style="float:auto;">Learn more</button> 
              -->
       
      </div>
    </div>
  </div>
  <!--/ Profile Card -->
  
  
  <!-- Developer Meetup Card -->
  <div class="col-lg-4 col-md-6 col-12">
    <div class="card card-developer-meetup">
      <div class="meetup-img-wrapper rounded-top text-center">
        <img src="../../../app-assets/images/eventgfa.jpg" alt="Meeting Pic" height="170" />
      </div>
      
      <?php //foreach($eventResp as $eventResponseArray){  ?>
      <div class="card-body">
        <div class="meetup-header d-flex align-items-center">
          <div class="meetup-day">
            <h6 class="mb-0"><?php $dateEvent = date('w', strtotime($eventResp['Date']));
            echo $this->gfa_model->getDay($dateEvent);  ?>
            </h6>
            <h3 class="mb-0"><?php echo date('d', strtotime($eventResp['Date']));  ?></h3>
          </div>
          <div class="my-auto">
            <h4 class="card-title mb-25">Upcoming Event </h4>
            <p class="card-text mb-0"><?php echo $eventResp['Title']; ?></p>
            <p><a href="<?php echo $eventResp['Url']; ?>" target="_blank">Click here for more details</a></p>
          </div>
        </div>
        <div class="d-flex flex-row meetings">
          <div class="avatar bg-light-primary rounded me-1">
            <div class="avatar-content">
              <i data-feather="calendar" class="avatar-icon font-medium-3"></i>
            </div>
          </div>
          <div class="content-body">
            <h6 class="mb-0"><?php echo date('M d, Y', strtotime($eventResp['Date'])) ?></h6>
            <small><?php echo str_replace("-", "to", $eventResp['Time']) ?></small>
          </div>
        </div>
        <div class="d-flex flex-row meetings">
          <div class="avatar bg-light-primary rounded me-1">
            <div class="avatar-content">
              <i data-feather="map-pin" class="avatar-icon font-medium-3"></i>
            </div>
          </div>
          <div class="content-body">
            <h6 class="mb-0"><?php echo $eventResp['Location']; ?></h6>
            <!--<small>Abeokuta, Ogun State</small>-->
          </div>
        </div>
        <input type="hidden" class="eventId" value="<?php echo $eventResp['ID']; ?>" >
         <input type="hidden" class="title" value="<?php echo $eventResp['Title']; ?>" >
         <?php if($this->gfa_model->getWpEvent($email)[0]['status']=='active'){  ?>
          <div class="avatar-content avatar  p-50 m-0 bg-light-primary" style="float:right;">
              <i data-feather="user-check" class="font-large-2"  style="color:#7A6FF1;"></i>
         
            </div>
           <?php }elseif($this->gfa_model->getWpEvent($email)[0]['status']=='pending'){  ?> 
           <button type="button" disabled class="btn btn-primary attendEvent">Enquiry Pending</button>
           <?php }else{  ?>
            <button type="button" disabled class="btn btn-primary attendEvent" >Event Closed</button>
           <?php } ?>
           
           <a href="<?php echo base_url(); ?>gfa/add_event" class="btn btn-primary col-md-5">+Add Event</a> 
            </div>
            <!--onclick="location.href='https://events.getfundedafrica.com';"-->
            <?php// }  ?>
    </div>
  </div>
  <!--/ Developer Meetup Card -->
  

  
  

</section>
<!-- Dashboard Analytics end -->

<div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-edit-user">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-5 pt-50">
        <div class="text-center mb-2">
         <span><i data-feather="info" class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span><h1 class="mb-1">Credit redemption</h1>
          <p><a href="https://estore.getfundedafrica.com/sso.php?key=<?php echo $loginkey[0][LoginKey]; ?>" target="_blank">Go to our e-store for investor readiness templates</a></p>
             <!--<input type="text" class="credit" value="<?php //echo $this->admin_model->getCreditAciveSub($email) ?>" >-->
            <input type="hidden" class="credit" value="<?php echo $showCredit ?>" > 
           <?php if($credit >=15 ){  ?>
          <!--<p>Go to our estore to redeem your credit, we will apply credit automatically to your total checkout order.</p>-->
          <?php if($this->admin_model->getCreditRedeemByEmail($email)[0]['More_Info'] !=''){ 
          
          $redeemArray = $this->admin_model->getCreditRedeemByEmail($email); foreach($redeemArray as $getRedeemInfo){
          
          ?>
         
          <p><strong><?php echo $getRedeemInfo ['More_Info'] ?></strong> </p>
          <hr></hr>
          <?php } } ?>
          <?php }else{  ?>
          
          <p> You can not redeem your credit until you have minimum of <?php detectCurrency(); ?><?php echo detectCurrencyAmount(10500); ?>. Please update your profile to 50% and earn more free credit.</p>
          
         
          <?php }  ?>
         
        </div>
      
         <?php if($credit >=15  ){  ?>
       
      
      <?php
       
      ?>
     
        <!--<button  class="btn btn-primary float-end mt-3" disabled>-->
        <!--  <span class="me-50">Credit Request Pending</span>-->
        <!--  <i data-feather="box"></i>-->
        <!--</button>-->
     
        
        
       <?php 
        //}
      // } else{  ?>
       
       <!--<button  class="btn btn-primary float-end mt-3" disabled>-->
       <!--   <span class="me-50">Credit Request Pending</span>-->
       <!--   <i data-feather="box"></i>-->
       <!-- </button>-->
        
        <?php  //}   ?>
        
       <?php if (empty($this->admin_model->getCreditRedeemByEmail($email)[0]['Credit'])) { ?>
    
           <button  class="btn btn-primary float-end mt-3 RedeemCredit">
          <span class="me-50 displayRedeem">Redeem</span>
          <i data-feather="box"></i>
        </button>
     <?php       }else{ 
          if($showCredit !=''){
              
           if($showCredit ==0){ echo ''; }else{  
        ?>
        
        <button  class="btn btn-primary float-end mt-3 RedeemCredit" disabled >
          <span class="me-50 displayRedeem">Credit waiting for activation</span>
          <i data-feather="box"></i>
        </button>
      <?php  } } } ?>
      
     
      
    <?php  } else{  ?>
    
    <a href="<?php echo base_url(); ?>gfa/profile" class="btn btn-primary float-end mt-3" >
          <span class="me-50">Update Profile</span>
          <i data-feather="user"></i>
        </a>
    <?php  //}else{  ?>
    
    
    <?php //}  ?>
        
   <?php  }  //}  ?>
      </div>
      
    </div>
  </div>
</div>

<div class="modal fade" id="checkProfile" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-edit-user">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-5 pt-50">
        <div class="text-center mb-2">
         <span><i data-feather="info" class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span><h1 class="mb-1">Profile Completion</h1>
          <!--<p><a href="http://estore.getfundedafrica.com/sso.php?key=<?php //echo $loginkey[0][LoginKey]; ?>" target="_blank">Click here to visit estore</a></p>-->
        <p>
            <!--Kindly update your profile at least more than 50% for better investor match.-->
            Your profile update is <?php echo $point ?>%, pls update it to aleast 50% to view list of matched investors.
        </p>
        
        <br>
       
        <a href="<?php echo base_url(); ?>gfa/profile" class="btn btn-primary float-end mt-3" >
          <span class="me-50">Update Profile</span>
          <i data-feather="user"></i>
        </a>


      </div>

    </div>
  </div>
</div>


        </div>
        
        <div class="modal fade" id="checkMentorProfile" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-edit-user">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-5 pt-50">
        <div class="text-center mb-2">
         <span><i data-feather="info" class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span><h1 class="mb-1">Profile Completion</h1>
          <!--<p><a href="http://estore.getfundedafrica.com/sso.php?key=<?php //echo $loginkey[0][LoginKey]; ?>" target="_blank">Click here to visit estore</a></p>-->
        <p>
             Your profile update is <?php echo $point ?>%, pls update it to aleast 50% to view list of matched mentors.
        </p>
        
        <br>
       
        <a href="<?php echo base_url(); ?>gfa/profile" class="btn btn-primary float-end mt-3" >
          <span class="me-50">Update Profile</span>
          <i data-feather="user"></i>
        </a>
     
     
      </div>
      
    </div>
  </div>
</div>


        </div>
        
       
        <div class="modal fade" id="checkHireProfile" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-edit-user">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-5 pt-50">
        <div class="text-center mb-2">
         <span><i data-feather="info" class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span><h1 class="mb-1">Profile Completion</h1>
          <!--<p><a href="http://estore.getfundedafrica.com/sso.php?key=<?php //echo $loginkey[0][LoginKey]; ?>" target="_blank">Click here to visit estore</a></p>-->
        <p>
             Your profile update is <?php echo $point ?>%, pls update it to aleast 50% and startup country and industry must be inclusive to hire. 
        </p>
        
        <br>
       
        <a href="<?php echo base_url(); ?>gfa/profile" class="btn btn-primary float-end mt-3" >
          <span class="me-50">Update Profile</span>
          <i data-feather="user"></i>
        </a>
     
     
      </div>
      
    </div>
  </div>
</div>


        </div>
        
        
      
        <div class="modal fade" id="checkHireSub" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-edit-user">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-5 pt-50">
        <div class="text-center mb-2">
         <span><i data-feather="info" class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span><h1 class="mb-1">Hiring</h1>
          <!--<p><a href="http://estore.getfundedafrica.com/sso.php?key=<?php //echo $loginkey[0][LoginKey]; ?>" target="_blank">Click here to visit estore</a></p>-->
        <p>
            You currently have no active subscription, subscribe now to have post jobs and hire professional job seekers.
        </p>
        
        <br>
       
        <a href="<?php echo base_url(); ?>gfa/subscribe" class="btn btn-primary float-end mt-3" >
          <span class="me-50">Subscribe</span>
          <i data-feather="user"></i>
        </a>
       
        
        
     
     
      </div>
      
    </div>
  </div>
</div>


        </div>
        
      </div>
    </div>
    <!-- END: Content-->

<script>
    $(function(){
        
        
         $(".attendEvent").click(function(){
         
         var  eventId = $('.eventId').val();
         var  title = $('.title').val();
          $.ajax({
     data:{eventId:eventId,title:title},
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/attendEvent",
     error:function() {$(".attendEvent").html('Error Request');},
	 beforeSend:function() {$(".attendEvent").html('Requesting...');$('.attendEvent').prop("disabled", true );},
      success: function(data) {
       
		 $(".attendEvent").html('Enquiry Pending'); 
	    $('.attendEvent').prop("disabled", true );
	   
	  
	
       }
      
    });
         
       }); 
       
       $(".RedeemCredit").click(function(){
         
         var  credit = $('.credit').val();
          $.ajax({
     data:{credit:credit},
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/creditRedeem",
     error:function() {$(".displayRedeem").html('Error Request');},
	 beforeSend:function() {$(".displayRedeem").html('Requesting...');},
      success: function(data) {
       
		  
		 $(".displayRedeem").html('Request Pending'); 
	    $('.RedeemCredit').prop("disabled", true );
	   
	  
	
       }
      
    });
         
       }); 
        
    });
</script>
   
  
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
