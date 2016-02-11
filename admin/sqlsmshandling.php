
<?php
  require('layout/sidebar.php');
  


    include_once ("sqlsmshandling_functions.php");
?>
  
  

<html>
<head>

   
</head>
<body>
                                  <div class="content-wrapper">
                                    <!-- Content Header (Page header) -->
                                    <section class="content-header">
                          <h1>
                            Mailbox
                            <small>
                            <?php
                                $result = mysql_query("SELECT * FROM enquiries", $db);
                                $num_rows = mysql_num_rows($result);
                                echo "$num_rows";
                                ?> new enquiries.
                            </small>
                          </h1>
                          <ol class="breadcrumb">
                            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                            <li class="active">Mailbox</li>
                          </ol>
                        </section>
                    
                        <!-- Main content -->
                        <section class="content">
                          <div class="row">
                            <div class="col-md-3">
                              <a href="messages.php" class="btn btn-primary btn-block margin-bottom">Back to Enquiries list</a>
                    
                              <div class="box box-solid">
                                <div class="box-header with-border">
                                  <h3 class="box-title">Folders</h3>
                    
                                  <div class="box-tools">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                  </div>
                                </div>
                                <div class="box-body no-padding">
                                  <ul class="nav nav-pills nav-stacked">
                                    <li><a href="messages.php"><i class="fa fa-inbox"></i> Inbox
                                         <span class="label label-primary pull-right">
                                            <?php
                                              $result = mysql_query("SELECT * FROM enquiries", $db);
                                              $num_rows = mysql_num_rows($result);
                                              echo "$num_rows";
                                             ?>
                                          </span>
                                        </a>
                                     </li>
                                      <li><a href="#"><i class="fa fa-envelope-o "></i> Sent text message</a></li>
                                  </ul>
                                </div>
                                <!-- /.box-body -->
                              </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-9">
                              <div class="box box-primary">
                                <div class="box-header with-border">
                                  <div class="box-title pull-left muted">Compose New Message</div>
                                </div


<div class="box-body">
<form action="" method="post">
 
  
<div class="form-group">
 <textarea name="textAreaRecipient" cols="40" class="form-control" placeholder="To:" required rows="2"><?php  echo ((isset($_POST["textAreaRecipient"])) ? ($_POST["textAreaRecipient"]) : ("")); ?></textarea>
                 </div>
            <div class="form-group">
 <textarea name="textAreaMessage" cols="40" class="form-control" placeholder="Message:" required rows="10"><?php  echo ((isset($_POST["textAreaMessage"])) ? ($_POST["textAreaMessage"]) : ("")); ?></textarea>
                 </div>
                  
                 
                 <div class="box-footer">
                  <div class="pull-right">
        
        
                <input type="submit" class="btn btn-primary" value="Send" >
                 </div>
                  <button type="reset" class="btn btn-default"></i> Discard</button>
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
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->
  </div>
  <!-- /.content-w
<?php
  require('layout/footer.php')
?>