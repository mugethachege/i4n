<?php
session_start();

include_once 'include/config.php';

if(isset($_POST['btn-submit']))
{
 $uname = mysql_real_escape_string($_POST['adminusername']);
 $upass = mysql_real_escape_string($_POST['adminpassword']);
 $email = mysql_real_escape_string($_POST['adminemail']);
 
 if(mysql_query("INSERT INTO admin(adminusername,adminpassword,adminemail) VALUES('$uname','$upass','$email')"))
 {
  ?>
        <script>alert('successfully registered new admin ');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
?>
 <?php
 require('layout/sidebar.php');
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
            <li class="active">admins</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">         
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"> Add admins</h3>
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
                                                      <input type="text" name="adminusername" class="form-control" placeholder="Admin Username:" required="required">
                                                  </div>
                                                  <div class="form-group">
                                                      <input type="password" name="adminpassword" class="form-control" placeholder="Password:" required="required">
                                                  </div>
                                                  <div class="form-group">
                                                      <input type="text" name="adminemail" class="form-control" placeholder="Email:" required="required">
                                                  </div>
                                                  <div class="box-footer">
                                                      <div class="pull-right">
                                                          <button type="submit" name="btn-submit" class="btn btn-primary"> Add<i class="fa fa-send-o"></i></button>
                                                      </div>
                                                   <button type="reset" class="btn btn-warning"><i class="fa fa-times"></i> Discard</button>
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
