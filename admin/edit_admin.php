<?php
include_once 'include/config.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM admin WHERE admin_id=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
 $username= $_POST['adminusername'];
 $email= $_POST['adminemail'];
  // variables for input data

 // sql query for update data into database
 $sql_query = "UPDATE admin SET adminusername='$username',adminemail='$email' WHERE admin_id=".$_GET['edit_id'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Admin Data Updated Successfully');
  window.location.href='admins.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating Admin data');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: admins.php");
}
?>
<?php
  require('layout/sidebar.php')
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
                            <input type="text" name="adminusername" class="form-control" placeholder="Admin Username:" value="<?php echo $fetched_row['adminusername']; ?>" required">
                              </div>
                                <div class="form-group">
                                <input type="text" name="adminemail" class="form-control" placeholder="Email:
                                "value="<?php echo $fetched_row['adminemail']; ?>" required>
                                  </div>
                                <div class="upcancel_buttons">
                         <button type="submit" name="btn-update" class="btn btn-success btn-xs"> <div class="fa fa-edit"></div>UPDATE</button>
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

