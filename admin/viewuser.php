<?php
require("layout/menu.php");
?>
                
            <div class="span9" id="content">
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">View Users</div>
                                <div class="pull-right"><span class="badge badge-warning">View More</span>

                                </div>
                            </div>
                            <div class="block-content collapse in">
                                
                                <div class="span12">
<?php
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
     // set the query
        $result = mysql_query("SELECT * FROM users");
        ?>
        <div class="courses_outer">
             <div class="course_table">
                    <table id="example" class="table table-striped table-bordered display">
                        <thead class="table_header">
                          <tr>
                            <th>id</th>
                            <th>Username</th>
                            <th>Email</th>
                            <td id="add_user"><a href="new_user.php">[Add User]<a/>&nbsp;&nbsp;&nbsp;<td id="edit_user"><a href="edit_user.php?id='.$id.'">[Edit]<a/>&nbsp;&nbsp;&nbsp;<a href="delete_user.php?id='.$id.'">[Delete]<a/></td>';
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            while( $row = mysql_fetch_assoc( $result ) ){
                              echo
                              "<tr>
                                <td>{$row['user_id']}</td>
                                <td>{$row['username']}</td>
                                <td>{$row['email']}</td>
                              </tr>";
                            }
                          ?>
                        </tbody>
                    </table>
                 </div>
               <!-- /.content -->
        </div> 
 

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