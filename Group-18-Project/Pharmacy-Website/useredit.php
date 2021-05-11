<?php
include 'db.php';
$user_id =$_REQUEST['id'];
	$id = $_POST['id'];
	$Username = $_POST['Username'];
    $Email=$_POST['Email'] ;
    $Phoneno=$_POST['Phoneno'] ;
	$Fullname = $_POST['Fullname'];
	$Pass=$_POST['Pass'];

	mysqli_query($conn,"UPDATE user SET id ='$id', Username ='$Username',
		 Fullname ='$Fullname',Email='$Email', Phoneno='$Phoneno', Pass='$Pass' WHERE id = '$user_id'");
            echo '<script>alert("Data edited successfully")</script>';
		 echo "<script>windows: location='user.php'</script>";				
			