
<?php
error_reporting(0);
session_start();
if(isset($_SESSION['user'])!="")
{
 header("Location: index.php");
}
include_once 'include/config.php';

if(isset($_POST['submit']))
{
 $username = mysql_real_escape_string($_POST['username']);
 $password = (mysql_real_escape_string($_POST['password']));
 $email = mysql_real_escape_string($_POST['email']);
 $phone_no =(mysql_real_escape_string($_POST['phone_no']));
 
 if(mysql_query("INSERT INTO users(username,password,email,phone_no) VALUES('$username','$password','$email','$phone_no')"))
 {
  ?>
        <script>alert('successfully registered');</script>
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
require('layout/header.php');
require('layout/footer.php');

?>

<div class="signup_form">
         <form role="form" method="post" action="" data-validate="parsley">
                <hr>
                <div class="well well-sm"><strong><i class="fa fa-asterisk"></i> Required Field</strong></div>
                <div class="form-group">
                    <label for="Name">Username</label>
                     <i class="input-group-addon"><i class="fa fa-user"></i></i>
                        <input type="text" class="form-control" name="username" id="InputName" 
                        data-required="true" data-trigger="change" placeholder="Enter username">
                        <i class="input-group-addon"></i>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-group">
                        <i class="input-group-addon"><i class="fa fa-key"></i></i>
                        <input type="password" class="form-control"  data-required="true" data-trigger="change" data-parsley-equalto="#password"  name="password" placeholder="*******">
                        <i class="input-group-addon"></i>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Email">Email</label>
                    <div class="input-group">
                        <i class="input-group-addon"><i class="fa fa-envelope-o"></i></i>
                        <input type="text" class="form-control" id="InputEmailFirst"
                         name="email" data-required="true" data-type="email" data-trigger="change" placeholder="name@domain.com">
                        <i class="input-group-addon"></i>
                    </div>
                </div>
                
                 <div class="form-group">
                     <label for="phone_no">Phone Number</label>
                     <div class="input-group">
                        <i class="input-group-addon"><i class="fa fa-tty"></i></i>
                        <input type="text" name="phone_no"  class="form-control" data-required="true" data-trigger="change" id="phone_no" placeholder="Phone Number">
                        <i class="input-group-addon"></i>
                     </div>
                 </div>
                 <div class="register-button">
                  <div class="col-xs-6 col-md-6"><input type="submit" name="submit" value="Register" class="btn-primary btn-block btn-lg register-button" tabindex="5"></div>
                </div>
                <h2>Please Sign Up</h2>
                <p>Already a member? <a href='index.php'>Login</a></p>
            </form>
      </div>
      <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
