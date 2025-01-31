<?php
    $con=mysqli_connect("localhost","root","","ashu");
	if(isset($_POST['fashion']))
	{
		session_start();
		$user=$_SESSION['myValue'];
		$dest=$_POST['fashionn'];
		$query="SELECT php FROM fashion WHERE fashion='$dest'";
		$q=mysqli_query($con,$query);
		$qt=mysqli_fetch_assoc($q);
		$bro=$qt['php'];
		$query1="INSERT INTO fashion_history(user,fashionn) VALUES ('$user','$dest')";
		mysqli_query($con,$query1);
		header("Location:$bro");
	}
	?>
	
	 