<?php $admin_model = new \App\Models\AdminModel(); ?>

<div class="content-wrapper">

<section class="content">
      <div class="row">
        <div class="col-xs-12">
            
          <div class="box">
              
            <div class="box-header">
              <h3 class="box-title">All Connections</h3>
            </div>
            <!-- /.box-header -->
            
            <div class="box-body">
            <a class="btn btn-primary pull-right btn btn-info"  href="<?php echo base_url(); ?>admin/export/all_connections/">Export</a>
                <!-- <input type="hidden" name="column_value" value="" > -->
                 <!--  <button type="submit" name="submit" class="btn btn-primary" class="btn btn-info ">Export</button>
                </form> -->
                <br><br>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Date</th>
                  <th>Type</th>
                  <!-- <th>Investor/Corporate/Mentor</th> -->
                  <th>Startup</th>
                  <th>Info</th>
                  <th>Status</th>
				 
                  <th></th>
                 
                </tr>
                </thead>
				<tbody>
				<?php 
				$n = 1;
				$row = $admin_model->getAllGFAConnections();  foreach($row as $rowArray){  
					
				
				?>
                  <tr class="myTable<?php //echo $rowArray['id'] ?>">
				  
                    <td><?php echo $rowArray['time_submit'] ; ?></td>
                    <td><?php echo $rowArray['connection'] ; ?></td> 
                    
                    
                    <td>
                    <?php echo '<b>'.$admin_model->getAllStartUpNByEmail($rowArray['email_startup'])[0]['Primary_Contact_Name'].'</b><br>' ?> 
                    <?php echo $admin_model->getAllStartUpNByEmail($rowArray['email_startup'])[0]['Startup_Company_Name'].'<br>' ?>
                    <?php echo $rowArray['email_startup']; ?>
                    </td>
                    <td><?php echo $rowArray['more_info'] ; ?> </td>
                    <td><?php echo $rowArray['status']; ?></td>
                    <td><?php echo $rowArray['extra_status'] ; ?> </td>
                    <!-- <td class="display<?php echo $rowArray['id'] ?>"><a href="<?php echo base_url(); ?>admin/sendeventrequest/<?php echo $rowArray['id']?>"><i class="fa fa-fw fa-external-link"></i> Send More Info  </a> 
                    <a href="#"  class="deletebtn"><i class="fa fa-fw fa-trash"></i><span style="display: none;"><?php echo $rowArray['id'] ?></span></a></td> -->
                  </tr>
				 
                  <?php } ?>

				
				</tbody>
                
                <tfoot>
                 </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
<script type="text/javascript">
          $(function(){

            // $("a.clientId").click(function(){
            //   //var clientId = $(this).attr("clientId");
             
            //   var clickedValue = $(this).find('p').text();
            //   var clientName = $(this).find('span').text();
            //      $(".showClientId").val(clickedValue);
            //      //$(".clientName").val(clientName);
            // });


            $("tr").on('click','.deletebtn',function() {
    var id = $(this).find('span').text();
    //$(".showDataDel").val(id);
  var choice = confirm('Do you really want to delete this record?');
    if(choice === true) {
  $(this).closest('tr').remove();
        //$('tr.myTable').remove();
    
    $.ajax({
     data:{id:id},
     type: "POST",
     url: "<?php echo base_url(); ?>admin/deleteCredit",
   //error:function() {$(".saveAdminLogin").html('<i class="material-icons left">close</i>Error');},
   //beforeSend:function() {$(".saveAdminLogin").html('<i class="material-icons left">sync</i>Sending...');},
      success: function(data) {
        
    
    $(".showDataDel").val();
    
    
    
    
    }
      
    });
    }
  
    
  return false;
}); 

  

          });

        </script>
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













