<?php
require("layout/menu.php");
?>
                
 <div class="container">
     <div class="row">
       <div class="col-md-3">
           <img src="assets/img/4e.jpg"><br><br>
            <td> <button class="btn btn-warning btn-sm" data-toggle="modal" data-target=".bs-example-modal-lg">More info about this product. <div class="fa fa-angle-double-right "></div> </button>
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
                                                    
                    <button class="btn btn-warning btn-lg pull-right">Book </button>
                 </tbody>
                </table>
             </div>
           </div>
          </div>
        </div>
       </div>
     </td>
               <!-- /.content -->
      </div><!-- /.col-lg-6 -->
         <div class="col-md-3">
            <img src="assets/img/unie.jpg"><br><br>
            <button class="btn btn-warning btn-sm">More info </button>
         </div>
         <div class="col-md-3">
            <img src="assets/img/7e.jpg"><br><br>
            <button class="btn btn-warning btn-sm">More info </button>
         </div><!-- /.col-lg-6 -->
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->
        <!--/.fluid-container-->
        <script src="vendors/jquery-1.11.1.min.js"></script>
        <script src="vendors/jquery-ui.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/fullcalendar/fullcalendar.js"></script>
        <script src="vendors/fullcalendar/gcal.js"></script>
        <script src="assets/scripts.js"></script>
        
    </body>

</html>
<?php
   require("layout/footer.php")
?>