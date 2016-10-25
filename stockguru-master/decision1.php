<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<?php
    //open connection to mysql db
    $connection = mysqli_connect("localhost:3307","root","","stocks") or die("Error " . mysqli_error($connection));

    //fetch table rows from mysql db
    $sql = "SELECT Time,ClosePrice FROM stockhistory WHERE Symbol='YHOO' order by Time";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
	
	//value from prediction table
	   $sql1 = "SELECT Time,ClosePrice FROM stockhistory WHERE Symbol='FB' order by Time";
    $result1 = mysqli_query($connection, $sql1) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
	
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
		$data1=$row['ClosePrice'];
		break;
    }
	
	 $emparray1 = array();
	
    while($row =mysqli_fetch_assoc($result1))
    {
        $emparray1[] = $row;
		$prediction=$row['ClosePrice'];
		break;
    }
   // echo json_encode(array_merge($emparray,$emparray1));
	//echo $data1;
    //close the db connection
    mysqli_close($connection);
?>
Decison Making<br><br>
</head>
<body>
<form>
  Do You own this stock :   Yes <input type="radio" name="yes" onclick="sellfunction();"> No<input type="radio" name="yes" onclick="buyfunction();">
 
 
</form>


<p id="demo"></p>

<input id="img" type="image" width="25" height="25"></p>

</body>



<script>

var data1= "<?php echo $data1 ?>";
var prediction= "<?php echo $prediction ?>";

var temp = prediction - data1;
temp=temp.toFixed(2);
//var temp = data1 - prediction;
//temp=temp.toFixed(2);

var imageSrc1 = "images/stockup.jpg";
var imageSrc2 = "images/stockdown.jpg";

var input = document.getElementById('img');


var s="BUY";
	str=s.fontcolor("green");
	var str1="SELL";
	str1=str1.fontcolor("red");
	var str2="NOT To BUY";
	str2=str2.fontcolor("red");
	var str3="HOLD ON";
	str3=str3.fontcolor("green");



	
function sellfunction()
{
	
	
if(temp>0)
{	
	var output_message= "The stock Price is predicted to rise by " + temp + "$."+" We would Recommend you to "+ str3+" to this stock and sell it later";
	input.src = imageSrc1;
}
else if (temp === 0)
{	var output_message= "The stock Price is Expected to remain the same. We would recommend you to hold on to the stock." ;
}
else
{
	var output_message= "The stock Price is Expected to fall by " + temp + "$. We would recommend you to " + str1 + " this stock." ;

input.src = imageSrc2;
}
document.getElementById("demo").innerHTML = output_message;
}



function buyfunction()
{
if(temp>0)
{	var output_message= "The stock Price is predicted to rise by " +temp+"$."+" We would Recommend you to "+str+" this stock";
	input.src = imageSrc1;
}
else if (temp === 0)
{	var output_message= "The stock Price is Expected to remain the same. We would recommend you to hold on to the stock." ;
}
else
{
var output_message= "The stock Price is Expected to fall by " + temp + "$. We would recommend you "+ str2 + " this stock." ;

input.src = imageSrc2;
}

document.getElementById("demo").innerHTML = output_message;
}




</script>
</html>