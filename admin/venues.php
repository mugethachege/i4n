<?php
require("layout/menu.php");
include_once 'include/config.php';
 if(isset($_POST['submit']))
{
 // variables for input data
 $name = $_POST['name'];
 $category = $_POST['category'];
 // variables for input data

 // sql query for inserting data into database
 $sql_query = "INSERT INTO resources(name,category) VALUES('$name','$category')";
 // sql query for inserting data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
 <script type="text/javascript">
  alert('resource added successifully');
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
                     <div class="span9" id="content">
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Resources</div>
                                <div class="pull-right"><span class="badge badge-warning">View More</span>
                                </div>
                              
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>
     <!-- Main content --> 
     <!-- /.tab-pane -->
     <div class="insert_course_outer">
          <div class="insert-course" id="settings">
                <form  action="" method="POST" class="form-horizontal insert-course_inner">
                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Name</label>

                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="name" placeholder="Course name here" required>
                        </div>
                      </div>
                    
                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Category</label>

                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="category" placeholder="Choose category" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" name="submit" class="btn btn-danger">Add  <i class="fa fa-arrow-circle-right"></i></button>
                        </div>
                      </div>
                </form>
              </div>
          </div>
              <!-- /.tab-pane -->
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

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