<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="show.css">
</head>

<body>
    <h2 class="a-text">Admin Page</h2>
    <?php
    $name='Name';
    $email='Email';
    $number='Number';
    $address="Address";
    
    $connection= new mysqli('sql104', 'if0_38187967', 'Kwf9yfayyM6', 'if0_38187967_portfolio_s');
    if($connection->connect_error){
        die('connection failed' .mysqli_connect_error());
    }
    $query="SELECT id, Name, Email, Number, Address FROM souravp WHERE 1";
    $result=mysqli_query($connection,$query);
    if($result->num_rows>0){
        echo"<table><tr><th>ID</th><th>Name</th><th>Email</th><th>Number</th><th>Address</th></tr>";
    }
    while($row= mysqli_fetch_assoc($result)){
       echo"<tr><th>".$row['id']."</th><th>".$row['Name']."</th><th>".$row['Email']."</th><th>".$row['Number']."</th><th>".$row['Address']."</th></tr>";

    }
    ?>
</body>

</html>