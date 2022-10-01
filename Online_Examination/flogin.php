<?php

require_once ('dbh.php');

if(isset($_POST['pwd'])) 
{
	$email = $_POST['mailuid'];
	$password = $_POST['pwd'];
	$sql="select * from faculty_master WHERE email='$email' AND password='$password'";
	$result=mysqli_query($con,$sql);	
	if(mysqli_num_rows($result) > 0)
	{
		echo"Invalid Username or Password...";
		exit();
	}
	else
	{
		?>
		
		<script>
			window.location.href='http://localhost/Online_Examination/facultypanel/faculty/home.php';
	</script>
	<?php
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Log In | Online Exam System</title>
	<link rel="stylesheet" type="text/css" href="stylelogin.css">
</head>
<body>
	<header>
		<nav>
			<h1>Online Exam System</h1>
			<ul id="navli">
				<li><a class="homeblack" href="index.php">HOME</a></li>
				<li><a class="homered" href="flogin.php">FACULTY</a></li>
				<li><a class="homeblack" href="alogin.php">ADMIN</a></li>
				
			</ul>
		</nav>
	</header>
	<div class="divider"></div>

	<div class="loginbox">
    <img src="assets/avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form action="flogin.php" method="POST">
            <p>Email</p>
            <input type="text" name="mailuid" placeholder="Enter Email Address" required="required">
            <p>Password</p>
            <input type="password" name="pwd" placeholder="Enter Password" required="required">
            <input type="submit" name="login-submit" value="Login">
			<a href="fregister.php">Ragister Now </a>
           
        </form>
        
    </div>
</body>
</html>