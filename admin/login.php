<?php
@ $db = mysql_pconnect("localhost", "root", "hunsy");
					//checking connecting
						if (!$db)
						{
						echo "Error: Could not connect to database, Please try again.";
		}
					//selecting database to use
					$mysql = mysql_select_db("vfms");
					if(!$mysql)
						{
						echo "Cannot select database.";
				         }
?>
<?php
//Start session
session_start();



	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
		//Sanitize the POST values
    $username = clean($_POST['username']);
	$password = clean($_POST['password']);
	
		//Create query
	$qry="SELECT * FROM admin WHERE username='$username' AND password='$password'";
	$result=mysql_query($qry);
	
	
if($result) {
		if(mysql_num_rows($result) > 0 ) {
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['username'] = $member['username'];
			$_SESSION['password'] = $member['password'];
			
			
			
			session_write_close();
			header("location:admin.php?");
			exit();
			}
		
		else {
			//Login failed
			header("location: login_error.php");
			exit();
		}
		}
	else {
		die("Query failed");
	}	
	

?>