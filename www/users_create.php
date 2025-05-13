<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="users_create_process.php" method="post">
        <label for="">Name</label> <br>
        <input type="text" name="firstname" placeholder="First Name"> <br>
        <input type="text" name="lastname" placeholder="Last Name"> <br>
        <br>
        <label for="">E-Mail</label> <br>
        <input type="text" name="email"> <br>
        <br>
        <label for="">Password</label> <br>
        <input type="text" name="password"> <br>
        <br>
        <label for="">Adress</label> <br>
        <input type="text" name="adress" placeholder="Street"> <br>
        <input type="text" name="city" placeholder="city"> <br>
        <input type="text" name="zipcode" placeholder="1234AB"> <br>
        <br>
        <label for="">Phone Number</label> <br>
        <input type="text" name="phonenumber" placeholder="06-1234567890"> <br>
        <br>
        <input type="submit" value="Submit">
        
    </form>
</body>
</html>