<?php

require_once ('dbh.php');
if(isset($_POST['submit']))
{ 
	
	$firstname = $_POST['firstName'];
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];
	$p=md5($pwd);
	$sqli="INSERT INTO `admin`( `name`,`email`, `password`) VALUES ('$firstname','$email','$p')";
	$ans=$conn->query($sqli); 
	$result = mysqli_query($conn, $sqli);
	if(($result) == 1)
	{
    ?>
    	<script>
						window.location.href='http://localhost/Online_Examination/admin/home.php';
						</script>
    
    
	<?php
	}
	
	else
	{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Registere')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}
	//echo "Record Inserted Successfully<br><br>";
	mysqli_close($conn);
}
?>