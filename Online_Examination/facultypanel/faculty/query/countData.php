<?php 

// Count All Course
$selCourse = $conn->query("SELECT COUNT(s_id) as totCourse FROM sub_master ")->fetch(PDO::FETCH_ASSOC);


// Count All Exam
$selExam = $conn->query("SELECT COUNT(ex_id) as totExam FROM exam_tbl ")->fetch(PDO::FETCH_ASSOC);




 ?>