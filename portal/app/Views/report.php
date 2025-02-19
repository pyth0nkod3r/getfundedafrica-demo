
    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Dashboard Analytics Start -->
<section id="dashboard-analytics">


  <div class="row match-height">
<!--   The investor name & title -->

<!--The industries the investor invests in -->
<i data-feather="list" class="user-timeline-title-icon"></i>
            <h4 class="card-title"><?php echo lang('translation.Weekly Report') ?></h4>
<!--The size of cheques the investor writes -->

<!--The investment stage -->

<!--Options to reach out -->
 <!-- Company Table Card -->
    <div class="col-lg-12 col-12 ">
        <div class="col-lg-12 text-center mb-2">
        
        </div>
      <div class="card card-company-table">
        <div class="card-body p-0">
           <section id="responsive-datatable">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header border-bottom">
          <!--<h4 class="card-title">Responsive Datatable</h4>-->
        </div>
        <div class="card-datatable">
          <table class="dt-responsiveX table">
            <thead>
              <tr>
               
                <th><?php echo lang('translation.S/NO') ?></th>
                <th><?php echo lang('translation.DATE') ?></th>
                <th><?php echo lang('translation.REPORT') ?></th>
                <th><?php echo lang('translation.OTHER INFO') ?></th>
                
              </tr>
            </thead>
           <tbody class="loadCorperate">
                 
              <?php 
              $n = 1;
              
              $row = $this->gfa_model->getAllReportByEmail($email);
              foreach($row as $rowArray){
              ?>
                
             
                <tr>
                  <td>
                    <?php echo $n++;  ?>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-primary me-1">
                        <div class="avatar-content">
                          <i data-feather="monitor" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span><?php echo $rowArray['start_date']; ?> - <br><?php echo $rowArray['end_date']; ?></span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25"><strong><?php echo lang('translation.Total Sales') ?>: $</strong><?php echo $rowArray['total_sale']; ?></span>
                      <span class="fw-bolder mb-25"><strong><?php echo lang('translation.Total Expenses') ?>: $</strong><?php echo $rowArray['total_exp']; ?></span>
                      <span class="fw-bolder mb-25"><strong><?php echo lang('translation.Tax') ?>: $</strong><?php echo $rowArray['tax']; ?></span>
                   
                    
                    </div>
                  </td>
                   
     
                  <td>
                    <div class="d-flex align-items-center">
                
                    
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25"><strong><?php echo lang('translation.No of Workers') ?>: </strong><?php echo $rowArray['new_hiring']; ?></span>
                      <span class="fw-bolder mb-25"><strong><?php echo lang('translation.Stopped Workers') ?>: </strong><?php echo $rowArray['employ_term']; ?></span>
                      <span class="fw-bolder mb-25"><strong><?php echo lang('translation.Other info') ?>: </strong><?php echo $rowArray['other_info']; ?></span>
                     <hr></hr>
                        <span class="fw-bolder mb-25"><strong><?php echo lang('translation.CSR') ?>: </strong><?php echo $rowArray['csr_active']; ?></span>
                      <span class="fw-bolder mb-25"><strong><?php echo lang('translation.CRS Amount') ?>: $</strong><?php echo $rowArray['amount']; ?></span>
                      <span class="fw-bolder mb-25"><strong><?php echo lang('translation.CRS Details') ?>: </strong><?php echo $rowArray['csr_active_details']; ?></span>
                    </div>
                    
                

                  
                      <!--<i data-feather="trending-up" class="text-success font-medium-1"></i></a>-->
                    </div>
                  </td>
                </tr>
                
               <?php }  ?>
              </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>  
         
        </div>
      </div>
    </div>
    <!--/ Company Table Card -->
   
  </div>
      

</section>
<!-- Dashboard Analytics end -->

        </div>
      </div>
    </div>
    <!-- END: Content-->


   
  
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

   