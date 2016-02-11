<?php
  require('layout/sidebar.php');
   
?>


 <?php
 
 if (isset($_POST['submit'])){
$dest=$_POST["recipient"];
$subj=$_POST["subject"];
$msg=$_POST["reply"];

if(mail($dest,$subj,$msg)){
  ?>
    <script type="text/javascript">
  alert('email sent');
 window.location.href='sendemail.php'; 
  </script>

<?php
}
else
?>
<script type="text/javascript">
  alert('mail not sent');
 window.location.href='sendemail.php'; 
  </script>

<?php
}

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
            <li class="active"> venues</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">         
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Manage Venues</h3>
                  
                                      <div class="col-md-9 pull-right">
                                        <div class="x_content ">
                                            <div class="box-body">
                                                <form action="" method="POST" data-parsley-validate >
                                                  <div class="form-group">
                                                      <input type="email" name="recipient" class="form-control" placeholder="To:" required="required">
                                                  </div>
                                                  <div class="form-group">
                                                      <input type="text" name="subject" class="form-control" placeholder="Subject:" required="required">
                                                  </div>
                                                  <div class="form-group">
                                                      <textarea id="compose-textarea" name="reply" class="form-control" style="height: 200px" required  >

                                                      </textarea>
                                                  </div>
                                                  <div class="box-footer">
                                                      <div class="pull-right">
                                                          <button type="submit" name="submit" class="btn btn-primary"> Send <i class="fa fa-send-o"></i></button>
                                                      </div>
                                                   <button type="reset" class="btn btn-warning"><i class="fa fa-times"></i> Discard</button>
                                                  </div>
                                                      </form>
                                                </div>
                                            </div>
                                    </div>
                 
                  
                  
                </div><!-- /.box-header -->
                <div class="box-body">
                      <!-- /.contentr -->
                
                                     
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
