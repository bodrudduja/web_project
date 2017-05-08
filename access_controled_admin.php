<?php
	session_start();
	if(isset($_SESSION['user_id']) && ($_SESSION['user_id']=='Sakib')||($_SESSION['user_id']=='Koushik')||($_SESSION['user_id']=='Shourov') )
	{
		
	}
	else
	{
		header('Location: index.php');
	}
?>