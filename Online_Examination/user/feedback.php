<?php
include ('dbh.php');
$selMyFeedbacks = $conn->query("SELECT * FROM feedback WHERE exmne_id='$exmneSess' ");


if(isset($_POST['btn']))
{ 
				
		$name=$_POST['username'];							
		$insCourse = $conn->query("INSERT INTO feedback(name) VALUES('$name')"); 
		@mysqli_close($conn);
		
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
	
        <!-- MetisMenu CSS -->
        <link href="css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

        
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please Enter Your Feedback!!</h3>
                        </div>
                        <div class="panel-body">
                            <form action="feedback.php" method="POST">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Please Enter Your Feedback" name="username" type="text" autofocus>
                                    </div>
                                    
                                                                          
                                    <br>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <button class="btn btn-lg btn-success btn-block" name="btn">Submit</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    
    </body>
</html>
