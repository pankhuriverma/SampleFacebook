<?php

	$FirstName=$_POST['FirstName'];
	$SurName=$_POST['SurName'];
	$MobEmail=$_POST['MobEmail'];
	$MobEmail2=$_POST['Reenter'];
	$password=$_POST['password'];
	$day=$_POST['Day'];
	$month=$_POST['Month'];
	$year=$_POST['Year'];	

	$con=mysqli_connect("localhost","root","","pankhuri");
	// print_r($_POST);
	if($con==true)
	{
		// echo "connected";
		$query="insert into facebook(FirstName,SurName,MobileEmail,MobEmail2,Password,Day,Month,Year) values('".$FirstName."','".$SurName."','".$MobEmail."','".$MobEmail2."','".$password."','".$day."','".$month."','".$year."')";
		// echo $query;

		$query2="select * from facebook where MobileEmail='$MobEmail'";
		// $query3="select * from facebook where MobileEmail='$MobEmail' and MobileEmail2='$Reenter'";

		// $run3=mysqli_query($con,$query3);
		// if($run3==true)
		// {
			if($MobEmail==$MobEmail2)
			{

				$run2=mysqli_query($con,$query2);
				if($run2==true)
				{
					
					$data=mysqli_num_rows($run2);
					if($data>0)
					{
						echo "Enter another email id";

					}
					else
					{
					// echo "Login successful.";
						$run=mysqli_query($con,$query);
						if($run==true)
						{
							echo " Thank you.Data inserted successfully.";
						}
						else
						{
								echo "<br>Error";
								die(mysqli_error($con));
						}
					}
				}
			}
		// }
		else
		{
			echo "Please enter the same email id";
		}


		
		
		
		
	}

	else
	{
		echo "Not connected";
	}

?>
