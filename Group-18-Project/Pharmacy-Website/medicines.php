<?php
        #sample connection to database with name test
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "projectpharmacy"; #can be any name 
        $conn = new mysqli($server, $username, $password, $dbname);
        if($conn->connect_error){
            die("Connection failed.".$conn->connect_error);
        }else{
            if(isset($_REQUEST['medicine'])){
               if($_REQUEST['MedicineName']!=""&&$_REQUEST['RegisterDate']!=""&&$_REQUEST['ExpDate']!=""&&$_REQUEST['Category']!=""&&$_REQUEST['Types']!=NULL&&$_REQUEST['CostPrice']!=""&&$_REQUEST['SellingPrice']!=""&&$_REQUEST['NoofPieces']!=""){
                    $input = $_REQUEST['MedicineName'];    
                    $input1 = $_REQUEST['RegisterDate'];
                    $input2 = $_REQUEST['ExpDate'];
                    $input3 = $_REQUEST['Category'];
                    $input4 = $_REQUEST['Types'];
                    $input5 = $_REQUEST['CostPrice']; 
                    $input6 = $_REQUEST['SellingPrice']; 
                    $input7 = $_REQUEST['NoofPieces']; 
                    echo '<script>alert("Data taken successfull")</script>';
                    echo '<script>windows: location="medicine.php"</script>';
                    $sql = "INSERT INTO Medicine(MedicineName,RegisterDate,ExpDate,Category,Types,CostPrice,SellingPrice,NoofPieces) VALUES('$input','$input1','$input2','$input3','$input4','$input5','$input6','$input7')";
                  
                    if($conn->query($sql)===TRUE){
                        echo "\n\nThe value is taken into table";
                    }
                    else{
                      echo "\n error in executing";
                    }
                }else{
                    echo "\nThe value is not provided.";
                }

            }
        }
?>