<?php 
if(isset($_GET['error'])) {
    $message = "wrong email or password";
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
    <form action="login_process.php" method="post">
        <div>
            <label for="email">Email</label> <br>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">Password</label> <br>
            <input type="password" name="password" id="password">
        </div>
        <input type="submit" value="Login">
    </form>
    <?php if(isset($message)){
        echo $message;
    } ?>
</body>
</html>