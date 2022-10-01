<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ADMIN</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
        <!--<div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>-->
        <div class="sidebar-brand-text mx-3">Dashboard </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="viewfaculty.php" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>FACULTY</span>
        </a>
       
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="viewstud.php"  data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>STUDENT</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="report.php" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>REPORT</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">REPORT Screens:</h6>
             <a class="collapse-item" href="viewexam.php">EXAMS</a>
            
			<a class="collapse-item" href="#">RESULTS</a>
		
		
           
          </div>
        </div>
      </li>
	  <li class="nav-item">
        <a class="nav-link collapsed" href="/Online_Examination/alogin.php" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>LOGOUT</span>
        </a>
       
      </li>

	  
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <h3 class="h3">Update Faculty Data</h3>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Nav Item - User Information -->
			<li class="nav-item dropdown no-arrow">
           
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid h-100">
          <!-- Content Row -->
          <div class="row no-gutters">
			  <div class="table-responsive">
				<form method="post">
				<?php
					if(isset($_POST['btnsubmit']) == " "){
					
				?>
						<script>
						window.location.href='http://localhost/Online_Examination/admin/viewfaculty.php';
						</script>
						
						<!--<h3>Record successfully Update</h3>
						
						header("location:viewcategory.php");-->
					<?php
					}
						
				?>
					<table class='table table-hover table-striped'>
						<tbody>
						<?php
							include ('conn.php');
							$id=$_GET['id'];
							$selCourse = $conn->query("SELECT * FROM faculty_master WHERE f_id='$id' ")->fetch(PDO::FETCH_ASSOC);	//	$cmd=mysql_query($sql,$con) or die(mysql_error());						
							//$rset=mysql_fetch_array($cmd);
						?>
							<!--<tr>
								<td>category id:</td>
								<td>
								<input type="text" name="txtcatid" readonly="readonly" value="<?php echo $cat_id;?>" class="form-control"/>
								</td>
							</tr>
							<br>-->
							<tr>
								<td>Faculty name:</td>
								<td><input type="text" name="txtname" value="<?php echo $selCourse['fname'];?>" class="form-control"/></td>
							</tr>
							<br>
							<tr>
								<td>Email:</td>
								<td><input type="text" name="txtemail" value="<?php echo $selCourse['email'];?>"  class="form-control"/></td>
							</tr>
							<br>
							<tr>
								<td>Password:</td>
								<td><input type="text" name="txtpass" value="<?php echo $selCourse['password'];?>"  class="form-control"/></td>
							</tr>
							<tr>
								<td>Main_Subject:</td>
								<td><input type="text" name="txtsub" value="<?php echo $selCourse['main_subject'];?>"  class="form-control"/></td>
							</tr>
							<br>
							<br>
							<tr>
								<td>
									<button type="submit" name="btnsubmit" class="btn btn-outline-dark">UPDATE
									</button>
								</td>
							</tr>
							<?php//}?>
						</tbody>
					</table>
				<form>
				<?php
					if(isset($_POST['btnsubmit']))
					{ 
						//echo $category_id=$_POST['txtcatid'];
						 $name=$_POST['txtname'];
						 $email=$_POST['txtemail'];
						 $pass=$_POST['txtpass'];
						 $sub=$_POST['txtsub'];
						//$sql="Update category_master set name='$name' where category_id='$category_id'";
						$updCourse = $conn->query("UPDATE faculty_master SET fname='$name',email='$email',password='$pass',main_subject='$sub' WHERE f_id='$id' ");
						@mysqli_close($conn);
					}
					?>

				<a class="scroll-to-top rounded" href="#page-top" style="display: inline;">
					<i class="fas fa-angle-up"></i>
				</a>	
			   </div>
		   </div>
	   </div>
       <!-- End of Main Content -->

      <!-- Footer -->
     <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <!--<div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>-->
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
