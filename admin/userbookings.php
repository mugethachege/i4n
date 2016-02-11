<?php
//session_start();
include_once 'include/config.php';

// delete condition
if(isset($_GET['id']))
{
 $sql_query="DELETE FROM admin WHERE admin_id=".$_GET['id'];
 mysql_query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>
<script type="text/javascript">
function edit_id(id)
{
 if(confirm('Sure to edit ?'))
 {
  window.location.href='approvebooking.php?edit_id='+id;
 }
}
function id(id)
{
 if(confirm('Sure to Delete this admin ?'))
 {
  window.location.href='admins.php?id='+id;
 }
}
</script>
<?php
  require('layout/sidebar.php')
?>
  
      
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
         </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">         
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Add more Venues</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <div class="btn-group">
                      <button class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></button>
                    </div>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                            <!-- user bookings -->
                
                
                                      <table id="example" class="table table-striped table-bordered display">
                                                      <thead class="table_header">
                                                        <tr>
                                                       <!--   <th>Building</th>-->
                                                          <th>Room</th>
                                                          <th>Real Time</th>
                                                          <th>Start Date</th>
                                                          <th>Start Time</th>
                                                          <th>End Date</th>
                                                          <th>End Time</th>
                                                          <th>User Email</th>
                                                          <th>Organization</th>
                                                          <th>Event Name</th>
                                                          <th>Status</th>
                                                        </tr>
                                                      </thead>
                                                      <tbody>
                                                       <?php
													   
                                                          $sql_query="SELECT * FROM booking";
                                                          $result_set=mysql_query($sql_query);
                                                          while($row=mysql_fetch_row($result_set))
                                                         {
                                                            ?>
                                                         <tr class="replyandmark">
                                                         <!-- <td id="building"><?php echo $row[1]; ?></td>-->
                                                          <td id="room"><?php echo $row[2]; ?></td>
                                                          <td id="realtime"><?php echo $row[3]; ?></td>
                                                          <td id="startdate"><?php echo $row[4]; ?></td>
                                                          <td id="starttime"><?php echo $row[6]; ?></td>
                                                          <td id="enddate"><?php echo $row[5]; ?></td>
                                                          <td id="endtime"><?php echo $row[7]; ?></td>
                                                          <td id="useremail"><?php echo $row[8]; ?></td>
                                                          <td id="organisation"><?php echo $row[9]; ?></td>
                                                          <td id="eventname"><?php echo $row[10]; ?></td>
                                                          <td id="status"><?php echo $row[11]; ?></td>
                                                            
                                                            
                                                            <td align="center"><a href="javascript:edit_id('<?php echo $row[0]; ?>')"><button type="button" id="validate" name="validate" class="btn btn-block btn-primary btn-xs"> <div class="fa fa-mail-reply"></div> Validate</button></a></td>
                                                            
                                                           <!-- <td align="center"><a href="javascript:mark_id('<?php echo $row[0]; ?>')"><button type="button" class="btn btn-block btn-success btn-xs" name="deny" > <div class="fa fa-folder-open"></div> Deny</button></a></td>-->
                                                         
                                                         </tr>
                                                         <?php
                                                              }
                                                            ?>
                                                      </tbody>
                                                  </table>
                
                
                        <!-- /user bookings -->
                      
                </div><!-- ./box-body -->
                
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
                 </div>
        <strong>Copyright &copy; 2015 <i class="fa fa-institution"></i> Evenues</a>.</strong> All rights reserved.
      </footer>     
      <?php
        require('layout/footer.php')
      ?>
