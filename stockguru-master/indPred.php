<html>
<head>

</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<body>
<form method="get" id="form1" runat="server">
	<p>
		<h2><select required name="ticker" id="stock">
			<option class="placeholder" selected disabled value="">Select Ticker</option>
			<option value="FB">Facebook</option>
			<option value="GOOG">Google</option>
			<option value="AMZN">Amazon</option>
			<option value="BAC">Bank of America</option>
			<option value="MSFT">Microsoft</option>
			<option value="MS">Morgan Stanley</option>
			<option value="AAPL">Apple</option>
			<option value="GS">Goldman Sachs</option>
			<option value="UBS">UBS</option>
			<option value="YHOO">Yahoo</option>					
		</select>
	</p>
</form>
	
	<input class="button" name="updateButton" type="submit" value="See Graph" onclick= "return abc();"/>
				
				
	<p id="demo"></p>

</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>


 <script>
 
 function abc()
 {
	 ajax_post();
 
	var obj = window.return_data;
	//obj = JSON.parse(window.return_data);  
 //aa
 //var obj = <?php echo $temp ?>;
 //
 if (obj==1)
 {
	 var message="Warning!!  Crossover detected ! Stock price is likely to fall";
	 window.alert(message);
 }
else
{
	var message="Stock values expected to rise";
	window.alert(message);
 
}

document.getElementById("demo").innerHTML = message;

return false;
 }
 
 
 function ajax_post(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    
    var smm = document.getElementById("stock").value;
	
	var url = "indPredInput.php?sm="+smm;
    //var ln = document.getElementById("last_name").value;
    //var vars = "sm="+smm;
    hr.open("GET", url, false);
    // Set content type header information for sending url encoded variables in the request
    //hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	        
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		     return_data = hr.responseText;
			 console.log('Something went right...');
			 console.log(return_data);
			 
			 
			//document.getElementById("status").innerHTML = return_data;
	    } else if (hr.readyState == 4 && hr.status != 200) {
        alert('Something went wrong...');
    }
	}
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(); // Actually execute the request
    //document.getElementById("status").innerHTML = "processing...";
	
}


 
 
 
 </script>

</body>
</html>