<?php include 'access_controled_admin.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="admindashboard_js.js"></script>
<title>DU Hall Management System</title>
</head>

<body>
<div id="container">
		<div id="header">
        	<h1>DU Hall Management System</span></h1>
            <h2></h2>
        </div>   
        
        <div id="menu">
        	<ul>
            	<li class="menuitem"><a href="#">Home</a></li>
                <li class="menuitem"><a href="log_out_process.php">log out</a></li>
            </ul>
        </div>
        
		
		<div id="leftmenu">

        <div id="leftmenu_top"></div>

			<div id="leftmenu_main">    
                
                <h3>Links</h3>
                        
                <ul>
                    <li><a href="admin_res_application_update_response.php">Update Residency</a></li>
					</ul>
			</div>
                
                
            <div id="leftmenu_bottom"></div>
        </div>
       
		
		<div id="content">
        
        
        <div id="content_top"></div>
        <div id="content_main">
			<button onclick="res_status();">SEE APPLICATIONS:</button><br>
			<style>
			
			table
			{
				width: 100%;
				border-collapse: collapse;
			}

			table, td, th
			{
				border: 3px solid black;
				padding: 5px;
			}

			th {text-align: left;}
			</style>
        	<table id="tutor_table"></table>
		</div>
        <div id="content_bottom"></div>
            
      </div>
        
        
        
        
		
   </div>
</body>
</html>