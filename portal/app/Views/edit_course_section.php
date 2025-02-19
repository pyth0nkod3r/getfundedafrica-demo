<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $this->admin_model = model('App\Models\AdminModel');
   ?>
<div class="app-content content">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Edit Course Section</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <!--<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>gfa/Course Category">All Course Category</a>-->
                    <!--</li>-->
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>gfa/manage_course_Section">Manage Course Category</a>
                    </li>
                    
                    
                  </ol>
                </div>
              </div>
            </div>
          </div>
         
        </div>

          <div class="content-body"><!-- Blog Detail -->
<div class="blog-detail-wrapper">
  <div class="row">
    <!-- Blog -->
      <div class="col-12 mt-1">
      <h6 class="section-label mt-25"></h6>
      <div class="card">
<!--      <div class="alert alert-info" role="alert">-->
<!--              <h4 class="alert-heading">Note</h4>-->
<!--              <div class="alert-body">-->
                  
               
<!--<p>Criteria for approving submitted events below:</p>-->
<!--<ul>-->
<!--<li>You must not promote tribal, ethnic or religious divisiveness at any level</li>-->
<!--<li>You must not be seen to contravene applicable laws of the country of origin</li>-->
<!--<li>You must have updated your GFA profile to at least 50% completion.</li>-->
<!--</ul>-->
<!--              </div>-->
<!--            </div>-->
        <div class="card-body">
          <form action="#" id="#EventForm" class="form EventForm" enctype="multipart/form-data">
            <div class="row">
            <?php $getCourseSection = $this->gfa_model->getCourseSection($id);  ?>
              
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <select  class="form-select fetchSection" name="course_id" placeholder="Course">
                  <option value="<?php echo $getCourseSection[0]['course_id'] ?>"><?php echo $this->gfa_model->getCourseById($getCourseSection[0]['course_id'])[0]['coursetitle'] ?></option>    
                <?php $getCourseData = $this->gfa_model->getAllCourses(); foreach($getCourseData as $getCourse){  ?>
                  <option value="<?php echo $getCourse['id'] ?>"><?php echo $getCourse['coursetitle'] ?></option>
                  <?php }  ?>
                    </select>
                </div>
              </div>
              <div class="col-sm-6 col-12">
              <!--<label>Course Category Title </label>-->
                <div class="mb-2">
                  <input type="text" name="title" class="form-control" required placeholder="Course Section Title" value="<?php echo $getCourseSection[0]['title'] ?>" />
                </div>
              </div>
                    
              
    </div>
     <input type="hidden" class="id" name="id" value="<?php echo $id; ?>">         
    <input type="hidden" class="ref_id" name="ref_id" value="<?php //echo time(); ?>">
              <div class="col-12">
                <button type="submit" class="btn btn-primary EventBtn mb-2">Submit</button><span class="displayAction"></span>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--/ Blog --> 
   
    <hr class="invoice-spacing" />
        
        <!--/ form -->
      </div>
    </div>
    
    <script>
      $(function(){
          
          
         
          
          
          
           $(".EventForm").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
	//$(".saveFile3").html('Finish Uploading');
    var form = $(this)[0];
        var formData = new FormData(form);
        var textData = $('.textData').html();
        var ref_id = $('.ref_id').val();
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url("gfa/edit_coursesectionpostpro"); ?>",
	 error:function() {$(".displayAction").html('Error')},
	 beforeSend:function() {$(".displayAction").html('Updating Course Category...'); $(".EventBtn").prop('disabled', false);},
	 processData: false,
    contentType: false,
      success: function(data) {
        
	 $(".displayAction").html(data);  
	   //$(".saveBtn").html(data); 
		 $(".EventBtn").prop('disabled', false);
     //window.open("<?php echo base_url(); ?>gfa/manage_Course Category", "_self");



      }
    });

   
    return false;

  });
         
          
          
      });  
    </script>

    <!-- Blog Comment -->
   
    <!--/ Blog Comment -->

    <!-- Leave a Blog Comment -->
   
    <!--/ Leave a Blog Comment -->
  </div>
</div>
<!--/ Blog Detail -->

          </div>
        
        
      </div>
    </div>