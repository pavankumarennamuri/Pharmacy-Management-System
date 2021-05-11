<?php
include 'db.php';
$medicine_id =$_REQUEST['id'];
$id = $_POST['id'];  
$MedicineName = $_POST['MedicineName'];    
$RegisterDate = $_POST['RegisterDate'];
$ExpDate = $_POST['ExpDate'];
$Category = $_POST['Category'];
$Types = $_POST['Types'];
$CostPrice = $_POST['CostPrice']; 
$SellingPrice = $_POST['SellingPrice']; 
$NoofPieces = $_POST['NoofPieces'];

	mysqli_query($conn,"UPDATE medicine SET id ='$id', MedicineName ='$MedicineName',
		 RegisterDate ='$RegisterDate',ExpDate='$ExpDate', Category='$Category', Types='$Types',CostPrice='$CostPrice',SellingPrice='$SellingPrice',NoofPieces='$NoofPieces', NoofPieces ='$NoofPieces' WHERE id = '$medicine_id'");
            echo '<script>alert("Data edited successfully")</script>';
		 echo "<script>windows: location='medicine.php'</script>";				
			