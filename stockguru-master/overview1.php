
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <title>Stock Guru</title>

    <!-- Bootstrap -->
    
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]-->
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!---------------------------------------------------------------------------------------------------------------------------------->

<!---------------------------------------------------- For AMCharts --------------------------------------------------------------------->	
	
<script src="amcharts/amcharts.js" type="text/javascript"></script>
<script src="amcharts/serial.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
<script src="http://www.amcharts.com/lib/3/plugins/dataloader/dataloader.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">




<script src="amcharts/amcharts.js" type="text/javascript"></script>
<script src="amcharts/serial.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
<script src="http://www.amcharts.com/lib/3/plugins/dataloader/dataloader.min.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/none.js"></script>
<script src="https://www.amcharts.com/lib/3/amstock.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

   




	
<!---------------------------------------------------------------------------------------------------------------------------------------->    
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


      <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
 
  input[type=radio] {
    border: 0px;
    width: 10%;
    height: 1em;
}
 
  .button {
	/*adjust the roundness*/
    border-radius: 6px;
    moz-border-radius: 6px;
    webkit-border-radius: 6px;

    background-color: #555555; /* Black */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;
}
  
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #009900;
      font-size: 50px;
  }
  .logo-small1 {
      color: #cc0000;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #4d4d4d;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;	
      animation-duration: 1s;	
      -webkit-animation-duration: 1s;
      visibility: visible;			
  }
  @keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }	
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  
  <!------------------------------- added css ------------------------------->
  
  path { 
    stroke: steelblue;
    stroke-width: 2;
    fill: none;
}

text.shadow {
    stroke: white;
    stroke-width: 2.5px;
    opacity: 0.9;
}

.axis path,
.axis line {
    fill: none;
    stroke: grey;
    stroke-width: 1;
    shape-rendering: crispEdges;
}

<!------------------------------- added css end ------------------------------->

  </style>
 
  
  
  </head>
  
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  
    <form method="get" id="form1" runat="server">
    <div>
    
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavBar">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="" id="home"> <img style="margin:-15px 0px" alt="logo" src="images/stock-guru-mod.png" height="60" /> </a>
                </div>

                 <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="" id = "overview">OVERVIEW</a></li>
                        <li><a href="" id = "graph">GRAPH</a></li>
                        <li><a href="" id = "prediction">PREDICTION</a></li>
                        <li><a href="" id = "news">MARKET NEWS</a></li>
						<li><a href="" id = "decision">DECISION</a></li>
						<li><a href="" id = "developer">DEVELOPER</a></li>
                    </ul>
                </div>

            </div>    
        </nav>
		
		<div class = "container-fluid bg-grey">
<!------------------------------------------------------------------ commented temporarily ------------------------------------------->	
		
			<div class = "col-sm-2">
				<h2><select required name="ticker" id="stock" onclick="tickFucntion(this.value)">
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
			
				
				<h3>
				<input class="button" name="updateButton" type="submit" value="See Graph" onclick= "return defchart();"/>
				
							
			</div>
			
			<div class = "col-sm-2 col-md-offset-2">
				<h2>
					<input type="radio" name="rad" id="duration" value="31" onclick="radFucntion(this.value)"> One Month<br>
					<input type="radio" name="rad" id="duration" value="186" onclick="radFucntion(this.value)"> Six Months<br>
					<input type="radio" name="rad" id="duration" value="366" onclick="radFucntion(this.value)"> One Year
				</h2>

			</div>
				
			
		</div>
		
		<div class = "col-sm-2">
			<h3>
			Ticker Symbol : <input type = "text" id = "tickSym" readonly>
			</h3>
		</div>	
		
		<div class = "col-sm-2 col-md-offset-2">
			<h3>
			Range (days): <input type = "text" id = "radSelect" readonly>
			</h3>		
		</div>
		
	</div>
	
	<div id="chartdiv" style="width: 900px; height: 400px;"></div>
	   
	</form>	
	
<script>
function radFucntion(radVal)
{
	document.getElementById('radSelect').value =  radVal;
}

function tickFucntion(tickVal)
{
	document.getElementById('tickSym').value =  tickVal;
}
	
function defchart()
{
		 var chartData= generateChartData();
		 var chart = AmCharts.makeChart( "chartdiv", {

		  type: "stock",
		  "theme": "none",
		 
		  dataSets: [ {
			color: "#b0de09",
			fieldMappings: [ {
			  fromField: "value",
			  toField: "value"
			} ],
			dataProvider: chartData,
			categoryField: "date"
		  } ],

		  panels: [ {
			showCategoryAxis: true,
			title: "Value",
			eraseAll: false,
			allLabels: [ {
			  x: 0,
			  y: 115,
			  text: " ",
			  align: "center",
			  size: 16
			} ],

			stockGraphs: [ {
			  id: "g1",
			  valueField: "value",
			  useDataSetColors: false
			} ],


			stockLegend: {
			  valueTextRegular: " ",
			  markerType: "none"
			},

			drawingIconsEnabled: true
		  } ],

		  chartScrollbarSettings: {
			graph: "g1"
		  },
		  chartCursorSettings: {
			valueBalloonsEnabled: true
		  },
		  periodSelector: {
			position: "bottom",
			periods: [ {
			  period: "DD",
			  count: 10,
			  label: "10 days"
			}, {
			  period: "MM",
			  count: 1,
			  label: "1 month"
			}, {
			  period: "YYYY",
			  count: 1,
			  label: "1 year"
			}, {
			  period: "YTD",
			  label: "YTD"
			}, {
			  period: "MAX",
			  label: "MAX"
			} ]
		  }
		} );

	return false;
}
/*
function vals(){
   val1=document.getElementById("stock").value;
   val2=document.getElementById("duration").value;
   
   $.ajax({
        type: 'GET',
        url: 'y.php',
        data: { text1: val1, text2: val2 },
        success: function(response) {
            var x1 = response;
        }
    });
   
   return x1;
	
 }
*/
function ajax_post(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    
    var smm = document.getElementById("stock").value;
	var time = document.getElementById("radSelect").value;
	var url = "y.php?sm="+smm+"&dur="+time;
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



function generateChartData() {	
	
	
	ajax_post();
	var tmp=[];
	tmp = JSON.parse(window.return_data);  
	
	var x = [];
	
for (  i = 0; i < tmp.length; i++)
  {
	  x[i] = parseInt(tmp[i]);
  }
	
  var chartData = [];
  var firstDate = new Date( 2016, 0, 1 );
  firstDate.setDate( firstDate.getDate() - x.length );
  firstDate.setHours( 0, 0, 0, 0 );

  for ( var i = 0; i < x.length; i++ ) {
    var newDate = new Date( firstDate );
    newDate.setDate( newDate.getDate() + i );

    var value = x[i];

    chartData.push( {
      date: newDate,
      value: value
    } );
  }  
  return chartData;
}


</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>


<script>

document.getElementById("home").onclick = function()
{
	location.href = "homepage.html";
}
	
document.getElementById("decision").onclick = function()
{
	location.href = "decision.html";
}	

document.getElementById("news").onclick = function()
{
	location.href = "news.html";
}	

document.getElementById("prediction").onclick = function()
{
	location.href = "prediction1.html";
}	

document.getElementById("graph").onclick = function()
{
	location.href = "graph.html";
}

document.getElementById("overview").onclick = function()
{
	location.href = "overview1.php";
}

document.getElementById("developer").onclick = function()
{
	location.href = "webservice.php";
}	
		
</script>	


</body>
</html>