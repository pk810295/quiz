<?php include('home.html') ?>

<div class="container">
	<a href="/quiz" class="btn btn-successs">Home</a>
	<form action="upload.php" method="post">
	<textarea id="ques" type="text" name="ques" class="form-control p" placeholder="Enter question .."></textarea>
	<br>
	<input id="option1" type="text" name="option1" class="form-control p" placeholder="Option1 ..">
	<br>
	<input id="option2" type="text" name="option2" class="form-control p" placeholder="Option2 .."><br>
	<input id="option3" type="text" name="option3" class="form-control p" placeholder="Option3 .."><br>
	<input id="option4" type="text" name="option4" class="form-control p" placeholder="Option4 .."><br>
	<input id="ans" type="text" name="ans" class="form-control p" placeholder="Right Answer .."><br>
	<input type="submit" name="Add" class=" text-center btn btn-success">

</form>

</div>


