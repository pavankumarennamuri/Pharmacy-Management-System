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
    padding-left: 600px;
    
}
td{
    padding: 10px;
    
}
th{
    width: 100px;
}
body{
  background-image: url(data:image/jpeg;base64,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);
  background-repeat: no-repeat;
  background-size: 100%;
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
        <h1 style="text-align: center;">USERS</h1>
<form method="POST" action="users.php" >
  <div class="container"style="padding-left:30px">
    <p>Please fill in this form to create an user account.</p>
    <label for=" Username"><b> User Name</b></label>
    <input type="text"  placeholder="Enter username" name="Username" required><br>

    <label for="Fullname"><b>Full Name</b></label>
    <input type="text"  placeholder="Enter full name" name="Fullname" required><br>

    <label for="Email"><b>Email</b></label>
    <input type="text"  placeholder="Enter Email" name="Email" required><br>

    <label for="Phoneno"><b>Phoneno</b></label>
    <input type="text"  placeholder="Enter Phoneno" name="Phoneno" required><br>

    <label for="Pass"><b>Password</b></label>
    <input type="text"  placeholder="Enter pass" name="Pass" required><br>

    <div class="clearfix">
      <a href="user.php"> <button type="button" class="cancelbtn">Cancel</button></a>
      <button type="submit" name="user" class="signupbtn">Add User</button>
    </div>
  </div>
</form>



<div class="second">
<?php
include 'db.php';

$result = mysqli_query($conn,"SELECT * FROM user");

echo "<table border='5' >
<tr>
<th>id</th>
<th>Username</th>
<th>FullName</th>
<th>Email</th>
<th>Phoneno</th>
<th>Pass</th>
<th>Action</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['Username'] . "</td>";
  echo "<td>" . $row['Fullname'] . "</td>";
  echo "<td>" . $row['Email'] . "</td>";
  echo "<td>" . $row['Phoneno'] . "</td>";
  echo "<td>" . $row['Pass'] . "</td>";
  echo "<td><a  href='edituser.php?id=".$row['id']."'>Edit </a>| ";
 echo "<a  href='deluser.php?id=".$row['id']."'>Del</td>";
  echo "</tr>";
  }
echo "</table>";

?>

<p>&nbsp;</p>

</div>
    </div>
</body>

</html>