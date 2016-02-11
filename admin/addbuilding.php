<?php
  require('layout/sidebar.php')
?>

<?php
 include_once 'include/config.php';

if(isset($_POST['add-btn']))
{
 $buildingname = mysql_real_escape_string($_POST['buildingname']);
 
 
 if(mysql_query("INSERT INTO building(building_name) VALUES('$buildingname')"))
 {
  ?>
        <script>alert('successfully added new building ');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while adding building...');</script>
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
            <li class="active">venues</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">         
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Add Building</h3>
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
                                                      <input type="text" name="buildingname" class="form-control" placeholder="Building Name:" required="required">
                                                  </div>
                                                  
                                                  
                                                  <div class="box-footer">
                                                      <div class="pull-right">
                                                          <button type="submit" name="add-btn" class="btn btn-primary"> Add<i class="fa fa-send-o"></i></button>
                                                      </div>
                                                   <button type="reset" class="btn btn-warning"><i class="fa fa-times"></i> Discard</button>
                                                  </div>
                                                      </form>
                                                </div>
                                            </div>
                                    </div>
                </div><!-- ./box-body -->



                      
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
