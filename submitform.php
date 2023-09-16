<?php

session_start();

$user_email = $_POST['useremail'];
$user_password = $_POST['userpassword'];



$errors = [];

if(empty($user_email))
{
    $errors['email'] = 'Enter you email' ;
    
} 

if(strlen($user_password) < 8  || empty($user_password))
{
    $errors['password'] = 'check your password';
    
}

if(!empty($errors)){
   $_SESSION['seesionerrors'] = $errors;


header('Location: index.php#bgimage'); 
}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user6";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// prepare and bind
$sql = $conn->prepare("INSERT INTO pinterstsingup (email, password, dob ) VALUES (?, ?, ?)");
$sql->bind_param("sss", $_POST["useremail"], $_POST["userpassword"], $_POST["dobirth"]);



$sql->execute();

$conn->close();



?>


