<!DOCTYPE html>
<?php
session_start();
include_once 'include/config.php';

if(isset($_SESSION['user'])!="")
{
 header("Location: welcome.php");
}
if(isset($_POST['submit']))
{
 $username = mysql_real_escape_string($_POST['username']);
 $password = mysql_real_escape_string($_POST['password']);
 $res=mysql_query("SELECT * FROM users WHERE username='$username'");
 $row=mysql_fetch_array($res);
 if($row['password']==($password))
 {
  $_SESSION['user'] = $row['id'];
  header("Location: welcome.php");
 }
 else
 {
  ?>
        <script>alert('wrong details');</script>
        <?php
 }
}
?>
<?php
require("layout/header.php");
?>
<div class="main wow fadeInRight" data-wow-delay="0.5s">
            <div class="box login">
               <div class="error_message">
                </div> 
                <h3><i class="fa fa-group fa-2x"></h3></i>
                <hr>
               <form action="" method="post" data-validate="parsley">
                    <div class="form-group">
                      <label>Username:</label>
                      <div class="input-group">
                          <span class="input-group-addon"><span class="fa fa-user"></span></span>
                          <input id="name" name="username" data-required="" data-trigger="change" placeholder="username" type="text" title="">
                          <span class="input-group-addon"><span class="fa fa-asteri"></span></span>
                      </div>
                    </div>
                    <label>Password :</label>
                    <span class="input-group-addon"><span class="fa fa-key"></span></span>
                    <input id="password" name="password"  type="password" data-required="true" data-trigger="change" placeholder="********">
                    <input class="btn-login" name="submit" type="submit" value="Login"></br>
                    <span class=" signup-option pull-right">Not a Member ? <a href="signup.php">Signup</a></span></form></br>
                   
                </form>
            </div>
        </div>
        <?php
        require("layout/footer.php");
        ?>
 <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/scripts.js"></script>


 </body>
</html>
