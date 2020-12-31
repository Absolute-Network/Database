<?php
	


	$conn = mysqli_connect('localhost', 'root', '', 'hotel');

	if (!$conn) {
		die("Error...!!!<br>" .mysqli_connect_error());
	}
	else
	{
		echo "<br><br><br>Connected successfully...<br>";
	}

	$name =  $_POST['name'];
	$address =  $_POST['address'];
	$email =  $_POST['email'];
	$check_in =  $_POST['check_in'];
	$check_out =  $_POST['check_out'];
	$package =  $_POST['package'];
	$room_type =  $_POST['room_type'];
	$number_of_rooms =  $_POST['number_of_rooms'];
	$adults =  $_POST['adults'];
	$children =  $_POST['children'];

	$sql = "INSERT INTO Booking(name, address, email, check_in, check_out, package, room_type, number_of_rooms, adults, children) VALUES ('$name', '$address', '$email', '$check_in', '$check_out', '$package', '$room_type', $number_of_rooms, $adults, $children)";
	if (mysqli_query($conn, $sql)) {
		echo "<br>Booking is successfull...<br>";
	}
	else{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
?>