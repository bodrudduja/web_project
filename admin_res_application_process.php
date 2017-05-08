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
		
			$sql2 = "SELECT reg_no,dept,hall FROM seat_application WHERE hall='".$admin_hall."';";
			$result2 = mysqli_query($conn,$sql2);
			$rowSelected2 = mysqli_num_rows($result2);
			if($rowSelected2>0)
			{	
				$data="<tr><th>Registration No</th><th>Department</th><th>Hall</th></tr>";
				while($row2 = mysqli_fetch_array($result2))
				{	
					$data=$data."<tr>"."<td>" . $row2['reg_no'] . "</td>"."<td>" . $row2['dept'] . "</td>"."<td>" . $row2['hall']."</td>"."</tr>";
				}
				echo $data;
				
				
			}
			
	}
		
	mysqli_close($conn);
?>