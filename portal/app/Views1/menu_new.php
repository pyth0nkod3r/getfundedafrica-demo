<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $this->admin_model = model('App\Models\AdminModel');
   ?>
    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="navbar-header">
       <center><a href="<?php echo base_url('gfa/dashboard'); ?>gfa/dashboard"><img src="<?php echo base_url('public/assets/images/logo/GFA-Logo.png'); ?>" align="center"></a></center>
        
    </div><br> <br> <br>
      <div class="shadow-bottom"></div>
      <div class="main-menu-content">
          <?php 
                
                $loginkey = $this->gfa_model->getWpCred($email);
                $rowArray = $this->admin_model->getAllStartUpNByEmail($email);
           ?>
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
         <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">GFA Solutions</span><i data-feather="more-horizontal"></i>
         
         <?php   
          if(!empty($login_type)){  ?>
 
         <li class=" nav-item active"  style="margin-top:10px;"><a class="d-flex align-items-center" href="<?php echo base_url(); ?>admin/event">
           <i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Admin Dashboard</span></a>
            
          </li>
          <li class="nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center" href="#">
           <i data-feather="settings"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Perks</span></a>
            <ul class="menu-content">
            <li><a class="d-flex align-items-center" href="<?php echo base_url('gfa/add_perks'); ?>" alt="Add Perks"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">+ Add Perks</span></a></li>
              <li><a class="d-flex align-items-center" href="<?php echo base_url('gfa/manage_perks'); ?>" alt="Manage Perks"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">Manage Perks</span></a></li>
              <li><a class="d-flex align-items-center" href="<?php echo base_url('gfa/manage_perks_category'); ?>"  alt="Manage Category"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Perks Category</span></a></li>
              <li><a class="d-flex align-items-center" href="<?php echo base_url('gfa/perks_redeemed'); ?>" alt="Perks Redeemed"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Redeemed</span></a></li>
             </ul>
          </li>
         <?php }else{   ?>
      <li class=" nav-item active"  style="margin-top:10px;"><a class="d-flex align-items-center" href="<?php echo base_url('gfa/dashboard'); ?>">
           <i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboard</span></a>
       </li>
       <li class=" nav-item active"  style="margin-top:10px;"><a class="d-flex align-items-center" href="<?php echo base_url('gfa/subscribe'); ?>">
           <i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Subscription</span></a>
       </li>
       <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center" href="#">
           <i data-feather="clipboard"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Funding</span></a>
            <ul class="menu-content">
              
              <li><a class="d-flex align-items-center" href="<?php echo base_url('gfa/startup_investor'); ?>" target="_blank" alt="Apply for Co-hort"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">Connect to an Investor</span></a></li>
              <li><a class="d-flex align-items-center" href="https://remsana.getfundedafrica.com/sso.php?key=<?php echo (!empty($loginkey[0]['LoginKey']))?$loginkey[0]['LoginKey']: ''; ?>" target="_blank" alt="Self help funding"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Learn how to get Funding</span></a></li>
              <li><a class="d-flex align-items-center" href="https://remsana.getfundedafrica.com/sso.php?key=<?php echo (!empty($loginkey[0]['LoginKey']))?$loginkey[0]['LoginKey']: ''; ?>"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Self help Funding</span></a></li>
              <li><a class="d-flex align-items-center" href="<?php echo base_url('gfa/dealroom'); ?>" alt="Data Room"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Dealroom</span></a></li>
             </ul>
          </li>

          <li class="nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center" href="#">
           <i data-feather="settings"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Account Settings</span></a>
            <ul class="menu-content">
              
              <li><a class="d-flex align-items-center" href="<?php echo base_url('gfa/profile'); ?>" alt="Update Profile"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">Profile</span></a></li>
              <li><a class="d-flex align-items-center" href="<?php echo base_url('gfa/change_password'); ?>"  alt="Update Password"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Change Password</span></a></li>
              <li><a class="d-flex align-items-center" href="<?php echo base_url('gfa/billing'); ?>" alt="Billing"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Billing</span></a></li>
             </ul>
          </li>
          
          <li class=" nav-item active"  style="margin-top:10px;">
              
               <?php //if(!empty($this->gfa_model->getCurrentSub($email,'Basic Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Business Funding','active')) ){  ?>
    
     <?php if($this->gfa_model->creditPointScore($email) >=50)  {  ?>
 <a class="d-flex align-items-center" href="<?php echo base_url('gfa/dealroom'); ?>">
  <?php   }else{  ?>
     <a href="#" data-bs-target="#checkDealRoomProfile" data-bs-toggle="modal"> 
     <!--<a href="#" data-bs-target="#checkDealRoom" data-bs-toggle="modal">-->
   <?php  }  ?>
    
    
  <?php   //}else{  ?>
  
 
 <!--<a href="#" data-bs-target="#checkDealRoom" data-bs-toggle="modal">       -->
 
         
          
 <?php   // }
     
     ?>
              
              
           
           <i data-feather="layers"></i><span class="menu-title text-truncate" data-i18n="Data and Insight">Dealroom<?php //echo  ?></span></a>
            
          </li>
         
         
           <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center" href="#">
           <i data-feather="share"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Grow your Business</span></a>
            <ul class="menu-content">
                <!--href="http://estore.getfundedafrica.com/sso.php?key=<?php //echo $loginkey[0][LoginKey]; ?>"-->
                 <!--<a href="#" data-bs-target="#editUser" data-bs-toggle="modal">-->
             <li><a class="d-flex align-items-center" href="https://estore.getfundedafrica.com/sso.php?key=<?php echo (!empty($loginkey[0]['LoginKey']))?$loginkey[0]['LoginKey']: ''; ?>&product=sell" target="_blank" alt="Sell a Product"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Sell a Product</span></a>
              </li>
             <!--data-bs-target="#editUser" data-bs-toggle="modal"-->
             <li><a class="d-flex align-items-center" href="https://marketplace.getfundedafrica.com/sso.php?key=<?php echo (!empty($loginkey[0]['LoginKey']))?$loginkey[0]['LoginKey']: ''; ?>&service=sell"
                                                            target="_blank" alt="Sell a Service"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Sell a Service</span></a>
              </li>
              
               <li><a class="d-flex align-items-center" href="<?php echo base_url('gfa/post_job'); ?>" alt="Post a Job"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Post a Job</span></a>
              </li>
              
            <li><a class="d-flex align-items-center" href="<?php echo base_url('gfa/startup_cooperate'); ?>" alt="Connect to a Corporate"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Connect to a Corporate</span></a>
              </li>
              <li><a class="d-flex align-items-center" href="<?php echo base_url('gfa/startup_mentor'); ?>" alt="Connect to a Mentor"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Connect to a Mentor</span></a>
              </li>
             
            </ul>
          </li>
          
         
          
           
          
          
          
           <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center" href="#">
           <i data-feather="globe"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Promote your Business</span></a>
            <ul class="menu-content">
             <li><a class="d-flex align-items-center" href="<?php echo base_url('gfa/add_story'); ?>" alt="Publish your Story"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Publish your Story</span></a>
              </li>
              <li><a class="d-flex align-items-center" href="<?php echo base_url('gfa/add_event'); ?>" alt="Publish an Event"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Publish an Event</span></a>
              </li>
               <li><a class="d-flex align-items-center" href="https://events.getfundedafrica.com/" target="_blank"  alt="Attend an Event"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Attend an Event</span></a>
              </li>
              
            </ul>
          </li>
          
         
          
         
           <!--<li class=" nav-item active"  style="margin-top:10px;"><a class="d-flex align-items-center" href="https://events.getfundedafrica.com" target="_blank">-->
           <!--<i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Events</span></a>-->
            
          </li>
          <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center" href="#">
           <i data-feather="users"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Community</span></a>
            <ul class="menu-content">
             <li><a class="d-flex align-items-center" href="<?php echo base_url('gfa/comingsoon'); ?>"  alt="Chat"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Chat</span></a>
              </li>
              
               <li><a class="d-flex align-items-center" href="<?php echo base_url('gfa/csr_participate'); ?>" alt="Participate in a CRS"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Participate in a CRS</span></a>
              </li>
              <li><a class="d-flex align-items-center" href="<?php echo base_url('gfa/comingsoon'); ?>gfa/comingsoon" alt="Schedule a meeting"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Schedule a meeting</span></a>
              </li>
            </ul>
          </li>
          
            <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center" href="#">
           <i data-feather="film"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Entertainment</span></a>
            <ul class="menu-content">
            
              
               <li><a class="d-flex align-items-center" href="https://gfamax.com/"  target="_blank" alt="Watch Live TV"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce"></span>Watch Live TV</a>
              </li>
              <li><a class="d-flex align-items-center" href="https://gfamax.com/"  target="_blank" alt="Video on Demand"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Video on Demand</span></a>
              </li>
            </ul>
          </li>
          <?php  if(empty($this->gfa_model->getAllDcdtByEmail($email))){ echo ''; }else{ ?>
           <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center" href="<?php echo base_url(); ?>gfa/add_report">
           <i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Post Weekly Update</span></a>
           
          </li>
          <?php } } ?>
        </ul>
      </div>
    </div>
    <!-- END: Main Menu-->