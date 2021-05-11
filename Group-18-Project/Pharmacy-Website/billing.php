<html>
<head>
  <style>
    body{
      padding-left: 500px;
      padding-top: 50px;
      background-image: url(https://png.pngtree.com/thumb_back/fh260/back_our/20190625/ourmid/pngtree-blue-mobile-phone-scan-code-payment-technology-banner-background-image_260854.jpg);
      background-size: 100%;
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

 <form method="post" action="paybill.php">
<div class="second">
 <table border="5">
 <p><h1> Bill</h1></p>
 <h3>Name: <?php echo $MedicineName.'&nbsp;' .$RegisterDate?></h3>
<p><?php $dates=date('y/m/d');
 echo $dates;?></p>
  <tr>
  <input type="hidden" name="medicine_id" value="<?php echo $id; ?>" />
  <input type="hidden" name="dates" value="<?php echo $dates; ?>" />
    <td width="118">Noof pieces required:</td>
    <td width="66"><input type="text" name="Noofpiecesrequired"  /></td>
    
  </tr>
  <tr>
    <td>TotalAmount</td>
    <td><input type="text" name="TotalAmount"  /></td>
    
  </tr>
  <tr>
    <td>PaidAmount</td>
    <td><input type="text" name="PaidAmount" value="10"  /></td>
  
  </tr>
   <tr>
    <td><input type="submit" name="total" value="Add"  /></td>
  </tr>
</table>
</form>
<div class="back"><a href="bill.php">Back</a></div>
</div>
</body>
</html>