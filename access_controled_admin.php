<?php
	session_start();
	if(isset($_SESSION['user_id']) && 
		($_SESSION['user_id']=='Sakib' && $_SESSION['password']=='12345678')
		||($_SESSION['user_id']=='Koushik' && $_SESSION['password']=='12345678')||
		($_SESSION['user_id']=='Shourov' && $_SESSION['password']=='12345678') )
	{
		
	}
	else
	{
		header('Location: index.php');
	}
?>