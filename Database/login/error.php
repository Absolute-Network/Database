<?php
	session_start();
	session_destroy();
	echo "<script>alert('You have entered an invalid Username or Password')</script>";
	echo "<a href = 'loginNew.php'>Back</a>";
?>