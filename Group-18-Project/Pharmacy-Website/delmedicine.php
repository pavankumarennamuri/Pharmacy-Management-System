<html>
    <head>
      <style>
          body{
            background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-oGH8S6AXJYCzCDln3fz3wIHMxwaF63ypQQ&usqp=CAU);
      background-size: 100%;
              text-align: center;  
              padding-left: 400px;
              padding-top: 50px;
          }
          .first{
            width: 500px;
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
        <div class="first">
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
<form action="medicinedel.php" method="post">
<h1>Are you sure you want to delete this record <?php echo $MedicineName; ?></h1>
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="submit" nsme="ok" value="Delete">
</form>
<div class="back"><a href="medicine.php">Back</a></div>
</div>
</body>
</html>