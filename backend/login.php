<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<?php
if (isset($_POST['Username']) && isset($_POST['Password'])) {
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];

    $connection = new mysqli('localhost', 'root', '', 'portfolio_s');
    if ($connection->connect_error) {
        die("Connection failed" . mysqli_connect_error());
    }
    $query = "SELECT * FROM login WHERE Username = '$Username' AND Password = '$Password'";
    $result = mysqli_query($connection, $query);
    $mysql_match = mysqli_num_rows($result);
    if ($mysql_match) {
        //echo "Login successful";
        header('location:show.php');
    } else {
        echo "Login failed";
    }
} else {
    echo "Error";
}
?>

<body>
    <h2 class="login-text">Login Page</h2>
    <form action="login.php" method="post" style="text-align: center;" class="login-form">
        <input type="text" name="Username" placeholder="Username" required></br>
        <input type="password" name="Password" placeholder="Password" required></br>
        <input type="submit" value="Login">
    </form>
</body>
</html>