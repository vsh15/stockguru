<?php
if(isset($_POST["ticker"]) && isset($_POST["email"]) && isset($_POST["days"]))
{
	require('fpdf.php');

	$stock = $_POST["ticker"];
	$recepient = $_POST["email"];
	$days = $_POST["days"];
	
	
	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetAutoPageBreak(true, 10);
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(40,10,'Stock History of '.$days.' days for '.$stock.':', 'center');

	$connection = mysqli_connect("localhost","root","","stocks") or die("Error " . mysqli_error($connection));

	//fetch table rows from mysql db
	$sql = "SELECT Symbol, Time, ClosePrice FROM stockhistory WHERE Symbol='".$stock."'LIMIT ".$days; 
	$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

	//Initialize the 3 columns 
	$column_Symbol = "";
	$column_Time = "";
	$column_ClosePrice = "";

	while($row =mysqli_fetch_assoc($result))
	{
		$Symbol = $row["Symbol"];
		$Time = $row["Time"];
		$ClosePrice = $row["ClosePrice"];

		$column_Symbol = $column_Symbol.$Symbol."\n";
		$column_Time = $column_Time.$Time."\n";
		$column_ClosePrice = $column_ClosePrice.$ClosePrice."\n";
	}
	mysqli_close($connection);


	//Fields Name position
	$Y_Fields_Name_position = 20;
	//Table position, under Fields Name
	$Y_Table_Position = 26;

	//First create each Field Name
	//Gray color filling each Field Name box
	$pdf->SetFillColor(232,232,232);  
	//Bold Font for Field Name
	$pdf->SetFont('Arial','B',12);
	$pdf->SetY($Y_Fields_Name_position);
	$pdf->SetX(45);
	$pdf->Cell(20,6,'SYMBOL',1,0,'L',1);
	$pdf->SetX(65);
	$pdf->Cell(100,6,'TIME',1,0,'L',1);
	$pdf->SetX(135);
	$pdf->Cell(30,6,'CLOSE-PRICE',1,0,'R',1);
	$pdf->Ln();

	//Now show the 3 columns
	$pdf->SetFont('Arial','',12);
	$pdf->SetY($Y_Table_Position);
	$pdf->SetX(45);
	$pdf->MultiCell(20,6,$column_Symbol,1);
	$pdf->SetY($Y_Table_Position);
	$pdf->SetX(65);
	$pdf->MultiCell(100,6,$column_Time,1);
	$pdf->SetY($Y_Table_Position);
	$pdf->SetX(135);
	$pdf->MultiCell(30,6,$column_ClosePrice,1,'R');

	//Create lines (boxes) for each ROW 
	//If you don't use the following code, you don't create the lines separating each row
	$i = 0;
	$pdf->SetY($Y_Table_Position);
	while ($i < $days)
	{
		$pdf->SetX(45);
		$pdf->MultiCell(120,6,'',1);
		$i = $i +1;
	}

	$filename="F:/Stock_Info_".$stock.".pdf";
	$pdf->Output($filename,'F');
	//$pdf->Output();
	echo "File saved at location ".$filename;

	////////////////////////////// File Saved, Now Email ////////////////////////////////////////////////

	require('C:\wamp64\www\stockguru\PHPMailer-master\PHPMailer-master\class.phpmailer.php');
	require('C:\wamp64\www\stockguru\PHPMailer-master\PHPMailer-master\PHPMailerAutoload.php');
	include 'my_password.php';	
		
	$mail = new PHPMailer();

	//$mail->SMTPDebug = true;

	$mail->IsHTML(true);
	$mail->CharSet = "utf-8";
	$mail->IsSMTP();

	$mail->SMTPAuth = true; 					// enable SMTP authentication
	$mail->SMTPSecure = "tls"; 					//"ssl"; // sets the prefix to the servier

	$mail->Host = "smtp.gmail.com"; 			// sets GMAIL as the SMTP server
	$mail->Port = 587; 							// set the SMTP port for the GMAIL server

	$mail->Username = "aneesh1993@gmail.com"; 	// GMAIL username
	$mail->Password = $password; 				// GMAIL password

	$mail->From = "aneesh1993@gmail.com"; 		// "name@yourdomain.com";
	$mail->FromName = "Mr. StockGuru";  		// set from Name
	$mail->Subject = "Extension to StockGuru"; 
	$mail->Body = "Hey guys I have built an extension to our StockGuru... Past 10 days ClosePrice for the selected ticker... It saves the pdf on the computer and sends it via email! Please Find attached...!!";

	/*
	$mail->AddAddress("ana85@scarletmail.rutgers.edu", "Mr.Aneesh"); // to Address
	$mail->AddAddress("as2442@scarletmail.rutgers.edu", "Mr.Aaditya");
	$mail->AddAddress("mmk181@scarletmail.rutgers.edu", "Mrs.Megha");
	$mail->AddAddress("vsh15@scarletmail.rutgers.edu", "Mr.Vishal");
	$mail->AddAddress("ssb146@scarletmail.rutgers.edu", "Mr.Shreyas");
	*/

	$mail->AddAddress($recepient);

	$mail->AddAttachment("F:/Stock_Info_".$stock.".pdf");
		
	$mail->set('X-Priority', '1'); //Priority 1 = High, 3 = Normal, 5 = low

	if(!$mail->Send()) {
		echo 'Message was not sent.';
		echo 'Mailer error: ' . $mail->ErrorInfo;
	} 
	else {
		echo 'Message has been sent.';
	}
}
?>