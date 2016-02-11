<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Welcome to E-Venues</title>
<link rel="stylesheet" type="text/css" href="assets/xres/css/style.css" />
<link rel="icon" type="image/png" href="assets/img/fav-logo.png" />
<!--[if IE 6]><style type="text/css"> * html img { behavior: url("xres/iepngfix.htc") }</style><![endif]-->
<script type="text/javascript" src="assets/xres/js/saslideshow.js"></script>
<script type="text/javascript" src="assets/xres/js/slideshow.js"></script>
<script src="assets/js/jquery-1.5.min.js" type="text/javascript" charset="utf-8"></script>
<script src="assets/vallenato/vallenato.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="assets/vallenato/vallenato.css" type="text/css" media="screen" charset="utf-8">

		<script type="text/javascript">
		$("#slideshow > div:gt(0)").hide();

		setInterval(function() { 
		  $('#slideshow > div:first')
			.fadeOut(1000)
			.next()
			.fadeIn(1000)
			.end()
			.appendTo('#slideshow');
		},  3000);
	</script>
	<!--sa calendar-->	
		<script type="text/javascript" src="assets/js/datepicker.js"></script>
        <link href="assets/css/demo.css"       rel="stylesheet" type="text/css" />
        <link href="assets/css/datepicker.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript">
		//<![CDATA[

		/*
				A "Reservation Date" example using two datePickers
				--------------------------------------------------

				* Functionality

				1. When the page loads:
						- We clear the value of the two inputs (to clear any values cached by the browser)
						- We set an "onchange" event handler on the startDate input to call the setReservationDates function
				2. When a start date is selected
						- We set the low range of the endDate datePicker to be the start date the user has just selected
						- If the endDate input already has a date stipulated and the date falls before the new start date then we clear the input's value

				* Caveats (aren't there always)

				- This demo has been written for dates that have NOT been split across three inputs

		*/

		function makeTwoChars(inp) {
				return String(inp).length < 2 ? "0" + inp : inp;
		}

		function initialiseInputs() {
				// Clear any old values from the inputs (that might be cached by the browser after a page reload)
				document.getElementById("sd").value = "";
				document.getElementById("ed").value = "";

				// Add the onchange event handler to the start date input
				datePickerController.addEvent(document.getElementById("sd"), "change", setReservationDates);
		}

		var initAttempts = 0;

		function setReservationDates(e) {
				// Internet Explorer will not have created the datePickers yet so we poll the datePickerController Object using a setTimeout
				// until they become available (a maximum of ten times in case something has gone horribly wrong)

				try {
						var sd = datePickerController.getDatePicker("sd");
						var ed = datePickerController.getDatePicker("ed");
				} catch (err) {
						if(initAttempts++ < 10) setTimeout("setReservationDates()", 50);
						return;
				}

				// Check the value of the input is a date of the correct format
				var dt = datePickerController.dateFormat(this.value, sd.format.charAt(0) == "m");

				// If the input's value cannot be parsed as a valid date then return
				if(dt == 0) return;

				// At this stage we have a valid YYYYMMDD date

				// Grab the value set within the endDate input and parse it using the dateFormat method
				// N.B: The second parameter to the dateFormat function, if TRUE, tells the function to favour the m-d-y date format
				var edv = datePickerController.dateFormat(document.getElementById("ed").value, ed.format.charAt(0) == "m");

				// Set the low range of the second datePicker to be the date parsed from the first
				ed.setRangeLow( dt );
				
				// If theres a value already present within the end date input and it's smaller than the start date
				// then clear the end date value
				if(edv < dt) {
						document.getElementById("ed").value = "";
				}
		}

		function removeInputEvents() {
				// Remove the onchange event handler set within the function initialiseInputs
				datePickerController.removeEvent(document.getElementById("sd"), "change", setReservationDates);
		}

		datePickerController.addEvent(window, 'load', initialiseInputs);
		datePickerController.addEvent(window, 'unload', removeInputEvents);

		//]]>
		</script> 

</head>

<body>
<div id="wrapper">
    <div id="content">
    	<div id="rotator">
			  <div id="logo" style="center: 600px; height: auto; top: 23px; width: 260px; position: absolute; z-index:4;">
					<h2 class="accordion-header" style="height: 18px; margin-bottom: 15px; color: rgb(255, 255, 255); background: none repeat scroll 0px 0px rgb(53, 48, 48);">E-Venue Booking</h2>
					<div class="accordion-content" style="margin-bottom: 15px;">
						<form action="contact.php" method="post" style="margin-bottom:none;">
						<span style="margin-right: 11px;">Select Category: 
						<select name="route" style="width: 191px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/>
						<?php
						include('include/config.php');
						$result = mysql_query("SELECT * FROM resource_info");
						while($row = mysql_fetch_array($result))
							{
								echo '<option value="'.$row['resource_id'].'">';
								echo $row['name'].'  :'.$row['category'].'  :'.$row['capacity'];
								echo '</option>';
							}
						?>
						</select>
						</span><br>
						<span style="margin-right: 11px;">Date: 
						<input type="text" class="w8em format-d-m-y highlight-days-67 range-low-today" name="date" id="sd" value="" maxlength="10" readonly="readonly" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/>
						</span><br>
						<span style="margin-right: 11px;">No. of venues: 
						<select name="qty" style="width: 191px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						</select>
						</span><br><br>
						<input type="submit" id="submit" value="Next" style="height: 34px; margin-left: 15px; width: 191px; padding: 5px; border: 3px double rgb(204, 204, 204);" />
						</form>
					</div>
					</div>
				</div>
        </div>
		
    </div>
    <!--div id="featured">
        <div id="items">
            <div class="item"> <a href="index.php"><img src="xres/images/01_featured.jpg" alt="" /></a>
            <h3><a href="index.php">Specials Offers</a></h3>
            <p><a href="index.php"><strong>Aircon Bus</strong><br />
			Come in and experience<br /> Our
			new Bus Type<br /> specials today!</a></p>  
            </div>
            <div class="item"> <a href="index.php"><img src="xres/images/02_featured.jpg" alt="" /></a>
            <h3><a href="index.php">New Route</a></h3>
            <p><a href="index.php"><strong>From ble to bla Vice versa</strong><br />
			Spend a relaxing evening in our circa 1796 hotel, steeped in history. </a></p>  
			</div>
        </div-->
    </div>

	<div id="footer">
	<p>&copy; Copyright 2016 e-venues | All Rights Reserved <br /></p>
</div>
</div>
</body>
</html>
