<?php
   
           
   if(isset($_POST['get_option']))
   {
     $host = 'localhost';
     $user = 'root';
     $pass = 'hunsy';
           
     mysql_connect($host, $user, $pass);

     mysql_select_db('vfms');
      

     $building = $_POST['get_option'];
     $find=mysql_query("select room_name from rooms where building_name='$building' AND room_status='AVAILABLE'");
     while($row=mysql_fetch_array($find))
     {
       echo "<option>".$row['room_name']."</option>";
     }
   
     exit;
   }

?>