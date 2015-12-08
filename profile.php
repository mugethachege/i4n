<?php
include('session.php');
?>
<?php
require('layout/header.php');
?>
<body>
		<div id="profile">
		<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
		<b id="logout"><a href="logout.php">Log Out</a></b>
		</div>
	</body>
</html>
