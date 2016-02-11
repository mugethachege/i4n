<?php
  require('layout/sidebar.php');
   require('include/config.php')
?>
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
         </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">bookings</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">         
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">View and manage bookings</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <div class="btn-group">
                      <button class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></button>
                    </div>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                
                    <div class="row">
                      <div class="booking-body">
                          <div class="col-md-12">
                          <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                              <li class="active"><a href="#activity" data-toggle="tab">Available</a></li>
                              <li><a href="#timeline" data-toggle="tab">Booked</a></li>
                            </ul>
                            <div class="tab-content">
                              <div class="active tab-pane" id="activity">
                                 <!--available venues-->
                                                    <div class="messages_table">
                                                  <table id="example" class="table table-striped table-bordered display">
                                                      <thead class="table_header">
                                                        <tr>
                                                          <th>Room Name</th>
                                                          <th>Building</th>
                                                        
                                                         
                                                        </tr>
                                                      </thead>
                                                      <tbody>
                                                       <?php
                                                          $sql_query="SELECT * FROM rooms where room_status='AVAILABLE'";
                                                          $result_set=mysql_query($sql_query);
                                                          while($row=mysql_fetch_row($result_set))
                                                         {
                                                            ?>
                                                         <tr class="replyandmark">
                                                         <td id="roomname"><?php echo $row[1]; ?></td>
                                                          <td id="building"><?php echo $row[2]; ?></td>
                                                        
                                                          
                                                            
                                                            
  
                                                         
                                                         </tr>
                                                         <?php
                                                              }
                                                            ?>
                                                      </tbody>
                                                  </table>
   
                                              </div>                   
                              
                              
                              <!--//available venues-->
                              </div><!-- /.tab-pane -->
                              <div class="tab-pane" id="timeline">
                              <table id="example" class="table table-striped table-bordered display">
                                                      <thead class="table_header">
                                                        <tr>
                                                          <th>Room Name</th>
                                                          <th>Building</th>
                                                        
                                                         
                                                        </tr>
                                                      </thead>
                                                      <tbody>
                                                       <?php
                                                          $sql_query="SELECT * FROM rooms where room_status='BOOKED'";
                                                          $result_set=mysql_query($sql_query);
                                                          while($row=mysql_fetch_row($result_set))
                                                         {
                                                            ?>
                                                         <tr class="replyandmark">
                                                         <td id="roomname"><?php echo $row[1]; ?></td>
                                                          <td id="building"><?php echo $row[2]; ?></td>
                                                          </tr>
                                                         <?php
                                                              }
                                                            ?>
                                                      </tbody>
                                                  </table>
                             </div><!-- /.tab-content -->
                          </div><!-- /.nav-tabs-custom -->
                          </div><!-- /.col -->
                    </div><!-- ./box-body -->                
              </div><!-- /.box -->
            </div>
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
                 </div>
        <strong>Copyright &copy; 2015 <i class="fa fa-institution"></i> Evenues</a>.</strong> All rights reserved.
      </footer>     
      <?php
        require('layout/footer.php')
      ?>
