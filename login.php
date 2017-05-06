<?php
	$conn=mysqli_connect('localhost','hallmanagement',"hallmanagement","hallmanagement");
	if($conn->connect_errno>0) echo "not connected";
	if(isset($_POST["uname"], $_POST["psw"])) 
    {     

        $user_name = $_POST["uname"]; 
        $password = $_POST["psw"]; 
		
		$sql= "SELECT reg_no,user,password FROM authentication WHERE (user = '".$user_name."' AND  password = '".$password."');";
		$result1 = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result1) == 1 )
        { 
			$row = mysqli_fetch_array($result1);
			session_start();
            $_SESSION["ligin_status"]=true; 
            $_SESSION["user_id"] = $row['user'];
			$regi_no=$row['reg_no'];
			
			$sql2= "SELECT reg_no,hall_residency FROM academic_info WHERE (reg_no = '".$regi_no."');";
			$result2 = mysqli_query($conn,$sql2);
			
				$row2 = mysqli_fetch_array($result2);
				$residency=$row2['hall_residency'];
				echo 'Log in succesful';
				echo 'Session info ssid:'.$_SESSION["user_id"].' sss_sts: '.$_SESSION["login_status"];
				if($residency==1)
				{
					header('Location: profile_res.php');
				}
				else
				{
					header('Location: profile.php');
				}
			
			
			
        }
        else
        {
            echo 'The username or password is incorrect!';
        }
	}
	//mysqli_close($conn);
?>