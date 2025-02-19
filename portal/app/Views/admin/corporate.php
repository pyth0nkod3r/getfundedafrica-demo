<?php $admin_model = new \App\Models\AdminModel(); ?>
<?php $gfa_model = new \App\Models\GfaModel(); ?>

<div class="content-wrapper">

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">CORPORATE</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a class="btn btn-primary pull-right btn btn-info"  href="<?php echo base_url(); ?>admin/export/cooperate_info/">Export</a>
             
                <br><br>

               <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Contact/Company Name</th>
                  <th>Industry</th>
                  
				  <th>Email</th>
				  <th>Operating Country(ies)</th>
				  <th>Partner startup stage </th>
                  <th>Business need support</th>
                 
                  <th></th>
                  
                </tr>
                </thead>
				<tbody class="showInvestor">
				<?php 
			
				$row = $admin_model->getAllCorporate();  foreach($row as $rowArray){  
					
				
				?>
                  <tr>
				  
                   
                    <td><strong><?php echo $rowArray['Key_contact_name'] ; ?></strong><br>
                    <?php echo $rowArray['Corporate_Name'] ; ?>
                    </td>
                     
                    <td>
                    <?php echo str_replace("?","",$rowArray['Corporate_industry']); ?>
                    </td>
                    

					
                    <td>
                    <?php echo $rowArray['Key_contact_email']; ?>
                    </td>
                    <td>
                    <?php echo $rowArray['Hq_country']; ?>
                    </td>
                    <td>
                    <?php echo $rowArray['Partner_startup_stage']; ?>
                    </td>
                    <td>
                    <?php echo $rowArray['Business_need_support']; ?>
                    </td>
                    
                    <td class="display<?php echo $rowArray['Corporate_ID'] ?>"><a href="<?php echo base_url(); ?>admin/corperate_info/<?php echo $rowArray['Corporate_ID'] ?>"><i class="fa fa-fw fa-external-link"></i> <span>View</span></a> 
                    <!--&nbsp; &nbsp;  <a href="<?php echo base_url(); ?>admin/editcohort/<?php echo $rowArray['id']?>" class=""><i class="fa fa-fw fa-pencil"></i></a><span></span>-->
                    &nbsp; &nbsp;
                    <a href="#"  class="deletebtn"><i class="fa fa-fw fa-trash"></i><span style="display: none;"><?php echo $rowArray['Corporate_ID'] ?></span></a>
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
     url: "<?php echo base_url(); ?>admin/deleteInvestor",
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













