<?php include('home.html');

	session_start();
	if(!isset($_SESSION['counter'])){

		$_SESSION['counter']=1;
	}
	
	include('db_connect.php');

?>


<div class="container">
	<h2 class="text-center ">Please answer all the question corrrectly.</h2>
	<hr>
	<?php

		$id=$_SESSION['counter'];
		$sql="SELECT * FROM questions WHERE id=$id";
		$result=$conn->query($sql);
		if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	?>
        
        <form action="user.php"method="post">
		
		<?php 
		
		echo "
        <p  style='font-size:20px;color:red;'>Q".$row['id'].".  ".$row['question']."</p><br>
        <input type='radio' name='answer' value='1'>  ".$row['option1']."<br>
        <input type='radio' name='answer' value='2'>  ".$row['option2']."<br>
        <input type='radio' name='answer' value='3'>  ".$row['option3']."<br>
        <input type='radio' name='answer' value='4'>  ".$row['option4']."<br><br>
        <input type='submit'  value='Next' name='submit' class='btn btn-success'>
        </form>

        ";
      	

         if(isset($_POST['submit'])){
        	if(isset($_POST['answer'])){
        		$answer=$_POST['answer'];
        		$id=$_SESSION['counter'];
        		$sql="SELECT * from questions where id=$id";
        		$result=$conn->query($sql);
        		$ans=$result->fetch_assoc();
        		echo $ans['answer'];
        		echo $answer;
        		if($ans['answer']==$answer){
        			if($_SESSION['counter']<5){
        				$_SESSION['counter']++;
        				header("Location: http://127.0.0.1/quiz/user.php");
        			}
        			else{
        				session_destroy();
        			header("Location: http://127.0.0.1/quiz/congrats.php");
        			}
        			
        		}
        		else{
        			session_destroy();
        			header("Location: http://127.0.0.1/quiz/result.php");
        		}
        		
        		$answer=$_POST['answer'];
        	}
        }
       
    }
} else {
    echo "0 results";
}


	?>
	

</div>