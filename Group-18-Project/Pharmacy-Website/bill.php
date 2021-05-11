<html>

<head>
    <style>
        .topnav {
            overflow: hidden;
            background-color: #333;
        }
        
        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        
        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }
        
        .topnav a.active {
            background-color: #4CAF50;
            color: white;
        }
        
        .topnav-right {
            float: right;
        }
        
        
        
        .second{
           padding-left: 20%;
           padding-top: 10px;
        }
        td{
            padding: 10px;
        }
        body{
            background-image: url(https://static3.depositphotos.com/1000627/128/i/600/depositphotos_1283978-stock-photo-blue-pills.jpg);
           background-size: 100%;
            
        }
    </style>
</head>

<body >
<div class="topnav">
        <a class="active" href="home.php">Home</a>
        <div class="topnav-right">
            <a href="medicine.php">Medicine  </a>
            <a href="bill.php">Billing</a>
            <a href="user.php">Users</a>
            <a href="logut.php">Logout</a>
        </div>
    </div>
    <div class="first">
        <h1 style="text-align: center;">BILLING</h1>
        
        <div class="second">
<?php
include 'db.php';

$result = mysqli_query($conn,"SELECT * FROM medicine");

echo "<table border='5' >
<tr>
<th>id</th>
<th>MedicineName</th>
<th>RegisterDate</th>
<th>ExpDate</th>
<th>Category</th>
<th>Types</th>
<th>CostPrice</th>
<th>SellingPrice</th>
<th>Profit</th>
<th>NoofPieces</th>
<th>Action</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
    $CostPrice=$row['CostPrice'];
    $SellingPrice=$row['SellingPrice'];
    $Profit=$SellingPrice - $CostPrice;
    echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['MedicineName'] . "</td>";
  echo "<td>" . $row['RegisterDate'] . "</td>";
  echo "<td>" . $row['ExpDate'] . "</td>";
  echo "<td>" . $row['Category'] . "</td>";
  echo "<td>" . $row['Types'] . "</td>";
  echo "<td>" . $row['CostPrice'] . "</td>";
  echo "<td>" . $row['SellingPrice'] . "</td>";
  echo "<td>" . $Profit . "</td>";
  echo "<td>" . $row['NoofPieces'] . "</td>";
  echo "<td><a  href='Billing.php?id=".$row['id']."'>Buy </a>| ";
 echo "<a  href='viewbill.php?id=".$row['id']."'>View Bill</td>";
  echo "</tr>";
  }
echo "</table>";

?>

<p>&nbsp;</p>

</div>
    </div>
</body>

</html>