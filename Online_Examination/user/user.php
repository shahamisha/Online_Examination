<?php
include("dbh.php");
session_start();
extract($_POST);
if(isset($_POST['btn']))
{
    
    $username=$_POST['username'];
    $password=$_POST['password'];
	$p=sha1($password);

    $q="select * from students where email='$username' And password='$password'";

 
    $res=$conn->query($q);
    $num=mysqli_num_rows($res);
     $row=$res->fetch_assoc();
     if(!empty($row)){ 
    $rid=$row['id'];

    $q2 = "select name from students where id= $rid";


    $res2=$conn->query($q2);

    $row2=$res2->fetch_assoc();

    if($num>0)
    {
        
        $_SESSION['user_id']=$row['id'];
        $_SESSION['user_name']=$row2['name'];
        $_SESSION['user_email']=$row2['email'];
        if($row['email'] == $username && $row['password'] == $password)
        {
            
            header('location:exam.php');

        } 
        else
		{
?>
			<script>
				alert('Invalid User And Password');
				window.location='login.php';
			</script>
	<?php
		
		}
	}
}
 else
	{
	?>
	<script>
		alert('Invalid User And Password');
		window.location='login.php';
	</script>
	<?php
		
	}
	
}

?>