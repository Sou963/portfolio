<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>

  <!-- Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="login.css">
</head>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['Username']) && isset($_POST['Password'])) {
  $Username = $_POST['Username'];
  $Password = $_POST['Password'];

  $connection = new mysqli('sql104', 'if0_39606568', 'lOMmyvfzCCqF', 'if0_39606568_portfolio_s');
  if ($connection->connect_error) {
    die("<div class='alert alert-danger text-center w-100'>Connection failed: " . $connection->connect_error . "</div>");
  }

  $query = "SELECT * FROM login WHERE Username = '$Username' AND Password = '$Password'";
  $result = mysqli_query($connection, $query);
  $mysql_match = mysqli_num_rows($result);

  if ($mysql_match) {
    header('Location: show.php');
    exit;
  } else {
    echo "<div class='alert alert-danger text-center w-100'>Login failed</div>";
  }

  $connection->close();
}
?>

<body class="bg-black d-flex justify-content-center align-items-center vh-100">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5 bg-white p-4 rounded shadow">

        <h2 class="text-center mb-4">Login Page</h2>

        <form action="login.php" method="post">
          <div class="mb-3">
            <input type="text" name="Username" class="form-control" placeholder="Username" required />
          </div>
          <div class="mb-3">
            <input type="password" name="Password" class="form-control" placeholder="Password" required />
          </div>
          <div class="d-grid">
            <input type="submit" value="Login" class="btn btn-primary" />
          </div>
        </form>

      </div>
    </div>
  </div>

</body>

</html>