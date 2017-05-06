<?php
	$conn=mysqli_connect('localhost','hallmanagement',"hallmanagement","hallmanagement");
	if($conn->connect_errno>0) echo "not connected";
	
	$reg=$_POST["reg"];
	$dept=$_POST["deptname"];
	echo "Reg: ".$reg;
	echo "Department: ".$dept;
	$sql= "SELECT * FROM academic_info WHERE (reg_no='".$reg."' AND dept='".$dept."');";
	$result = mysqli_query($conn,$sql);
	$rowSelected = mysqli_num_rows($result);
	if($rowSelected )
	{
		while($row = mysqli_fetch_array($result))
			{
				$regi_no = $row["reg_no"];
				echo "Hello: ".$regi_no;
				$name=$_POST["name"];
				$email=$_POST["email"];
				$password=$_POST["password"];
				$phone=$_POST["phone"];
				$acc_add_sql="INSERT INTO authentication values('".$reg."','".$name."','".$email."','".$password."');";
				$result_add = mysqli_query($conn,$acc_add_sql);
				$contact_add_sql="INSERT INTO contact_info values('".$reg."','".$phone."','".$email."');";
				$result_add = mysqli_query($conn,$contact_add_sql);
				
			}
	}
	else
	{
		echo "Data dosen't exist!";
		//echo $sql;
	}

	mysqli_close($conn);
?>