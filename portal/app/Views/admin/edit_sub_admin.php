<div class="content-wrapper">

 <!-- Content Header (Page header) -->
    <!--<section class="content-header">-->
    <!--  <h1>-->
    <!--    Startup-Investor-->
    <!--  </h1>-->
    <!--  <ol class="breadcrumb">-->
    <!--    <li><button type="submit" class="btn btn-default pull-left closeBtnX" style="display:none;">X Close Form Displayed</button></li>-->
       
    <!--    <li class="active"></li>-->
    <!--  </ol>-->
    <!--</section>-->

    <!-- Main content -->
    <section class="content">
     <div class="row displayForm">
        <div class="col-md-6">

          <div class="box box-danger">
            <!--<div class="box-header">-->
            <!--  <h3 class="box-title">Start Ups CSV Upload</h3>-->
            <!--</div>-->
            <!--<div class="box-body">-->
              <!-- Date dd/mm/yyyy -->
            <!--  <form id="startUpsFile" action="" method="post" enctype="multipart/form-data">-->
            <!--  <div class="input-group input-group-sm">-->
            <!--    <input type="file" class="form-control" name="file[]">-->
            <!--        <span class="input-group-btn">-->
            <!--          <button type="submit" class="btn btn-info btn-flat">Upload</button>-->
            <!--        </span>-->
            <!--  </div>-->
            <!--  <span class="saveFile"></span>-->
            <!--  </form>-->
              <!-- /.form group -->

              <!-- Date mm/dd/yyyy -->
             
              <!-- /.form group -->

            <!--</div>-->
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Edit Sub Admin</h3>
            </div>
            
            <div class="box-body">
              <!-- Color Picker -->
              <form role="form" id="sendCreditForm" action="" method="post">
              <div class="box-body">
                <div class="form-group">
                  <input type="text" name="name" value="<?php echo $row[0]['name'] ?>" required placeholder="Name" class="form-control"  value="">
                </div>
                <div class="form-group">
                  <input type="email" name="email" value="<?php echo $row[0]['email'] ?>" required class="form-control" placeholder="Email"  value="">
                </div>
                
               <input type="hidden" value="<?php echo $row[0]['id'] ?>" name="id">
                <div class="form-group">
                  <input type="password" name="password" value="<?php echo $row[0]['password'] ?>" required class="form-control resetPass" placeholder="password"  value="">
                  <p class="displayError"></p>
                </div>
                    
                <div class="form-group">
                  <input type="text" name="confirm_password" value="<?php echo $row[0]['password'] ?>" class="form-control oldPass" placeholder="Confirm password" disabled  value="">
                </div>

                <div class="form-group">
                  <select type="text" name="status" class="form-control " >
                    <option value="<?php echo $row[0]['status'] ?>"><?php echo ucfirst($row[0]['status']) ?></option>
                    <option value="active">Active</option>
                    <option value="de-active">De-Active</option>

                  </select>
                </div>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary creditBtn">Update</button>
              </div>
             <span class="saveCohortForm"></span>
            </form>
              <!-- /.form group -->

              <!-- Color Picker -->
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
<script>
                     $(function(){
                         
                       $(".resetPass").on('input', function(){
        var newPass = $(this).val();  
        

        $(".oldPass").val(newPass);
        
        // Define the password strength criteria using a regular expression
        var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/;
        
        // Test the new password against the regex
        if(passwordRegex.test(newPass)){
            // If password meets all criteria, hide the error message and enable the submit button
            $('.displayError').hide();
            $(".creditBtn").prop('disabled', false);
        } else {
            // If password does not meet criteria, show the error message and disable the submit button
            $('.displayError').show().text('Password must be at least 8 characters long and include uppercase, lowercase, number, and symbol.');
            $(".creditBtn").prop('disabled', true);
        }
    });

 $("#sendCreditForm").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
    var CreditForm = $('#sendCreditForm').serialize();
      
    $.ajax({
     data:CreditForm,
     type: "POST",
     url: "<?php echo base_url(); ?>admin/editsubadmin",
   error:function() {$(".saveCohortForm").html('Error')},
   beforeSend:function() {$(".saveCohortForm").html('Submitting Details...'); $('.creditBtn').prop("disabled", true );},
      success: function(data) {
        
    
        $(".saveCohortForm").html(data);

       
        $('.creditBtn').prop("disabled", false );
      }
    });
    //return false;

  });
                         
                         //Fetch County by Region 
                         
                         
 
                       
                         
                         
          
                         
                         
                         
                          
  
  //Initialize Select2 Elements
    $(".select2").select2();

                     });
                     
                  </script>
        </div>
        <!-- /.col (left) -->
        <div class="col-md-6">
          <div class="box box-primary">
            <!--<div class="box-header">-->
            <!--  <h3 class="box-title">Investors CSV Form Upload</h3>-->
            <!--</div>-->
            <!--<div class="box-body">-->
              <!-- Date -->
            <!--  <form id="investorsFile" action="" method="post" enctype="multipart/form-data">-->
            <!--  <div class="input-group input-group-sm">-->
            <!--    <input type="file" class="form-control" name="file[]">-->
            <!--        <span class="input-group-btn">-->
            <!--          <button type="submit" class="btn btn-info btn-flat">Upload</button>-->
            <!--        </span>-->
            <!--  </div>-->
            <!--  <span class="saveFileInv"></span>-->
            <!--  </form>-->
              <!-- /.form group -->

             

            <!--</div>-->
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- iCheck -->
          <!--<div class="box box-success">-->
          <!--  <div class="box-header">-->
          <!--    <h3 class="box-title">Investors Form</h3>-->
          <!--  </div>-->
          <!--  <div class="box-body">-->
              <!-- Minimal style -->

              <!-- checkbox -->
          <!--   <form role="form" id="investorsForm" action="" method="post">-->
          <!--    <div class="box-body">-->
          <!--      <div class="form-group">-->
          <!--        <input type="text" name="name" class="form-control"  required  placeholder="Enter Full Name">-->
          <!--      </div>-->
          <!--      <div class="form-group">-->
          <!--        <input type="text" name="company_name" class="form-control" required   placeholder="Enter Company name">-->
          <!--      </div>-->
          <!--      <div class="form-group">-->
          <!--        <input type="text" name="preference" class="form-control" required placeholder="Enter preference">-->
          <!--      </div>-->
                <!--<div class="form-group">-->
          <!--        <input type="hidden" name="title" class="form-control"  placeholder="Enter title">-->
                <!--</div>-->
                <!--<div class="form-group">-->
          <!--        <input type="hidden" name="gender" class="form-control"   placeholder="Enter gender">-->
                <!--</div>-->
          <!--      <div class="form-group">-->
          <!--        <input type="text" name="position" class="form-control"   placeholder="Enter position">-->
          <!--      </div>-->
          <!--      <div class="form-group">                  <input type="date" name="date_founded" class="form-control" required  placeholder="Enter Date Founded">-->
          <!--      </div>-->
          <!--      <div class="form-group">-->
          <!--        <input type="text" name="investor_type" class="form-control" required  placeholder="Enter investor types">-->
          <!--      </div>-->
          <!--      <div class="form-group">-->
          <!--        <input type="text" name="website" class="form-control" required  placholder="Enter website">-->
          <!--      </div>-->
          <!--      <div class="form-group">-->
          <!--        <input type="text" name="phone" class="form-control" required  placeholder="Enter Phone">-->
          <!--      </div>-->
          <!--      <div class="form-group">-->
          <!--        <input type="email" name="email" class="form-control" required  placeholder="Enter Email">-->
          <!--      </div>-->
                
          <!--      <div class="form-group">-->
          <!--        <input type="text" name="investment_stage_focus" class="form-control" required  placeholder="investment stage focus">-->
          <!--      </div>-->
          <!--      <div class="form-group">-->
          <!--      <label></label>-->
          <!--      <select class="form-control select2 fetchCountryByRegion" name="regional_focus_industries[]" multiple="multiple" required data-placeholder="Regional focus industries" style="width: 100%;">-->
          
         
        
          <!--      </select>-->
          <!--    </div>                <div class="form-group">-->
          <!--        <select class="form-control select2 showCountry" name="country[]" multiple="multiple" required  data-placeholder="country" style="width: 100%;">-->
                  
          <!--      </select>-->
          <!--      </div>-->
                <!--<div class="form-group">-->
                <!--  <input type="text" name="investment_stage_focus" class="form-control" required placeholder="investment stage focus">-->
                <!--</div>-->
          <!--      <div class="form-group">-->
          <!--        <input type="text" name="address" class="form-control" required  placeholder="address">-->
          <!--      </div>-->
          <!--      <div class="form-group">-->
          <!--        <input type="text" name="industry_focus" class="form-control" required  placeholder="industry focus">-->
          <!--      </div>-->
                 <!--<div class="form-group">-->
          <!--        <input type="hidden" name="invested_companies" class="form-control"   placeholder="invested companies">-->
                <!--</div>-->
          <!--      <div class="form-group">-->
          <!--        <input type="text" name="stage_invested_in_africa" class="form-control" required  placeholder="stage invested in africa">-->
          <!--      </div>-->
          <!--      <div class="form-group">-->
          <!--        <input type="text" name="stage" class="form-control" required  placeholder="stage">-->
          <!--      </div>-->
          <!--      <div class="form-group">-->
          <!--        <input type="text" name="investment_level" class="form-control" required  placeholder="investment level">-->
          <!--      </div>-->
          <!--      <div class="form-group">-->
          <!--        <input type="text" name="min_cheque" class="form-control" required placeholder="min cheque">-->
          <!--      </div>-->
          <!--      <div class="form-group">-->
          <!--        <input type="text" name="max_cheque" class="form-control" required  placeholder="max cheque">-->
          <!--      </div>-->
                <!--<div class="form-group">-->
          <!--        <input type="text" name="additional_information" class="form-control"  placeholder="additional information">-->
                <!--</div>-->
                <!--<div class="form-group">-->
          <!--        <input type="hidden" name="experience" class="form-control"  placeholder="experience">-->
                <!--</div>-->
                <!--<div class="form-group">-->
          <!--        <input type="hidden" name="education" class="form-control"  placeholder="education">-->
                <!--</div>-->
                <!--<div class="form-group">-->
          <!--        <input type="hidden" name="degree" class="form-control"  placeholder="degree">-->
                <!--</div>-->
                <!--<div class="form-group">-->
          <!--        <input type="hidden" name="course" class="form-control"  placeholder="course">-->
                <!--</div>-->
          <!--      <div class="form-group">-->
          <!--        <input type="text" name="facebook" class="form-control"  placeholder="Enter Facebook Url">-->
          <!--      </div>-->
          <!--      <div class="form-group">-->
          <!--        <input type="text" name="linkedin" class="form-control"  placeholder="Enter linkedin url">-->
          <!--      </div>-->
          <!--      <div class="form-group">-->
          <!--        <input type="text" name="twitter" class="form-control"  placeholder="Enter twitter Url">-->
          <!--      </div>-->
                <!--<div class="form-group">-->
                <!--  <input type="text" name="instagram" class="form-control"  placeholder="Enter instagram Url">-->
                <!--</div>-->
               
          <!--    </div>-->
              <!-- /.box-body -->

          <!--    <div class="box-footer">-->
          <!--      <button type="submit" class="btn btn-primary">Submit</button>-->
          <!--    </div>-->
          <!--   <span class="saveInvestorsForm"></span>-->
          <!--  </form>-->

              <!-- radio -->
             
          <!--  </div>-->
            <!-- /.box-body -->
            
          <!--</div>-->
          <!-- /.box -->
        </div>
        <!-- /.col (right) -->
      </div>
      <div class="row">
        <div class="col-md-3">
    <?php 
        //  $getSub = $this->admin_model->getSub($id);
        //  $ref_request = $this->admin_model->getStartUp($getSub[0]['email']); 
        //  $profile_request = $this->admin_model->getProfile($getSub[0]['email']);  
        //  $getFile = $this->admin_model->getFile($getSub[0]['email']);
        //  $getFund = $this->admin_model->getFund($getSub[0]['email']);
        //  $getBusiness = $this->admin_model->getBusiness($getSub[0]['email']);
    
    ?>
          <!-- Profile Image -->
          
          <!-- /.box -->

          <!-- About Me Box -->
          
          <!-- /.box -->
        </div>
        <!-- /.col -->
       
       
      
     
      <!-- /.row -->

    </section>
    <!-- /.content -->













