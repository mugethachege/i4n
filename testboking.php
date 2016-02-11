<?php

                                                       $host = 'localhost';
																 $user = 'root';
															     $pass = 'user';
																  $db_name='vfms';
																	   
															     $conn = mysqli_connect($host,$user,$pass,$db_name);
	  
	  $sql_query="insert into booking  (booking_building,booking_room,booking_organisation,booking_event_name,booking_start_date,booking_end_date,booking_start_time,booking_end_time,booking_user_email) values (i,o,o,j,i,k,t,u,u)";
	                                                                 
	 
	 
	 mysqli_query($conn,$sql_query);
?>