<?php
  require('layout/sidebar.php');
   // require('include/config.php');
	  include_once ("sqlsmshandling_functions.php");
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
                                                    <form action="" method="POST" data-parsley-validate>
                                                          <div class="form-group">
                                                            <input type="text" name="textAreaRecipient" class="form-control" cols="40" rows="2" <?php  echo ((isset($_POST["textAreaRecipient"])) ? ($_POST["textAreaRecipient"]) : ("")); ?>placeholder="To:" required="required" >
                                                          </div>
                                                          <div class="form-group">
                                                                <textarea id="compose-textarea" name="textAreaMessage" class="form-control" cols="40" rows="10"<?php  echo ((isset($_POST["textAreaMessage"])) ? ($_POST["textAreaMessage"]) : ("")); ?> placeholder="Message:" style="height: 200px" required  >

                                                                </textarea>
                                                          </div>
                                  
                                           
                                                     
                                                          <div class="box-footer">
                                                          <div class="pull-right">
                                                            <button type="submit" name="submit" class="btn btn-primary"> Send Sms <i class="fa fa-send-o"></i></button>
                                                          </div>
                                                          <button type="reset" class="btn btn-warning"><i class="fa fa-times"></i> Discard</button>
                                                        </div>
                     <table>
        <tr><td colspan='2' align='center'>
        <?php
        if (isset($_POST["textAreaRecipient"]) && $_POST["textAreaRecipient"] == "")
        {
           
			 ?>
                      <script type="text/javascript">
                       alert('Recipient field mustn\'t be empty!');
 
                        </script> 
                        <?php
        }
        else if (isset($_POST["textAreaRecipient"]) && $_POST["textAreaRecipient"] != "")
        {
            try
            {
                connectToDatabase();
                if (insertMessage ($_POST["textAreaRecipient"], "SMS:TEXT", $_POST["textAreaMessage"]))
                {
                    ?>
                      <script type="text/javascript">
                       alert('Insert was successful!');
 
                        </script> 
                        <?php
                }
                closeConnection ();
            }
            catch (Exception $exc)
            {
                ?>
                      <script type="text/javascript">
                       alert('Error !');
 
                        </script> 
                        <?php
            }
        }
        ?>
        </td></tr>
    </table>

 </form>

                  <iframe src="sqlsmshandling_inoutmessages.php" align="center" width="100%" ></iframe>

                                                   
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
