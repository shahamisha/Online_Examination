
<form name="c1" action="freg.php" method="post">
<table width=500 border=0>
<tr>
	<td>
		<center><h3>Register</h3></center>
	</td>
</tr>

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

<div class="limiter">
		<div class="container-register100">
			<div class="wrap-register100">
				<div class="register100-form-title" style="background-image: url(login-ui/images/bg-01.jpg);">
					<span class="register100-form-title-1">
						Register
					</span>
				</div>
			</div>
		</div>
</div>

<tr>
	<td>Full name:</td>
	<td><input type="text" name="txtname"/></td>
</tr>
<br>

<tr>
    <td>email:</td>
    <td><input type="text" name="txtemail"/></td>
</tr>
<br>

<tr>
	<td>email:</td>
	<td><input type="text" name="txtemail"/></td>
</tr>
<br>

<tr>
	<td>password:</td>
	<td><input type="password" name="txtpass"/></td>
</tr>
<br>

<tr>
	<td>main subject:</td>
	<td><input type="txt" name="txtsub"/></td>
</tr>
<br>


<tr colspan=2>
	<td><center>
		<input type="submit" value="submit" name="btnsubmit"/>
</td>
</tr>
<br>
</table>
<a href="index.php">Already have an account? Log In </a>
</form>
<?php
if(isset($_POST['btnsubmit']))
{ 
	
	$name=$_POST['txtname'];
	
	$email=$_POST['txtemail'];
	$pass=$_POST['txtpass'];
	$sub=$_POST['txtsub'];
	
	
	$sql="insert into faculty_master(fname,email,password,main_subject) values('$name','$email','$pass','$sub')";
	$result=$conn->query($sql);
	echo "<br>Record successfully inserted...";
	mysqli_close($conn);
}
?>




</body>
</html>
