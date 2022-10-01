<?php


require_once ('dbh.php');

if(isset($_POST['submit']))
{ 
$email = $_POST['email'];
$password = $_POST['pwd'];
$encoded=base64_encode($password);
$decoded=base64_decode($encoded);

$sql = "SELECT * from admin WHERE email = '$email' AND password = '$password'";
//echo "$sql";

$ans=$conn->query($sql); 
$result = mysqli_query($conn, $sql);
if(($result) == 1){
	
?>
	<script>
						window.location.href='http://localhost/Online_Examination/admin/home.php';
					</script>
					<?php	
}

else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid Email or Password')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
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
				<li><a class="homered" href="alogin.php">ADMIN</a></li>
				
			</ul>
		</nav>
	</header>
	<div class="divider"></div>

	<div class="loginbox">
    <img src="assets/admin.png" class="avatar">
        <h1>Login Here</h1>
        <form action="alogin.php" method="POST">
            <p>Email</p>
            <input type="text" name="email" placeholder="Enter Email Address" required="required">
            <p>Password</p>
            <input type="password" name="pwd" placeholder="Enter Password" required="required">
            <input type="submit" name="submit" value="Login">
			<a href="aregister.php">Register Now </a>
           
        </form>
        
    </div>
</body>
</html>