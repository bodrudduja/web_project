window.onload=loadDoc;
function loadDoc() {
  var xhttp;
  xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
	var text_val = document.getElementById("ff");
		text_val=this.responseText;
		console.log(text_val);
	document.getElementById("tutor_table").innerHTML = text_val;	
	  
    }
  }
  xhttp.open("GET","hall_official_process.php",true);
  xhttp.send();
  
}
