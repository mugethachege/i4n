<?php
session_start();
 include_once 'include/config.php';

if(!isset($_SESSION['user']))
{
 header("Location: welcome.php");
}
$res=mysql_query("SELECT * FROM users WHERE id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
        <title>VFMS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- CSS -->
        <link rel='stylesheet' href='assets/css/css.css'>
        <link rel='stylesheet' href='assets/css/cssmin.css'>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="css/lg.css" />
         <link rel="stylesheet" href="assets/css/reset.css">
         <link rel='stylesheet prefetch' href='assets/css/font.css'>
        <link rel='stylesheet prefetch' href='font awesome/css/font-awesome.min.css'>
        <link rel="stylesheet" href="assets/css/login.css">
        <link rel="icon" type="image/ico" href="assets/img/fav-logo.png"/>
        <!--FONT-AWESOME-->
        <link rel='stylesheet prefetch' href='font awesome/css/font-awesome.min.css'>
    </head>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="logo span4">
                         <a href="index.php"><img src="assets/img/logo.png"></a>
                        <h1><a href=""></i>VFMS System <span class="red"> </span></a></h1>
                        <h1>booking a click away</h1>
                    </div>
                    <div class="links span8">
                            <a class="home" href="" rel="tooltip" data-placement="bottom" data-original-title="Home"></a>
                            <a class="blog" href="" rel="tooltip" data-placement="bottom" data-original-title="Blog"></a>
                
                     <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <li><a href="logout.php"><i class="fa fa-user fa-1x" title="signout"></i> Welcome - <?php echo $userRow['username']; ?></a>
                                </a>
                            </li>
                        </ul>  
                    </div>
                </div>
            </div>
        </div>
    </div>
<body>
    <div class="banner">
                <div class="container">
                    <div class="banner-info text-center">
                        <h2 class="wow fadeInRight infinate" data-wow-delay="1.2s">WELCOME TO VFMS</h2> <br/>
                        <span class="wow zoomInRight light-green" data-wow-delay="1.5s"> </span>
                        <p class="wow fadeInUp light_green" data-wow-delay="1.8s">Book a venue for your event fast,efficiently and with ease</p>
                   </div>
                   <div class="button">
                     <a href="booking.php"><span class="btn active wow shake" data-wow-delay="2.1s">GET STARTED</a></span>
                   </div>
              </div>
         </div>
         <?php
        require("layout/footer.php");
        ?>
         <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
    </body>
</html>



