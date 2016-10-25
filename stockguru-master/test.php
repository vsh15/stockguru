<html>

<head>

	<title>Get Stocks via email</title>

</head>

<body>
	<h2> Get Data via Email

	<br/>

	<form method="post" action="testHelper.php">

		<p>Select Stock :<br/>
			<select name="ticker" id="stock" required>					<!--onclick="tickFucntion(this.value)">-->
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
		
		<p>
		<input type="number" name="days" placeholder="Enter number of days" required>
		
		<p>
		<input type="text" name="email" placeholder="Enter Email Id" required>
			
		<h3><input name="updateButton" type="submit"/>		
		
	</form>

</body>

</html>

