<?php
require("layout/bookingheader.php");
include_once 'include/config.php';
    if(isset($_POST['submit']))
{
 // variables for input data
  $category = $_POST['Category'];
  $name = $_POST['venues'];
  $start_date= $_POST['sdate'];
  $end_date=$_POST['edate'];
  $start_time=$_POST['usr_stime'];
  $end_time=$_POST['usr_etime'];
  $purpose= $_POST['purpose'];
  $first_name= $_POST['first_name'];
  $surname = $_POST['surname'];
  $cellnumber = $_POST['cellnumber'];
  $email=$_POST['email'];
  
  // sql query for inserting data into database
   $sql_query="insert into room(category, name, start_date, end_date, start_time, end_time, purpose, first_name, surname, cellnumber, email) values('$category','$name','$start_date','$end_date','$start_time','$end_time','$purpose,'$first_name','$surname','$cellnumber','$email')";
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>	
 <script type="text/javascript">
  alert('booked successfully');
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while inserting your data');
  </script>
  <?php
 }
 // sql query execution function
}
?>
		<body>
			<div>
			<h1>
				Book a Function 	
			</h1>

			
			<div id="functionDetails">
				<h3> 
					Function Details
				</h3>
					<HR>
				<form  action="" method="POST" class="fdetails" >
					<p>
                    <label>Category
                    </label>
                    <select name="Category">                  
                        <option >Halls</option>
                        <option>lecture halls</option>
                        <option>Fields</option>
                        </select>
                </p>  
                <p>
                    <label>Resources
                    </label>
                    <select name="venues">                  
                        <option >MBlock</option>
                        <option>FET</option>
                        <option>Assembly hal</option>
                        <option>Lower Pitch</option>
                        <option>Graduation Square</option>
                        </select>
                </p>  
					<div id="date">
						<div id="dialogue">
							Start Date
						</div>
						<input id="dateValue" type="date" class="form-control" name="sdate" value="Start Time" max="2025-12-31" required>
					</div>
					<div id="date">
						<div id="dialogue">
							EndDate
						</div>
						<input id="dateValue" type="date" class="form-control" name="edate" value="Start Time" max="2025-12-31" required>
					</div>
					<div id="startTime">
						<div id="dialogue">
							Start Time
						</div>
						<input id="startValue" type="time" class="form-control" name="usr_stime" required>
					</div>
					<div id="endTime">
						<div id="dialogue">
							End Time
						</div>
		  				<input id="endValue" type="time" class="form-control" name="usr_etime" required>
					</div>
					<div id="additionalInfo">
						<div id="dialogue">
							Purpose
		  				<textarea id="additionInfValue" class="form-control" rows="3" name="purpose" placeholder="Purpose of Booking"></textarea>
					</div>
					

				</form>
			</div>
			
			<div id="contactDetails">
				<h3> 
					Contact
				</h3>
				<form class="cdetails" >
					<form action="tumapliz.php" method="POST" data-validate="parsley">
					<div id="name">
	  					<input type="text" name="first_name" class="form-control" placeholder="First Name"  id="contact_firstName" required>
					</div>
					<div id="surname">
	  					<input type="text" name="surname" class="form-control" placeholder="Surname"  id="contact_firstName" required>
					</div>
					<div id="cell">
		  				<input type="text" name="cellnumber" class="form-control" placeholder="Cell Number"  id="contact_cell" required>
					</div>
					<div id="email">
		  				<input type="text" name="email" class="form-control" placeholder="Email Address"  id="contact_email" required>
					</div>
					<div id="submitBTN">
				        <div class="btn-group">
					       <button  type="submit" name="submit" class="btn btn-default">Submit</button>
				        </div>
			       </div>
				</form>
			</div>
			
		</div>
	</body>
</html>
