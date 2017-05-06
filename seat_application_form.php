<?php include 'access_controled.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Hall Registration Form</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="style_sign_up_hall.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo_sign_up_hall.css" media="all" />
</head>
<body>
<div class="container">
            <div class="freshdesignweb-top">
                <a href="" target="_blank">Home</a>
                <span class="right">

                </span>
                <div class="clr"></div>
            </div>
			<header>
				<h1><span>Dhaka University</span> Hall Seat Application Form</h1>
            </header>       
      <div  class="form">
    		<form id="contactform" action="seat_application_process.php" method="POST"> 
				
				<fieldset>
                 <label>Department</label>
                  <label class="department"> 
                  <select class="select-style" name="dept_name">
                  <option value="">dept</option>
                  <option  value="CSE">CSE</option>
                  <option value="EEE">EEE</option>
                  <option value="Microbio">Microbio</option>
                  <option value="GEB">GEB</option>
                  <option value="SBI">SBI</option>
                  <option value="Physics">Physics</option>
                  <option value="Chemistry">Chemistry</option>
                  <option value="Math">Math</option>
                  <option value="ISRT">ISRT</option>
                  <option value="SWE">SWE</option>
                  <option value="Geology">Geology</option>
                  <option value="Joology">Joology</option>
				 </select> 
                 </label>
                
			 </fieldset>
			 <br>
			 <br>
			 
			 <fieldset>
                 <label>Program</label>
                  <label class="program"> 
                  <select class="select-style" name="program_name">
                  <option value="">program</option>
                  <option  value="BBA">BBA</option>
                  <option value="BA">BA</option>
                  <option value="BSc." >BSc.</option>
                  <option value="MBA">MBA</option>
                  <option value="MA">MA</option>
                  <option value="MSc.">MSc.</option>
                  </label>
                 </select>  
				</fieldset>
				<br>
				<br>
				
				<p class="contact"><label for="address">Current Address</label></p> 
					<input type="textarea" id="address" name="address" required="" placeholder="" required="">
				<br><br>
				<p class="contact"><label for="reason">Reason of application</label></p> 
					<input type="textarea" id="reason" name="reason" required="" placeholder="" required="">
				
			
            <input class="buttom" name="submit" id="submit" tabindex="5" value="Apply" type="submit"> 			
   </form> 
</div>      
</div>

</body>
</html>
