<?php include 'access_controled.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
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
        
       
		
		<div id="content">
        
        
        <div id="content_top"></div>
        <div id="content_main">
        	
			<form action="saveimage.php" enctype="multipart/form-data" method="post">
				<h2>Upload Image of Money Receipt</h2>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<table style="border-collapse: collapse; font: 12px Tahoma;" border="1" cellspacing="5" cellpadding="5">
					<tbody>
						<tr>
							<td>
								<input type="file" name="myimage">
 
							</td>
						</tr>

						<tr>
							<td>
								<input type="submit" name="submit_image" value="Upload">
							</td>
						</tr>
					</tbody>
				</table>
			</form>
        	<p>&nbsp;</p>
			<h3>Step:1</h3>
        	<p>You Need to pay 3000 Taka to Janata Bank,TSC branch within 7 worknig days from your application submission day</p>
        	<p>&nbsp;</p>
        	<h3>Step:2</h3>
            <p>After paying required money you will need to upload the image of your money receipt to the link below</p>
            <p>&nbsp;</p>
</div>
        <div id="content_bottom"></div>
            
      </div>
        
        
        
        
		
   </div>
</body>
</html>
