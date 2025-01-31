<?php
    $con=mysqli_connect("localhost","root","","ashu");
	if(isset($_POST['submit']))
	{
		session_start();
		$user=$_SESSION['myValue'];
		$dest=$_POST['food'];
		$query="SELECT php FROM eating WHERE food='$dest'";
		$q=mysqli_query($con,$query);
		$qt=mysqli_fetch_assoc($q);
		$bro=$qt['php'];
		$query1="INSERT INTO food_history(user,food) VALUES ('$user','$dest')";
		mysqli_query($con,$query1);
		header("Location:$bro");
	}
	?>