function res_status() {
  var xhttp;
  xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
	var text_val = document.getElementById("tutor_table");
		text_val=this.responseText;
		console.log(text_val);
	document.getElementById("tutor_table").innerHTML = text_val;	
	  
    }
  }
  xhttp.open("GET","admin_res_application_process.php",true);
  xhttp.send();
  
}


