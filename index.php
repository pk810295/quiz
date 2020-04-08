<?php
include('db_connect.php');
include ('home.html');
session_destroy();
?>
	<div style="border:2px;">
		<nav class="nav-bar text-center">
			<a href="admin.php"class="btn btn-primary">Admin</a>
			<a href="user.php" class="btn btn-primary">User</a>
		</nav>
	</div>