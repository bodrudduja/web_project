<?php 
	
	$conn=mysqli_connect('localhost','hallmanagement',"","hallmanagement");
	if($conn->connect_errno>0) echo "not connected";
	
	
	session_start();
	$user_name=$_SESSION["user_id"];
    
	$sql = "SELECT reg_no FROM authentication WHERE user='".$user_name."';";
	$result = mysqli_query($conn,$sql);
	$rowSelected = mysqli_num_rows($result);
	
	if($rowSelected==1)
	{
		$program=$_POST["program_name"];
		$addr=$_POST["address"];
		$reason=$_POST["reason"];
		$row = mysqli_fetch_array($result);
		$regi_no = $row["reg_no"];
		
		$sql_1="SELECT dept,hall_name FROM academic_info WHERE reg_no='".$regi_no."';";
		$result1 = mysqli_query($conn,$sql_1);
		$rowSelected1 = mysqli_num_rows($result1);
		$row1 = mysqli_fetch_array($result1);
		$hall = $row1["hall_name"];
		$dept_name=$row1["dept"];
		
		$application_add_sql="INSERT INTO seat_application values('".$regi_no."','".$dept_name."','".$program."','".$addr."','".$reason."','".$hall."');";
		$result_add = mysqli_query($conn,$application_add_sql);
		$application_test_sql=$sql = "SELECT reg_no FROM seat_application WHERE reg_no='".$regi_no."';";
		$r = mysqli_query($conn,$application_test_sql);
		$row_sel = mysqli_num_rows($r);
		if($row_sel==1)
		{
			header('Location: application_process_response.php');
		}
		else
		{
			echo "<h2>Your application can not be submitted at this momment<h2> <br><br> Please try again later!";
		}
		//
	}
	
	
	else
	{
		echo "Data dosen't exist!";
		//echo $sql;
	}

	mysqli_close($conn);
?>