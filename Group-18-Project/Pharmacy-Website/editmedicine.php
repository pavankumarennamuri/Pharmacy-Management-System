<html>
<head>
  <style>
    body{
      background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-oGH8S6AXJYCzCDln3fz3wIHMxwaF63ypQQ&usqp=CAU);
      background-size: 100%;
      padding-left: 500px;
      padding-top: 50px;
      
    }
    table{
      width:300px;
    }
    .second{
     
      width: 300px;
      border: 10px solid violet;
      padding: 50px;
      margin: 20px;
    }
    .back{
      text-align: center;
      font-size: larger;
    }
  </style>
</head>
<body>
<?php session_start(); ?>
<?php
include 'db.php';
$medicine_id =$_REQUEST['id'];
$result = mysqli_query($conn,"SELECT * FROM medicine WHERE id  = '$medicine_id'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
        $id = $test['id'];  
        $MedicineName = $test['MedicineName'];    
        $RegisterDate = $test['RegisterDate'];
        $ExpDate = $test['ExpDate'];
        $Category = $test['Category'];
        $Types = $test['Types'];
        $CostPrice = $test['CostPrice']; 
        $SellingPrice = $test['SellingPrice']; 
        $NoofPieces = $test['NoofPieces']; 
				
?>


  <form method="post" action="medicineedit.php">
  <div class="second">
  <p><h1>Medicine Update</h1></p>
<table border='5'>
  <tr>
    <td width="107">Medicine Id:</td>
    <td width="315"><input type="text" name="id" value="<?php echo $id; ?>" /></td>
  </tr>
  <tr>
    <td>MedicineName:</td>
    <td><input type="text" name="MedicineName" value="<?php echo $MedicineName; ?>"/></td>
    </tr>
    <tr>
    <td>RegisterDate:</td>
    <td><input type="text" name="RegisterDate"value="<?php echo $RegisterDate; ?>" /></td>
    </tr>
    <tr>
    <td>ExpDate:</td>
    <td><input type="text" name="ExpDate"value="<?php echo $ExpDate; ?>" /></td>
    </tr>
    <tr>
    <td>Category:</td>
    <td><input type="text" name="Category"value="<?php echo $Category; ?>" /></td>
    </tr>
    <tr>
    <td>Types:</td>
    <td><input type="text" name="Types"value="<?php echo $Types; ?>" /></td>
    </tr>
    <tr>
    <td>CostPrice:</td>
    <td><input type="text" name="CostPrice"value="<?php echo $CostPrice; ?>" /></td>
    </tr>
    <tr>
  </tr>
  <tr>
  <td>SellingPrice:</td>
    <td><input type="text" name="SellingPrice" value="<?php echo $SellingPrice; ?>"/></td></tr>
 <tr>
 <td>NoofPieces:</td>
    <td><input type="text" name="NoofPieces" value="<?php echo $NoofPieces; ?>"/></td></tr>
 <tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="medicine" value="Edit"></td>
	</tr>
</table>
<div class="back"><a href="medicine.php">Back</a></div>
</div>
</body>
</html>