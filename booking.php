<?php
session_start();

require("layout/header.php");

include_once 'include/config.php';
						   
 if(isset($_POST["submit"])) 
 
 {
	                                                           

	                     
		                				
									
    $building=$_POST["building"];
	  
    $room=$_POST["room"];
	  
	  $organization=$_POST["organization"];
	  
	  $eventname=$_POST["eventname"];
	  
	  $fromdate=$_POST["fromdate"];
	  
    $fromtime=$_POST["fromtime"];
	  
	  $todate=$_POST["todate"];
	  
	  $totime=$_POST["totime"];

                                          
        if(isset($_SESSION['user']))
                                             {
          $res=mysql_query("SELECT * FROM users WHERE id=".$_SESSION['user']);
                $userRow=mysql_fetch_array($res);
                  $useremail=stripslashes($userRow['email']);
                                          
                }
 
	  $sql_query="insert into booking  (booking_building,booking_room,booking_organization,booking_event_name,booking_start_date,booking_end_date,booking_start_time,booking_end_time,booking_user_email) values ('$building','$room','$organization','$eventname','$fromdate','$todate','$fromtime','$totime','$useremail');";
	                                                                 
	 mysql_select_db('vfms');
	 if(mysql_query($sql_query)){
		  ?>
      <script type="text/javascript">
  alert('successful booking request please hold for a response');
 window.location.href='booking.php'; 
  </script>
  <?php
		 }else{
      ?>
			 <script type="text/javascript">
  alert('booking not successful please try another time');
 window.location.href='booking.php'; 
  </script>
  <?php
			 mysql_error($conn);
			 }
			 
          mysql_close($conn);
}

?>
       <html lang="en">
          <head>
            <meta charset="utf-8"> 
              <link rel="stylesheet" href="assets/css/jquery-ui.css">
                <script src="assets/js/jquery-1.10.2.js"></script>
                  <script src="assets/js/jquery-ui.js"></script>
                    <script>
                    $(function() {
                    $( "#datepicker" ).datepicker();
                    });
                    </script>
								    <script>
                    $(function() {
                    $( "#datepicker2" ).datepicker();
                    });
                    </script>
                  <script type="text/javascript">
                  function fetch_select(val)
							     {
							     $.ajax({
								  type: 'post',
								  url: 'fetch_data.php',
								 data: {
								    get_option:val
								 },
								 success: function (response) {
								   document.getElementById("new_select").innerHTML=response; 
								 }
							   });
							}

					</script>

          <!--timepicker-->
          <link rel='stylesheet' type='text/css'href='assets/css/timepicki.css'/>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/bootstrap/css/bootstrap.min.css"></script>
  
                    
               
</head>

<body>
<div class="booking_outer">
  <div class="booking-form">
    <form method="post" name="booking" runat="server"  >
      <div class="booking-message">
        </h2> Fill this form to reserve venue in TUM</h2>
      </div>
        <div class="ln_solid-top"></div>
            <label >Building</label>
             <select onchange="fetch_select(this.value);"  name="building">
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
                         <label >Room</label>
                          <select id="new_select" name="room">
                            <option value="" disabled selected>Select Room</option>
                          </select>
                                          
                        <label >Organization</label>                   
                          <div class="form-group">
                           <select name="organization" class="form-control">
                            <option value="" disabled selected>Select Organization ---></option>
                            <option>Christian Union</option>
                            <option>YCS</option>
                            <option>Red Cross</option>
                            <option>Csit </option>
                            </select>
                          </div>
                        <label >Event Name</label>
                          <textarea type="text" name="eventname" width="" height="90%" ></textarea>
                        <label >From Date</label>
                          <input type="text" id="datepicker" name="fromdate">
                        <label >From Time</label>
                          <input type="text"  id="timepicker" name="fromtime">
                            <script src="assets/js/timepicki.js"></script>
                            <script>
                              $('#timepicker').timepicki();
                              </script> 

                        <label >To Date</label>
                          <input type="text" id="datepicker2" name="todate">
                        <label >To Time</label>
                          <input type="text"  id="timepicker2"name="totime">
                    
                            <script>
                              $('#timepicker2').timepicki();
                              </script> 

                        <div class="ln_solid"></div>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" name="submit" class="btn btn-defualt">Book Venue <i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </body>
              </html>