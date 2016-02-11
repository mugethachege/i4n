<?php
  require('layout/reportsidebar.php')
?>
      
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
         </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">         
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Add more Venues</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <div class="btn-group">
                      <button class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></button>
                    </div>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">


                                 
                                    <table id="example1" class="table table-striped table-bordered display">
                                          <thead class="table_header">
                                               <tr>
                                                   <th>Course</th>
                                                   <th>Frequency of Enquiries</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                             <?php         
                                             $sql_query= $sql_query="SELECT booking_room,COUNT(*) as count FROM booking GROUP BY booking_room ORDER BY count DESC";
                                             //$sql_query="select * from enquiries";
                                             $result_set=mysql_query($sql_query);
                                             while($row=mysql_fetch_row($result_set))
                                                {
                                                ?>                               
                                              <tr>
                                              <td><?php echo $row['0']; ?></td>
                                              <td>  <?php echo $row['1']; ?> </td>                        
                                              </tr>
                                              <?php
                                                }
                                              ?>
                                         </tbody>
                                    </table>

                                

                      <!--<h2>content goes here </h2>-->
                </div><!-- ./box-body -->
                
              </div><!-- /.box -->
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
        require('layout/reportfooter.php');
      ?>
