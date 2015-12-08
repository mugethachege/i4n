<!DOCTYPE html>
<?php
include('loginscript.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
  header("location: resources.php");
}
?>
<?php
require("layout/header.php");
?>
<div class="main wow fadeInRight" data-wow-delay="0.5s">
            <div class="box login">
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
<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<!--div class="pen-title">
</div-->
<!-- Form Module-->
<!--div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <div class="tooltip">Click Me</div>
  </div>
  <div class="form">
    <form method="post" action="">
    <h2>Login to your account</h2>
    <form>
      <input type="text" placeholder="Username"/>
      <input type="password" placeholder="Password"/>
      <button type="submit" name="btn-login">Login</button>
      <h1>Click the pencil to signup</h1>
    </form>
  </div>
  <!--div class="form">
    <form method="post" action="">
    <h2>Create an account</h2>
    <form>
      <input type="text" placeholder="Username"/>
      <input type="password" placeholder="Password"/>
      <input type="email" placeholder="Email Address"/>
      <input type="tel" placeholder="Phone Number"/>
      <button type="submit" name="btn-login">Register</button>
    </form-->
  <!--/div>
  <div class="cta"><a href="">Forgot your password?</a></div>
</div-->
<?php
        require("layout/footer.php");
        ?>
 <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>


 </body>
</html>
