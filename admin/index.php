
<?php
session_start();
include_once 'include/config.php';

if(isset($_SESSION['user'])!="")
{
 header("Location: dashboard.php");
}
if(isset($_POST['submit']))
{
 $username = mysql_real_escape_string($_POST['adminusername']);
 $upass =mysql_real_escape_string($_POST['adminpassword']);
 $res=mysql_query("SELECT * FROM admin WHERE adminusername='$username'");
 $row=mysql_fetch_array($res);
 if($row['adminpassword']==($upass))
 {
  $_SESSION['user'] = $row['admin_id'];
  header("Location: dashboard.php");
 }
 else
 {
  ?>
        <script>alert('password and/or username incorrect');</script>
        <?php
 }
 
}
?>
<?php
require('layout/adminheader.php')
?>

  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="error_message">
                </div> 
      <div class="login-logo">
        <a href=""><b>Admin Login</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="" method="post" data-validate="parsley">
          <div class="form-group has-feedback">
            <input type="username" name="adminusername"class="form-control" required=""placeholder="Username">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="adminpassword"class="form-control" required=""placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" name="submit"class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <?php
require('layout/adminfooter.php')
    ?>
