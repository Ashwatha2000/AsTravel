<?php
    $con=mysqli_connect("localhost","root","","ashu");
	if(isset($_POST['submit']))
	{
		session_start();
		$user=$_SESSION['myValue'];;
		//session_start();
		$_SESSION['myplace']=$_POST['des'];
		$dest=$_POST['des'];
		
		$query="SELECT php FROM iceandbits WHERE destination='$dest'";
		$q=mysqli_query($con,$query);
		$qt=mysqli_fetch_assoc($q);
		$bro=$qt['php'];
		$query1="INSERT INTO destination_history(user,destination) VALUES ('$user','$dest')";
		mysqli_query($con,$query1);
		header("Location:$bro");
	}
	?>