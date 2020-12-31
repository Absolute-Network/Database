<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:loginNew.php');
}

?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="container">
		<a class="float-right" href="logout.php">Log Out</a>

		<h1>Welcome <?php echo $_SESSION['username']; ?></h1>
	</div>
</body>
</html>