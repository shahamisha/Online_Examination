<?php
include("check.php");
?>

        
<style>
  #clockcontainer{
  float: right;
  margin-top: 27px;
  margin-right: 150px;
}
</style>
        
       <link href="css/bootstrap.min.css" rel="stylesheet">

    
        <link href="css/metisMenu.min.css" rel="stylesheet">

        
        <link href="css/timeline.css" rel="stylesheet">

        
        <link href="css/startmin.css" rel="stylesheet">

        
        <link href="css/morris.css" rel="stylesheet">

        
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/style.css">

        
    </head>
    </html>
<?php
//session_start();
//include("examheader.php");

include("dbh.php");

if(!isset($_SESSION['current_que']) || empty($_SESSION['current_que'])){
	$_SESSION['current_que'] = 1;

}
//echo $_SESSION['qa'][1]['question'];
?>
<script type="text/javascript">

	function getPrevQue(){

		var checked_value = $('input[type=radio]:checked').val();
		var current_que = $('#current_que').val();

		$.ajax({
			url: 'submit_que.php',
			type: 'POST',
			data: 'prev=1',
			success: function(data){
				if(data == 1){
					location.reload();

				}
			}
		});

	}

	function getNextQue(){

		var checked_value = $('input[type=radio]:checked').val();
		var current_que = $('#current_que').val();

		//alert(checked_value);
		//alert(current_que);

		$.ajax({
			url: 'submit_que.php',

			type: 'POST',
			data: 'next=1&value='+checked_value+'&current_que='+current_que,
			success: function(data){
				//alert(data);
				if(data == 1){
					location.reload();
					//window.location='submit_que.php';
				}
			}
		
});
	}
	function getSubmitQue(){

		var checked_value = $('input[type=radio]:checked').val();
		var current_que = $('#current_que').val();

		//alert(checked_value);
		//alert(current_que);

		$.ajax({
			url: 'submit_que.php',

			type: 'POST',
			data: 'next=1&value='+checked_value+'&current_que='+current_que,
			success: function(data){
				//alert(data);
				if(data == 1){
					location.reload();
					//window.location='result_count.php';
				}
			}
		
});
	}
</script>
<form  method="POST" enctype="multipart/form-data">

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                           
                        </div>
                        
                    
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                          
                                            <form role="form">

                                                   <div class="row">
				<h4>
					Q.<?php echo $_SESSION['current_que']; echo '  '; echo $_SESSION['qa'][$_SESSION['current_que']]['exam_question']; ?>

				</h4>
			</div>

			<div class="form-group" id="checkbox_div">

				<div class="row">
					<div class="col-md-5">
						<div class="radio">
							<label>
								<input type="radio" name="exam_answer" value="exam_ch1" <?php if(!empty($_SESSION['qa'][$_SESSION['current_que']]['exam_answer']) && $_SESSION['qa'][$_SESSION['current_que']]['exam_answer'] == 'exam_ch1') { echo 'checked="checked"'; } ?>>
								<span class="label-text"><?php echo $_SESSION['qa'][$_SESSION['current_que']]['exam_ch1']; ?></span>
							</label>
						</div> 
					</div>

					<div class="col-md-5">
						<div class="radio">
							<label>
								<input type="radio" name="exam_answer" value="exam_ch2" <?php if(!empty($_SESSION['qa'][$_SESSION['current_que']]['exam_answer']) && $_SESSION['qa'][$_SESSION['current_que']]['exam_answer'] == 'exam_ch2') { echo 'checked="checked"'; } ?>>
								<span class="label-text"><?php echo $_SESSION['qa'][$_SESSION['current_que']]['exam_ch2']; ?></span>
							</label>
						</div> 
					</div>
				</div>

				<div class="row">
					<div class="col-md-5">
						<div class="radio">
							<label>
								<input type="radio" name="exam_answer" value="exam_ch3" <?php if(!empty($_SESSION['qa'][$_SESSION['current_que']]['exam_answer']) && $_SESSION['qa'][$_SESSION['current_que']]['exam_answer'] == 'exam_ch3') { echo 'checked="checked"'; } ?>>
								<span class="label-text"><?php echo $_SESSION['qa'][$_SESSION['current_que']]['exam_ch3']; ?></span>
							</label>
						</div> 
					</div>

					<div class="col-md-5">
						<div class="radio">
							<label>
								<input type="radio" name="exam_answer" value="exam_ch4" <?php if(!empty($_SESSION['qa'][$_SESSION['current_que']]['exam_answer']) && $_SESSION['qa'][$_SESSION['current_que']]['exam_answer'] == 'exam_ch4') { echo 'checked="checked"'; } ?>>
								<span class="label-text"><?php echo $_SESSION['qa'][$_SESSION['current_que']]['exam_ch4']; ?></span>
							</label>
						</div> 
					</div>
				</div>

			</div>

			<input type="hidden" id="current_que" value="<?php echo $_SESSION['current_que']; ?>" />

			<div class="col-md-6 col-md-offset-3">
				
				<?php if($_SESSION['current_que'] != 1){ ?>
				<button type="" id="prev_button" onclick="getPrevQue(); return false;" class="btn btn-primary"><i class="fa fa-fw fa-arrow-left"></i>Previous</button>
				<?php } ?>

				<?php if($_SESSION['current_que'] != 10){ ?>
				<button type="" id="next_button" onclick="getNextQue(); return false;" class="btn btn-primary">Next<i class="fa fa-fw fa-arrow-right"></i></button>
				<?php } ?>
				<?php if($_SESSION['current_que'] == 10){ ?>
				<button type="" id="next_button" onclick="getSubmitQue(); return false;" class="btn btn-primary" ><a href="result_count.php">Submit<i class="fa fa-fw fa-arrow-right"></i></button></a>
				<?php } ?>
				
				

				

			</div>

		</div>
	</div>
</div>

<link rel="stylesheet" type="text/css" href="css/timeTo.css">

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


