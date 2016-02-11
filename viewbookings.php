<?php
session_start();

require("layout/viewbookingsheader.php");

include_once 'include/config.php';
						   
 

?>


       <html lang="en">
      <head>
      <meta charset="utf-8"> 
       
      <link rel="stylesheet" href="assets/css/jquery-ui.css">
      <script src="assets/js/jquery-1.10.2.js"></script>
      <script src="assets/js/jquery-ui.js"></script>
        
       
      
            
          <!--timepicker-->
          <link rel='stylesheet' type='text/css'href='assets/css/timepicki.css'/>
             <script src="assets/bootstrap/js/bootstrap.min.js"></script>
               <script src="assets/bootstrap/css/bootstrap.min.css"></script>
  
                    
               
</head>

<body>
<div class="booking_outer">
  <div class="booking-form">
    <div class="box-body">
                            <!-- user bookings -->
                
                
                                      <table id="example" class="table table-striped table-bordered display">
                                                      <thead class="table_header">
                                                        <tr>
                                                       <!--   <th>Building</th>-->
                                                          <th>Room</th>
                                                         <!-- <th>Real Time</th>-->
                                                          <th>Start Date</th>
                                                          <th>Start Time</th>
                                                          <th>End Date</th>
                                                          <th>End Time</th>
                                                          <!--<th>User Email</th>-->
                                                          <th>Organization</th>
                                                          <th>Event Name</th>
                                                          <!--<th>Status</th>-->
                                                        </tr>
                                                      </thead>
                                                      <tbody>
                                                       <?php
                                                             if(isset($_SESSION['user']))
                                                                    {
                                                  $res=mysql_query("SELECT * FROM users WHERE id=".$_SESSION['user']);
                                                  $userRow=mysql_fetch_array($res);
                                                  $email=stripslashes($userRow['email']);
                                                              }

                                                $sql_query="SELECT * FROM booking where booking_user_email='$email'";
                                                $result_set=mysql_query($sql_query);
                                                while($row=mysql_fetch_row($result_set))
                                                         {
                                                            ?>
                                                         <tr class="replyandmark">
                                                         <!-- <td id="building"><?php echo $row[1]; ?></td>-->
                                                          <td id="room"><?php echo $row[2]; ?></td>
                                                         <!--<td id="realtime"><?php echo $row[3]; ?></td>-->
                                                          <td id="startdate"><?php echo $row[4]; ?></td>
                                                          <td id="starttime"><?php echo $row[6]; ?></td>
                                                          <td id="enddate"><?php echo $row[5]; ?></td>
                                                          <td id="endtime"><?php echo $row[7]; ?></td>
                                                          <!--<td id="useremail"><?php echo $row[8]; ?></td>-->
                                                          <td id="organisation"><?php echo $row[9]; ?></td>
                                                          <td id="eventname"><?php echo $row[10]; ?></td>
                                                          <!--<td id="status"><?php echo $row[11]; ?></td>-->
                                                            
                                                            
                                            <td align="center"><a href="javascript:edit_id('<?php echo $row[0]; ?>')"><button type="button" id="validate" name="validate" class="btn btn-block btn-primary btn-xs"> <div class="fa fa-mail-reply"></div> Change</button></a></td>
                                                            
                                                           <!-- <td align="center"><a href="javascript:mark_id('<?php echo $row[0]; ?>')"><button type="button" class="btn btn-block btn-success btn-xs" name="deny" > <div class="fa fa-folder-open"></div> Deny</button></a></td>-->
                                                         
                                                         </tr>
                                                         <?php
                                                              }
                                                            ?>
                                                      </tbody>
                                                  </table>
                
                
                        <!-- /user bookings -->
                      
                </div><!-- ./box-body -->
                      </div>
                    </div>
                  </body>
              </html>