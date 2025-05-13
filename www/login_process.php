<?php 

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "Invalid request method";
    exit;
}

if(!isset($_POST['email'])){
    echo "Email field is required";
    exit;
}

if(!isset($_POST['password'])){
    echo "Password field is required";
    exit;
}

$password = $_POST['password'];
$email = $_POST['email'];

if (empty($email)) {
    echo "Email field is required";
    exit;
}
if (empty($password)) {
    echo "Password field is required";
    exit;
}

require "database_connection.php";
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $sql);

$user = mysqli_fetch_assoc($result);

if (is_array($user)) {

    if ($password == $user['password']) {
        session_start();
        $_SESSION['id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['firstname'] = $user['firstname'];
        $_SESSION['role'] = $user['role'];

        if($user['role'] == 'admin'){
            header('Location: admin-dashboard.php');
            exit;
        }

        if($user['role'] == 'user'){
            header('Location: user-dashboard.php');
            exit;
        }

    }
}

header("Location: login.php?error=wrong");
?>