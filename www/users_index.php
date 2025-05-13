<?php 
require "database_connection.php" ;

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
    <table>
        <tr>
            <th>id</th>
            <td>first name</td>
            <td>last name</td>
            <td>email</td>
            <td>password</td>
            <td>role</td>
            <td>address</td>
            <td>city</td>
            <td>zipcode</td>
            <td>phonenumber</td>
        </tr>
        <?php foreach ($users as $user): ?>
            <div><td><?php echo $user['id'] ?></td>
            <td><?php echo $user['firstname'] ?></td>
            <td><?php echo $user['lastname'] ?></td>
            <td><?php echo $user['email'] ?></td>
            <td><?php echo $user['password'] ?></td>
            <td><?php echo $user['role'] ?></td>
            <td><?php echo $user['address'] ?></td>
            <td><?php echo $user['city'] ?></td>
            <td><?php echo $user['zipcode'] ?></td>
            <td><?php echo $user['phonenumber'] ?></td></div>
            
        <?php endforeach ?>
    </table>
</body>
</html>