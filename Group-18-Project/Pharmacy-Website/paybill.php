<?php
include 'db.php';
   
	$medicine_id=$_POST['medicine_id'] ;
	$Noofpiecesrequired = $_POST['Noofpiecesrequired'];
	$TotalAmount = $_POST['TotalAmount'];
	$PaidAmount = $_POST['PaidAmount'];
	$dates=$_POST['dates'] ;
	
	mysqli_query($conn,"INSERT INTO  bill (medicine_id,Noofpiecesrequired,TotalAmount,PaidAmount,dates) 
		 VALUES ('$medicine_id','$Noofpiecesrequired','$TotalAmount','$PaidAmount','$dates')"); 
				
				echo '<script>alert("success")</script>';
				echo '<script>windows: location="bill.php"</script>'; 