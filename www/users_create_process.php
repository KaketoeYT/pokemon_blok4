<?php 

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "Invalid request method";
    exit;
}

require "database_connection.php";

if(!isset($_POST['firstname'])){
    echo "First Name field is required";
    exit;
}
if(!isset($_POST['lastname'])){
    echo "Lasdt Name field is required";
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
if(!isset($_POST['adress'])){
    echo "Street field is required";
    exit;
}
if(!isset($_POST['city'])){
    echo "City field is required";
    exit;
}
if(!isset($_POST['zipcode'])){
    echo "Zipcode field is required";
    exit;
}
if(!isset($_POST['phonenumber'])){
    echo "Phone number field is required";
    exit;
}


$firstname = $_POST['firstname'];
if (empty($firstname)) {
    echo "First Name is required";
    exit;
}
$lastname = $_POST['lastname'];
if (empty($firstname)) {
    echo "Last Name is required";
    exit;
}
$email = $_POST['email'];
if (empty($email)) {
    echo "First Name is required";
    exit;
}
$password = $_POST['password'];
if (empty($password)) {
    echo "First Name is required";
    exit;
}
$adress = $_POST['adress'];
if (empty($adress)) {
    echo "First Name is required";
    exit;
}
$city = $_POST['city'];
if (empty($city)) {
    echo "First Name is required";
    exit;
}
$zipcode = $_POST['zipcode'];
if (empty($zipcode)) {
    echo "First Name is required";
    exit;
}
$phonenumber = $_POST['phonenumber'];
if (empty($phonenumber)) {
    echo "First Name is required";
    exit;
}

$sql = "INSERT INTO users (firstname,lastname,email,password,address,city,zipcode,phonenumber) VALUES ('$firstname','$lastname','$email','$password','$adress','$city','$zipcode','$phonenumber')";
if(mysqli_query($conn,$sql)){
    echo "New user created successfully";
}
?>