<?php
include_once 'include/config.php';

// delete condition
if(isset($_GET['id']))
{
 $sql_query="DELETE FROM users WHERE id=".$_GET['id'];
 mysql_query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>
<script type="text/javascript">
function edit_id(id)
{
 if(confirm('Sure to edit ?'))
 {
  window.location.href='edit_users.php?id='+id;
 }
}
function id(id)
{
 if(confirm('Sure to Delete this user ?'))
 {
  window.location.href='users.php?id='+id;
 }
}
</script>
<?php
  require('layout/sidebar.php')
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
            <li class="active">users</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">         
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"> Available  system users </h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <div class="btn-group">
                      <button class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></button>
                    </div>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                      
                                      <table id="example" class="table table-striped table-bordered display">
                                                      <thead class="table_header">
                                                        <tr>
                                                          <th>Username</th>
                                                          <th>Email</th>
                                                           <th>Phone Number</th>
                                                        </tr>
                                                      </thead>
                                                      <tbody>
                                                       <?php
													   
                                                          $sql_query="SELECT * FROM users";
                                                          $result_set=mysql_query($sql_query);
                                                          while($row=mysql_fetch_row($result_set))
                                                         {
                                                            ?>
                                                         <tr class="replyandmark">
                                                          <td id="username"><?php echo $row[1]; ?></td>
                                                          <td  id="email"><?php echo $row[3]; ?></td>
                                                          <td  id="phone"><?php echo $row[4]; ?></td>
                                                          
                                                            
                                                            
                               
                                                      <td align="center"><a href=<a href="javascript:id('<?php echo $row[0]; ?>')"><button type="button" id="delete" name="delete" <button type="button" class="btn btn-block btn-danger btn-xs"> <div class="fa fa-trash-o"></div> Delete</button></a></td>
                                                           <!-- <td align="center"><a href="javascript:mark_id('<?php echo $row[0]; ?>')"><button type="button" class="btn btn-block btn-success btn-xs" name="deny"> <div class="fa fa-folder-open"></div> R</button></a></td> -->
                                                         
                                                         </tr>
                                                         <?php
                                                              }
                                                            ?>
                                                      </tbody>
                                                  </table>
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
