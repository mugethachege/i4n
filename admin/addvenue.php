<?php
  require('layout/sidebar.php')
?>

<?php
 include_once 'include/config.php';

if(isset($_POST['add-room']))
{
 $buildingname = mysql_real_escape_string($_POST['buildingname']);
 $roomname = mysql_real_escape_string($_POST['roomname']);
 $roomstatus = mysql_real_escape_string('AVAILABLE');
 
 
 
 if(mysql_query("INSERT INTO rooms (building_name,room_name,room_status) VALUES('$buildingname','$roomname','$roomstatus')"))
 {
  ?>
        <script>alert('successfully added new venue ');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while adding venues...');</script>
        <?php
 }
}
?>

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
            <li class="active">vanues</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">         
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Add Venue</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <div class="btn-group">
                      <button class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></button>
                      <ul class="dropdown-menu" role="menu">
                      </div>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                             <!-- /.content -->

                             <div class="col-md-9 pull-right">
                                        <div class="x_content ">
                                            <div class="box-body">
                                                <form action="" method="POST" data-parsley-validate >
                                                  <div class="form-group">

                                                    <label>Building Name:</label>
                                                    <select name="buildingname" class="form-control" required="required">
                                                      <option value="" disabled selected>Select Building</option>
                 
                                                     <?php
                                                        $host = 'localhost';
                                                        $user = 'root';
                                                        $pass = 'hunsy';
                                                        mysql_connect($host, $user, $pass);
                                                        mysql_select_db('vfms');
                                                        $select=mysql_query("select building_name from building ORDER BY building_name DESC");
                                                        while($row=mysql_fetch_array($select))
                                                          {
                                                          echo "<option>".$row['building_name']."</option>";
                                                          }
                                                          ?>
                                                        </select>
                                                     
                                                  </div>
                                                  <div class="form-group">
                                                    <label>Room Name:</label>
                                                      <input type="text" name="roomname" class="form-control" placeholder="Room Name:" required="required">
                                                  </div>
                                                  
                                                  
                                                  <div class="box-footer">
                                                      <div class="pull-right">
                                                          <button type="submit" name="add-room" class="btn btn-primary"> Add<i class="fa fa-send-o"></i></button>
                                                      </div>
                                                   <button type="reset" class="btn btn-warning"><i class="fa fa-times"></i> Discard</button>
                                                  </div>
                                                      </form>
                                                </div>
                                            </div>
                                    </div>


                  
                      
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
        require('layout/footer.php')
      ?>
