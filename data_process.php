<?php
	session_start();
	$USER=null;
	$data = "";
	if(isset($_SESSION['user_id']))
	{
		$USER=$_SESSION['user_id'];
	}
	else
	{
		header('Location: index.php');
	}
	$conn=mysqli_connect('localhost','hallmanagement',"hallmanagement","hallmanagement");
	$sql = "SELECT reg_no,user FROM authentication WHERE user='".$USER."';";
	$result = mysqli_query($conn,$sql);
	$rowSelected = mysqli_num_rows($result);
	
	if($rowSelected==1)
	{
		$row = mysqli_fetch_array($result);
		$USER=$row['user'];
		$reg=$row['reg_no'];
		$sql2 = "SELECT hall_name FROM academic_info WHERE reg_no='".$reg."';";
		$result2 = mysqli_query($conn,$sql2);
		$rowSelected2 = mysqli_num_rows($result);
		if($rowSelected2==1)
		{
			$row2 = mysqli_fetch_array($result2);
			$hall_name=$row2['hall_name'];
			$data="User: <i>".$USER."</i><br/>Hall: <i>".$hall_name."</i>";
			echo $data;
		}
	}
	mysqli_close($conn);
?>