<?php
  require('layout/sidebar.php')
?>
   


<?php
include_once 'include/configmysqli.php';
include_once 'include/config.php';

if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM booking WHERE booking_id=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-approve']))
{
 $postedstatus= $_POST['status'];

       if($postedstatus='APPROVED'){

 // variables for input data
 $bookingstatus= $_POST['status'];
 $roomnamestatus= 'BOOKED';
 $roomname= $_POST['roomname'];
  // variables for input data

 // sql query for update data into database
 $sql_query = "UPDATE booking SET status='$bookingstatus' WHERE booking_id=".$_GET['edit_id'];;
 $sql_query1= "UPDATE rooms SET room_status='$roomnamestatus' WHERE room_name='$roomname'";
 // sql query for update data into database
 
 // sql query execution function
 //if(mysql_query($sql_query))
  if (mysql_query($sql_query)) 
         {
         if(mysql_query($sql_query1)) 
         {

         ?>
         <script type="text/javascript">
        alert('Update Successfull');
  window.location.href='userbookings.php';
  </script>
  <?php
}
 }
 else
 {
 //mysql_error();
  ?>
  <script type="text/javascript">
  alert('Update Not Successfull');
  </script>
  <?php
 }
 // sql query execution function
}
}
if(isset($_POST['btn-cancel']))
{
 header("Location:'userbookings.php");
}

?>

      <<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">admins</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">         
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"> Edit Admin</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <div class="btn-group">
                      <button class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></button>
                     </div>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                 <div class="col-md-9 pull-right">
                   <div class="x_content ">
                     <div class="box-body">
                        <form action="" method="POST" data-parsley-validate >
                         <div class="form-group">
                            <input type="text" name="roomname" class="form-control " value="<?php echo $fetched_row['booking_room']; ?>" readonly>
                              </div>
                                <div class="form-group">
                            <input type="text" name="organization" class="form-control"   value="<?php echo $fetched_row['booking_organization']; ?>" readonly>
                              </div>
                                  <div class="form-group">
                            <input type="text" name="eventname" class="form-control"   value="<?php echo $fetched_row['booking_event_name']; ?>" readonly>
                              </div>
                              <div class="form-group">
                           <!-- <input type="text" name="status" class="form-control "  required>-->

                            <select name="status" class="form-control" required>
                              <option   disabled selected><?php echo $fetched_row['status']; ?></option>
                              <option>APPROVED</option>
                              <option>AVAILABLE</option>

                              </select
                              </div>

                                <div class="upcancel_buttons">
                         <button type="submit" name="btn-approve" class="btn btn-success btn-xs"> <div class="fa fa-edit"></div>Update</button>
                         <button type="submit" name="btn-cancel" class="btn btn-danger btn-xs"> <div class="fa fa-warning"></div> Cancel</button>
                    </div>
                                                      </form>
                                                </div>
                                            </div>
                                    </div>
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

