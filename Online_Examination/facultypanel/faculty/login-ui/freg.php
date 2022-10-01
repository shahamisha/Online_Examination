
<?php
					if(isset($_POST['btnsubmit']) == " "){
					
				?>
						<script>
						window.location.href='http://localhost/Online_Examination/facultypanel/faculty/index.php';
						</script>
						
						<!--<h3>Record successfully Update</h3>
						
						header("location:viewcategory.php");-->
					<?php
					}
						
				?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Faculty REGISTER</title>
	<?php
		include("conn.php"); 
		
	?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="login-ui/image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="login-ui/css/util.css">
	<link rel="stylesheet" type="text/css" href="login-ui/css/main.css">
</head>


<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(login-ui/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Register
					</span>
				</div>
	<form name="c1" action="freg.php" method="post">
<table width=500 border=0>
<form method="post" id="adminRegisterFrm" class="register100-form validate-form">
	
					<div class="wrap-input100 validate-input m-b-26" data-validate="Full name is required">
						<span class="label-input100">Full name</span>
						<input class="input100" name="txtname" placeholder="Enter full name">
						<span class="focus-input100"></span>
					</div>

<div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
						<span class="label-input100">Email</span>
						<input class="input100" name="txtemail" placeholder="Enter email">
						<span class="focus-input100"></span>
					</div>
<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="txtpass" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Main Subject is required">
						<span class="label-input100">main Subject</span>
						<input class="input100" name="txtsub" placeholder="Enter sub">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn" alig="center">
						<button type="submit" class="login100-form-btn" name="btnsubmit">
							Register
                		</button>
				
					</div>
					<p>already registerd?<a href="index.php">Login here</a>
					

</table>
</form>
<?php
if(isset($_POST['btnsubmit']))
{ 
	
	$name=$_POST['txtname'];
	
	$email=$_POST['txtemail'];
	$pass=$_POST['txtpass'];
	$encrypted_pwd = password_hash($pass,PASSWORD_DEFAULT);
	
	$sub=$_POST['txtsub'];
	
	
	$sql="insert into faculty_master(fname,email,password,main_subject) values('$name','$email','$encrypted_pwd','$sub')";
	$result=$conn->query($sql);
	
	echo "<br>Registration successfully ...";
	
	@mysqli_close($conn);
	
}
?>
</body>
</html>
