<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('Location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>

<body>
    <h1>Welcome to Admin Dashboard</h1>
    <p><?php echo $_SESSION['email'] ?></p>
    <a href="logout.php">Logout</a>
</body>

</html>