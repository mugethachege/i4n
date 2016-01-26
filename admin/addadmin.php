<?php
require("layout/menu.php");
?>
 <div class="span9" id="content">
    <div class="row-fluid">
        <!-- block -->
        <div class="block">
        <div class="navbar navbar-inner block-header">
    <div class="muted pull-left">Add Admin</div>
<div class="pull-right"><span class="badge badge-warning"><a href="admins.php">View all</a></span></div>
<?php
if(isset($_POST['submit']))
                            {
 // variables for input data
 $username = $_POST['username'];
 $email = $_POST['email'];
 $password= $_POST['password'];
 // variables for input data
@$db = mysql_pconnect("localhost", "root", "hunsy");
          //checking connecting
              if (!$db)
                      {
                        echo "Error: Could not connect to database, Please try again.";
                      }            
                        //selecting database to use among the databases in phpmyadmin
                    $mysql = mysql_select_db("vfms");
                    if(!$mysql)
                      {
                        echo "Cannot select database.";
                      }
 // sql query for inserting data into database
 $sql_query = "INSERT INTO admin(username,email,password) VALUES('$username','$email','$password')";
 // sql query for inserting data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
 <script type="text/javascript">
  alert('Admin inserted successifully');
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while inserting your data');
  </script>
  <?php
 }
 // sql query execution function
}
?>
  
    <div class="new_admin col-md-10">
    <div class="insert_admin" id="settings">
                <form  action="" method="POST" class="form-horizontal insert-course_inner">
                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Username</label>

                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="username" placeholder="username" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Email</label>

                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="email" placeholder="Email" required>
                        </div>
                      </div>
                       
                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Password</label>

                        <div class="col-sm-10">
                          <input type="password" class="form-control" name="password" placeholder="********" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" name="submit" class="btn btn-danger">Insert Admin  <i class="fa fa-arrow-circle-right"></i></button>
                        </div>
                      </div>
                </form>
                                </div>
                            </div>
                                <div class="span10">
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
            <hr>
            
              </div>
   </div>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

            <footer>
                <p>&copy; VFMS 2015</p>
            </footer>
        </div>
        <style>
        #external-events {
            float: left;
            width: 150px;
            padding: 0 10px;
            border: 1px solid #ccc;
            background: #eee;
            text-align: left;
            }
            
        #external-events h4 {
            font-size: 16px;
            margin-top: 0;
            padding-top: 1em;
            }
            
        .external-event { /* try to mimick the look of a real event */
            margin: 10px 0;
            padding: 2px 4px;
            background: #3366CC;
            color: #fff;
            font-size: .85em;
            cursor: pointer;
            z-index: 99999999;
            }
            
        #external-events p {
            margin: 1.5em 0;
            font-size: 11px;
            color: #666;
            }
            
        #external-events p input {
            margin: 0;
            vertical-align: middle;
            }

        </style>
        <!--/.fluid-container-->
        <script src="vendors/jquery-1.9.1.min.js"></script>
        <script src="vendors/jquery-ui-1.10.3.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/fullcalendar/fullcalendar.js"></script>
        <script src="vendors/fullcalendar/gcal.js"></script>
        <script src="assets/scripts.js"></script>
        
    </body>

</html>