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
        	<h1>DU Hall Management System</span></h1>
            <h2></h2>
        </div>   
        
        <div id="menu">
        	<ul>
            	<li class="menuitem"><a href="index.php">Home</a></li>
                <li class="menuitem"><a href="#">Hall</a></li>
                <li class="menuitem"><a href="sign_up_hall.html">Registration</a></li>
                <li class="menuitem"><a href="index.php">Log In</a></li>
                <li class="menuitem"><a href="#">About</a></li>
              <li class="menuitem"><a href="#">Contact</a></li>
            </ul>
        </div>
        
		
		<div id="content_main">
        	<div id="form">
				<div class="form">
					<form action="login.php" method="POST">
						<input type="text" placeholder="username" name="uname" required/>
						<input type="password" placeholder="password" name="psw" required/>
						<button type="submit">login</button>
						<p class="message">Not registered? <a href="sign_up_hall.html">Create an account</a></p>
					</form>
				</div>
			</div>
		</div>                    	
   </div>
</body>
</html>