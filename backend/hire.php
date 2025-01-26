<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hire me</title>
    <link rel="stylesheet" href="hire.css">
</head>

<?php
if (isset($_POST['submit'])) {
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Number = $_POST['Number'];
    $Address = $_POST['Address'];

    if ($Name && $Email && $Number && $Address) {
        $connection = new mysqli('localhost', 'root', '', 'portfolio_s');
        if ($connection->connect_error) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $query = "INSERT INTO souravp (Name, Email, Number, Address) VALUES ('$Name', '$Email', '$Number', '$Address')";
        $result = mysqli_query($connection, $query);
        if ($result) {
            echo "Connected";
        } else {
            echo "Not Connected: " . mysqli_error($connection);
        }
    } else {
        echo "Please fill up the form.";
    }
    $connection->close();
}
?>

<body>
    <div class="text-from-div">
        <h2 class="text-from">Hire me</h2>
    </div>

    <form action="hire.php" method="post" class="from-c">
        <input type=" text" name="Name" placeholder="Name" required>
        <input type="email" name="Email" placeholder="Email" required>
        <input type="text" name="Number" placeholder="Number" required>
        <input type="text" name="Address" placeholder="Address" required>
        <input type="submit" name="submit">
    </form>
</body>

</html>