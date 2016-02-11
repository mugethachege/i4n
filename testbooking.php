<?php

						   
 if(isset($_POST['insert'])) 
 
 {
	                                                           

	                     
		                				
									
      $building=$_POST["building"];
	  
      $room=$_POST["room"];
	  
	  $organisation=$_POST["organisation"];
	  
	  $eventname=$_POST["eventname"];
	  
	  $fromdate=$_POST["fromdate"];
	  
      $fromtime=$_POST["fromtime"];
	  
	  $todate=$_POST["todate"];
	  
	  $totime=$_POST["totime"];
	  
				// $connection = mysql_connect("localhost", "root", "user");
				// Selecting Database
				// $db = mysql_select_db("vfms", $connection);
			    // Storing Session
				//$user_check=$_SESSION['login_user'];
				// SQL Query To Fetch Complete Information Of User
				//$ses_sql=mysql_query("select email from users where username='$user_check'", $connection);
				//$row = mysql_fetch_assoc($ses_sql);
				          
						   
						  // $db = mysql_select_db("vfms", $conn);
                           //mysql_connect($host, $user, $pass);
                          
				          // $user_check=$_SESSION['login_user'];
						  // $ses_sql=mysql_query("select email from users where username='$user_check'",$conn);
						 //  $row = mysql_fetch_assoc($ses_sql);
				
	 //$useremail=$row['email'];
	 $useremail='me';

	  
	//echo $useremail;
	
	  
	                                                             $host = 'localhost';
																 $user = 'root';
															     $pass = 'user';
																  $db_name='vfms';
																	   
															     $conn = mysqli_connect($host,$user,$pass,$db_name);
	  
	  $sql_query="insert into booking (booking_building,booking_room,booking_organisation,booking_event_name,booking_start_date,booking_end_date,booking_start_time,booking_end_time,booking_user_email) values ('$building','$room','$organisation','$eventname','$fromdate','$todate','$fromtime','$totime','$useremail')";
	                                                                 
	 
	 
	 if(mysqli_query($conn,$sql_query)){
		  echo 'new record created';
		 
		 }else{
			 echo 'data not entered';
			 mysqli_error($conn);
			 }
			 
          mysqli_close($conn);
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
  
                    
               
</head>

<body>

              	<form>
                  <div class="booking-message">
                   </h2> Fill this form to reserve venue in TUM</h2
                  >
                              
            <label >Building</label>
             
            
            <select onchange="fetch_select(this.value);"  name="building">
               <option value="" disabled selected>Select Building</option>
                 
      				   <?php
                           $host = 'localhost';
                           $user = 'root';
                           $pass = 'user';
                         
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
                                          
                        <label >Organisation</label>                   
           
                  <select name="organisation">
                      <option value="" disabled selected>Select Organisation ---></option>
                      <option>Christian Union</option>
                      <option>YCS</option>
                      <option>Red Cross</option>
                      <option>Csit </option>
                  </select>
              
                              <label >Event Name</label>
                                
                               <textarea type="text" name="eventname" width="" height="90%" ></textarea>
                                
             
           <label >From Date</label>
           <input type="text" id="datepicker" name="fromdate">
               
                                   <label >From Time</label>
                                    <input type="text"  name="fromtime">
                
             <label >To Date</label>
             <input type="text" id="datepicker2" name="todate">
             
                                     <label >To Time</label>
                                     <input type="text"  name="totime">
                                     
             
                     <button type="submit" name="submit">Book Venue <i class="fa fa-arrow-circle-right"></i></button>
                     <input type="submit" name="insert" value="Insert">
                                        
               
          ></form>
    

</body>
</html>