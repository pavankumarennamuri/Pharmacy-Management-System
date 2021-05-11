<html>
<head>
  <style>
    body{
     
      background-image: url(https://png.pngtree.com/thumb_back/fh260/back_our/20190625/ourmid/pngtree-blue-mobile-phone-scan-code-payment-technology-banner-background-image_260854.jpg);
      background-size: 100%;
      padding-left: 500px;
      padding-top: 50px;
      
    }
    table{
      width:300px;
    }
    .second{
     
      width: 500px;
      border: 10px solid violet;
      padding: 50px;
      margin: 20px;
    }
    .back{

      font-size: larger;
    }
  </style>
</head>
<body>
<h1>Sales Report</h1>
<?php
include 'db.php';
$id =$_REQUEST['id'];
$result = mysqli_query($conn,"SELECT * FROM bill where medicine_id='$id'");

echo "<table border='1' bgcolor='#fff'>
<tr>
<th>Id</th>
<th>Noofpiecesrequired</th>
<th>TotalAmount</th>
<th>PaidAmount</th>
<th>Balance Amount</th>
<th>Date</th>
<th>Action</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
	  $TotalAmount=$row['TotalAmount'];
	  $PaidAmount=$row['PaidAmount'];
	  $totalcons=$PaidAmount - $TotalAmount;
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['Noofpiecesrequired'] . "</td>";
  echo "<td>" . $TotalAmount . "</td>";
  echo "<td>". $PaidAmount."</td>";
  echo "<td>" . $totalcons . "</td>";
  echo "<td>" . $row['dates'] . "</td>";
 echo "<td><a rel='facebox' href='viewpayment.php?id=".$row['id']."'>View </a> ";
  echo "</tr>";
  }
echo "</table>";
?>
<br>
<div class="back"><a href="bill.php">Back</a></div>
</div>
</body>
</html>