<?php
	session_start();
	$USER=null;
	if(isset($_SESSION['user_id']))
	{
		$USER=$_SESSION['user_id'];
		$conn=mysqli_connect('localhost','hallmanagement','hallmanagement','hallmanagement');
		$sql = "SELECT reg_no,user FROM authentication WHERE user='".$USER."';";
		$result = mysqli_query($conn,$sql);
		$rowSelected = mysqli_num_rows($result);
	
		if($rowSelected==1)
		{
			$row = mysqli_fetch_array($result);
			$reg=$row['reg_no'];
			
			$sql2 = "SELECT hall_residency,hall_anme FROM academic_info WHERE reg_no='".$reg."';";
			$result2 = mysqli_query($conn,$sql2);
			$rowSelected2 = mysqli_num_rows($result2);
	
			if($rowSelected==1)
			{
				$row = mysqli_fetch_array($result);
				$status=$row['hall_residency'];
				if($status==1)
				{
					header('Location: profile_res.php');
				}
				else
				{
					header('Location: profile.php');
				}
				
		
			}
		}
		mysqli_close($conn);
	}
	else
	{
		header('Location: index.php');
	}
?>