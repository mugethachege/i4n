 <?php
require("layout/menu.php")
?>
             <div class="right-side">
                 <div class="span10" id="content">
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Dashroom</div>
                                <div class="pull-right"><span class="badge badge-warning">View More</span>
                               </div>
                            </div>
                            <div class="row">
                                <div class="resource-images">
                                    <div class="span3">
                                        <img src="assets/img/unie.jpg"><br><br>
                                         <td> <button class="btn btn-warning btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">click for More info >>. <div class="fa fa-angle-double-right "></div> </button>
                                           <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                              <div class="modal-dialog modal-sm">
                                                 <div class="modal-content">
                                                    <div class="courses_out">
                                                       <div class="courseinfo_table">
                                                         <table id="example" class="table table-striped table-hover table-verticle display">
                                                           <thead class="table_header">
                                                             <tr>
                                                              <th>Name</th>
                                                               <th>Category</th>
                                                              <th>Capacity</th>
                                                              <th>Description</th>
                                                            </tr>
                                                         </thead>
                                                       <tbody>
                                                        <?php
                                                          $sql_query="SELECT * FROM resource_info";
                                                          $result_set=mysql_query($sql_query);
                                                          while($row=mysql_fetch_row($result_set))
                                                             {
                                                                ?>
                                                            <tr>
                                                      <td><?php echo $row[1]; ?></td>
                                                    <td><?php echo $row[2]; ?></td>
                                                <td><?php echo $row[3]; ?></td>
                                            <td><?php echo $row[4]; ?></td>
                                        </tr>
                                         <?php
                                              }
                                            ?>
                                            </tbody>
                                            </table>
                                            <a href="book.php"><button class="btn btn-warning btn-lg"> Book</button></a>
                                         </div>
                                       </div>
                                      </div>
                                    </div>
                                   </div>
                                 </td>
                                      </div>
                                      
                                      <div class="span3">
                                          <img src="assets/img/7e.jpg"><br><br>
                                          <button class="btn btn-warning btn-sm">More info </button>
                                      </div><!-- /.col-lg-6 -->
                                      <div class="span3">
                                            <img src="assets/img/8e.jpg "><br><br>
                                            <button class="btn btn-warning btn-sm">More info </button>
                                      </div><!-- /.col-lg-6 -->
                                </div>
                            </div><!-- /.col-lg-6 -->
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
        <script src="vendors/fullcalendar/fullcalendar.js"></script>
        <script src="vendors/fullcalendar/gcal.js"></script>
        <script src="assets/scripts.js"></script>
            
    </body>

</html>
<?php
   require("layout/footer.php")
?>