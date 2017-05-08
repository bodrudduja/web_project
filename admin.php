<?php	?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style_index2.css" />
<title>DU Hall Management System</title>
</head>

<body>
<div id="container">
		<div id="header">
        	<h1>DU Hall Management System Admin</span></h1>
            <h2></h2>
        </div>   
        
        <div id="menu">
        	<ul>
            	<li class="menuitem"><a href="admin_login.php">Home</a></li>
                <li class="menuitem"><a href="admin_login.php">Log In</a></li>
            </ul>
        </div>
        
		
		<div id="content_main">
        	<div id="form">
				<div class="form">
					<form action="admin_login_process.php" method="POST">
						<input type="text" placeholder="username" name="uname" required/>
						<input type="password" placeholder="password" name="psw" required/>
						<button type="submit">login</button>
					</form>
				</div>
			</div>
		</div>                    	
   </div>
</body>
</html>