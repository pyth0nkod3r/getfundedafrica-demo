<?php $admin_model = new \App\Models\AdminModel(); ?>

<div class="content-wrapper">

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Login Details</h3>
            </div>
            
                <br><br>
            <!-- /.box-header -->
            <div class="box-body">
              <a class="btn btn-primary pull-right btn btn-info"  href="<?php echo base_url(); ?>admin/export_login/login/">Export</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S/no</th>
                  <th>Details</th>
                  <th>Email</th>
                  <th>Password</th>

                  <th>Account_type</th>
                 
                  <th>Time_submit</th>
<th>Status</th>
				  
 <th>Access</th>
                  
                  
                  
                 
                </tr>
                </thead>
				<tbody>
				<?php 
				$n = 1;
				$row = $admin_model->getAllLoginUsers();  foreach($row as $rowArray){  
					//$subType = $admin_model->getSubPay($rowArray['email'],$rowArray['service'] ); 
					//$profile_request = $admin_model->getUser($rowArray['email']);  
				
				?>
                  <tr class="myTable<?php //echo $rowArray['id'] ?>">
				  
                    <td><?php echo $n++ ?></td>
                    <td><a href="<?php echo base_url(); ?>admin/checkusers/<?php echo $rowArray['account_type']; ?>/<?php echo $rowArray['email'] ?>" class="btn btn-primary">Profile Details</a></td>
                    <td><?php echo $rowArray['email'] ?></td>
                   
                    <td><?php echo '*********'; //$rowArray['password'] ; ?> </td>
                    
                    <td><?php if(!empty($rowArray['extra_info'])){ echo $rowArray['extra_info'];}else{ echo $rowArray['account_type']; } ?></td>
                    
                    
                    <td><?php echo $rowArray['date']; ?></td>
                     <td>
                    <span class="showStatus<?php echo $rowArray['id']; ?>"><?php  if($rowArray['status'] =='active'){ echo 'active'; }elseif($rowArray['status'] =='de-active'){ echo 'De activate'; }else{ echo 'pending' ; } ?> </span>
                    </td>
					 <td>
                    <input type="hidden" class="file_id<?php echo $rowArray['id']; ?>" value="<?php echo $rowArray['id']; ?>"  />
                    <select name="file_status" class="file_status<?php echo $rowArray['id']; ?>">
                       <option value="de-active">select option</option>
                      <option value="active">Active</option> 
                      <option value="de-active">De-active</option>
                     
                      
                        
                    </select>
                    
                    </td>
                    
                    	
                    	
                    	
                    		
                  
                  </tr>
                    
                    <script>
              
              $(function(){
                
                $('.file_status<?php echo $rowArray['id']; ?>').change(function(){
                 
            var file_status = $('.file_status<?php echo $rowArray['id']; ?>').val();
            var id = $('.file_id<?php echo $rowArray['id']; ?>').val();
             $.ajax({
     data:{id:id,file_status:file_status},
     type: "POST",
     url: "<?php echo base_url(); ?>admin/userauth",
	 error:function() {$(".showStatus<?php echo $rowArray['id']; ?>").html('Error')},
	 beforeSend:function() {$(".showStatus<?php echo $rowArray['id']; ?>").html('checking...')},
      success: function(data) {
        $('.showStatus<?php echo $rowArray['id']; ?>').text(file_status);
		//if(data==1){
// 		$(".saveCohortForm").html('Event Info Sent');
//          $('.creditBtn').prop("disabled", true );
      }
    });   
            
            
                });
                  
              });
          </script>
				
				<?php }  ?>
				</tbody>
                
                <tfoot>
                 </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

<script type="text/javascript">
function load()
{
setTimeout("window.open(self.location, '_self');", 60000);
}
</script>


          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>













