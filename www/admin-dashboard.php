<?php 
// check if the user is logged in
session_start();

if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit();
}
if($_SESSION['role'] != 'admin'){
    header('Location: user-dashboard.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Welcome <?php echo $_SESSION['firstname']; ?>!
    <div>
        Je bent ingelogd als <?php echo $_SESSION['email']; ?>
    </div>
    <a href="logout.php">LOG UIT</a>
</body>
</html>