
    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
      <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Manage Perks Posted</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>gfa/perks">All Perks</a>
                    </li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>gfa/add_perks">+ Add more Perks </a>
                    </li>
                    
                    
                  </ol>
                </div>
              </div>
            </div>
          </div>
        <div class="content-body"><!-- Dashboard Analytics Start -->
<section id="dashboard-analytics">


  <div class="row match-height">
<!--   The investor name & title -->

<!--The industries the investor invests in -->

<!--The size of cheques the investor writes -->

<!--The investment stage -->

<!--Options to reach out -->
 <!-- Company Table Card -->
    <div class="col-lg-12 col-12 ">
        
      <div class="card card-company-table">
        <div class="card-body p-0">
            
          <div class="table-responsive">
              
               
            <table class="table">
              <thead>
                   <tr>
                      <td>
            
              </td>
              <td>
            
              </td>
               <td>
            
              </td>
               <td>
                <div class="col-xl-6 col-md-6 col-12">
              <!--<div class="mb-1">-->
              <!--  <label class="form-label" for="basicInput">Search Jobs</label>-->
              <!--  <input type="text" name="searchJobs" class="form-control searchJobs" id="basicInput" placeholder="Enter search">-->
              <!--</div>-->
            </div>
              </td>
              </tr>
                <tr>
                  <th>Date Posted</th>
                  <th>Title</th>
                  <th>Company</th>
                  <th>Status</th>
                  <th class="locationChange">Qty</th>
                  
                  <th></th>
                </tr>
              </thead>
              <tbody class="loadCorperate">
                 
              
                <?php
                
                
                if($email == 'admin@getfundedafrica.com'){
                $row = $this->gfa_model->getAllPerks();
                }else{

                    $row = $this->gfa_model->getPerksByEmail($email);  
                }
				foreach($row as $rowArray){
				   
                ?> 
             
                <tr>
                <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-primary me-1">
                        <div class="avatar-content">
                          <i data-feather="calendar" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span><div class="fw-bolder"><?php echo $rowArray['start_date'] ?></div></span>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      
                      <div>
                        <div class="fw-bolder"><?php echo $rowArray['title'] ?></div>
                      </div>
                    </div>
                  </td>
                 
                  <td> <?php echo $rowArray['company_name'] ?> </td>
                  
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-primary me-1">
                        
                      </div>
                      <span><?php echo $rowArray['status'] ?></span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                       <?php echo $rowArray['qty']; ?>
                      
                    </div>
                  </td>
                   
     
                  <td>
                    <div class="d-flex align-items-center">
                
               <a href="<?php echo base_url()?>gfa/perks" ><i data-feather="external-link" class="text-success font-medium-1"></i>View</a> <?php  if($admin_access=='sub-admin'){ echo '';}else{ ?>| 
               <a href="<?php echo base_url()?>gfa/edit_perks/<?php echo $rowArray['id']; ?>" ><i data-feather="edit" class="text-success font-medium-1"></i>Edit</a> <?php if($rowArray['status']=='active'){ echo '';}else{ ?> | 
               <a href="#" alt="delete Cohort" class="deletebtn"><i data-feather="trash" class="text-success font-medium-1"></i>Delete<span style="display: none;"><?php echo $rowArray['ref_id'] ?></span></a>
               <?php }  ?>
               <?php }  ?>
                    </div>
                  </td>
                </tr>

                
                <?php   }  ?>
               
              </tbody>
            </table>
          </div>
        </div>
      <!-- </div><span class="showDataDel"></span> -->
    </div>
    <!--/ Company Table Card -->
   
  </div>
        <script>
            
            $(function(){

              $(".copyLink").click(function(){
                // Select the input element with the string
                $(this).find('span').html('Copied');
var stringInput = $(this).find('p'); //$('.string-input');

// Get the value of the string
var stringToCopy = stringInput.text();

// Create a temporary input element to copy the string
var tempInput = $('<input>');

// Append the input element to the body
$('body').append(tempInput);

// Set the value of the input element to the string
tempInput.val(stringToCopy);

// Select the input element
tempInput.select();

// Copy the selected text to the clipboard
document.execCommand("copy");

// Remove the temporary input element
tempInput.remove();


              });

              $("tr").on('click','.deletebtn',function() {
    var ref_id = $(this).find('span').text();
    //$(".showDataDel").val(id);
  var choice = confirm('Do you really want to delete this record?');
    if(choice === true) {
  $(this).closest('tr').remove();
        //$('tr.myTable').remove();
    
    $.ajax({
     data:{ref_id:ref_id},
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/deletePerks",
   //error:function() {$(".saveAdminLogin").html('<i class="material-icons left">close</i>Error');},
   //beforeSend:function() {$(".saveAdminLogin").html('<i class="material-icons left">sync</i>Sending...');},
      success: function(data) {
        
    
    // $(".showDataDel").html(data);
    
    
    
    
    }
      
    });
    }
  
    
  return false;
}); 
                
                $(".searchJobs").keyup(function(){
                    // $(".locationChange").html("Need Location");
                      var industry = $('.searchJobs').serialize();
                             
                             $.ajax({
     data:industry,
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/searchJobs",
	 error:function() {$(".loadCorperate").html('Error loading Data');},
	 beforeSend:function() {$(".loadCorperate").html('loading data...');},
     success: function(data) {
        
		
		$(".loadCorperate").html(data);
	
		}
                    
                });
                
               
               
                
            });
            
             $(".service").change(function(){
                //  $(".locationChange").html("Service Location");
                      var service = $('.service').serialize();
                             
                             $.ajax({
     data:service,
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/industry_corp_service",
	 error:function() {$(".loadCorperate").html('Error loading Data');},
	 beforeSend:function() {$(".loadCorperate").html('loading data...');},
     success: function(data) {
        
		
		$(".loadCorperate").html(data);
	
		}
                    
                });
                
               
               
                
            });
            });
            
        </script>

</section>
<!-- Dashboard Analytics end -->

        </div>
      </div>
    </div>
    <!-- END: Content-->


   
  
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

   