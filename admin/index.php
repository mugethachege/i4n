<!DOCTYPE html>
<html>
  <head>
    <title>Admin Login</title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="assets/css/styles.css" rel="stylesheet" media="screen">
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <link rel="icon" type="image/ico" href="assets/img/fav-logo.png"/>
  </head>
  <body>
            <div class="box login">
                <form action="login.php" method="POST">
                    <fieldset class="boxBody">
                       <div class="form-group">
                            <label>Username</label>
                            <div class="input-group">
                               <input type="text" name="username" tabindex="1" placeholder="admin username" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label><a href="#" class="rLink" tabindex="5">Forget your password?</a>Password</label>
                            <div class="input-group">
                               <input type="password" name="password" tabindex="2" required>
                            </div>
                        </div>
                    </fieldset>
                    <footer>
                        <label><input type="checkbox" tabindex="3">Keep me logged in</label>
                        <input type="submit" class="btnLogin" value="Login" tabindex="4">
                    </footer>
              </form>
         </div>
    <script src="vendors/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>