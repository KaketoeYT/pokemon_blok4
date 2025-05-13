<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "Invalid request method";
    exit;
}

require "database_connection.php";

if(!isset($_POST['name'])){
    echo "Name field is required";
    exit;
}
if(!isset($_POST['type'])){
    echo "Type field is required";
    exit;
}
if(!isset($_POST['image'])){
    echo "Pokedex ID field is required";
    exit;
}
if(!isset($_POST['description'])){
    echo "Description field is required";
    exit;
}
if(!isset($_POST['height'])){
    echo "Height field is required";
    exit;
}
if(!isset($_POST['weight'])){
    echo "Weight field is required";
    exit;
}
if(!isset($_POST['abilities'])){
    echo "Abilities field is required";
    exit;
}
if(!isset($_POST['evolution_stage'])){
    echo "Evolution Stage field is required";
    exit;
}
if(!isset($_POST['hp'])){
    echo "HP field is required";
    exit;
}
if(!isset($_POST['attack'])){
    echo "Attack field is required";
    exit;
}
if(!isset($_POST['defense'])){
    echo "Defense field is required";
    exit;
}



$name = $_POST['name'];
if (empty($name)) {
    echo "Name is required";
    exit;
}
if (strlen($name) < 3) {
    echo "Name is too short";
    exit;
}
if (strlen($name) > 20){
    echo "Name cant be longer than 20 characters";
    exit;
}

$type = $_POST['type'];
if (empty($type)) {
    echo "Type is required";
    exit;
}
if (strlen($type) > 20){
    echo "Type cant be longer than 20 characters";
    exit;
}

$image = $_POST['image'];
if (empty($image)) {
    echo "Image is required";
    exit;
}
if (strlen($image) > 255){
    echo "Image cant be longer than 255 characters";
    exit;
}

$description = $_POST['description'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$abilities = $_POST['abilities'];
$evolution_stage = $_POST['evolution_stage'];

$hp = $_POST['hp'];
if (!is_numeric($hp)) {
    echo "hp must be a number";
    exit;
}

$attack = $_POST['attack'];
if (!is_numeric($attack)) {
    echo "attack must be a number";
    exit;
}

$defense = $_POST['defense'];
if (!is_numeric($defense)) {
    echo "defense must be a number";
    exit;
}

$sql = "INSERT INTO cards (name,type,description,image,height,weight,abilities,evolution_stage,hp,attack,defense) VALUES ('$name','$type','$description','$image','$height','$weight','$abilities','$evolution_stage','$hp','$attack','$defense')";
if(mysqli_query($conn,$sql)){
    echo "New pokemon created successfully";
}