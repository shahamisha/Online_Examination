<?php
include("check.php");
?>

<?php 
//session_start();
extract($_POST);

include("dbh.php");


if(isset($_POST['subject']) && !empty($_POST['subject'])){
	$_SESSION['subject'] = $_POST['subject'];
}

foreach ($_SESSION as $key => $value) {
	$key = $value;
}

//unset($_SESSION['qa']);
if(!isset($_SESSION['qa']) || empty($_SESSION['qa'])){


	$q = "select * from exam_question_tbl where exam_id = '".$subject."'  order by RAND() limit 30";
	 $res=$conn->query($q);
	 if(mysqli_num_rows($res)<=0)
	 {
	 	?>
	 	<script>
        alert('Sorry the questions are not available. Try with some other subject');
        window.location='exam.php';
      </script>
    <?php
	 }
	 
	$_SESSION['qa'] = array();
	$count = 1;
	while($row = mysqli_fetch_assoc($res)){
		$_SESSION['qa'][$count]['eqt_id'] = $row['eqt_id'];
		$_SESSION['qa'][$count]['exam_question'] = $row['exam_question'];
		$_SESSION['qa'][$count]['exam_ch1'] = $row['exam_ch1'];
		$_SESSION['qa'][$count]['exam_ch2'] = $row['exam_ch2'];
		$_SESSION['qa'][$count]['exam_ch3'] = $row['exam_ch3'];
		$_SESSION['qa'][$count]['exam_ch4'] = $row['exam_ch4'];
		$_SESSION['qa'][$count]['exam_answer'] = '';
		$count++;
	}
}


//echo $_SESSION['qa'][1]['question'];exit();
include("examheader.php");
?>

<html>


</head>

<body>

	

	<iframe id="exam_frame" width="100%" height="450" frameborder="0" scrolling="no" src="exam_frame.php"></iframe>

	  <script type="text/javascript">
		setTimeout(myfun,1800000);

		function myfun()
		{
			window.location = 'result_count.php';
		}
	</script>
	

<script src="js/jquery.min.js"></script>

        
        <script src="js/bootstrap.min.js"></script>

        
        <script src="js/metisMenu.min.js"></script>

        
        <script src="js/dataTables/jquery.dataTables.min.js"></script>
        <script src="js/dataTables/dataTables.bootstrap.min.js"></script>

        
        <script src="js/startmin.js"></script>
        <script src="js/jquery.min.js"></script>

       
        <script src="js/bootstrap.min.js"></script>

        
        <script src="js/metisMenu.min.js"></script>

        
        <script src="js/startmin.js"></script>

<script type="text/javascript">
		$(function()
		{
			$('#countdown').timeTo(1800, function()
			{
				alert('Your examination time is completed.\nYou are Redirecting to Result page.');
				window.location.assign("result_count.php");
			});
		});
	</script>