<?php
	session_start();
	$USER=null;
	$data = "";
	$reg="";
	if(isset($_SESSION['user_id']))
	{
		$USER=$_SESSION['user_id'];
	}
	else
	{
		header('Location: index.php');
	}

	$conn=mysqli_connect('localhost','root',"","hall_management");
	$sql = "SELECT admin_id,hall FROM admin WHERE admin_id='".$USER."';";
	$result = mysqli_query($conn,$sql);
	$rowSelected = mysqli_num_rows($result);
	
	if($rowSelected==1)
	{
		$row = mysqli_fetch_array($result);
		$USER=$row['admin_id'];
		$admin_hall=$row['hall'];
		
		{
			$s=1;
			$reg=$_POST['regi_no'];
			$data="";
			$sql = "UPDATE academic_info SET hall_residency='".$s."' WHERE hall_name='".$admin_hall."' AND reg_no='".$reg."';";
			$result = mysqli_query($conn,$sql);
			$sql2 = "DELETE FROM seat_application WHERE hall='".$admin_hall."' AND reg_no='".$reg."';";
			$result = mysqli_query($conn,$sql2);
			$data="Successfuly changed Residencial status for ".$reg;
			echo $data;
			
			
		}
		
			
			
	}
	
	mysqli_close($conn);
?>