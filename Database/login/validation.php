<?php

	session_start();

	$con=mysqli_connect('localhost','root','');
	mysqli_select_db($con,'hotel');

	$name=$_POST['username'];
	$pass=sha1($_POST['password']);

	$sql="select * from registration where userName = '$name' && password = '$pass'";

	$result=mysqli_query($con,$sql);
	$num=mysqli_num_rows($result);

	if($num==1){
	    $_SESSION['username']=$name;
	    header('location:home.php');
	}else{
	    header('location:error.php');
	}
?>