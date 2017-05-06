 
<?php
	
	$conn=mysqli_connect('localhost','root',"","hall_management");
	if($conn->connect_errno>0) echo "not connected";
	
    function GetImageExtension($imagetype)
   	 {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           
           case 'image/gif': return '.jpeg';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
     }
	
	$regi_no=NULL;
	session_start();
	$user_name=$_SESSION["user_id"];
    
	$sql = "SELECT reg_no FROM authentication WHERE user='".$user_name."';";
	$result = mysqli_query($conn,$sql);
	$rowSelected = mysqli_num_rows($result);	
	if($rowSelected==1)
	{
		$row = mysqli_fetch_array($result);
		$regi_no = $row["reg_no"];
	}
	if(!empty($_FILES["myimage"]["name"]))
	{
		$imagename=$_FILES["myimage"]["name"]; 
		$temp_name=$_FILES["myimage"]["tmp_name"];
		$imgtype=$_FILES["myimage"]["type"];
		$ext= GetImageExtension($imgtype);
		$name=$regi_no."-".date("d-m-Y")."-".time().$ext;
		$target_path = "images/".$imagename;	
		//Get the content of the image and then add slashes to it 
		$imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));
		//Insert the image name and image content in image_table
		$insert_image="INSERT INTO money values('".$regi_no."','".$imagetmp."','".$name."');";
		mysqli_query($conn,$insert_image);
	}


?>;
