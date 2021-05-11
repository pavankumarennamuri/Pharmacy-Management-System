<html>
<style>
    body {
        
        height: 610px;
        padding-top: 160px;
        background-image: url(https://programmingpot.com/wp-content/uploads/2019/01/Pharmacy-Management-System-in-Laravel.png);
        background-repeat: no-repeat;
        background-size: 100%;
    }
    
    h1 {
        text-align: center;
    }
    
    ul {
        display: flex;
        list-style-type: none;
        margin: 50px 100px;
        font: 17px helvetica;
        text-align: center;
    }
    
    li {
        flex: 1;
        background: #1a1a1a;
    }
    
    li:hover {
        flex: 1.1;
        transition: all .2s ease;
        background: #333333;
    }
    
    a {
        display: block;
        position: relative;
        text-decoration: none;
        color: white;
        padding: 23px;
    }
    
    .navigation li:not(:first-child) {
        border-left: 2px solid #ecf0f1;
    }
    






</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <div>
   
        <nav>
            <ul class="navigation">
                <li><a href="#">Home</a></li>
                <li><a href="medicine.php">Medicine</a></li>
                <li><a href="bill.php">Billing</a></li>
                <li><a href="user.php">Users</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>
</body>

</html>