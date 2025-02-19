 <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0"><?php echo lang('translation.Update Story') ?></h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>gfa/dashboard"><?php echo lang('translation.Home') ?></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#"><?php echo lang('translation.Startup') ?></a>
                    </li>
                    
                    
                  </ol>
                </div>
              </div>
            </div>
          </div>
         
        </div>
        <div class="content-detached content-left">
          <div class="content-body"><!-- Blog Detail -->
<div class="blog-detail-wrapper">
  <div class="row">
    <!-- Blog -->
      <div class="col-12 mt-1">
      <h6 class="section-label mt-25"></h6>
      <div class="card">
        <div class="card-body">
            <?php
            
            
            $updateStory =  $this->gfa_model->getTellYourStoryById($email,$id);   
            
            ?>
          <form action="#" id="#storyForm" class="form storyForm" enctype="multipart/form-data">
            <div class="row">
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="text" name="title" class="form-control" required placeholder="<?php echo lang('translation.Title') ?>" value="<?php echo $updateStory[0]['title'] ?>" />
                </div>
              </div>
              <div class="col-sm-6 col-12">
                  <label><?php echo lang('translation.Story Cover Picture') ?> </label>
                <div class="mb-2">
                  <input type="file" name="file[]" class="form-control" placeholder="Story Cover Picture"  />
                  <input type="hidden" class="form-control" name='getfile' value="<?php echo $updateStory[0]['picture'] ?>"  />
                  <input type="hidden" class="form-control" name='id' value="<?php echo $id ?>"  />
                </div>
              </div>
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="text" class="form-control" name="videourl" placeholder="<?php echo lang("translation.Video Url (youtube, vimeo e.t.c)") ?>"  value="<?php echo $updateStory[0]['videourl'] ?>" />
                </div>
              </div>
              <div class="col-12">
                <textarea class="form-control mb-2" name="story" required rows="4" placeholder="<?php echo lang('translation.Startup Story') ?>"><?php echo $updateStory[0]['story'] ?></textarea>
              </div>
             
              <div class="col-12">
                <button type="submit" class="btn btn-primary storyBtn"><?php echo lang('translation.Update Story') ?></button><span class="displayAction"></span>
              </div> 
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--/ Blog -->
    
    <script>
      $(function(){
          
          
          
          
           $(".storyForm").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
	//$(".saveFile3").html('Finish Uploading');
    var form = $(this)[0];
        var formData = new FormData(form);
      
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/storyeditpro",
	 error:function() {$(".displayAction").html('Error')},
	 beforeSend:function() {$(".displayAction").html('Mise à jour de l\'histoire...'); $(".storyBtn").prop('disabled', true);},
	 processData: false,
    contentType: false,
      success: function(data) {
        
	 $(".displayAction").html(data);  
	   //$(".saveBtn").html(data); 
		 $(".storyBtn").prop('disabled', true);

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
        <div class="sidebar-detached sidebar-right">
          <div class="sidebar"><div class="blog-sidebar my-2 my-lg-0">
  <!-- Search bar -->
  <div class="blog-search">
    <div class="input-group input-group-merge">
      <input type="text" class="form-control" placeholder="<?php echo lang('translation.Search here') ?>" />
      <span class="input-group-text cursor-pointer">
        <i data-feather="search"></i>
      </span>
    </div>
  </div>
  <!--/ Search bar -->

  <!-- Recent Posts -->
  <div class="blog-recent-posts mt-3">
    <h6 class="section-label"><?php echo lang('translation.Your Posted Stories') ?></h6>
    <div class="mt-75">
<?php 

$row =  $this->gfa_model->getTellYourStory($email); foreach($row as $rowStoryArray){ ?>
      <div class="d-flex mb-2">
        <a href="<?php echo base_url()?>gfa/tellyourstory/<?php echo $rowStoryArray['title']; ?>" class="me-2">
          <img
            class="rounded"
            src="<?php echo base_url()?>uploads/files/<?php echo $rowStoryArray['picture'] ?>"
            width="100"
            height="70"
            alt="Add Story Picture "
          />
        </a>
        <div class="blog-info">
          <h6 class="blog-recent-post-title">
            <a href="<?php echo base_url()?>gfa/tellyourstory/<?php echo $rowStoryArray['title']; ?>" class="text-body-heading"><?php echo $rowStoryArray['title'] ?></a>
          </h6>
          <div class="text-muted mb-0"><?php echo date('M d Y', strtotime($rowStoryArray['time_submit'])) ?> | <?php echo $rowStoryArray['status']; ?> </div>
          <div class="text-muted mb-0"><a href="<?php echo base_url()?>gfa/tellyourstory/<?php echo $rowStoryArray['title']; ?>"><?php echo lang('translation.View') ?></a> | <a href="<?php echo base_url()?>gfa/edit_story/<?php echo $rowStoryArray['story_id']; ?>"><?php echo lang('translation.Edit') ?></a> | <a href=""><?php echo lang('translation.Delete') ?></a>  </div>
        </div>
      </div>
      
      <?php  }   ?>
      
    </div>
  </div>
  <!--/ Recent Posts -->

  <!-- Categories -->
  
  <!--/ Categories -->
</div>

          </div>
        </div>
      </div>
    </div>