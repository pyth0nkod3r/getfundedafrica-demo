<div class="content-wrapper">

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?php echo str_replace('_','',strtoupper($event)) ?> WEBINARS REGISTERED</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form class="pull-right" method="POST" action="<?php echo base_url(); ?>download/export/event_attend/event">
                  <input type="hidden" name="column_value" value="<?= $this->uri->segment('3')  ?>" >
                  <button type="submit" name="submit" class="btn btn-primary" class="btn btn-info ">Export</button>
                </form>
                <br><br>
               <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>S/no</th>    
                <th>Contact/Company Name</th>
                  <th>Industry</th>

				  <th>Email</th>
				  
                  <th>Business Solution</th>
                  <th>Core Interest</th>
                  <th>Business Model</th>
                  <th>Date</th>
                  <th></th>

                </tr>
                </thead>
				<tbody class="showInvestor">
				<?php 
			
				$n= 1;
				$row = $this->admin_model->getAllWebinarReg($event);  foreach($row as $rowArray){  
				$rowStartup = $this->admin_model->getAllStartUpNByEmail($rowArray['email']);  
				$rowStartup_Ext = $this->admin_model->getAllStartUpNByEmailExtX($rowArray['email'])	

				?>
                  <tr>
				   <td>
                    <?php echo $n++ ; ?>
                    </td>
                   
                    <td><strong><?php echo $rowStartup[0]['Primary_Contact_Name'] ; ?></strong><br>
                    <?php echo $rowStartup[0]['Startup_Company_Name'] ; ?>
                    </td>
                     
                    <td>
                    <?php echo str_replace("?","",$rowStartup[0]['PrimaryBusinessIndustry']); ?>
                    </td>
                    

					
                    <td>
                    <?php echo $rowStartup_Ext[0]['Email']; ?>
                    </td>
                    <td>
                    <?php echo $rowStartup_Ext[0]['Solution_Corperate']; ?>
                    </td>
                    <td>
                    <?php echo $rowStartup_Ext[0]['Core_Interest_Corporate']; ?>
                    </td>
                    <td>
                    
                    <strong></strong><?php echo $rowStartup_Ext[0]['Startup_Model']; ?><br>
                    
                    </td>
                   <td><?php echo date('d-m-Y', strtotime($rowStartup_Ext[0]['date'])); ?></td>
                    <td class="display<?php echo $rowStartup[0]['STUP_ID'] ?>"><a href="<?php echo base_url(); ?>admin/startupsinfo/<?php echo $rowStartup[0]['STUP_ID'] ?>"><i class="fa fa-fw fa-external-link"></i> <span>View</span></a> 
                    <!--&nbsp; &nbsp;  <a href="<?php echo base_url(); ?>admin/editcohort/<?php echo $rowArray['id']?>" class=""><i class="fa fa-fw fa-pencil"></i></a><span></span>-->
                    &nbsp; &nbsp;
                    <a href="#"  class="deletebtn"><i class="fa fa-fw fa-trash"></i><span style="display: none;"><?php echo $rowStartup[0]['STUP_ID'] ?></span></a>
                    </td>
                    
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
     url: "<?php echo base_url(); ?>admin/deleteStartup",
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













