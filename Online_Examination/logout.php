<html>
<head>
<body style="background-color:plum"?>
<?php
	session_start();
	session_destroy();
	header('location:alogin.php');
	
?>
</body>
</html>