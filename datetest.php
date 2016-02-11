<?php
require("layout/header.php");
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  
       <link rel="stylesheet"  type="text/css" href="assets/css/jquery-ui.css">
      <script src="assets/js/jquery-1.10.2.js"></script>
      <script src="assets/js/jquery-ui.js"></script>
     
      
        
      
              
							    <script>
                                    $(function() {
                                    $( "#datepicker" ).datepicker();
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
               <div class="main wow fadeInRight" data-wow-delay="5.5s">
                <div class="box login">
	<form>
      
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
                                 <select id="new_select">
                                 <option value="" disabled selected>Select Room</option>
                                  </select>
                                  
       <label >Organization</label>
       <input type="text" name="organization">
       
                                    <label >Event Name</label>
                                    <textarea type="text" name="eventname" width="" height="90%" placeholder="Event Name">                                   </textarea>
        <label >From Date</label>
        <input type="text" id="datepicker">
         
                                     <label >From Time</label>
                                     <select >
                                     <option>From Time</option>
                                      </select>
          
        <label >To Date</label>
        <select >
        <option>To Date</option>
          </select>
                                         <label >To Time</label>
                                         <select >
                                        <option>To Time</option>
                                          </select>
         
    </form>
 
</div>
</div>
      
</body>
</html>