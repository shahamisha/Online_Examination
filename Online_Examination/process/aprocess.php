<?php

require_once ('dbh.php');
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
?>