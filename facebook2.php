<?php

	$email=$_POST['email'];
	$password=$_POST['password'];
	$con=mysqli_connect("localhost","root","","pankhuri");
	if($con==true)
	{
		echo "connected";
		$query="select * from facebook where MobileEmail='$email' and password='$password'";
		$run=mysqli_query($con,$query);
		if($run==true)
		{
			$data=mysqli_num_rows($run);
			if($data<1)
			{
				echo "Incorrect data";
			}
			else{
				echo "Login successful.";
			}
		}
		else{
			echo "error";
			die(mysqli_error($con));
		}
	}
	else{
		echo "error";
		die(mysqli_error($con));
	}
?>