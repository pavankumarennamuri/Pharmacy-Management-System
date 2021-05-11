<html>
<head>
  <style>
    body{
     
      padding-left: 350px;
      
    }
    .second{
     
      width: 600px;
      height: 565px;
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
<div class="second">
<?php session_start();

?>
<?php
include 'db.php';
$id =$_REQUEST['id'];
$result = mysqli_query($conn,"SELECT * FROM bill where id='$id'");
while($row = mysqli_fetch_array($result))
  {
	  $Noofpiecesrequired=$row['Noofpiecesrequired'];
	  $medicine_id=$row['medicine_id'];
	  $TotalAmount=$row['TotalAmount'];
	  $PaidAmount=$row['PaidAmount'];
	  $totalcons=$PaidAmount - $TotalAmount;
	  $dates=$row['dates'];
 
  }

?>

<?php
  
include 'db.php';
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

<div id="data">
<center>

</center>
<h1 style="text-align: center;">BILL</h1>
<div id="context">
<p>MedicineName: <?php echo $MedicineName.'&nbsp;'.$RegisterDate; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Medicine Id: 000<?php echo $id; ?>
<br /><br />
Types: <?php echo $Types; ?>
<br /> <br />
ExpDate: <?php echo $ExpDate; ?>
</p>
<center>Date: <?php echo $dates; ?> </center>
<p>
Noofpiecesrequired : <?php echo $Noofpiecesrequired;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br /><br />
PaidAmount : <?php echo $PaidAmount; ?> <br /><br />
Balance: <?php echo $totalcons;?>
<h1 align="center">TotalAmount:P <?php echo $TotalAmount; ?> </h1><br />
<p>Casher: </p>
</p>
<CENTER><form><input type="button" onclick="window.print()" value="Print page" /></form><a href="bill.php">Back</a></CENTER>
</div>

</div>

</div>
</body>
</html>