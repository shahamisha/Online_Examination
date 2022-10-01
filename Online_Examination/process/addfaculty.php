<?php

require_once ('dbh.php');

$firstname = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$add = $_POST['add'];
$mno = $_POST['mno'];
$sub = $_POST['sub'];


    $sql = "INSERT INTO `faculty_master`( `fname`, `lname`, `email`, `password`, `gender`, `dob`, `address`, `mobile_no`,  `main_subject`) VALUES ('','$firstname','$lastName','$email','$pwd','$gender','$dob','$add','$mno','$sub')";

$result = mysqli_query($conn, $sql)

$sqlS = "INSERT INTO `sub_master`(`sub_id`, `name`, ) VALUES ('','$sub','$id')";
$salaryQ = mysqli_query($conn, $sqlS);

if(($result) == 1){
    
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    window.location.href='..//flogin.php';
    </SCRIPT>");
    //header("Location: ..//aloginwel.php");
}

else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Registere')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}

/*if(isset($_POST['submit']))
{ 
	
	$pname=$_POST['sub'];						
	$fname=$_POST['fname'];
						
				
	$sqli="select f_id from faculty_master where name='".$fname."'";
	$ans=$con->query($sqli);  
	$rset=mysqli_fetch_array($result);
	$fid=$rset['f_id'];
	$sqli="insert into sub_master value('','$pname','$fid')";
	$ans=$con->query($sqli); 
	//echo "Record Inserted Successfully<br><br>";
	mysqli_close($con);
}*/
?>