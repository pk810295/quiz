<?php include('db_connect.php');
	extract($_POST);
	$ques=$conn->real_escape_string($ques);
	$sql="INSERT INTO questions( question,option1, option2, option3,option4, answer) VALUES('$ques','$option1','$option2','$option3','$option4','$ans')";
	if($conn->query($sql)===TRUE){
		echo "data inserted";
		header("Location: http://127.0.0.1/quiz/create-quiz.php");

	}
	else{
		echo $conn->error;
	}
	
?>