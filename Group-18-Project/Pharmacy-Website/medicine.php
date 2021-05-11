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
        
      

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}


/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  position: absolute;
  left: 60px;
  margin: 20px;
  max-width: 580px;
  padding: 16px;
  background-color: white;
  color: black;
  padding-top: none;
}


/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
.second{
    padding-left: 500px;
    
}
td{
    padding: 10px;
    
}
th{
    width: 80px;
}
body{
  background-image: url(https://wallpapercave.com/wp/wp6864715.jpg);
  background-repeat: no-repeat;
  background-size: 100%;
  color: black;

}

    </style>
</head>

<body >
    <div class="topnav">
        <a class="active" href="home.php">Home</a>
        <div class="topnav-right">
            <a href="medicine.php">Medicine</a>
            <a href="bill.php">Billing</a>
            <a href="user.php">Users</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <div class="first">
        <h1 style="text-align: center;">MEDICINE</h1>
<form method="POST" action="medicines.php" >
  <div class="container"style="padding-left:30px">
   
    <label for="MedicineName"><b> MedicineName</b></label>
    <input type="text"  placeholder="Enter MedicineName" name="MedicineName" required><br>

    <label for="RegisterDate"><b>RegisterDate</b></label>
    <input type="text"  placeholder="Enter RegisterDate" name="RegisterDate" required><br>

    <label for="ExpDate"><b>ExpDate</b></label>
    <input type="text"  placeholder="Enter ExpDate" name="ExpDate" required><br>

    <label for="Category"><b>Category</b></label>
    <input type="text"  placeholder="Enter Category" name="Category" required><br>

    <tr>
          <td class="tdLabel"><label for="Types" class="label" required><b>Types</b></label></td>
          <td><select name="Types" required id="Types" style="width:160px">
          <option value="BOT">BOT</option>
          <option value="STP">STP</option>
          <option value="TAB">TAB</option>
          <option value="SACHET">SACHET</option>
          <option value="UNIT">UNIT</option>
          <option value="TUBE">TUBE</option>
          </select>
          </td>
          </tr><br>
          <br>

    <label for="CostPrice"><b>CostPrice</b></label>
    <input type="text"  placeholder="Enter CostPrice" name="CostPrice" required><br>

    <label for="SellingPrice"><b>SellingPrice</b></label>
    <input type="text"  placeholder="Enter SellingPrice" name="SellingPrice" required><br>

    <label for="NoofPieces"><b>NoofPieces</b></label>
    <input type="text"  placeholder="Enter NoofPieces" name="NoofPieces" required><br>

    <div class="clearfix">
      <a href="medicine.php"> <button type="button" class="cancelbtn">Cancel</button></a>
      <button type="submit" name="medicine" class="signupbtn">Add Medicine</button>
    </div>
  </div>
</form>




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
  echo "<td><a  href='editmedicine.php?id=".$row['id']."'>Edit </a>| ";
 echo "<a  href='delmedicine.php?id=".$row['id']."'>Del</td>";
  echo "</tr>";
  }
echo "</table>";

?>

<p>&nbsp;</p>

</div>
    </div>
</body>

</html>