<!DOCTYPE html>
<html>
<head>
   

    <!-- Title Page-->
    <title>Log In | Online Exam System</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
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
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form action="process/addfaculty.php" method="POST" enctype="multipart/form-data">                 

                        
                             <div class="input-group">
                            <input class="input--style-1" type="email" placeholder="Name" name="name" required="required">
							</div>
						                       
                           <div class="input-group">
								<input class="input--style-1" type="email" placeholder="Email" name="email" required="required">
						  </div>
						  
						  <div class="input-group">
								<input class="input--style-1" type="password" placeholder="password" name="pwd" required="required">
						 </div>
                       
                        <div class="row row-space">                           
                            <div class="col-2">                                
                                    <div class="rs-select2 js-select-simple select--no-search">                                       
                                        <div class="select-dropdown"></div>                                    
									</div>
                            </div>
                        </div>                  
						
						<div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Subject" name="sub" required="required">
                        </div>

                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
						
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->
