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
	$conn=mysqli_connect('localhost','hallmanagement','hallmanagement','hallmanagement');
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
		$rowSelected2 = mysqli_num_rows($result2);
		if($rowSelected2==1)
		{
			$row2 = mysqli_fetch_array($result2);
			$hall_name=$row2['hall_name'];
			$sql3 = "SELECT tutor_id,tutor_name,hall,dept,phone FROM house_tutor WHERE hall='".$hall_name."';";
			$result3 = mysqli_query($conn,$sql3);
			$rowSelected3 = mysqli_num_rows($result3);
			if($rowSelected3>0)
			{
				//$row3 = mysqli_fetch_array($result3);
				$data="<tr><th>Name</th><th>Department</th><th>Phone</th></tr>";
				while($row3 = mysqli_fetch_array($result3))
				{	
					$data=$data."<tr>"."<td>" . $row3['tutor_name'] . "</td>"."<td>" . $row3['dept'] . "</td>"."<td>" . $row3['phone']."</td>"."</tr>";
}
				
				
				}
			
			//$data="User: <i>".$USER."</i><br/>Hall: <i>".$hall_name."</i>";
			echo $data;
		}
	}
	mysqli_close($conn);
?>