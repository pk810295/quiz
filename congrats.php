<?php include('home.html');
	include('db_connect.php')?>
<h2 class="text-center">Hurrah! you have answered all questions correctly.</h2>
<form class="container" method="post" action="">
	<div class="text-center"><p>Enter Your Detail to get prizes fro winning</p></div>
	<input type="text" name="first_name" class="container form-control" placeholder="First Name"><br>
	<input type="text" name="last_name" class="container form-control" placeholder="Last Name"><br>
	<div class="text-center"><input type="submit" name="submit" class=" btn btn-success"></div>
</form>
<?php 
	if(isset($_POST['submit']))
	{
		extract($_POST);
	
	$sql="INSERT INTO winners(first_name,last_name) VALUES('$first_name','$last_name')";
	if($conn->query($sql)===TRUE){
		?>
		<script type="text/javascript">
			window.alert("Succesfully Submitted");
		</script>
		<?php
		
	}
	else{
		echo $conn->error;
	}
	}
	
?>
