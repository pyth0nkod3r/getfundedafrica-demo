<?php $admin_model = new \App\Models\AdminModel(); ?>
<?php $gfa_model = new \App\Models\GfaModel(); ?>
  
  <!-- Left side column. contains the logo and sidebar -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo lang('translation.Dashboard') ?>
        <small><?php echo lang('translation.Control Panel') ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> <?php echo lang('translation.Home') ?></a></li>
        <li class="active"><?php echo lang('translation.Dashboard') ?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
<?php $row = $admin_model->getAllEventsPost();  foreach($row as $rowArray){ 
  $next2days = (24*3600*2) + strtotime($rowArray['start_date']); 
  if(time() > $next2days){ echo ''; }else{ 
  ?>
      <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>
                
                
                
              <?php  
        $rowEvent = $gfa_model->getEventByEmailRef($rowArray['email'],$rowArray['ref_id']);
        $sumTotalAttendees = 0;       
				foreach($rowEvent as $rowArrayEvent){
          $sumTotalAttendees += $gfa_model->countAllEventAttendeesByEmail($rowArrayEvent['event_id']);
        }
            echo $sumTotalAttendees;
            
            ?>
            
            
            </h3>

              <p>
               <?php echo substr($rowArray['title'], 0, 23); ?><?php if(strlen($rowArray['title']) >23){ echo '...';}else{echo '';} ?>
              </p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo base_url(); ?>admin/events/<?php echo $rowArray['event_id'] ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

      <?php } } ?>
        
        
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $admin_model->countAllConnectionsByAdmin() ?></h3>

              <p><?php echo lang('translation.All Connections') ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-person-yellow"></i>
            </div>
            <a href="<?php echo base_url(); ?>admin/all_connections" class="small-box-footer"><?php echo lang('translation.More info') ?> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
          <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $admin_model->countAllUsers() ?></h3>

              <p><?php echo lang('translation.All Users') ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo base_url(); ?>admin/gfa_all_users" class="small-box-footer"><?php echo lang('translation.More info') ?> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $admin_model->countOnboardingStartups() ?></h3>

              <p><?php echo lang('translation.Startups') ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo base_url(); ?>admin/startups" class="small-box-footer"><?php echo lang('translation.More info') ?> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $admin_model->countAllUsersIndividuals() ?></h3>

              <p><?php echo lang('translation.Individuals') ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo base_url(); ?>admin/gfa_all_individual_users" class="small-box-footer"><?php echo lang('translation.More info') ?> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
         
        
       
        
       
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $admin_model->countActiveSubcribers() ?></h3>

              <p><?php echo lang('translation.Active Subscribers') ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo base_url(); ?>admin/active_subscribers" class="small-box-footer"><?php echo lang('translation.More info') ?> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $admin_model->countSubcribers() ?></h3>

              <p><?php echo lang('translation.Subscribers') ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo base_url(); ?>admin/payment" class="small-box-footer"><?php echo lang('translation.More info') ?> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
         <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $admin_model->countOnboardingInvestors() ?><sup style="font-size: 20px"></sup></h3>

              <p><?php echo lang('translation.Onboard Investors') ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo base_url(); ?>admin/investors" class="small-box-footer"><?php echo lang('translation.More info') ?><i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $admin_model->countOnboardingMentors() ?></h3>

              <p><?php echo lang('translation.Onboard Mentors') ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo base_url(); ?>admin/mentors" class="small-box-footer"><?php echo lang('translation.More info') ?><i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $admin_model->countOnboardingAccelerators() ?></h3>

              <p><?php echo lang('translation.Onboarding Accelerators') ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?php echo base_url(); ?>admin/accelerators" class="small-box-footer"><?php echo lang('translation.More info') ?> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $admin_model->countOnboardingCorporate() ?></h3>

              <p><?php echo lang('translation.Enterprise') ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?php echo base_url(); ?>admin/corporate" class="small-box-footer"><?php echo lang('translation.More info') ?> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
       
        
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $admin_model->countOnboardingOldStartups() ?></h3>

              <p><?php echo lang('translation.Previous Signups') ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo base_url(); ?>admin/prev_startups" class="small-box-footer"><?php echo lang('translation.More info') ?> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
         <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $admin_model->countOnboardingFunding() ?><sup style="font-size: 20px"></sup></h3>

              <p><?php echo lang('translation.Funding') ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo base_url(); ?>admin/funding" class="small-box-footer"><?php echo lang('translation.More info') ?><i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $admin_model->countOnboardingVenture() ?></h3>

              <p><?php echo lang('translation.Business Growth') ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?php echo base_url(); ?>admin/venture_building" class="small-box-footer"><?php echo lang('translation.More info') ?> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $admin_model->countOnboardingNews() ?></h3>

              <p><?php echo lang('translation.News') ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?php echo base_url(); ?>admin/news" class="small-box-footer"><?php echo lang('translation.More info') ?> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $admin_model->countOnboardingInsight() ?></h3>

              <p><?php echo lang('translation.Insight') ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?php echo base_url(); ?>admin/insight" class="small-box-footer"><?php echo lang('translation.More info') ?> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $admin_model->countOnboardingLearning() ?></h3>

              <p><?php echo lang('translation.Learning') ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo base_url(); ?>admin/learning" class="small-box-footer"><?php echo lang('translation.More info') ?> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
       
        
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $admin_model->countOnboardingEventsAttendance() ?></h3>

              <p><?php echo lang('translation.Events Enquiries') ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo base_url(); ?>admin/event_list" class="small-box-footer"><?php echo lang('translation.More info') ?> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
         <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $admin_model->countOnboardingFiles() ?></h3>

              <p><?php echo lang('translation.Data Room Files') ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo base_url(); ?>admin/files" class="small-box-footer"><?php echo lang('translation.More info') ?> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo 0 //$admin_model->getActiveUsers(); ?></h3>

              <p><?php echo lang('translation.User Activity') ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo base_url(); ?>admin/all_active_user" class="small-box-footer"><?php echo lang('translation.More info') ?> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    
    </div>
    <strong>Copyright &copy; 2024 <a href="#"></a>.</strong> All rights
    reserved CIPME.
  </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>