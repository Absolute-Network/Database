<!--<?php
/*
	$server = "localhost";
	$user = "root";
	$ps = "";
	$db = "hotel";

	$conn = mysqli_connect($server, $user, $ps, $db);

	if (!$conn) {
		die("Error...!!! Connection failed: " . mysqli_connect_error());
	}
	else{
		echo "Conneted to the database successfully...!!!<br><br>";
	}

	if (isset($_POST['username'])) {
		$uname = $_POST['username'];
		$password = sha1($_POST['password']);

		$sql = "SELECT * FROM Registration WHERE userName =  '".$uname."' AND password = '".$password."' limit 1";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) == 1) {
			echo "You have successfully logged in.";
			exit();
		}
		else{
			echo "You have entered an incorrect username or password...!!!";
			exit();
		}
	}
*/
?>-->

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="main">
		<div id="login-box">
			<div class="pay-logo">
				<img src="logo2.png" width="100" height="100" id="logo">
		    </div>
		    <form method="POST" action="validation.php" class="was-validated" oninput="password2.setCustomValidity(password2.value != password.value ? 'Passwords do not match.' : '')">
				<div class="left">
					<h1>Sign In</h1>
					<div class="form-group">
						<input type="text" name="username" placeholder="Username" required>
						<div class="valid-feedback">Valid.</div>
      					<div class="invalid-feedback">Please fill out this field.</div>
					</div>
					<!--<div class="form-group">
						<input type="text" name="email" placeholder="E-mail" required>
						<div class="valid-feedback">Valid.</div>
      					<div class="invalid-feedback">Please fill out this field.</div>
					</div>-->
					<div class="form-group">
						<input type="password" name="password" placeholder="Password" required>
						<div class="valid-feedback">Valid.</div>
      					<div class="invalid-feedback">Please fill out this field.</div>
					</div>
					<!--<div class="form-group">
						<input type="password" name="password2" placeholder="Retype password" required>
						<div class="valid-feedback">Valid.</div>
      					<div class="invalid-feedback">Please fill out this field.</div>
					</div>-->

					<input type="submit" name="signup_submit" value="Sign me up" />
				</div>

				<div class="right">
					<span class="loginwith">Sign in with<br />social network</span>

					<button class="social-signin facebook">Log in with facebook</button>
					<button class="social-signin twitter">Log in with Twitter</button>
					<button class="social-signin google">Log in with Google+</button>
				</div>
				<div class="or">OR</div>
			</form>
		</div>
	</div>
</body>
</html>
